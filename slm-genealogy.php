<?php
/**
 * Plugin Name:       Space Life Manager - Genealogy
 * Description:       Albero genealogico: persone, animali e luoghi anagrafici per l'ecosistema SLM.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Requires Plugins:  slm-relations
 * Author:            Matteo
 * Text Domain:       slm-genealogy
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'SLM_GENEALOGY_VERSION', '1.0.0' );
define( 'SLM_GENEALOGY_FILE', __FILE__ );
define( 'SLM_GENEALOGY_PATH', plugin_dir_path( __FILE__ ) );
define( 'SLM_GENEALOGY_URL', plugin_dir_url( __FILE__ ) );

require_once SLM_GENEALOGY_PATH . 'includes/class-slm-genealogy-cpt.php';
require_once SLM_GENEALOGY_PATH . 'includes/class-slm-genealogy-taxonomy.php';
require_once SLM_GENEALOGY_PATH . 'includes/class-slm-genealogy-install.php';

add_action( 'init', array( 'SLM_Genealogy_CPT', 'register' ) );
add_action( 'init', array( 'SLM_Genealogy_Taxonomy', 'register' ) );

register_activation_hook( __FILE__, array( 'SLM_Genealogy_Install', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'SLM_Genealogy_Install', 'deactivate' ) );
