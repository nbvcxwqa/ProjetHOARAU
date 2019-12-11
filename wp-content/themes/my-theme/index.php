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
?>
<section class="section-1" background-image:url(<?php echo $banner_img['url']; ?>)>
     <div class="part1">
  <p><?php the_field('banner_baseline');?></p>
         <h1><?php the_field('banner_title_brown');?></h1>
         <h2><?php the_field('titre_vert'); ?></h2>
         <button><?php the_field('banner_title_green');?></button>
</div>
    </section>

<section class="section-2">
       <div class="part2">
         <h1><?php the_field('title_2');?></h1>
      <p><?php the_field('text_2');?></p>
           </div>
    </section>

<section class="section-3">
  <img src="<?php echo $img2['url'];?>" alt="c'est cassé" style="background-size: cover;
    width: 100%;">
    </section>


    <section class="section-4">
         <div class="part4">
  <h1><?php the_field('title_section_4');?></h1>
             <div class="gauche">
 <h2><?php the_field('title_green4_1');?></h2>
             <p> <span> <?php the_field('horaire_1');?> </span> <?php the_field('conf_1');?></p>
             <p> <span> <?php the_field('horaire_2');?> </span> <?php the_field('conf_2');?></p>
             <p> <span> <?php the_field('horaire_3');?></span> <?php the_field('conf_3');?></p>
             <p> <span> <?php the_field('horaire_4');?> </span> <?php the_field('conf_4');?></p>
             <p> <span> <?php the_field('horaire_5');?></span><?php the_field('conf_5');?></p>
                 </div>
             <div class="droite">
<h2><?php the_field('title_green4_2');?></h2>
             <p> <span> <?php the_field('horaire_6');?> </span> <?php the_field('conf_6');?></p>
             <p> <span> <?php the_field('horaire_7');?> </span> <?php the_field('conf_7');?></p>
             <p> <span> <?php the_field('horaire_8');?> </span> <?php the_field('conf_8');?></p>
             <p> <span> <?php the_field('horaire_9');?></span> <?php the_field('conf_9');?></p>
                 </div>
               <button>S'<?php the_field('register_link_3');?></button>
        </div>
    </section>

    <section class="section-5">
         <div class="part5">
              <h1><?php the_field('titre_section5');?></h1>
             <h2><?php the_field('soustitre5');?></h2>
             <div class="parent1">
             <div class="roundedImage">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona3.jpg" alt="" style="background-image:cover;">
                 <p><?php the_field('nom1');?></p>
                 <span><?php the_field('decris1');?></span4
                 <button><?php the_field('bouton1');?></button>
</div>
             <div class="roundedImage">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona4.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom2');?></p>
                 <span><?php the_field('decris2');?></span>
                 <button><?php the_field('bouton2');?></button>
</div>
             <div class="roundedImage">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona-1.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom3');?></p>
                 <span><?php the_field('decris3');?></span>
                 <button><?php the_field('bouton3');?></button>
</div>
             <div class="roundedImage">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona3.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom4');?></p>
                 <span><?php the_field('decris4');?></span>
                 <button><?php the_field('bouton4');?></button>
</div>
                 <div class="centrer1">
                             <div class="roundedImage">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona4.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom5');?></p>
                 <span><?php the_field('decris5');?></span>
                 <button><?php the_field('bouton5');?></button>
</div>
             <div class="roundedImage">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/buyer-persona-1.jpg" alt="" style="background-image:cover;">
                  <p><?php the_field('nom6');?></p>
                 <span><?php the_field('decris6');?></span>
                 <button><?php the_field('bouton6');?></button>6</div>
                 </div>
    </div>

          </div>
    </section>







    <section class="section-6">
         <div class="part6">
                 <h1>Information Pratique</h1>
                   <img style="background-size: cover;
    width: 100%;" class="img2" src="<?php echo get_template_directory_uri(); ?>/assets/img/lieu.png">
             <div class="CarreVert">
             <h2>Square Brussels<br>Mont des Arts<br>1000 Bruxelles<br>Belgique</h2>
              <h2>Le 03.12.2019<br>de 8h30 à 12h30</h2>
              <h2>Healthy<br>Walking Dinner</h2>
                 </div>

    </div>
    </section>














<?php
  }
}
?>

</div>

<?php get_footer(); ?>
