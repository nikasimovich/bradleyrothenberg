<?php
/*
Template Name: Page - Work
*/
?>
<?php get_header() ?>
        <div class="content">
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <!--<h2 class="entry-title"><?php the_title() ?></h2>!-->
                <div class="entry-content">

                  <?php
                    // Arguments
                    $args = array(
                      'category_name' => 'Work'
                      );
                    // The Query
                    $the_query = new WP_Query($args);
                    // The Loop
                    if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                  ?>
                  <?php
                  $image = get_field('imgthmb');
                  $url = $image['url'];
                  $alt = $image['alt'];
                  ?>

                  <div class="project">
                    <a href="<?php the_permalink() ?>">
                      <div class="project-overlay">
                        <img src="<?php echo $url; ?>">
                        <div class="project-alt"><?php echo $alt; ?></div>
                      </div>
                    </a>
                    <!-- <h4>
                      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h4> -->

                  </div>
                  <?php
                      }
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                  ?>

                </div>
            </div><!-- .post -->
        </div><!-- .content -->
<?php get_footer() ?>
</body>
</html>
<!--http://placehold.it/290x310!-->
