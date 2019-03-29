<?php /* Template Name: Directors */ ?>

<?php get_header(); ?>
<div id="primary" class="content-area">

	<main id="main" class="site-main container">

		<section class="row">
			<div class="col col-12" style="padding-top: 5rem;">
				<ul class="staff">
                  <?php 

                    // The Arguments
                      $args = array(
                          'post_type' => 'people',
                          'posts_per_page' => '-1',
                          'orderby' => 'date',
                          'order' => 'ASC',
                          'category_name' => 'Directors'
                      );

                  // The Query
                  $query_people = new WP_Query($args);

                // The Loop
                  if( $query_people->have_posts() ) : ?>


                      <?php while ( $query_people->have_posts() ) : $query_people->the_post(); ?>
                        <div><?php the_title() ?></div>
                    </ul>

                <?php endwhile; ?> 
            <?php endif; ?>
        </div>
    </section>

</main><!-- #main -->
</div>

<?php

get_footer();



