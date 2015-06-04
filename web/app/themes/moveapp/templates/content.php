<article <?php post_class(); ?>>
  <header>
    <?php if(has_post_thumbnail()): ?>
      <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'homepage-thumb'); ?>
      <div class="thumb">
        <?php echo '<img src="' . $thumb['0'] . '" class="img-responsive" />';?>
        <div class="text">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php get_template_part('templates/entry-meta'); ?>
        </div>
      </div>
    <?php else: ?>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    <?php endif; ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
