<?php get_header() ?>
<div class="content">
  <?php the_post() ?>

  <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">

      <div class="entry-content">
        <h2 class="entry-title">
          <div class="left projnav-blog">
            <?php previous_post_link('%link', 'Previous Post', TRUE); ?>
          </div>
          <!-- <?php the_title() ?> -->
          <div class="right projnav-blog">
            <?php next_post_link('%link', 'Next Post', TRUE); ?>
          </div>
        </h2>

        <!--BLOG LEFT BAR HEADER!-->
        <div id="left-column">
          <?php
            $twitter = get_field('twitter');
          ?>
            <?php get_template_part('partials/blog_left_column'); ?>
        </div>

<div id="blog">

  <h2><?php the_title() ?></h2>
  <div id="blog-datetime">
    <span class="date"><?php the_time('F j, Y') ?></span><br/>
    <span class="author">Posted by <?php the_author(); ?></br><br/></span>
  </div>


    <div class="project-description">
      <?php the_content() ?>
    </div>

    <div class="blog-images">
          <?php if( have_rows('blog_images') ): ?>
            <?php while( have_rows('blog_images') ): the_row();
            // vars
            $blogimage = get_sub_field('inpost-images');
            $blog_image_url = $blogimage['url'];
            $blog_image_large = $blogimage['sizes']['large'];
          ?>
            <img src="<?php echo $blog_image_large; ?>">
          <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="videos">
      <?php _e( wp_oembed_get( get_field( 'videos' ) ) ); ?>
    </div>

    <?php comments_template(); ?>
</div>


  </div>
</div><!-- .post -->
</div><!-- .content -->
<?php get_footer() ?>
</body>
</html>
