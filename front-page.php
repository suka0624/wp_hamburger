<?php get_header() ?>

<main class="main">
  <article class="article">
    <?php if(have_posts()): while(have_posts()): the_post();?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </article>
</main>

<?php get_footer();