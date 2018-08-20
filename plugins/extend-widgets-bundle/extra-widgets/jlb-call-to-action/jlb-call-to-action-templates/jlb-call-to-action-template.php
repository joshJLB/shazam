<?php
$image = wp_get_attachment_url($instance['image']);
$title = $instance['title'];
$body = $instance['body'];
?>

<div class="call-to-action-container" style="background-image:url(<?=$image?>)">
    <div class="overlay"></div>
    <div class="call-to-action-content">
        <h2><?=$title?></h2>
        <p><?=$body?></p> 
    </div>
</div>