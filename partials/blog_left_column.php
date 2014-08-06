<div id="left-column">
  <div class="blog-info">
    <span class="blog-info-title">Subscribe</span>
    <?php
      $twitter = get_field('twitter', 19);
      $researchPost = get_post(19);
      echo $researchPost->post_content;
    ?>
  </div>

  <div class="blog-info">
    <span class="blog-info-title">Tweet us</span>
   <?php echo $twitter; ?>
  </div>

  <div class="blog-info">
    <span class="blog-info-title">Categories</span>
    <?php wp_tag_cloud(''); ?>
  </div>

  <div class="blog-info">
    <span class="blog-info-title">Contributors</span>
      Bradley Rothenberg<br/>
      Greg Schroy<br/>
      Gautam Jain
  </div>
</div>
