<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class("panel"); ?>>
        <header>
            <?php if (has_post_thumbnail($post->ID)): ?>
                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'homepage-thumb'); ?>
                <div class="thumb">
                    <?php echo '<img src="' . $thumb['0'] . '" class="img-responsive" />'; ?>
                </div>
            <?php endif; ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
            <div class="author">
                <?php echo get_avatar(get_the_author_meta('ID')); ?>
                <span class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></span>
            </div>
            <hr>
            <div class="tags">
                <small><?php the_tags('#', ' #', ''); ?></small>
            </div>
            <hr>
            <div class="addthis_sharing_toolbox"></div>
        </div>

        <footer>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->

            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php //comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>
