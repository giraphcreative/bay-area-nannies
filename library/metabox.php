<?php


// init cmb2
require_once( 'cmb2/init.php' );



// add metabox(es)
function page_metaboxes( $meta_boxes ) {

    global $colors, $event_types;

    // showcase metabox
    $showcase_metabox = new_cmb2_box( array(
        'id' => 'showcase_metabox',
        'title' => 'Showcase',
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $showcase_metabox_group = $showcase_metabox->add_field( array(
        'id' => CMB_PREFIX . 'showcase',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Slide', 'cmb2'),
            'remove_button' => __('Remove Slide', 'cmb2'),
            'group_title'   => __( 'Slide {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Link',
        'id'   => 'link',
        'type' => 'text',
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Image/Video',
        'id'   => 'image',
        'type' => 'file',
        'preview_size' => array( 200, 80 )
    ) );



    // showcase metabox
    $people_metabox = new_cmb2_box( array(
        'id' => 'people_metabox',
        'title' => 'People',
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $people_metabox_group = $people_metabox->add_field( array(
        'id' => CMB_PREFIX . 'people',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Person', 'cmb2'),
            'remove_button' => __('Remove Person', 'cmb2'),
            'group_title'   => __( 'Person {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $people_metabox->add_group_field( $people_metabox_group, array(
        'name' => 'Photo',
        'id'   => 'photo',
        'type' => 'file',
        'preview_size' => array( 200, 200 )
    ) );

    $people_metabox->add_group_field( $people_metabox_group, array(
        'name' => 'Name',
        'id'   => 'name',
        'type' => 'text',
    ) );

    $people_metabox->add_group_field( $people_metabox_group, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $people_metabox->add_group_field( $people_metabox_group, array(
        'name' => 'Description',
        'id'   => 'description',
        'type' => 'wysiwyg',
    ) );



    // testimonial metabox
    $testimonial_metabox = new_cmb2_box( array(
        'id' => 'testimonial_metabox',
        'title' => 'Showcase',
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $testimonial_metabox_group = $testimonial_metabox->add_field( array(
        'id' => CMB_PREFIX . 'testimonial',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Testimonial', 'cmb2'),
            'remove_button' => __('Remove Testimonial', 'cmb2'),
            'group_title'   => __( 'Testimonial {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $testimonial_metabox->add_group_field( $testimonial_metabox_group, array(
        'name' => 'Testimonial',
        'id'   => 'testimonial',
        'type' => 'textarea_small',
    ) );

    $testimonial_metabox->add_group_field( $testimonial_metabox_group, array(
        'name' => 'By Line',
        'id'   => 'by',
        'type' => 'text',
    ) );

    $testimonial_metabox->add_group_field( $testimonial_metabox_group, array(
        'name' => 'Image/Video URL',
        'id'   => 'image',
        'type' => 'file',
        'preview_size' => array( 200, 100 )
    ) );

}
add_filter( 'cmb2_init', 'page_metaboxes' );



// get CMB value
function get_cmb_value( $field ) {
    return get_post_meta( get_the_ID(), CMB_PREFIX . $field, 1 );
}


// get CMB value
function has_cmb_value( $field ) {
    $cval = get_cmb_value( $field );
    return ( !empty( $cval ) ? true : false );
}


// get CMB value
function show_cmb_value( $field ) {
    print get_cmb_value( $field );
}


// get CMB value
function show_cmb_wysiwyg_value( $field ) {
    print apply_filters( 'the_content', get_cmb_value( $field ) );
}



?>