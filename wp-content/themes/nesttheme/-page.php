<?php get_header('page'); ?>
    <?php if(have_posts()){ ?>
        <?php while(have_posts()){ the_post() ?>
            <div class="page-content">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php }; ?>
    <?php }; ?>
<?php get_footer(); ?>