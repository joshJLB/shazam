<?php
/*
  Template Name: Contact
  contact.php
*/
get_header(); ?>



<main id="contact">
  <?php get_template_part('components/header/child-header'); ?>

  <div class="contact-container">
    <div class="contact-title">
      <h1><?=get_field('title', 'option')?></h1>
    </div>
    <div class="contact-info">
      <div class="contact-links">
        <a href="tel:<?=get_field('phone', 'option')?>"><i class="fas fa-phone"></i></a>
        <a href="mailto:<?=get_field('email', 'option')?>"><i class="fas fa-envelope"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
      </div>
      <div class="contact-image" style="background-image:url(<?=get_field('background_image', 'option'); ?>)">
        <div class="overlay2">
          <img src="<?=get_field('inner_image', 'option'); ?>" alt="">
        </div> 
      </div>
    </div>
  </div>

</main>

<?php get_footer();
