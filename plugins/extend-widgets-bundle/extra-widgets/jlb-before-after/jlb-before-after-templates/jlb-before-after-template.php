<?php 
$repeater = $instance['slider_repeater'];
?>

<div class="before-after-container">

    <?php foreach($repeater as $index => $slide){ 
        $title = $slide['title'];
        $body = $slide['body'];
        $imageBefore = wp_get_attachment_url($slide['image_before']);
        $imageAfter = wp_get_attachment_url($slide['image_after']);
    ?>
    <div class="before-after-wrapper">
        <div class="covered" data-passive="<?=$imageAfter?>" data-active="<?=$imageBefore?>">              
        <div class="handle"></div>
        <div class="changeable">
            <h2>Before</h2>
        </div>
        <h2 class="example-after">After</h2>
        </div>
        <div class="before-after-content">
                <h2><?=$title?></h2>
                <p><?=$body?></p>
        </div>  
    </div>
    <?php  }; ?> 

</div>


    
