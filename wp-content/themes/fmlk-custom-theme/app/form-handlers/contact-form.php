<?php

namespace App;

/**
 * Catering Request Form Handler
 */

add_action('admin_post_send_catering_request', __NAMESPACE__ . '\\handle_catering_request');
add_action('admin_post_nopriv_send_catering_request', __NAMESPACE__ . '\\handle_catering_request');

function handle_catering_request() {
    // Sanitize inputs
    $name       = sanitize_text_field($_POST['name'] ?? '');
    $email      = sanitize_email($_POST['email'] ?? '');
    $phone      = sanitize_text_field($_POST['phone'] ?? '');
    $people     = sanitize_text_field($_POST['people'] ?? '');
    $budget     = sanitize_text_field($_POST['budget'] ?? '');
    $event_type = sanitize_text_field($_POST['event_type'] ?? '');
    $location   = sanitize_text_field($_POST['location'] ?? '');
    $message    = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email)) {
        wp_die('Please fill out all required fields.');
    }

    $to = get_option('admin_email');
    $subject = "New {$event_type} Catering Request from {$name}";
    $body = "
    Name: {$name}
    Email: {$email}
    Phone: {$phone}
    Number of People: {$people}
    Budget: {$budget}
    Event Type: {$event_type}
    Location: {$location}

    Additional Details:
    {$message}
    ";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    // Send to admin
    wp_mail($to, $subject, $body, $headers);

    // Confirmation email to user
    $confirm_subject = "Thank you for your catering request!";
    $confirm_message  = "Hi {$name},\n\nThanks for reaching out to Fat Man Little Kitchen. We have received your catering request and will get back to you shortly.\n\nHere is what you submitted:\n\n{$body}\n\n— Fat Man Little Kitchen";
    wp_mail($email, $confirm_subject, $confirm_message, $headers);

    // Redirect back with success flag
    wp_redirect(wp_get_referer() . '?success=1');
    exit;
}
