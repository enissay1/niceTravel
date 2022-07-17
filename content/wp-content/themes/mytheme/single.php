<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post">


      <?php
      $title = get_the_title();

      // Si le titre contient le mot "promo", j'ajoute un emoji
      if (strpos($title, 'promo') !== false) {
        $title = '💰' . $title;
      }
      ?>
      <h1><?php echo $title; ?></h1>
      <?php the_post_thumbnail(); ?>
      <div class="post__meta">
        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          Avec les étiquettes <?php the_tags(); ?>
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
      <div>
              <?php comment_form(); // Par ici les commentaires ?>

      </div>

    </article>

<?php endwhile;?>
 <aside>
 <?php dynamic_sidebar( 'blog' ); ?>
</aside>
<?php endif; ?>
<?php get_template_part( 'newsletter' ); ?>
<?php get_footer(); ?>