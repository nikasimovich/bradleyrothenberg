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
    <span class="date"><?php the_time('F j, Y') ?><br/></span>
    <span class="author">Posted by <?php the_author(); ?></br></span>
    <?php the_title() ?>
  </a>
  </h4>
  <a href="<?php the_permalink() ?>"><img src="<?php echo $url; ?>"></a>
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
  </a>
</div>
