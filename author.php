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
        <?php
        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
        ?>
      <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
        <div>
            <a href="#" class="scrollToTop">Back to top</a>
        </div>
        <div class="entry-content">
          <?php get_template_part('partials/blog_left_column'); ?>

            <div id="blog">
              <span class="secondary-post-title">Posts by <?php echo $curauth->display_name; ?></span>
<!--               <h2><?php $author = $post->post_author; ?></h2> -->
              <?php
                // Arguments
                $args = array(
                  'author' => $author,
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

        </div><!-- .entry-content -->
    </div><!-- .post -->
   </div><!-- .content -->

<?php endif; ?>

<?php get_footer() ?>
</body>
</html>
