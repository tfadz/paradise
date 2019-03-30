<?php /* Template Name: People */ ?>

<?php get_header(); ?>
<div id="primary" class="content-area">

	<main id="main" class="site-main container">

		<section class="row">
          <div class="col col-12" style="padding-top: 5rem;">
            <ul class="par-staff">

              <?php 

              // The Arguments
              $args = array(
                'post_type' => 'people',
                'posts_per_page' => '-1',
                'orderby' => 'date',
                'order' => 'ASC'
            );

              // The Query
              $query_people = new WP_Query($args);

               // The Loop
              if( $query_people->have_posts() ) : ?>


                <?php while ( $query_people->have_posts() ) : $query_people->the_post(); ?>
                   <li><a href="<?php the_permalink(); ?>">

                      <figure><img src="<?php the_field('p_image') ?>" /></figure></a>
                      <h2><?php the_title() ?></h2>


                  </li>
              <?php endwhile; ?> 
          <?php endif; ?>

      </ul>
  </div>
</section>

</main><!-- #main -->
</div>

<?php

get_footer();
