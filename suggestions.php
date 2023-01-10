<?php /* Template Name: Suggestions */ get_header(); ?>
<div class="container">
    <?php if (have_posts()): ?>
        <?php if (function_exists('usp_display_posts')) echo usp_display_posts(array('userid' => 'all', 'numposts' => -1)); ?>

      <ul>
        <?php while(have_posts()): the_post(); ?>
          <li>
            <?php the_title() ?> - <?php the_author(); ?>
            <a href="<?php the_permalink(); ?>">lire l'article</a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <h1>Aucun articles disponible pour le moment</h1>
    <?php endif; ?>
  </div>



<?php get_footer(); ?>