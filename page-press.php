<?php
/*
Template Name: Page - Press
*/
?>
<?php get_header() ?>
        <div class="content">
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <!--<h2 class="entry-title"><?php the_title() ?></h2>!-->
                <div class="entry-content">
                  <div class="press-contact">
                      For press inquiries please email <a href="mailto:press@brandleyrothenberg.com?Subject=Hello" target="_top">press@brandleyrothenberg.com.</a></span>
                  </div>

                  <?php
                    // Arguments
                    $args = array(
                      'category_name' => 'Press'
                      );
                    // The Query
                    $the_query = new WP_Query($args);
                    // The Loop
                    if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                  ?>
                  <?php
                  $press_url = get_field('press_url');
                  ?>

                  <div class="press">
                    <h4>
                      <a href="<?php echo $press_url ?>" target="_blank"><?php the_content() ?></a>
                    </h4>
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
