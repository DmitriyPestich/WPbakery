<?php
$args = array(
    'photo'            => '',
    'title_one'        => '',
    'title_two'        => '',
    'description'      => '',
    'vc_link'          => '',
    'ids'              => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$slide_button_link = vc_build_link($link);

echo $ids;
?>

<div class="row">
    <div class="col-md-6 col-lg-4 text-center">
        <h3 class="line-height-1 mb-3"><span class="d-block display-4 line-height-1 text-black"><?php echo esc_attr($title_one);?></span> <span class="d-block display-4 line-height-1"><em class="text-primary font-weight-bold"><?php echo esc_attr($title_two);?></em></span></h3>
        <p><?php echo esc_attr($description);?></p>
        <p><a href="<?php echo esc_url($slide_button_link['url']);?>" <?php if($slide_button_link['target']){ echo "target='".esc_attr($slide_button_link['target'])."'";}?>><small class="text-uppercase font-weight-bold"><?php echo esc_attr($slide_button_link['title']);?></small></a></p>
    </div>
    <div class="col-md-6 col-lg-4">
        <figure class="h-100 hover-bg-enlarge">
            <div class="bg-image h-100 bg-image-md-height" style="background-image: url(<?php echo esc_attr(wp_get_attachment_url($photo))?>);"></div>
        </figure>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="border p-4 d-flex align-items-center justify-content-center h-100">
            <div class="text-center">
                <style>
                    .text-center br{
                        display: none;
                    }
                </style>
                <?php echo $content?>
            </div>
        </div>
    </div>
</div>
