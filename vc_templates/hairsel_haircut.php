<?php
$args = array(
    'photo'            => '',
    'title'            => '',
    'description'            => '',
    'price'            => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );?>

<div class="text-center mb-5 mb-lg-5">
    <div class="h-100 bg-light site-block-feature-7">
        <img src="<?php echo esc_attr(wp_get_attachment_url($photo))?>" alt="<?php esc_html_e('Image', 'wpbakery');?>" class="img-fluid">
        <div class="p-4 p-lg-5">
            <h3 class="text-black h4"><?php echo esc_attr($title);?></h3>
            <p><?php echo esc_attr($description);?></p>
            <p><strong class="font-weight-bold text-primary"><?php echo esc_attr($price);?></strong></p>
        </div>
    </div>
</div>
