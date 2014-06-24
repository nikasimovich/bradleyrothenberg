<?php get_header() ?>
<div class="content">
  <?php the_post() ?>
  <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">

      <div class="entry-content">
        <?php if( have_rows('images') ): ?>
        <div class="project-slideshow">
          <?php while( have_rows('images') ): the_row();
                            // vars
          $image = get_sub_field('image');
          $url = $image['url'];
          $alt = $image['alt'];
          $video = get_field('videos');
          ?>
          <div class="project-image">
            <img src="<?php echo $url; ?>">
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <h2 class="entry-title">
      <div class="left">
        <?php previous_post_link('%link', '&#8592;', TRUE); ?>
      </div>
      <?php the_title() ?>
      <div class="right">
        <?php next_post_link('%link', '&#8594;', TRUE); ?>
      </div></h2>

      <div class="press-image">
        <?php if( have_rows('press_clipping') ): ?>
          <?php while( have_rows('press_clipping') ): the_row();
                            // vars
          $pressimage = get_sub_field('press_clipping-img');
          $pressurl = $pressimage['url'];
          ?>
            <img src="<?php echo $pressurl; ?>">
          <?php endwhile; ?>
        <?php endif; ?>
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
  </div>
</div><!-- .post -->
</div><!-- .content -->
<?php get_footer() ?>
</body>
</html>
