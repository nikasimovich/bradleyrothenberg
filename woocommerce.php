<?php get_header() ?>
        <div class="content">
<?php the_post() ?>
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <div class="entry-content">
                    <ul class="shop-nav">
                      <li><a class="active" href="#">Everything</a></li>
                      <li><a href="#">Jewelry</a></li>
                      <li><a href="#">Bags</a></li>
                      <li><a href="#">Lights</a></li>
                    </ul>
                    <!-- <?php woocommerce_content(); ?> -->
                </div>
            </div><!-- .post -->
        </div><!-- .content -->
<?php get_footer() ?>
</body>
</html>
