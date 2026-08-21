<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Nessuna tabella custom: il compito è assicurarsi che le rewrite
 * rules includano CPT e tassonomia fin dal primo caricamento.
 */
class SLM_Genealogy_Install {

    public static function activate() {
        // Registrazione PRIMA del flush, altrimenti le regole
        // di permalink dei nuovi CPT non vengono incluse.
        SLM_Genealogy_CPT::register();
        SLM_Genealogy_Taxonomy::register();

        flush_rewrite_rules();
    }

    public static function deactivate() {
        flush_rewrite_rules();
    }
}
