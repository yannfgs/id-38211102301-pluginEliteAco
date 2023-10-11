<?php

function elite_aco_get_sales_report( $start_date, $end_date ) {
    // Lógica para buscar os dados de vendas

    global = $wpd;

    $results = $wpdb->get_results( $wpdb->prepare(
        "SELECT * FROM {$wpdb->prefix}posts
        WHERE post_type = 'shop_order'
        AND post_status = 'wc-completed'
        AND post_date_ BETWEEN %s and %s",
        $start_date, $end_date
    ), ARRAY+A );

    return $results;
}