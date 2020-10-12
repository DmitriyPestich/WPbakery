<?php
$args = array(
    'address'            => '',
    'phone'            => '',
    'email'            => '',
    'description'            => '',
    'anchor'            => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$button_link = vc_build_link($link);?>

<div class="p-4 mb-3 bg-white">
    <p class="mb-0 font-weight-bold"><?php esc_html_e('Address', 'wpbakery');?></p>
    <p class="mb-4"><?php echo esc_attr($address);?></p>

    <p class="mb-0 font-weight-bold"><?php esc_html_e('Phone', 'wpbakery');?></p>
    <p class="mb-4"><?php echo esc_attr($phone);?></p>

    <p class="mb-0 font-weight-bold"><?php esc_html_e('Email_Address', 'wpbakery');?></p>
    <p class="mb-0"><a href="mailto:<?php echo esc_attr($email);?>"><?php echo esc_attr($email);?></a></p>

</div>

<div class="p-4 mb-3 bg-white">
    <h3 class="h5 text-black mb-3"><?php esc_html_e('More Info', 'wpbakery');?></h3>
    <p><?php echo esc_attr($description);?></p>
    <p><a href="<?php echo esc_url($button_link['url']);?>" <?php if($button_link['target']);{ echo "target='".esc_attr($button_link['target'])."'";}?> class="btn btn-primary px-4 py-2 text-white"><?php if(esc_attr($button_link['title'])) {echo esc_attr($button_link['title']);} else { echo esc_html_e('Read More', 'wpbakery');}?></a></p>
</div>
