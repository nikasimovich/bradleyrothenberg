<?php
/*
Template Name: Research
*/
?><?php get_header() ?>
        <div class="content">
<?php the_post() ?>
                <?php
                    $twitter = get_field('twitter');
                ?>
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <div class="entry-content">

                  <?php get_template_part('partials/blog_left_column'); ?>

                  <div id="blog">
                    <?php
                      // Arguments
                      $args = array(
                        'category_name' => 'Research'
                        );
                      // The Query
                      $the_query = new WP_Query($args);
                      // The Loop
                      if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                          $the_query->the_post();
                    ?>


                      <?php get_template_part('partials/blog'); ?>

                    <?php
                        }
                      }
                      // Restore original Post Data
                      wp_reset_postdata();
                    ?>

                </div>
                </div>
            </div><!-- .post -->
        </div><!-- .content -->
<?php get_footer() ?>
</body>
</html>
