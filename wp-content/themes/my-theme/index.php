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
               <button><?php the_field('register_link_3');?></button>
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
                 <button><?php the_field('bouton6');?></button></div>
                 </div>
    </div>

          </div>
    </section>







    <section class="section-6">
         <div class="part6">

                 <h1><?php the_field('titre_6');?></h1>
                 <div id="fond">
                   <img style="background-size: cover;
    width: 100%;" class="img2" src="<?php echo get_template_directory_uri(); ?>/assets/img/lieu.png">
  </div>
             <div id="CarreVert">
             <h2><?php the_field('text1_6');?></h2>
              <h2><?php the_field('text2_6');?></h2>
              <h2><?php the_field('text3_6');?></h2>
                 </div>

    </div>
    </section>



        <section class="section-7">
             <div class="part7">

                     <h1><?php the_field('titre_7');?></h1>

                     <div class="parent">
                     <div id="div1"> <img class="image" style="background-size:cover; width:100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/chat1.jpg"><p><?php the_field('text1_7');?></p></div>

                     <div id="div2"> <img class="image" style="background-size:cover; width:100%; "src="<?php echo get_template_directory_uri(); ?>/assets/img/chat2.jpg"><p><?php the_field('text2_7');?><p> </div>

                     <div id="div3">  <img class="image"  src="<?php echo get_template_directory_uri(); ?>/assets/img/chat3.jpg"> </div>

                     <div id="div4"> <p><?php the_field('text3_7');?></p> </div>

                     <div id="div5"> <img class="image"  src="<?php echo get_template_directory_uri(); ?>/assets/img/chat4.jpg"> </div>

                     <div id="div6"> <p><?php the_field('text4_7');?></p></div>

                     <div id="div7"> <img class="image"  src="<?php echo get_template_directory_uri(); ?>/assets/img/chat5.jpg"></div>

                     <div id="div8"> <p><?php the_field('text5_7');?></p></div>

                     <div id="div9"><img class="image"  src="<?php echo get_template_directory_uri(); ?>/assets/img/chat6.jpg"> </div>

                     <div id="div10"> <p><?php the_field('text6_7');?></p></div>
                     </div>
                     </div>

        </div>
        </section>


        <section class="section-8">
                  <div class="part8">

                      <h1><?php the_field('titre_8');?></h1>

                      <div id="block">
         <div id="part1_8">
          <img  class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/chat7.jpg">
           <h3><?php the_field('text1_8');?></h3>
           <p><?php the_field('text2_8');?></p>
         </div>
         <div id="part2_8">
          <img class="image"  src="<?php echo get_template_directory_uri(); ?>/assets/img/chat1.jpg">
           <h3><?php the_field('text3_8');?></h3>
           <p><?php the_field('text4_8');?></p>
         </div>
         <div id="part3_8">
          <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/chat2.jpg">
           <h3><?php the_field('text5_8');?></h3>
           <p><?php the_field('text6_8');?></p>
         </div>
           <div id="part4_8">
          <img class="image"  src="<?php echo get_template_directory_uri(); ?>/assets/img/chat3.jpg">
           <h3><?php the_field('text7_8');?></h3>
           <p><?php the_field('text8_8');?></p>
         </div>
       </div>

            </div>
           </section>


           <section class="section-9">
                     <div id="part9">

                       <?php
                         wp_nav_menu( array('theme_location' => 'nav_main') );
                       ?>

               </div>
              </section>






<?php
  }
}
?>

</div>

<?php get_footer(); ?>
