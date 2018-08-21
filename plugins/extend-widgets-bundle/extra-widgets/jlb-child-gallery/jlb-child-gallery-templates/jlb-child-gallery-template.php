<?php 
$repeater = $instance['gallery_repeater'];
?>

<div class="child-gallery-container">

    <?php foreach($repeater as $index => $slide){ 
        $title = $slide['title'];
        $imageOne = wp_get_attachment_url($slide['gallery_image_one']);
        $imageTwo = wp_get_attachment_url($slide['gallery_image_two']);
        $imageThree = wp_get_attachment_url($slide['gallery_image_three']);
        $imageFour = wp_get_attachment_url($slide['gallery_image_four']);
        $imageFive = wp_get_attachment_url($slide['gallery_image_five']);
        $imageSix = wp_get_attachment_url($slide['gallery_image_six']);
        $imageSeven = wp_get_attachment_url($slide['gallery_image_seven']);
    ?>
    <h2><?=$title?></h2>
    <div class="child-gallery-wrapper">
        <div class="gallery-section-one">
            <div class="gallery-row">
                <div class="gallery-images gallery-image-one" style="background-image:url(<?=$imageOne?>)"></div>
                <div class="gallery-images gallery-image-two" style="background-image:url(<?=$imageTwo?>)"></div>
            </div>
            <div class="gallery-row">
                <div class="gallery-images gallery-image-three" style="background-image:url(<?=$imageThree?>)"></div>
                <div class="gallery-images gallery-image-four" style="background-image:url(<?=$imageFour?>)"></div>
            </div>
        </div>
        <div class="gallery-section-two">
            <div class="gallery-images gallery-image-five" style="background-image:url(<?=$imageFive?>)"></div>
        </div>
        <div class="gallery-section-three">
            <div class="gallery-images gallery-image-six" style="background-image:url(<?=$imageSix?>)"></div>
            <div class="gallery-images gallery-image-seven" style="background-image:url(<?=$imageSeven?>)"></div>
        </div>
    </div>
    <?php }; ?>
</div>