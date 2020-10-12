<?php
$args = array(
    'photo'            => '',
    'title'            => '',
    'link'            => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );?>

<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(<?php echo esc_attr(wp_get_attachment_url($photo))?>); background-attachment: fixed;">

        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                <h2 class="text-white font-weight-light mb-5 display-3"><?php echo esc_attr($title);?></h2>
                <a href="<?php echo esc_url($link);?>" class="play-single-big d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            </div>
        </div>

</div>
