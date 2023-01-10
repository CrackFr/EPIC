<?php /* Template Name: Pageconnexion */ get_header(); ?>
<div class="connexion">
<?php echo do_shortcode("[wppb-login]"); ?>
<?php echo do_redirect() . '/espace-personnel/'; ?>">
</div>
<?php get_footer(); ?>