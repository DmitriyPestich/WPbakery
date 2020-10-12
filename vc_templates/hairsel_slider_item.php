<?php
$args = array(
    'photo'            => '',
    'title'            => '',
    'title_two'            => '',
    'link'           => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$slide_button_link = vc_build_link($link);?>

<div class="site-blocks-cover" style="background-image: url(<?php echo esc_attr(wp_get_attachment_url($photo))?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h5 class="text-white font-weight-light text-uppercase"><?php echo esc_attr($title_two);?></h5>
                <h2 class="text-white font-weight-light mb-2 display-1"><?php echo esc_attr($title);?></h2>

                <p><a href="<?php echo esc_url($slide_button_link['url']);?>" <?php if($slide_button_link['target']){ echo "target='".esc_attr($slide_button_link['target'])."'";}?> class="btn btn-black py-3 px-5"><?php echo esc_attr($slide_button_link['title']);?></a></p>
            </div>
        </div>
    </div>
</div>
