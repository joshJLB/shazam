<?php
$image = wp_get_attachment_url($instance['image']);
$title = $instance['title'];
$body = $instance['body'];
$buttonLink = $instance['button-link'];
?>

<div class="image-text-container">
    <div class="image-text-wrapper">
        <img src="<?=$image?>" alt="">
    </div>
    <div class="image-text-content">
        <h2><?=$title?></h2>
        <p><?=$body?></p>
        <a href="<?=$buttonLink?>">Read More</a>
    </div>
</div>