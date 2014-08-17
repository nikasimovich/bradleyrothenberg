<div id="left-column">
  <div class="blog-info">
    <span class="blog-info-title">Subscribe</span>
      <div id="blog-mailing">
              <div id="mc_embed_signup" class="blogmailing">
              <form class="form" action="http://bradleyrothenberg.us8.list-manage.com/subscribe/post?u=a2dee844d5f0278bf010e6bd0&amp;id=2e07a9a8cb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <!-- <label for="mce-EMAIL">Sign up for our mailing list</label> -->
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="E-mail sign up" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_a2dee844d5f0278bf010e6bd0_2e07a9a8cb" tabindex="-1" value=""></div>
                  <div  class="clear form"><input type="submit" value="Ok" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </form>
              </div>
      </div>

  </div>

  <div class="blog-info">
    <span class="blog-info-title">Tweet us</span>
   <?php
   $twitter = get_field('twitter', 19);
   $researchPost = get_post(19);
   echo $twitter; ?>
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
