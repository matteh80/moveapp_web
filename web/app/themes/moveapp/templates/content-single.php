<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <?php if (has_post_thumbnail($post->ID)): ?>
                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'homepage-thumb'); ?>
                <div class="thumb">
                    <?php echo '<img src="' . $thumb['0'] . '" class="img-responsive" />'; ?>
                    <div class="text">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php get_template_part('templates/entry-meta'); ?>
                    </div>
                </div>
            <?php else: ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php get_template_part('templates/entry-meta'); ?>
            <?php endif; ?>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
            <div class="tags">
                <small><?php the_tags('#', ' #', ''); ?></small>
            </div>
        </div>
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php //comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>
