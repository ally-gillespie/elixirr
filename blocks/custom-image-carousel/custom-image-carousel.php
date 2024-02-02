<?php
/**
 * Custom Image Carousel Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$image1             = get_field( 'image_1' );
$image1_title       = get_field( 'image_1_title' );
$image2             = get_field( 'image_2' );
$image2_title       = get_field( 'image_2_title' );
$image3             = get_field( 'image_3' );
$image3_title       = get_field( 'image_3_title' );

echo 'Image Carousel';
?>

<div id="slides">
    <?php if ( $image1 ) { ?>
        <div class="toggle">
            <img src="<?php echo $image1;?>" title="<?php echo $image1_title; ?>"/>
            <span class="slide_title"><?php echo $image1_title; ?></span>
        </div>
    <?php } ?>
    <?php if ( $image2 ) { ?>
        <div class="toggle">
            <img src="<?php echo $image2;?>" title="<?php echo $image2_title; ?>"/>
            <span class="slide_title"><?php echo $image2_title; ?></span>
        </div>
    <?php } ?>
    <?php if ( $image3 ) { ?>
        <div class="toggle">
            <img src="<?php echo $image3;?>" title="<?php echo $image3_title; ?>"/>
            <span class="slide_title"><?php echo $image3_title; ?></span>
        </div>
    <?php } ?>
    <div>
      <button id="previous">&elsdot; Previous</button>
      <button id="next">Next &egsdot;</button>
    </div>
</div>
