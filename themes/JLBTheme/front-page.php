<?php
/*
  Template Name: Home Page
  front-page.php
*/
get_header(); ?>

<main id="home">
  
  <?php get_template_part('components/home-page/hero'); ?>
  <!-- Or, nah -->
  <?php 
  
    $rows = get_field('services_slider');

  
  ?>

  <div class="one">
    <?php if(get_field('services_slider')): ?>
    <?php while( have_rows('services_slider') ): the_row();?>
    <div class="slide">
      <div class="image-container m-auto">
        <div class="p-0 service-image-collage image-collage-one">
          <div class="service-row">
              <div class="service-images service-image-one" style="background-image:url('<?=get_sub_field('service_image_one')?>')">
                <a href="http://localhost/services" class="overlay">
                  <h3 class="service-title service-title-one"><?=get_sub_field('service_title_one');?></h3>
                </a>
              </div>
            <div class="service-images service-image-two" style="background-image:url(<?=get_sub_field('service_image_two')?>)">
              <a href="http://localhost/services" class="overlay">
                <h3 class="service-title service-title-two"><?=get_sub_field('service_title_two');?></h3>
              </a>
            </div>
          </div>
          <div class="service-row">
            <div class="service-arrow"><i class="fas fa-angle-left"></i></div>
            <div class="service-images service-image-three" style="background-image:url(<?=get_sub_field('service_image_three')?>)">
              <a href="http://localhost/services" class="overlay">
                <h3 class="service-title service-title-three" ><?=get_sub_field('service_title_three');?></h3>
              </a>
            </div>
            <div class="service-images service-image-four" style="background-image:url(<?=get_sub_field('service_image_four')?>)">
              <a href="http://localhost/services" class="overlay">
                <h3 class="service-title service-title-four"><?=get_sub_field('service_title_four');?></h3>
              </a>
            </div>
          </div>
        </div>
        <div class="p-0 service-image-collage image-collage-two">
          <div class="service-images service-image-five" style="background-image:url(<?=get_sub_field('service_image_five')?>)">
            <a href="http://localhost/services" class="overlay">
              <h3 class="service-title service-title-five"><?=get_sub_field('service_title_five');?></h3>
            </a>
          </div>
        </div>
        <div class="p-0 service-image-collage image-collage-three">
          <div class="service-row">
            <div class="service-images service-image-six" style="background-image:url(<?=get_sub_field('service_image_six')?>)">
              <a href="http://localhost/services" class="overlay">
                <h3 class="service-title service-title-six"><?=get_sub_field('service_title_six');?></h3>
              </a>
            </div>
            <a href="http://localhost/services" class="service-see-all">
              <h3>See All</h3>
            </a>
          </div>
          <div class="service-row">
            <div class="service-images service-image-seven" style="background-image:url(<?=get_sub_field('service_image_seven')?>)">
              <a href="http://localhost/services" class="overlay">
                <h3 class="service-title service-title-seven"><?=get_sub_field('service_title_seven');?></h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
  </div> 

  <section class="two">
    <div class="info-container">
      <div class="info-image">
        <img src="http://localhost/wp-content/uploads/2018/08/about-photo.jpg" alt="">
        <div class="over-30-years-wrapper">
          <h2 class="over-30-years-one">Over</h2>
          <h2 class="over-30-years-two">30</h2>
          <h2 class="over-30-years-three">Years Experience</h2>
        </div>
      </div>
      <div class="info-content">
        <div class="info-content-wrapper">
          <h2><?=get_field('info_title')?></h2>
          <p><?=get_field('info_content')?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="three">
    <div class="example-container" style="background-image:url(http://localhost/wp-content/uploads/2018/08/pattern-background.jpg)">
      <div class="example-position-wrapper">
        <div class="example-one">
          <div class="example-image covered" data-passive="<?=get_field('after_one')?>" data-active="<?=get_field('before_one')?>">              
            <div class="handle"></div>
            <div class="changeable">
              <div class="changeable-line"></div>
              <h2>Before</h2>
            </div>
            <h2 class="example-after">After</h2>
          </div>
          <div class="example-content-wrapper">
            <div class="example-content">
              <h2><?=get_field('example_one_title')?></h2>
              <p><?=get_field('example_one_content')?></p>
            </div>
          </div>
        </div>
        <div class="example-two">
          <div class="example-content-wrapper">
            <div class="example-content">
              <h2><?=get_field('example_two_title')?></h2>
              <p><?=get_field('example_two_content')?></p>
            </div>
          </div>
          <div class="example-image covered second" data-passive="<?=get_field('after_two')?>" data-active="<?=get_field('before_two')?>">
            <div class="handle"></div>
            <div class="changeable">
              <div class="changeable-line"></div>
              <h2>Before</h2>
            </div>
            <h2 class="example-after">After</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="four">
    <div class="reviews">
      <div class="reviews-image" style="background-image:url(<?=get_field('reviews_image')?>)">
        <div class="reviews-image-overlay"></div>
        <div class="reviews-image-content">
          <h2><?=get_field('reviews_image_title')?></h2>
          <p><?=get_field('reviews_image_content')?></p>
          <img src="http://localhost/wp-content/uploads/2018/08/bbb-logo.png" alt="">
        </div>
      </div>
      
      <div class="reviews-content">
        <h2 class"reviews-header"><?=get_field('reviews_quote_title')?></h2>
        <div class="reviews-content-section reviews-content-one">
          <img class="reviews-content-quote" src="http://localhost/wp-content/uploads/2018/08/“.png" alt="">
          <div class="reviews-content-one-content">
            <p><?=get_field('reviews_quote_one')?></p>
            <h3><?=get_field('reviews_quote_one_name')?></h3>
          </div>
        </div>
        <div class="reviews-content-section reviews-content-two">
          <img class="reviews-content-quote" src="http://localhost/wp-content/uploads/2018/08/“.png" alt="">
          <div class="reviews-content-two-content">
            <p><?=get_field('reviews_quote_two')?></p>
            <h3><?=get_field('reviews_quote_two_name')?></h3>
          </div>
        </div>
      </div>
        
    </div>
  </section>

</main>

<?php get_footer();
