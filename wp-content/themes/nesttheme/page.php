<?php get_header('page'); ?>

<div class="page-php">

    <div class="container test">

        <?php 

        if(have_posts()){

            while(have_posts()){

                the_post();?>

                    <?php the_content();?>

        <?php   

        } 

            };?>

    </div>

</div>

<?php get_footer(); ?>