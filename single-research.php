<?php get_header() ?>
<div class="content">
  <?php the_post() ?>

  <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
  <div class="entry-content">
        <!--BLOG LEFT BAR HEADER!-->
            <?php get_template_part('partials/blog_left_column'); ?>
            <div>
                <a href="#" class="scrollToTop">Back to top</a>
            </div>

<div id="blog">
    <div class="singlepost-heading">
      <span class="posttitle"><?php the_title() ?><br/></span>
      <span class="author">Posted by <?php the_author(); ?></span>
      <span class="date"><?php the_time('m-d-y') ?></span>

      <div class="sharingpost">
        <?php
        $http   = $_SERVER['HTTPS'] = 'on' ? 'https://':'http://';
        $url    = urlencode($http.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
        ?>
        <a href="http://twitter.com/intent/tweet?url=<?php echo $url; ?>">

              <svg class="blogsocial" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
              <g>
                <defs>
                  <rect id="SVGID_1_" x="0" y="2.001" width="20" height="16.999"/>
                </defs>
                <clipPath id="SVGID_2_">
                  <use xlink:href="#SVGID_1_"  overflow="visible"/>
                </clipPath>
                <path clip-path="url(#SVGID_2_)" fill="#F0F0F0" d="M20,4.014c-0.736,0.341-1.527,0.572-2.357,0.676
                  c0.847-0.531,1.499-1.372,1.804-2.375c-0.792,0.492-1.671,0.849-2.604,1.042c-0.749-0.834-1.815-1.355-2.995-1.355
                  c-2.266,0-4.104,1.921-4.104,4.291c0,0.336,0.037,0.664,0.105,0.978c-3.41-0.179-6.433-1.887-8.457-4.484
                  C1.039,3.421,0.836,4.158,0.836,4.945c0,1.489,0.725,2.802,1.826,3.572C1.989,8.494,1.356,8.301,0.803,7.98
                  c0,0.018,0,0.036,0,0.054c0,2.08,1.414,3.814,3.291,4.208c-0.345,0.098-0.707,0.15-1.081,0.15c-0.265,0-0.522-0.027-0.772-0.078
                  c0.522,1.705,2.037,2.947,3.833,2.98c-1.404,1.152-3.173,1.838-5.096,1.838c-0.332,0-0.658-0.021-0.979-0.061
                  C1.815,18.289,3.973,19,6.289,19c7.548,0,11.675-6.539,11.675-12.209c0-0.186-0.004-0.371-0.011-0.556
                  C18.754,5.63,19.449,4.875,20,4.014"/>
              </g>
              </svg>
           </a>
          <?php
          $image=urlencode('http://www.yourdomain.com/images/share-thumbnail.jpg')
          ?>
          <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[url]=<?php echo $url; ?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">
            <svg class="blogsocial" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <g>
              <defs>
                <rect id="SVGID_1_" y="0.165" width="19.835" height="19.835"/>
              </defs>
              <clipPath id="SVGID_2_">
                <use xlink:href="#SVGID_1_"  overflow="visible"/>
              </clipPath>
              <path clip-path="url(#SVGID_2_)" fill="#F0F0F0" d="M19.835,20V0.165H0V20h9.74v-8.745H8V8.739h1.74v-0.79V7.176V7.047
                c0-0.744,0.019-1.895,0.561-2.607c0.57-0.754,1.354-1.266,2.7-1.266c2.194,0,3.118,0.312,3.118,0.312l-0.434,2.578
                c0,0-0.726-0.209-1.402-0.209s-1.282,0.241-1.282,0.918v0.274v0.902v0.79h2.774l-0.194,2.516h-2.58V20H19.835z"/>
            </g>
            </svg>

          </a>




      </div>
    </div>

    <div class="project-description">
      <?php the_content() ?>

      <div class="tags">
        <?php
          $tags = get_the_tags();

          if ($tags) {
            foreach($tags as $tag) {
        ?>
            <div class="category-tag">
              <a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
            </div>
        <?php
            }
          }
        ?>
      </div>
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
      <?php _e( wp_oembed_get( get_field( 'videos' ), array('width'=>690) ) ); ?>
    </div>

    <h2 class="entry-title">
      <div class="left projnav-blog">
        <?php previous_post_link('%link', 'Previous Post', TRUE); ?>
      </div>
      <!-- <?php the_title() ?> -->
      <div class="right projnav-blog">
        <?php next_post_link('%link', 'Next Post', TRUE); ?>
      </div>
    </h2>

    <?php comments_template(); ?>
</div>


  </div>
</div><!-- .post -->
</div><!-- .content -->
<?php get_footer() ?>
</body>
</html>
