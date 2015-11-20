<article <?php post_class("panel"); ?>>
    <header>
        <?php if (has_post_thumbnail()): ?>
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'homepage-thumb'); ?>
            <a href="<?php echo get_permalink($post->ID); ?>">
                <div class="thumb">
                    <?php echo '<img src="' . $thumb['0'] . '" class="img-responsive" />'; ?>
                </div>
            </a>

        <?php endif; ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
        <div class="author-wrapper">
            <?php echo get_avatar(get_the_author_meta('ID')); ?>
            <span class="byline author vcard"><?= __('Av', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></span>
        </div>
        <hr>
        <div class="addthis_sharing_toolbox"></div>
    </div>

</article>
