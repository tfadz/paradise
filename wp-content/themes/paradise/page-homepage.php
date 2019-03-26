<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container-fluid" role="main">

<!--         <h1><a href="https://vimeo.com/326434337?autoplay=1" data-lity>My link!!</a></h1>
 -->
       <section class="row">
         <div class="par-slider">
            <?php if (have_rows('slider')) : while (have_rows('slider')) : the_row();

                $himage = get_sub_field('slider_home_image');
                $hvideoL = get_sub_field('slide_home_video_link');
                $hwhich = get_sub_field('image_or_video');
        
            ?>
            <div>
                <a href="<?php echo $hvideoL; ?> autoplay=1" data-lity><img src="<?php echo $himage; ?>" /></a>
            </div>

        <?php endwhile; endif; ?>
    </div>  
</section>

<section class="par-home-work">



  <div class="video-card">


  </div><!-- /video-card -->
</section>



</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
