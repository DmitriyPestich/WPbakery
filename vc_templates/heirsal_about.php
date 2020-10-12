<?php
$args = array(
    'photo'            => '',
    'title'            => '',
    'quote'            => '',
    'author'           => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );?>


<div class="row">
    <div class="col-lg-6 mb-5">
        <img src="<?php echo esc_url(wp_get_attachment_url($photo));?>" alt="Image" class="img-md-fluid">
    </div>
    <div class="col-lg-6 bg-white p-md-5 align-self-center">
        <h2 class="display-1 text-black line-height-1 site-section-heading mb-4 pb-3"><?php echo esc_attr($title);?></h2>
        <p class="text-black lead"><em><?php echo esc_attr($quote);?></em></p>
        <p class="lead text-black"><em><?php echo esc_attr($author);?></em></p>
    </div>
</div>
