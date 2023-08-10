<?php

function handle_api() {
    $api_url = 'https://stage.api.portal.safetrafikskola.se/v1/core/sms/';
    $api_key = '9lhHOHd68znOMdGmLChYOhNjYts3zxyH'; // Replace with your actual API key

    $headers = array(
        'Content-Type' => 'application/json',
        'X-API-KEY' => $api_key, // Add the X-API-KEY header
    );

    $body = json_encode(array(
        'phone_number' => sanitize_text_field($_POST['number']),
    ));

    $response = wp_safe_remote_post($api_url, array(
        'headers' => $headers,
        'body' => $body,
        'timeout' => 15,
    ));

    if (!is_wp_error($response)) {
        $response_body = wp_remote_retrieve_body($response);
        $api_response = json_decode($response_body);

        // Handle the API response
        if ($api_response) {
            echo json_encode($api_response);
        } 
        
    } else {
        // Handle WP_Error
        wp_send_json('failed');
    }

    // You can return a response to the client if needed
    wp_send_json('success');

    exit;
}

// Hook the function to a WordPress action or endpoint
add_action('wp_ajax_handle_api', 'handle_api');
add_action('wp_ajax_nopriv_handle_api', 'handle_api');


?>