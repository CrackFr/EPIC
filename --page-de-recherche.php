<?php /* Template Name: Pagederecherche */ get_header(); ?>

<div class="accueilpagederecherche">

    <h2 class="appuyezdecouvrez text-uppercase">Appuyez et découvrez !</h2>
 
        <div class="overlay-image"><a href="<?php echo home_url() . '/suggestions/'; ?>">
            <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/boutonderecherchepassif.png" alt="Boutonderecherche" />
            <div class="hover">
        <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/boutonderechercheactif.png" alt="Boutonderecherche" />
            </div>    
        </a></div>

</div>
<?php get_footer(); ?>