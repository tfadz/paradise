<?php /* Template Name: Editors */ ?>

<?php get_header(); ?>
<div id="primary" class="content-area">

    <main id="main" class="site-main container">

      <section class="row">
        <div class="col col-12" style="padding-top: 5rem;">
          <div class="par-staff">
            <?php 

            // The Arguments
            $args = array(  
              'post_type' => 'people', 
              'posts_per_page' => -1, 
              'tax_query' => array(
                array(
                    'taxonomy' => 'people_category',
                    'field'    => 'slug', // term_id, slug  
                    'terms'    => 'editor',
                ),
            )
          );

            $loop = new WP_Query($args);

              // The Loop
            if( $loop->have_posts() ) : ?>


                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <article>
                      <a href="<?php the_permalink(); ?>">

                        <figure><?php the_post_thumbnail(); ?></figure></a>
                        <h2><?php the_title() ?></h2>
                    </article>

                <?php endwhile; ?> 
            <?php endif;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>

</main><!-- #main -->
</div>

<?php

get_footer();



