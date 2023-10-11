<?php

// Verificar permissões
if ( !current_user_can( 'manage_options' ) ) {
    wp_die( __( 'Você não tem permissões suficientes para acessar esta página.' ) );
}

// Incluindo o arquivo functions.php
require_once plugin_dir_path( __FILE__ ) . 'C:\Users\yann.szilagyi\Desktop\GW\id-38211102301-pluginEliteAco\includes\functions.php';

// Lógica para lidar com o formulário e gerar relatórios
if( isset( $_POST['start_date'] ) && isset( $_POST['end_date'] ) ) {
    $start_date = sanitize_text_field( $_POST['start_date'] );
    $end_date = sanitize_text_field( $_POST['end_date'] );
    
    $results = elite_aco_get_sales_report( $start_date, $end_date );
    
    // Exibição dos dados
    echo '<table>';
    echo '<tr><th>ID do Pedido</th><th>Data</th></tr>';
    foreach ( $results as $order ) {
        echo '<tr><td>' . $order['ID'] . '</td><td>' . $order['post_date'] . '</td></tr>';
    }
    echo '</table>';
}

?>

<div class="wrap">
    <h2>Relatórios de Vendas - Elite Aço</h2>

    <!-- Formulário para selecionar datas e gerar relatório -->
    <form method="post" action="">
        <label for="start_date">Data de Início:</label>
        <input type="date" name="start_date" required>
        
        <label for="end_date">Data Final:</label>
        <input type="date" name="end_date" required>
        
        <input type="submit" value="Gerar Relatório">
    </form>

    <!-- Exibição de resultados aqui... -->
</div>
