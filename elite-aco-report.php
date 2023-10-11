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

