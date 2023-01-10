<?php /* Template Name: CategoriesdartsPage */ get_header(); ?>
<div class="accueilespacep">

    <h2 class="questioncategories text-uppercase">Quel type d'art recherchez-vous ?</h2>

    <div class="container-fluid text-center">
    <div class="categoriesdarts row row-cols-2 col-6 mx-auto">
            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/page-de-recherche/'; ?>">Architecture</a>

            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/archives-des-partages/'; ?>">Sculpture</a>

            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/favoris/'; ?>">Arts visuels</a>

            <a
                class="cateogories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/espace-commentaires/'; ?>">Musique</a>
            
            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/favoris/'; ?>">Littérature</a>
            
            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/espace-commentaires/'; ?>">Arts de la scène</a>

            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/historique-des-decouvertes/'; ?>">Cinéma</a>

            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/archives-des-partages/'; ?>">Arts médiatiques</a>

            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/favoris/'; ?>">Bande dessinée</a>

            <a
                class="categories col btn btn-primary-quatre"
                href="<?php echo home_url() . '/espace-commentaires/'; ?>">Jeux vidéos</a>      
        </div>
    </div>

</div>


<?php get_footer(); ?>