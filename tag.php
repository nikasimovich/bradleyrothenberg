<?php
/*
Template Name: Research
*/
?><?php get_header() ?>

<?php if ( have_posts() ) : ?>

        <div class="content">
                <?php
                    $twitter = get_field('twitter', 19);
                ?>
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <div class="entry-content">

                  <?php get_template_part('partials/blog_left_column'); ?>

                  <div id="blog">
                    <span class="secondary-post-title"><?php single_tag_title('Category: '); ?></span>
                        <?php while ( have_posts() ) : the_post(); ?>

                          <?php get_template_part('partials/blog'); ?>

                        <?php endwhile; ?>


                </div>
              </div><!-- .entry-content -->
            </div><!-- .post -->
        </div><!-- .content -->

<?php endif; ?>

<?php get_footer() ?>
</body>
</html>
