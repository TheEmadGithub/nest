<?php get_header('page');
// template name: Contact Us
?>
        <div class="page-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="row align-items-end mb-50">
                            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-sm-5">
                                <h4 class="mb-20 text-brand"><?php echo get_field('first_section_colored_title');?></h4>
                                <h1 class="mb-30"><?php echo get_field('first_section_title');?></h1>
                                <?php echo get_field('first_section_description');?>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">

                                    <?php if( have_rows('first_section_services') ):?>
                                        <?php $counter=1; while( have_rows('first_section_services')):the_row();?>
                                            <div class="col-lg-6 mb-4">
                                                <h5 class="mb-20 <?php if($counter==3){echo 'text-brand'; }?>">0<?php echo $counter; ?>. <?php echo get_sub_field('title'); ?></h5>
                                                <p><?php echo get_sub_field('description'); ?></p>
                                            </div>
                                        <?php $counter++; endwhile; ?>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <section class="container mb-50 d-none d-md-block">
                <div class="border-radius-15 overflow-hidden">
                    <!-- <div id="map-panes" class="leaflet-map"></div> -->
                    <div id="map" class="leaflet-map"><?php echo get_field('map');?></div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="mb-50">
                            <div class="row mb-60">
                                <?php if( have_rows('locations') ):?>
                                    <?php while( have_rows('locations')):the_row();?>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <h4 class="mb-15 text-brand"><?php echo get_sub_field('title'); ?></h4>
                                            <?php echo get_sub_field('lcoation'); ?><br />
                                            <?php echo get_sub_field('city'); ?><br />
                                            <abbr title="Phone">Phone:</abbr><a href="tel:<?php echo get_sub_field('phone'); ?>"><?php echo get_sub_field('phone'); ?></a><br />
                                            <abbr title="Email">Email:</abbr><a href="mailto:<?php echo get_sub_field('email'); ?>"><?php echo get_sub_field('email'); ?></a><br />
                                            <a target="_blank" href="<?php echo get_sub_field('map'); ?>" class="btn btn-sm font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-5"></i>View map</a>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                
                              
                            </div>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="contact-from-area padding-20-row-col">
                                        <h5 class="text-brand mb-10"><?php echo get_field('from_section_colored_title');?></h5>
                                        <h2 class="mb-10"><?php echo get_field('from_section_title');?></h2>
                                        <p class="text-muted mb-30 font-sm"><?php echo get_field('from_section_description');?></p>
                                        <div class="contact-form-style mt-30" id="contact-form">
                                            
                                                <?php echo do_shortcode('[contact-form-7 id="ea3dcd9" title="Contact form"]'); ?>      
                                            
                                        </div>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-50 d-lg-block d-none">
                                    <img class="border-radius-15 mt-50" src="<?php echo get_field('from_section_image');?>" alt="" />
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>