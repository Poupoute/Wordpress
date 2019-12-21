<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
      $banner = get_field('banner_background_image');
      $conference_image = get_field('conference_background_image');
      $programme_image = get_field('programme_background_image');
      $orateurs_image = get_field('orateurs_image_personne');
      $information_image = get_field('informations_background_image');
      $information_icone_lieu = get_field('information_position');
      $information_icone_horaire = get_field('informations_horaires');
      $information_icone_restauration = get_field('information_restauration');
      $videos = get_field('video_premiere');
      $actus_image = get_field('image_article1');
      $actus_image2 = get_field('image_article2');
      $actus_image3 = get_field('image_article3');
      $actus_image4 = get_field('image_article4');

  }
}
?>
<!--BANNER-->
<section class="banner" style="background-image: url('<?php echo $banner['url']; ?>'); height: 75vh; background-repeat: no-repeat;">
  <p class="banner_contenu">
      <p class="banner_baseline"><?php the_field('banner_baseline'); ?></p>
      <p class="banner_title_brown"><?php the_field('banner_title_brown'); ?></p>
      <p class="banner_title_green"><?php the_field('banner_title_green'); ?></p>
    <a class="banner_register_link"><?php the_field('banner_register_link'); ?></a>
  </p>
</section>
<!--/BANNER-->
<!--CONFERENCE-->
<section class="conference">
      <p class="conference_title"><?php the_field('conference_title'); ?></p>
      <p class="conference_content"><?php the_field('conference_content'); ?></p>
      <p class="conference_background_image" style="background-image: url('<?php echo $conference_image['url']; ?>'); height: 25vh; background-repeat: no-repeat;">
</section>
<!--/CONFERENCE-->
<!--PROGRAMME JU-->
 <section class="programme">
      <p class="programme_title"><?php  the_field('programme_title'); ?></p>
        <div class="programme_display">
              <div class="programme_gauche">
                  <p class="programme_title_green"><?php the_field('programme_title_green'); ?></p>
                  <p class="programme_repeteur1">
                      <?php $programs = get_field('programme_repeteur');
                        foreach($programs as $program){
                          echo "<p class=heures>".$program['programme_heures']."</p>";
                          echo "<p class=description>".$program['programme_description']."</p>";
                        } ?>
                  </p>
              </div>
              <div class="programme_droit">
                  <p class="programme_title_green_copie"><?php the_field('programme_title_green_copie'); ?></p>
                  <p class="programme_repeteur2">
                      <?php $programs = get_field('programme_repeteur2');
                        foreach($programs as $program){
                          echo "<p class=heures>".$program['programme_heures']."</p>";
                          echo "<p class=description>".$program['programme_description']."</p>";
                      } ?></p>
              </div>
        </div>
      <p class="programme_register_link"><?php the_field('programme_register_link'); ?></p>
      <p class="programme_background_image" style="background-image: url('<?php echo $programme_image['url']; ?>'); height: 25vh; background-repeat: no-repeat;">
</section>
<!--/PROGRAMME-->


<!--ORATEURS-->
  <section class="orateurs">
        <p class="orateurs_title_gray"><?php the_field('orateurs_title_gray'); ?></p>
        <p class="orateurs_baseline"><?php the_field('orateurs_baseline'); ?></p>
          <p class="orateurs_personne">
              <?php $programs = get_field('orateurs_personnes');
                 foreach($programs as $program){
                    echo "<img src=".$orateurs_image['url']."/>";
                    echo "<p class=orateurs_noms>".$program['orateurs_noms']."</p>";
                    echo "<p class=orateurs_description>".$program['orateurs_description']."</p>";
                    echo "<p class=orateurs_liens>".$program['orateurs_liens']."</p>";
                 }?>
          </p>
</section> -->
<!--/ORATEURS-->
<!--INFORMATIONS PRATIQUES-->
<section class="informations_pratiques">
  <p class="informations_title_gris"><?php the_field('informations_title_gris'); ?></p>
    <div class="info_fond" style="background-image: url('<?php echo $information_image['url']; ?>'); background-repeat: no-repeat; background-size: 100%;">
        <div class="fond_vert">
            <div class="icone1">
                <p class="information_position" style="background-image: url('<?php echo $information_icone_lieu['url']; ?>'); height: 25vh;"></p>
                <p class="informations_adresse"><?php the_field('informations_adresse'); ?></p>
            </div>
            <div class="icone2">
              <p class="informations_horaires" style="background-image: url('<?php echo $information_icone_horaire['url']; ?>'); height: 25vh;"></p>
                <p class="informations_heures"><?php the_field('informations_heures'); ?></p>
            </div>
            <div class="icone3">
              <p class="information_restauration" style="background-image: url('<?php echo $information_icone_restauration['url']; ?>'); height: 25vh;"></p>
                <p class="information_dejeuner"><?php the_field('information_dejeuner'); ?></p>
            </div>
            <p class="information_link_map"><?php the_field('information_link_map'); ?></p>
        </div>

    </div>
</section>
<!--/INFORMATION PRATIQUES-->
<!--VIDEOS-->
<section class="videos">
  <p class="videos_title"><?php the_field('videos_title'); ?></p>
    <div class="videos_grande">
          <p class="video_premiere" style="background-image: url('<?php echo $videos['url'];  ?>'); background-size: cover; height: 40vh;"></p>
          <p class="video_premiere" style="background-image: url('<?php echo $videos['url']; ?>'); background-size: cover; height: 40vh;"></p>
    </div>
    <div class="videos_petite">
        <div class="videos_gauche">

            <div class="videos_display">
                <p class="video_gauche_premiere" style="background-image: url('<?php echo $videos['url'];  ?>'); background-size: cover; height: 15vh;"></p>
                  <div class="videos_texte_presentation">
                    <p class="videos_texte"><?php the_field('videos_texte'); ?></p>
                    <p class="videos_texte_noms"><?php the_field('videos_noms_1'); ?></p>
                  </div>
            </div>

                <div class="videos_display">
                  <p class="video_gauche_premiere" style="background-image: url('<?php echo $videos['url'];  ?>'); background-size: cover; height: 15vh;"></p>
                      <div class="videos_texte_presentation">
                        <p class="videos_texte"><?php the_field('videos_texte_2'); ?></p>
                        <p class="videos_texte_noms"><?php the_field('videos_noms_2'); ?></p>
                      </div>
                </div>

        </div>
      <div class="videos_droite">

        <div class="videos_display">
          <p class="video_gauche_premiere" style="background-image: url('<?php echo $videos['url'];  ?>'); background-size: cover; height: 15vh;"></p>
              <div class="videos_texte_presentation">
                <p class="videos_texte"><?php the_field('videos_texte_3'); ?></p>
                <p class="videos_texte_noms"><?php the_field('videos_noms_3'); ?></p>
              </div>
        </div>

            <div class="videos_display">
              <p class="video_gauche_premiere" style="background-image: url('<?php echo $videos['url'];  ?>'); height: 15vh;"></p>
                  <div class="videos_texte_presentation">
                    <p class="videos_texte"><?php the_field('videos_texte_4'); ?></p>
                    <p class="videos_texte_noms"><?php the_field('videos_noms_4'); ?></p>
                  </div>
            </div>

      </div>
    </div>
</section>
<!--/VIDEOS-->
<!--ACTUS-->
<section class="actus">
  <p class="actu_title"><?php the_field('actus_titre'); ?></p>
    <div class="actus_articles">
        <div class="actu_1">
            <p class="image_article" style="background-image: url('<?php echo $actus_image['url']; ?>'); background-size: cover; height: 30vh;"></p>
              <div class="actus_texte1">
                  <p class="titre_article"><?php the_field('titre_article1'); ?></p>
                  <p class="resume_article"><?php the_field('resume_article1'); ?></p>
                  <a href="#" class="lire_article"><?php the_field('lire_article1'); ?></a>
                  <p class="date_articles"><?php the_field('date_articles1'); ?></p>
              </div>
        </div>
        <div class="actu_2">
            <p class="image_article2" style="background-image: url('<?php echo $actus_image2['url']; ?>'); background-size: cover; height: 30vh"></p>
              <div class="actus_texte1">
                  <p class="titre_article"><?php the_field('titre_article2'); ?></p>
                  <p class="resume_article"><?php the_field('resume_article2'); ?></p>
                  <a href="#" class="lire_article"><?php the_field('lire_article2'); ?></a>
                  <p class="date_articles"><?php the_field('date_articles2'); ?></p>
              </div>
        </div>
        <div class="actu_3">
            <p class="image_article3" style="background-image: url('<?php echo $actus_image3['url']; ?>'); background-size: cover; height: 30vh"></p>
              <div class="actus_texte1">
                  <p class="titre_article"><?php the_field('titre_article3'); ?></p>
                  <p class="resume_article"><?php the_field('resume_article3'); ?></p>
                  <a href="#" class="lire_article"><?php the_field('lire_article3'); ?></a>
                  <p class="date_articles"><?php the_field('date_articles3'); ?></p>
              </div>
        </div>
        <div class="actu_4">
            <p class="image_article4" style="background-image: url('<?php echo $actus_image4['url']; ?>'); background-size: cover; height: 30vh"></p>
              <div class="actus_texte1">
                  <p class="titre_article"><?php the_field('titre_article4'); ?></p>
                  <p class="resume_article"><?php the_field('resume_article4'); ?></p>
                  <a href="#" class="lire_article"><?php the_field('lire_article4'); ?></a>
                  <p class="date_articles"><?php the_field('date_articles4'); ?></p>
              </div>
        </div>
    </div>
</section>

<?php

?>
<?php get_footer(); ?>
