<?php
  $image = get_field('blog_image');
  $url = $image['url'];
  $alt = $image['alt'];
  $author = get_field('post-author');
  $blogintro = get_field('blog_intro');

  $tags = get_the_tags();
?>

<div class="blog">
  <h4>
    <a href="<?php the_permalink() ?>">
    <span class="posttitle"><?php the_title() ?><br/></span>
    <span class="author">Posted by <?php the_author(); ?></span>
    <span class="date"><?php the_time('m-d-y') ?></span>
  </a>
  </h4>
  <a href="<?php the_permalink() ?>">
  <div class="blog-overlay">
    <img src="<?php echo $url; ?>">
  </div>
  </a>
  <div class="tags">
    <?php
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
  <a href="<?php the_permalink() ?>">
   <?php echo $blogintro; ?>
   <span class="readmore">&#10233;<?php the_time('h:i a') ?></span>
   <span class="readmore right"><?php comments_number( 'No comments', '1 Comment', '% Comments' ); ?> </span>
  </a>
</div>
