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
    <span class="date"><?php the_time('F j, Y') ?></span><br/>
    <span class="author">Posted by <?php the_author(); ?></br></span>
  </a>
  </h4>

  <div class="blog-overlay">
    <a href="<?php the_permalink() ?>"><img src="<?php echo $url; ?>"></a>
  </div>
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
