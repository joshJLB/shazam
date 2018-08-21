<div class="tab-container">
<?php
  $tabs = $instance['a_repeater'];
  $count = 0; ?>
<ul class="nav nav-tabs" role="tablist">
<?php foreach($tabs as $index => $tab) {
  $count++;
  $title = $tab['repeat_text']; ?>
    <li class="nav-item">
      <a class="nav-link <?php if($count == 1) { echo 'active'; }; ?>" data-toggle="tab" href="#tab-<?php echo $count; ?>" role="tab">
        <?php echo $title; ?>
        <div class="arrow-div white-bottom"></div>
        <div class="arrow-div grey-bottom"></div>
      </a>
    </li>
<?php }; ?>
</ul>
<div class="tab-content">
  <?php
    $count2 = 0;
   foreach($tabs as $index => $tab) {
     $count2++;
    $title = $tab['title'];
    $content = $tab['tab_content'];
    $tabImage = wp_get_attachment_url($tab['tab_image']);
  ?>
  <div class="tab-pane <?php if($count2 == 1) { echo 'active'; }; ?>" id="tab-<?php echo $count2; ?>" role="tabpanel">
    <div class="content-wrapper">  
      <div class="content-holder">
        <h3><?=$title?></h3>
        <?php echo $content; ?>
      </div>
      <div class="tab-image" style="background-image:url(<?=$tabImage?>)"></div>
    </div>
  </div>
<?php }; ?>
</div>
</div>
