<?php
$args = array(
    'icon'            => '',
    'title'            => '',
    'description'            => '',
    'price'            => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );?>

<div class="col-md-6 col-lg-4 text-center mb-5 mb-lg-5">
    <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
        <span class="icon <?php echo $icon; ?> display-3 text-primary mb-4 d-block"></span>
        <h3 class="text-black h4"><?php echo esc_attr($title);?></h3>
        <p><?php echo esc_attr($description);?></p>
        <p><strong class="font-weight-bold text-primary"><?php echo esc_attr($price);?></strong></p>
    </div>
</div>