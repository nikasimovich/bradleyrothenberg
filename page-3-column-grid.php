<?php
/*
Template Name: 3 Column Grid
*/
?>
<?php get_header() ?>
        <div class="content">
<?php the_post() ?>
            <div id="page-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
                <h2 class="entry-title"><?php the_title() ?></h2>
                <div class="entry-content">
<?php the_content() ?>
                </div>
            </div><!-- .post -->
        </div><!-- .content -->
<?php get_footer() ?>
</body>
</html>
