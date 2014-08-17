<?php
/*
Template Name: Home Page
*/
?>
<?php get_header() ?>
        <div class="content">
<?php the_post() ?>
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <!--<h2 class="entry-title"><?php the_title() ?></h2>!-->

                <div class="entry-content">


                  <?php if( have_rows('splash_image') ): ?>
                    <div class="splash-image-wrapper">
                      <?php while( have_rows('splash_image') ): the_row();
                        // vars
                        $image = get_sub_field('image');
                        $url = $image['url'];
                        $alt = $image['alt'];
                        $link = get_sub_field('link');
                      ?>
                        <div data-url="<?php echo $link; ?>" class="splash-image" style="background-image: url(<?php echo $url; ?>)"></div>

                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>

<!--                   <div class="social-home">
                    <?php get_template_part('partials/social_media'); ?>
                  </div> -->
                </div>
            </div><!-- .post -->
        </div><!-- .content -->
<?php get_footer() ?>
</body>
</html>
