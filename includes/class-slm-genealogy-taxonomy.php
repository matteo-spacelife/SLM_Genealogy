<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Registra slm_geo_place: catalogo gerarchico dei luoghi anagrafici
 * (Nazione > Regione > Provincia > Comune). Condiviso da Persona e Animale.
 */
class SLM_Genealogy_Taxonomy {

    public static function register() {
        register_taxonomy( 'slm_geo_place', array( 'slm_person', 'slm_animal' ), array(
            'labels' => array(
                'name'          => __( 'Luoghi', 'slm-genealogy' ),
                'singular_name' => __( 'Luogo', 'slm-genealogy' ),
                'search_items'  => __( 'Cerca luoghi', 'slm-genealogy' ),
                'all_items'     => __( 'Tutti i luoghi', 'slm-genealogy' ),
                'add_new_item'  => __( 'Aggiungi nuovo luogo', 'slm-genealogy' ),
                'parent_item'   => __( 'Luogo superiore', 'slm-genealogy' ),
            ),
            'hierarchical'      => true,
            'public'            => true,
            'show_in_rest'      => true,
            'show_admin_column' => false,
            'meta_box_cb'       => false,
            'rewrite'           => array( 'slug' => 'luogo' ),
        ) );
    }
}
