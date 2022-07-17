<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content() ?>
    </article>
    <?php montheme_pagination()?>
 <?php endwhile; else: ?>
    <p>Aucun article :(</p>
 <?php endif; ?>
<?php get_footer() ?>