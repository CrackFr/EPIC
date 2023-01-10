<?php /* Template Name: ConnexionInscription */ get_header(); ?>
<div class="accueilconnexioninscription">
    <h2 class="connectezvous">Connectez-vous pour accéder à votre espace personnel</h2>
    <div class="container-fluid text-center">
        <div class="btnconnexioninscription row row-cols-2 col-6 mx-auto">
                <a
                    class="categories col btn btn-primary-cinq-first"
                    href="<?php echo home_url() . '/page-connexion/'; ?>">Connexion</a>

                <a
                    class="categories col btn btn-primary-cinq"
                    href="<?php echo home_url() . '/page-inscription/'; ?>">Inscription</a>
        </div>
    </div>

</div>

<?php get_footer(); ?>