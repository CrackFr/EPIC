<?php /* Template Name: PagedAccueil */ get_header(); ?>
<div class="accueilun">
    <h1 class="nomdusite">EPIC</h1>
    <div class="d-grid gap-2 col-2 mx-auto">
        <a
            class="btn btn-primary-un"
            href="<?php echo home_url() . '/categories-darts/'; ?>">Je découvre</a>
        <a
            class="btn btn-primary-un"
            href="<?php echo home_url() . '/partager/'; ?>">Je partage</a>
    </div>
    <p class="triangle">▼</p>
</div>
<div class="accueildeux">
    <div class="container-fluid border-top border-bottom">
        <h2 class="text-uppercase">Epic c'est quoi ?</h2>
        <div class="row border-top border-bottom">
            <p class="description-equipe">
                EPIC est un site permettant de se nourrir de culture artistique ainsi que d'en
                partager au travers de recommandations faites par les utilisateurs eux-mêmes.
                Notre site web a donc pour but d'accueillir une communauté de passionnés guidés
                par le plaisir de partager leurs coups de coeurs et dernières trouvailles tout
                en pouvant être aidés lors des périodes de pannes d'idées et d'inspiration, le
                tout en se détachant des médiass et oeuvres mainstreams.</p>
        </div>
        <h2 class="text-uppercase">Qui sommes-nous ?</h2>
        <div class="row border-bottom">
            <div class="equipe col-sm pt-3 border-end border-top border-bottom">
                <p class="description-membres">
                    <img
                        class="photoritchelle border-end"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/photoritchelle.png"
                        alt="Photoritchelle">
                    Ritchelle STACY 19 ans Etudiante à l'ISFSC</p>
            </div>
            <div class="equipe col-sm pt-3 border-top border-bottom">
                <p class="description-membres">
                <img
                        class="photodeux border-start"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/photoesther.png"
                        alt="Photodeux">
                    Esther RUTKOWSKI 19 ans Etudiante à l'ISFSC</p>
            </div>
            <h2 class="text-uppercase">Nous contacter</h2>
        </div>
        <form class="row col-6 m-5 mx-auto" style="width: 450px;">
            <div class="col">
                <label for="Pseudo" class="form-label">Pseudo</label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Pseudo"
                    aria-label="Pseudo">
            </div>
            <div class="col">
                <label for="Email" class="form-label">Email</label>

                <input type="text" class="form-control" placeholder="Email" aria-label="Email">
            </div>
            <div class="col-md-12 my-2">
                <label for="inputMessage" class="form-label">Message</label>
                <input type="Message" class="form-control" id="Message" placeholder="Message">
            </div>
            <div class="col-12 my-2">
                <button type="submit" class="btn btn-primary-deux">Envoyer</button>
            </div>
        </form>
        <div class="row border-light border-top">
            <p class="m-2 mx-auto" style="width: 150px;">Mentions légales</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>