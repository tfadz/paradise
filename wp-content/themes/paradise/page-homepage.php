<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container-fluid" role="main">

     <section class="row">
       <div class="par-slider">
        <?php if (have_rows('slider')) : while (have_rows('slider')) : the_row();

            $himage = get_sub_field('slider_home_image');
            $hvideoL = get_sub_field('slide_home_video_link');
            $hwhich = get_sub_field('image_or_video');

            ?>
            <div class="par-slider__slide" style="background: url(<?php echo $himage ?>) no-repeat;background-size: cover;">
             <a class="" href="<?php echo $hvideoL; ?>?autoplay=1" data-lity><h2><small>commercial:</small>BCBS Promotes Healthy Eating With Plate Size</h2></a>
         </div>

     <?php endwhile; endif; ?>
 </div>  
</section>

<section class="par-home-work container-fluid">
    <div class="row" id="macy-container">
        <?php if (have_rows('home_work')) : while (have_rows('home_work')) : the_row();

            $wthumb = get_sub_field('home_work_image');
            $wtitle = get_sub_field('home_work_title');
            $w_which = get_sub_field('link_to_page_or_modal');
            $wmlink = get_sub_field('home_work_modal_link');

            ?>

            <?php if($w_which == 'page'):?>
                <a style="background: url(<?php echo $wthumb ?>) no-repeat;background-size: cover;" class="" href="<?php echo $wmlink; ?>?autoplay=1" data-lity><h2><?php echo $wtitle; ?></h2></a>
            <?php endif ?>

            <?php if($w_which == 'modal'):?>
                 <a style="background: url(<?php echo $wthumb ?>) no-repeat;background-size: cover;" class="" href="<?php echo $wmlink; ?>?autoplay=1" data-lity><h2><?php echo $wtitle; ?></h2></a>
            <?php endif ?>

     <?php endwhile; endif; ?>
 </div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/js/macy.js"></script>


</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
