<?php
/**
 * Plugin Name: Elite Aço Report
 * Description: Um plugin para gerar relatórios de vendas por status de pedido.
 * Version: 1.0
 * Author: Seu Nome
 */

 // Evite chamadas diretas a este arquivo
 if ( !defined ( 'ABSPATH ' ) ) {
    exit;
 }


 // Definir constantes
 define( 'ELITE_ACO_REPORT_PATH' , plugin_dir_path( __FILE__ ) );

//  Incluir arquivos
require_once ELITE_ACO_REPORT_PATH . 'includes/functions.php';
require_once ELITE_ACO_REPORT_PATH . 'admin/views/admin-view.php';


// Funções de ativação e desativação
register_activation_hook( __FILE__, 'elite_aco_report_activate' );
register_deactivation_hook( __FILE__, 'elite_aco_report_deactivate' );


function elite_aco_report_activate() {
    // Código para ser executado na ativação do plugin
}

function elite_aco_report_deactivate() {
    // Código para ser executado na desativação do plugin
}

// Adicionar link do plugin ao menu lateral do WP Admin
add_action( 'admin_menu', 'elite_aco_report_menu' );

function elite_aco_report_menu() {
    add_menu_page(
        'Relatórios Elite Aço',
        'Elite Aço Report',
        'manage_options',
        'elite-aco-report/admin/views/admin-view.php',
        '',
        'dashicons-chart-pie',
        6
    );
}