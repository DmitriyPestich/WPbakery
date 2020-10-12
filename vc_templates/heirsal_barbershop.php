<?php
$args = array(
    'photo'            => '',
    'name'             => '',
    'content'          => '',
    'fb'               => '',
    'twi'              => '',
    'insta'            => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );?>


<div class="text-center mb-5" data-aos="fade-up">
    <img src="<?php echo esc_url(wp_get_attachment_url($photo));?>" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
    <h2 class="text-black font-weight-light mb-4"><?php echo esc_attr($name);?></h2>
    <p class="mb-4"><?php echo esc_attr($content);?></p>
    <p>
        <?php if($twi){ ?><a href="<?php echo esc_url($twi);?>" class="pl-0 pr-3"><span class="icon-twitter"></span></a><?php }?>
        <?php if($insta){ ?><a href="<?php echo esc_url($insta);?>" class="pl-3 pr-3"><span class="icon-instagram"></span></a><?php }?>
        <?php if($fb){ ?><a href="<?php echo esc_url($fb);?>" class="pl-3 pr-3"><span class="icon-facebook"></span></a><?php }?>
    </p>
</div>