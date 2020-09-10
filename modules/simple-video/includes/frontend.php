<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example: 
 */

?>
<div class="fl-example-text">
    <?php //echo json_encode($settings); ?>
</div>






<video width="100%" height="auto" poster="<?php echo $settings->poster_src; ?>" controls <?php if($settings->autoplay == '1') { echo 'autoplay';} ?> <?php if($settings->loop == '1') { echo 'loop';} ?>>
   <source src="<?php echo wp_get_attachment_url( $settings->video ); ?>" type="video/mp4">
   <source src="<?php echo wp_get_attachment_url( $settings->video-ogg ); ?>" type="video/ogg">
   Your browser does not support the video tag.
</video>




