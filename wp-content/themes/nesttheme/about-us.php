<?php get_header();
// template name: About Us
?>

<div class="page-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="row align-items-center mb-50">
                            <div class="col-lg-6">
                                <img src="<?php echo get_field('first_section_image');?>" alt="" class="border-radius-15 mb-md-3 mb-lg-0 mb-sm-4" />
                            </div>
                            <div class="col-lg-6">
                                <div class="pl-25">
                                    <h2 class="mb-30"><?php echo get_field('first_section_title');?></h2>
                                    <?php echo get_field('first_section_description');?>
                                    <div class="carausel-3-columns-cover position-relative">
                                        <div id="carausel-3-columns-arrows"></div>
                                        <div class="carausel-3-columns" id="carausel-3-columns">
                                            <?php if( have_rows('first_section_slider') ): ?>
                                                <?php while( have_rows('first_section_slider') ): the_row(); ?>
                                                    <img src="<?php echo get_sub_field('image'); ?>" alt="" />
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="text-center mb-50">
                            <h2 class="title style-3 mb-40"><?php echo get_field('second_section_title');?></h2>
                            <div class="row">
                                <?php
                                    $args = array('post_type' => 'services','posts_per_page' => 6);
                                    $loop = new wp_query($args);
                                    if($loop->have_posts()) { 
                                ?>
                                    <?php while($loop->have_posts()) { $loop->the_post();?>
                                        <div class="col-lg-4 col-md-6 mb-24">
                                            <div class="featured-card">
                                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" />
                                                <h4><?php the_title(); ?></h4>
                                                <?php the_content(); ?>
                                                <a href="<?php the_permalink(); ?>">Read more</a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } wp_reset_query(); ?>
                               
                            </div>
                        </section>
                        <section class="row align-items-center mb-50">
                            <div class="row mb-50 align-items-center">
                                <div class="col-lg-7 pr-30">
                                    <img src="<?php echo get_field('third_section_image');?>" alt="" class="mb-md-3 mb-lg-0 mb-sm-4" />
                                </div>
                                <div class="col-lg-5">
                                    <h4 class="mb-20 text-muted"><?php echo get_field('third_section_colored_title');?></h4>
                                    <h1 class="heading-1 mb-40"><?php echo get_field('third_section_title');?></h1>
                                    <?php echo get_field('third_section_description');?>
                                </div>
                            </div>
                            <div class="row">

                                <?php if( have_rows('third_section_repeater') ): ?>
                                    <?php while( have_rows('third_section_repeater') ): the_row(); ?>
                                        <div class="col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5">
                                            <h3 class="mb-30"><?php echo get_sub_field('title'); ?></h3>
                                            <p><?php echo get_sub_field('descripiton'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?> 
                                
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <section class="container mb-50 d-none d-md-block">
                <div class="row about-count">

                    <?php if( have_rows('fourth_section_repeater') ): ?>
                        <?php while( have_rows('fourth_section_repeater') ): the_row(); ?>
                            <div class="col-lg-1-5 col-md-6 text-center mb-lg-0 mb-md-5">
                                <h1 class="heading-1"><span class="count"><?php echo get_sub_field('number'); ?></span>+</h1>
                                <h4><?php echo get_sub_field('title'); ?></h4>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="mb-50">
                            <h2 class="title style-3 mb-40 text-center"><?php echo get_field('fifth_section_title');?></h2>
                            <div class="row">
                                <div class="col-lg-4 mb-lg-0 mb-md-5 mb-sm-5">
                                    <h6 class="mb-5 text-brand"><?php echo get_field('team_section_colored_title');?></h6>
                                    <h1 class="mb-30"><?php echo get_field('team_section_title');?></h1>
                                    <?php echo get_field('team_section_description');?>
                                    <a href="#" class="btn">View All Members</a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <?php
                                            $args = array('post_type' => 'our_team','posts_per_page' => -1);
                                            $loop = new wp_query($args);
                                            if($loop->have_posts()) { 
                                        ?>
                                            <?php while($loop->have_posts()) { $loop->the_post();?>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="team-card">
                                                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" />
                                                        <div class="content text-center">
                                                            <h4 class="mb-5"><?php the_title(); ?></h4>
                                                            <span><?php echo get_field('position');?></span>
                                                            <div class="social-network mt-20">
                                                                <?php if( have_rows('social_media') ): ?>
                                                                    <?php while( have_rows('social_media') ): the_row(); ?>
                                                                        <a href="<?php echo get_sub_field('link'); ?>" target="_blank"><?php echo get_sub_field('icon'); ?></a>
                                                                        
                                                                    <?php endwhile; ?>
                                                                <?php endif; ?>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } wp_reset_query(); ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>