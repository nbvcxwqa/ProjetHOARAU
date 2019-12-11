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
      
    $banner_img = get_field('banner_background_image');
    $img2 = get_field('background_image_2');
?>

<!-- Code html commence ici -->

<section class="section-1" style="background-image:url(<?php echo $banner_img['url']; ?>)">
  <p><?php the_field('banner_baseline');?></p>
  <h1><?php the_field('banner_title_brown');?></h1>
  <h1 class="vert"><?php the_field('banner_title_green');?></h1>
  <h4><?php the_field('banner_register_link');?>
    </h4>

</section>

<section class="section-2">
  <h1> <?php the_field('title_2');?></h1>
  <p><?php the_field('text_2');?></p>
    <img src="<?php echo $img2['url'];?>" alt="c'est cassé">
</section>

<section class="section-3">
  <h1> <?php the_field('title_3');?></h1>
  <h3 class="vert"><?php the_field('title_green_1');?></h3>
    <table>
        <tr>
            <td><?php the_field('horaire_1');?></td>
            <td><?php the_field('conf_1');?></td>    
        </tr>
        <tr>
            <td><?php the_field('horaire_2');?></td>
            <td><?php the_field('conf_2');?></td>    
        </tr> 
        <tr>
            <td><?php the_field('horaire_3');?></td>
            <td><?php the_field('conf_3');?></td>    
        </tr>
    </table>
    
    
    <h4 class='abonnetoi'><?php the_field('register_link_3');?>
    <img src="<?php the_field('background_image_2');?>" alt="c'est cassé">
</section>
    
    
<section class="section-4">
  <h1> <?php the_field('title_4');?></h1>
  <h3 class="vert"><?php the_field('title_gray_4');?></h3>
    <div id="orateur">
        <img src="<?php the_field('orateur_1');?>" alt="c'est cassé">
        <p><?php the_field('orateur_text_1');?></p>
    </div>
    <div id="orateur2">
        <img src="<?php the_field('orateur_2');?>" alt="c'est cassé">
        <p><?php the_field('orateur_text_2');?></p>
    </div>
    <div id="orateur3">
        <img src="<?php the_field('orateur_3');?>" alt="c'est cassé">
        <p><?php the_field('orateur_text_3');?></p>
    </div>
    <div id="orateur4">
        <img src="<?php the_field('orateur_4');?>" alt="c'est cassé">
        <p><?php the_field('orateur_text_4');?></p>
    </div>
    <div id="orateur5">
        <img src="<?php the_field('orateur_5');?>" alt="c'est cassé">
        <p><?php the_field('orateur_text_5');?></p>
    </div>
    <div id="orateur6">
        <img src="<?php the_field('orateur_6');?>" alt="c'est cassé">
        <h4><?php the_field('nom');?></h4>
        <p><?php the_field('orateur_text_6');?></p>
    </div>
    
    
</section>
    

<?php
  }
}
?>

</div>

<?php get_footer(); ?>