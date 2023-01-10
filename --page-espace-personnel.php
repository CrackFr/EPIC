<?php /* Template Name: EspacePersonnelPage */ get_header(); ?>
<?php echo do_shortcode("[client-portal]"); ?>


<div class="accueilespacep container-fluid">
    <img
        class="photodeprofil container"
        src="https://media.istockphoto.com/id/1223671392/vector/default-profile-picture-avatar-photo-placeholder-vector-illustration.jpg?s=612x612&w=0&k=20&c=s0aTdmT5aU6b8ot7VKm11DeID6NctRCpB755rA1BIP0="
        alt="Photodeprofil">
    <h3 class="nom text-center text-uppercase">Pierre</h3>

    <div class="container-fluid text-center">
        <div class="espacep row row-cols-2 col-6 mx-auto">
            <a
                class="col btn btn-primary-trois"
                href="<?php echo home_url() . '/historique-des-decouvertes/'; ?>">Historique</a>

            <a
                class="col btn btn-primary-trois"
                href="<?php echo home_url() . '/archives-des-partages/'; ?>">
                Archives des partages</a>

            <a
                class="col btn btn-primary-trois"
                href="<?php echo home_url() . '/favoris/'; ?>">Favoris</a>

            <a
                class="col btn btn-primary-trois"
                href="<?php echo home_url() . '/espace-commentaires/'; ?>">Espace commentaires</a>
        </div>
    </div>

</div>







<?php get_footer(); ?>

