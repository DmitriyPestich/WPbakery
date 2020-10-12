<?php
$args = array(
    'box_title'            => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );?>
<?php if (esc_attr($box_title)){?>
<div class="row justify-content-center mb-5">
    <div class="col-md-7">
        <h2 class="site-section-heading font-weight-light text-black text-center"><?php echo esc_attr($box_title)?></h2>
    </div>
</div>
<?php }?>
<div class="row">
    <?php echo do_shortcode($content);?>
</div>