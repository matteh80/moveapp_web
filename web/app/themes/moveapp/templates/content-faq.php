<article <?php post_class(); ?>>
    <header class="faq-title">
        <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </header>
    <div class="entry-summary faq-answer">
        <?php //the_excerpt(); ?>
        <?php the_content(); ?>
    </div>
</article>
