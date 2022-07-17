<?php get_header(); ?>
<?php
	if ( is_front_page() ) { ?> 
<h1 class="text-center"> <?php bloginfo("name"); ?> </h1>
<?php } ?>
<main>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
				<h2><?php the_title(); ?></h2>
				<a href=<?php the_permalink()?>>
					<?php the_post_thumbnail('medium') ?>
				</a>
				
				<?php the_excerpt(); ?>
			</article>
	<?php endwhile;
	endif; ?>
</main>
<?php montheme_pagination()?>

<?php get_footer(); ?>