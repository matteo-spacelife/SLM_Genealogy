<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Registra i CPT Persona e Animale.
 */
class SLM_Genealogy_CPT {

    public static function register() {
        self::register_person();
        self::register_animal();
    }

    private static function register_person() {
        register_post_type( 'slm_person', array(
            'labels' => array(
                'name'          => __( 'Persone', 'slm-genealogy' ),
                'singular_name' => __( 'Persona', 'slm-genealogy' ),
                'add_new_item'  => __( 'Aggiungi nuova persona', 'slm-genealogy' ),
                'edit_item'     => __( 'Modifica persona', 'slm-genealogy' ),
                'search_items'  => __( 'Cerca persone', 'slm-genealogy' ),
                'not_found'     => __( 'Nessuna persona trovata', 'slm-genealogy' ),
                'menu_name'     => __( 'Albero Genealogico', 'slm-genealogy' ),
            ),
            'public'       => true,
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-groups',
            'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive'  => 'persone',
            'rewrite'      => array( 'slug' => 'persona', 'with_front' => false ),
            'hierarchical' => false,
        ) );
    }

    private static function register_animal() {
        register_post_type( 'slm_animal', array(
            'labels' => array(
                'name'          => __( 'Animali', 'slm-genealogy' ),
                'singular_name' => __( 'Animale', 'slm-genealogy' ),
                'add_new_item'  => __( 'Aggiungi nuovo animale', 'slm-genealogy' ),
                'edit_item'     => __( 'Modifica animale', 'slm-genealogy' ),
                'search_items'  => __( 'Cerca animali', 'slm-genealogy' ),
                'not_found'     => __( 'Nessun animale trovato', 'slm-genealogy' ),
                'menu_name'     => __( 'Animali', 'slm-genealogy' ),
            ),
            'public'       => true,
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-pets',
            'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive'  => 'animali',
            'rewrite'      => array( 'slug' => 'animale', 'with_front' => false ),
            'hierarchical' => false,
        ) );
    }
}
