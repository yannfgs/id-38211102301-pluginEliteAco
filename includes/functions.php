<?php

function elite_aco_get_sales_report( $start_date, $end_date ) {
    global $wpdb;

    $results = $wpdb->get_results( $wpdb->prepare(
        "SELECT * FROM {$wpdb->prefix}posts
        WHERE post_type = 'shop_order'
        AND post_status = 'wc-completed'
        AND post_date BETWEEN %s AND %s",
        $start_date, $end_date
    ), ARRAY_A );

    return $results;
}
