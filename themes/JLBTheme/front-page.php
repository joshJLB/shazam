<?php
/*
  Template Name: Home Page
  front-page.php
*/
get_header(); ?>

<main id="home">
  
  <?php get_template_part('components/home-page/hero'); ?>
  <!-- Or, nah -->

  <section class="one">
    <div class="image-container row m-0">
      <div class="col-5 p-0 service-image-collage image-collage-one">
        <div class="service-row">
          
            <div class="service-images service-image-one" style="background-image:url(http://localhost/wp-content/uploads/2018/08/88034363-car-detailing-car-washing-with-foam-shampoo.jpg)">
              <div class="overlay">
              <h3 class="service-title service-title-one">Service Title</h3>
              </div>
            </div>
          <div class="service-images service-image-two" style="background-image:url(http://localhost/wp-content/uploads/2018/08/8138c5eb-2fee-49df-a12e-de0bf1c5091d_l.jpg)">
            <div class="overlay">
             <h3 class="service-title service-title-two">Service Title</h3>
            </div>
          </div>
        </div>
        <div class="service-row">
          <div class="service-arrow" style="background-image:url(http://localhost/wp-content/uploads/2018/08/arrow.png)"></div>
          <div class="service-images service-image-three" style="background-image:url(http://localhost/wp-content/uploads/2018/08/27ec5414-512c-471d-9f4e-71345a6ed879_l.jpg)">
            <div class="overlay">
             <h3 class="service-title service-title-three" >Service Title</h3>
            </div>
          </div>
          <div class="service-images service-image-four" style="background-image:url(http://localhost/wp-content/uploads/2018/08/75879256-close-up-of-a-young-man-polishing-his-car-square.jpg)">
            <div class="overlay">
              <h3 class="service-title service-title-four">Service Title</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 p-0 service-image-collage image-collage-two">
        <div class="service-images service-image-five" style="background-image:url(http://localhost/wp-content/uploads/2018/08/60dc909f-f36f-46ac-83e2-1578e6ad4162_h.jpg)">
          <div class="overlay">
            <h3 class="service-title service-title-five">Service Title</h3>
          </div>
        </div>
      </div>
      <div class="col-3 p-0 service-image-collage image-collage-three">
        <div class="service-row">
          <div class="service-images service-image-six" style="background-image:url(http://localhost/wp-content/uploads/2018/08/75879256-close-up-of-a-young-man-polishing-his-car-square.jpg)">
            <div class="overlay">
              <h3 class="service-title service-title-six">Service Title</h3>
            </div>
          </div>
          <div class="service-see-all" style="background-image:url(http://localhost/wp-content/uploads/2018/08/arrow.png)"></div>
        </div>
        <div class="service-row">
          <div class="service-images service-image-seven" style="background-image:url(http://localhost/wp-content/uploads/2018/08/88034363-car-detailing-car-washing-with-foam-shampoo-2.jpg)">
            <div class="overlay">
              <h3 class="service-title service-title-seven">Service Title</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="two">
    <div class="info-container">
        <h2 class="over-30-years-one">Over</h2>
        <h2 class="over-30-years-two">30</h2>
        <h2 class="over-30-years-three">Years Experience</h2>
      <div class="info-image">
        <img src="http://localhost/wp-content/uploads/2018/08/about-photo.jpg" alt="">
      </div>
      <div class="info-content">
        <div class="info-content-wrapper">
          <h2>The Shazam Difference</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat aliquam erat sed mollis. Cras maximus semper nulla in congue. Suspendisse lacinia magna ac volutpat rhoncus. Nunc malesuada vehicula turpis, sit amet pretium leo laoreet a. Proin nec laoreet nisi, nec lobortis ante. Aliquam erat volutpat. Curabitur volutpat vitae orci id accumsan. Mauris ultrices, velit quis bibendum placerat, neque lectus viverra nibh, varius suscipit tellus purus a enim. Vivamus tempus turpis sit amet commodo mattis. Morbi id ante lectus.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="three">
    <div class="example-container" style="background-image:url(http://localhost/wp-content/uploads/2018/08/pattern-background.jpg)">
      <div class="example-position-wrapper">
        <div class="example-one">
          <div class="example-image covered" data-passive="http://localhost/wp-content/uploads/2018/08/honda-after-cropped.jpg" data-active="http://localhost/wp-content/uploads/2018/08/honda-before-cropped.jpg">
              
            <div class="handle"></div>
            <div class="changeable">
              <h2>Before</h2>
            </div>
            <h2 class="example-after">After</h2>
          </div>
          <div class="example-content-wrapper">
            <div class="example-content">
              <h2>Honda 2007</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat aliquam erat sed mollis. Cras maximus semper nulla in congue. Suspendisse lacinia magna ac volutpat rhoncus. Nunc malesuada vehicula turpis, sit amet pretium leo laoreet a. Proin nec laoreet nisi, nec lobortis ante. Aliquam erat volutpat. Curabitur volutpat vitae orci id accumsan. Mauris ultrices, velit quis bibendum placerat, neque lectus viverra nibh, varius suscipit tellus purus a enim.</p>
            </div>
          </div>
        </div>
        <div class="example-two">
          <div class="example-content-wrapper">
            <div class="example-content">
              <h2>Audi 2010</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat aliquam erat sed mollis. Cras maximus semper nulla in congue. Suspendisse lacinia magna ac volutpat rhoncus. Nunc malesuada vehicula turpis, sit amet pretium leo laoreet a. Proin nec laoreet nisi, nec lobortis ante. Aliquam erat volutpat. Curabitur volutpat vitae orci id accumsan. Mauris ultrices, velit quis bibendum placerat, neque lectus viverra nibh, varius suscipit tellus purus a enim.</p>
            </div>
          </div>
          <div class="example-image covered second" data-passive="http://localhost/wp-content/uploads/2018/08/after-audi.jpg" data-active="http://localhost/wp-content/uploads/2018/08/detailing-before-audi.jpg">
            <div class="handle"></div>
            <div class="changeable"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="four">
    <div class="reviews">
        <div class="reviews-image" style="background-image:url(http://localhost/wp-content/uploads/2018/08/100326475-soapy-water-drains-from-the-car-a-man-washes-a-hand-car-wash-with-water-under-pressure-in-a-car-wash.jpg)">
          <div class="reviews-image-overlay"></div>
          <div class="reviews-image-content">
            <h2>Top Ranked Business On Better Business Bereau</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor quam sit amet ullamcorper elementum. Curabitur tempus vulputate molestie. Vestibulum vel risus non urna venenatis placerat.</p>
            <img src="http://localhost/wp-content/uploads/2018/08/bbb-logo.png" alt="">
          </div>
        </div>
      
      <div class="reviews-content">
        <h2 class"reviews-header">Don't Believe Us? Read Our Reviews!</h2>
        <div class="reviews-content-one">
          <img src="http://localhost/wp-content/uploads/2018/08/quote-box.png" alt="">
          <img class="reviews-content-quote" src="http://localhost/wp-content/uploads/2018/08/“.png" alt="">
          <div class="reviews-content-one-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h3>Kenneth Allen</h3>
          </div>
        </div>
        <div class="reviews-content-two">
          <img class="reviews-content-two-image" src="http://localhost/wp-content/uploads/2018/08/quote-box.png" alt="">
          <img class="reviews-content-quote-two" src="http://localhost/wp-content/uploads/2018/08/“.png" alt="">
          <div class="reviews-content-two-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h3>Kenneth Allen</h3>
          </div>
        </div>
      </div>
        
    </div>
  </section>

</main>

<?php get_footer();
