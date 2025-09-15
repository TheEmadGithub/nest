<?php
/**
 * Plugin Name: YITH Activator
 * Description: A universal activator for all YITH plugins.
 * Version: 1.2.3.4.2
 * Author: YITH
 */

// Only run in the admin area
if ( is_admin() ) {

    // Intercept YITH license API requests
    add_filter('pre_http_request', function($pre, $args, $url) {
        if (strpos($url, 'https://licence.yithemes.com/api/') !== false && in_array($args['method'], ['POST'])) {
            $instance = get_site_url();
            $current_timestamp = time();

            $body = json_encode([
                "timestamp" => $current_timestamp,
                "message" => "900 out of 999 activations remaining",
                "activated" => true,
                "instance" => parse_url($instance, PHP_URL_HOST),
                "licence_expires" => strtotime('+5 years'),
                "activation_limit" => 999,
                "activation_remaining" => 900,
                "is_membership" => true
            ]);

            return [
                'headers'  => [],
                'body'     => $body,
                'response' => [
                    'code'    => 200,
                    'message' => 'OK'
                ]
            ];
        }

        return $pre;
    }, 10, 3);

    class YITH_Activator {
        public function __construct() {
            add_action('init', [$this, 'initialize_plugin']);
        }

        public function initialize_plugin() {
            $this->load_yith_plugins();
            add_action('plugins_loaded', [$this, 'disable_yith_license_activation_redirect']);
            add_action('admin_init', 'override_yith_onboarding_queue', 0);
            add_action('admin_init', [$this, 'remove_plugin_update_hooks'], 100);
            add_action('admin_init', [$this, 'disable_yith_plugin_upgrade_banner']);
        }

        public function load_yith_plugins() {
            if (!function_exists('get_plugins')) {
                require_once ABSPATH . 'wp-admin/includes/plugin.php';
            }

            $all_plugins = get_plugins();
            $license_options = [];

            foreach ($all_plugins as $plugin_path => $plugin_data) {
                if (strpos($plugin_data['TextDomain'], 'yith') === 0) {
                    $slug = $this->get_plugin_slug($plugin_path, $plugin_data['TextDomain']);
                    $license_options[$slug] = $this->prepare_license_data();
                }
            }

            update_option('yit_products_licence_activation', $license_options);
            update_option('yit_plugin_licence_activation', $license_options);
            update_option('yit_theme_licence_activation', $license_options);
        }

        private function get_plugin_slug($plugin_path, $text_domain) {
            $plugin_file = WP_PLUGIN_DIR . '/' . $plugin_path;
            $plugin_content = @file_get_contents($plugin_file);

            if ($plugin_content && preg_match('/define\s*\(\s*[\'"]([^\'"]+_SLUG)[\'"]\s*,\s*[\'"]([^\'"]+)[\'"]\s*\)/', $plugin_content, $matches)) {
                return $matches[2];
            }

            return $text_domain;
        }

        private function prepare_license_data() {
            return [
                'activated' => true,
                'email' => 'noreply@gmail.com',
                'licence_key' => '9f27e18b-53d2-44b8-a5e9-9bfb0276a8c3',
                'activation_limit' => '999',
                'activation_remaining' => '900',
                'is_membership' => 'true',
                'marketplace' => 'yith',
                'licence_expires' => strtotime('+5 years'),
            ];
        }

        public function remove_plugin_update_hooks() {
            if (class_exists('YITH\PluginUpgrade\Upgrade')) {
                remove_action('load-plugins.php', [YITH\PluginUpgrade\Upgrade::instance(), 'remove_wp_plugin_update_row'], 25);
            }

            if (class_exists('YITH_Plugin_Upgrade')) {
                remove_action('load-plugins.php', [YITH_Plugin_Upgrade::instance(), 'remove_wp_plugin_update_row'], 25);
            }
        }

        public function disable_yith_plugin_upgrade_banner() {
            remove_action('admin_enqueue_scripts', ['YITH\\PluginUpgrade\\Admin\\Banner', 'register_scripts'], 5);
            remove_action('yith_plugin_fw_panel_enqueue_scripts', ['YITH\\PluginUpgrade\\Admin\\Banner', 'maybe_enqueue_and_render_licence_banner']);
            remove_action('wp_ajax_yith_plugin_upgrade_licence_modal_dismiss', ['YITH\\PluginUpgrade\\Admin\\Banner', 'dismiss_licence_modal']);
        }

        public function disable_yith_license_activation_redirect() {
            remove_action('admin_init', ['YITH_Plugin_Licence_Onboarding', 'handle_redirect'], 5);
        }
    }

    new YITH_Activator();

    function override_yith_onboarding_queue() {
        set_transient('yith_plugin_licence_onboarding_queue', [], 1);
    }
}
