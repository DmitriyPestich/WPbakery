<?php
/*
 * Map Shortcodes
 * */
//The first Shortcodes for wpbakery
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Heirsal_Barbershop extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Barbershop', 'wpbakery' ),
        'base'                    => 'heirsal_barbershop',
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        'description'             => esc_html__( 'Barbershop member', 'wpbakery' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-wpbakery',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Barber Photo", "wpbakery" ),
                "param_name"  => "photo",
                "value"       => '',
                "description" => esc_html__( "Upload a photo", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Barber Name", "wpbakery" ),
                "param_name"  => "name",
                "value"       => '',
                "description" => esc_html__( "Insert the name", "wpbakery" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => esc_html__( "Barber Description", "wpbakery" ),
                "param_name"  => "content",
                "value"       => '',
                "description" => esc_html__( "Insert the description", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Facebook", "wpbakery" ),
                "param_name"  => "fb",
                "value"       => '',
                "description" => esc_html__( "Insert the link", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Twitter", "wpbakery" ),
                "param_name"  => "twi",
                "value"       => '',
                "description" => esc_html__( "Insert the link", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Instagram", "wpbakery" ),
                "param_name"  => "insta",
                "value"       => '',
                "description" => esc_html__( "Insert the link", "wpbakery" )
            ),
        )
    ) );
}


//The second Shortcodes for wpbakery
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Heirsal_About extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'About Box', 'wpbakery' ),
        'base'                    => 'heirsal_about',
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        'description'             => esc_html__( 'Info about company', 'wpbakery' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-wpbakery',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Photo", "wpbakery" ),
                "param_name"  => "photo",
                "value"       => '',
                "description" => esc_html__( "Upload a photo", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wpbakery" ),
                "param_name"  => "title",
                "value"       => 'New hairstyle!',
                "description" => esc_html__( "Insert the title", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Quote", "wpbakery" ),
                "param_name"  => "quote",
                "value"       => '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro”',
                "description" => esc_html__( "Insert the quote", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Author", "wpbakery" ),
                "param_name"  => "author",
                "value"       => 'Stellla Martin',
                "description" => esc_html__( "Insert the author", "wpbakery" )
            ),
        )
    ) );
}

//Third shortcod
if(class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_Hairsal_Slider extends WPBakeryShortCodesContainer {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        "name"                    => esc_html__( 'Slider', 'wpbakery' ),
        "base"                    => "hairsal_slider",
        "as_parent"               => array( 'only' => 'hairsel_slider_item' ),
        'description'             => esc_html__( 'An Animated Slider called One', 'wpbakery' ),
        "content_element"         => true,
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        "icon"                    => 'icon-vc-olins',
        "show_settings_on_create" => false,
        "params"                  => array(),
        "js_view"                 => 'VcColumnView'
    ) );
}
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Hairsel_Slider_Item extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Slider Item', 'wpbakery' ),
        'base'                    => 'hairsel_slider_item',
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        'description'             => esc_html__( 'Add data for each item such as images, titles or descriptions', 'wpbakery' ),
        'show_settings_on_create' => true,
        "as_child"                => array('only' => 'hairsal_slider'),
        'icon'                    => 'icon-vc-olins',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Image", "wpbakery" ),
                "param_name"  => "photo",
                "description" => esc_html__( "Select a photo.", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wpbakery" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => esc_html__( "Insert the title", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Second Title", "wpbakery" ),
                "param_name"  => "title_two",
                "value"       => '',
                "description" => esc_html__( "Insert the title two", "wpbakery" )
            ),
            array(
                "type"        => "vc_link",
                "heading"     => esc_html__( "Link", "wpbakery" ),
                "param_name"  => "link",
                "value"       => '',
                "description" => esc_html__( "Insert the link", "wpbakery" )
            ),
        )
    ) );
}

//The second Shortcodes for wpbakery
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Heirsal_Opening extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Opening', 'wpbakery' ),
        'base'                    => 'heirsal_opening',
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        'description'             => esc_html__( 'Description', 'wpbakery' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-wpbakery',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Photo", "wpbakery" ),
                "param_name"  => "photo",
                "value"       => '',
                "description" => esc_html__( "Upload a photo", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wpbakery" ),
                "param_name"  => "title_one",
                "value"       => '',
                "description" => esc_html__( "Insert the Title", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title #2", "wpbakery" ),
                "param_name"  => "title_two",
                "value"       => '',
                "description" => esc_html__( "Insert the Title #2", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Description", "wpbakery" ),
                "param_name"  => "description",
                "value"       => '',
                "description" => esc_html__( "Insert the Description", "wpbakery" )
            ),
            array(
                "type"        => "vc_link",
                "heading"     => esc_html__( "Link", "wpbakery" ),
                "param_name"  => "link",
                "value"       => '',
                "description" => esc_html__( "Insert the link", "wpbakery" )
            ),
            array(
                "type"        => "textarea_html",
                "heading"     => esc_html__( "Opening Hours", "wpbakery" ),
                "param_name"  => "content",
                "value"       => '',
                "description" => esc_html__( "Use HTML", "wpbakery" )
            ),
            array(
                'type' => 'autocomplete',
                'heading' => esc_html__( 'Get 3 specific posts', 'wpbakery' ),
                'param_name' => 'ids',
                'settings' => array(
                    'multiple' => true,
                    'sortable' => true,
                    'unique_values' => true,
                    'values' => wpbakery_get_posts('post'),
                ),
                'save_always' => true,
                'description' => esc_html__( 'Select 3 posts or let it empty to load recent work posts.', 'wpbakery' ),
            ),
        )
    ) );
}

if(class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_Hairsal_Services extends WPBakeryShortCodesContainer {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        "name"                    => esc_html__( 'Services', 'wpbakery' ),
        "base"                    => "hairsal_services",
        "as_parent"               => array( 'only' => 'hairsel_services_item' ),
        'description'             => esc_html__( 'Services Box', 'wpbakery' ),
        "content_element"         => true,
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        "icon"                    => 'icon-vc-olins',
        "show_settings_on_create" => true,
        "params"                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wpbakery" ),
                "param_name"  => "box_title",
                "value"       => '',
                "description" => esc_html__( "Insert the title", "wpbakery" )
            ),
        ),
        "js_view"                 => 'VcColumnView'
    ) );
}
if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Hairsel_Services_Item extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Services Item', 'wpbakery' ),
        'base'                    => 'hairsel_services_item',
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        'description'             => esc_html__( 'Add data for an item', 'wpbakery' ),
        'show_settings_on_create' => true,
        "as_child"                => array('only' => 'hairsal_services'),
        'icon'                    => 'icon-vc-olins',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "dropdown",
                "heading"     => esc_html__( "Icon", "wpbakery" ),
                "param_name"  => "icon",
                "value"       => array('flaticon-razor', 'flaticon-location-pin', 'flaticon-shave', 'flaticon-barber', 'flaticon-hair-dryer', 'flaticon-spray'),
                "description" => esc_html__( "Select a icon.", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wpbakery" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => esc_html__( "Insert the title", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Description", "wpbakery" ),
                "param_name"  => "description",
                "value"       => '',
                "description" => esc_html__( "Insert the description", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Price", "wpbakery" ),
                "param_name"  => "price",
                "value"       => '',
                "description" => esc_html__( "Insert the price", "wpbakery" )
            ),
        )
    ) );
}


if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Hairsel_Video extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Video', 'wpbakery' ),
        'base'                    => 'hairsel_video',
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        'description'             => esc_html__( 'Description', 'wpbakery' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-wpbakery',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Background", "wpbakery" ),
                "param_name"  => "photo",
                "description" => esc_html__( "Upload a photo.", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wpbakery" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => esc_html__( "Insert the title", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Video Link", "wpbakery" ),
                "param_name"  => "link",
                "value"       => 'https://vimeo.com/channels/staffpicks/93951774',
                "description" => esc_html__( "Insert the description", "wpbakery" )
            ),
        )
    ) );
}


if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Hairsel_Haircut extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Haircut', 'wpbakery' ),
        'base'                    => 'hairsel_haircut',
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        'description'             => esc_html__( 'Description', 'wpbakery' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-wpbakery',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Photo", "wpbakery" ),
                "param_name"  => "photo",
                "description" => esc_html__( "Upload a photo.", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Title", "wpbakery" ),
                "param_name"  => "title",
                "value"       => '',
                "description" => esc_html__( "Insert the title", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Description", "wpbakery" ),
                "param_name"  => "description",
                "value"       => '',
                "description" => esc_html__( "Insert the description", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Price", "wpbakery" ),
                "param_name"  => "price",
                "value"       => '',
                "description" => esc_html__( "Insert the price", "wpbakery" )
            ),
        )
    ) );
}

if ( class_exists( "WPBakeryShortCode" ) ) {
    class WPBakeryShortCode_Hairsel_Contact_Info extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
    vc_map( array(
        'name'                    => esc_html__( 'Contact Info', 'wpbakery' ),
        'base'                    => 'hairsel_contact_info',
        'category'                => esc_html__( 'Heirsal', 'wpbakery' ),
        'description'             => esc_html__( 'Description', 'wpbakery' ),
        'show_settings_on_create' => true,
        'icon'                    => 'icon-vc-wpbakery',
        'weight'                  => - 5,
        'params'                  => array(
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Address", "wpbakery" ),
                "param_name"  => "address",
                "value"       => '',
                "description" => esc_html__( "Insert the address", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Phone", "wpbakery" ),
                "param_name"  => "phone",
                "value"       => '',
                "description" => esc_html__( "Insert the phone", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Email", "wpbakery" ),
                "param_name"  => "email",
                "value"       => '',
                "description" => esc_html__( "Insert the email", "wpbakery" )
            ),
            array(
                "type"        => "textfield",
                "heading"     => esc_html__( "Description", "wpbakery" ),
                "param_name"  => "description",
                "value"       => '',
                "description" => esc_html__( "Insert the description", "wpbakery" )
            ),
            array(
                "type"        => "vc_link",
                "heading"     => esc_html__( "Link", "wpbakery" ),
                "param_name"  => "link",
                "value"       => '',
                "description" => esc_html__( "Insert the link", "wpbakery" )
            ),
        )
    ) );
}



//get all posts for specific post type
function wpbakery_get_posts( $post_type = 'post' ) {
    $posts = get_posts( array(
        'posts_per_page' 	=> -1,
        'post_type'			=> $post_type,
    ));
    $result = array();
    foreach ( $posts as $post )	{
        $result[] = array(
            'value' => $post->ID,
            'label' => $post->post_title,
        );
    }
    return $result;
}

function wpbakery_type_taxonomy_data( $taxonomy = 'product_cat' ) {

    $categories = get_terms( array(
        'orderby'      => 'name',
        'pad_counts'   => false,
        'hierarchical' => 1,
        'hide_empty'   => true,
    ) );

    $result = array();

    foreach( $categories as $category ) {

        if ($category->taxonomy == $taxonomy ) {
            $result[] = array(
                'value' => $category->term_id,
                'label' => $category->name
            );
        }
    }

    return $result;
}