<?php

namespace App;

/**
 * Contact Form Handler
 */

add_action('admin_post_contact_form', __NAMESPACE__ . '\\handle_contact_form');
add_action('admin_post_nopriv_contact_form', __NAMESPACE__ . '\\handle_contact_form');

function handle_contact_form() {
    // Basic validation
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['reason'])) {
        wp_redirect(wp_get_referer() . '?error=missing_fields');
        exit;
    }

    // Sanitize core inputs
    $name   = sanitize_text_field($_POST['name']);
    $email  = sanitize_email($_POST['email']);
    $phone  = sanitize_text_field($_POST['phone'] ?? '');
    $reason = sanitize_text_field($_POST['reason']);

    // Start building email
    $to      = get_option('admin_email');
    $headers = ['Content-Type: text/plain; charset=UTF-8'];
    $subject = "New {$reason} inquiry from {$name}";
    $body    = "New {$reason} form submission received:\n\n";
    $body   .= "Name: {$name}\n";
    $body   .= "Email: {$email}\n";
    $body   .= "Phone: {$phone}\n\n";

    // Handle reason-specific data
    switch ($reason) {
        case 'general':
            $message = sanitize_textarea_field($_POST['general_message'] ?? '');
            $body   .= "Message:\n{$message}\n";
            break;

        case 'catering':
            $num_people  = sanitize_text_field($_POST['num_people'] ?? '');
            $budget      = sanitize_text_field($_POST['budget'] ?? '');
            $event_type  = sanitize_text_field($_POST['event_type'] ?? '');
            $location    = sanitize_text_field($_POST['location'] ?? '');
            $message     = sanitize_textarea_field($_POST['catering_message'] ?? '');

            $body .= "Number of People: {$num_people}\n";
            $body .= "Budget: {$budget}\n";
            $body .= "Event Type: {$event_type}\n";
            $body .= "Location: {$location}\n\n";
            $body .= "Event Details:\n{$message}\n";
            break;

        case 'gift-box':
            $quantity = sanitize_text_field($_POST['gift_quantity'] ?? '');
            $budget   = sanitize_text_field($_POST['gift_budget'] ?? '');
            $message  = sanitize_textarea_field($_POST['gift_message'] ?? '');

            $body .= "Quantity Requested: {$quantity}\n";
            $body .= "Budget per Box: {$budget}\n\n";
            $body .= "Preferred Products:\n{$message}\n";
            break;

        case 'white-label':
            $recurring = sanitize_text_field($_POST['wl_recurring'] ?? '');
            $quantity  = sanitize_text_field($_POST['wl_quantity'] ?? '');
            $brand     = sanitize_text_field($_POST['wl_brand'] ?? '');
            $message   = sanitize_textarea_field($_POST['wl_message'] ?? '');

            $body .= "Recurring Order: {$recurring}\n";
            $body .= "Quantity: {$quantity}\n";
            $body .= "Brand Name: {$brand}\n\n";
            $body .= "Details:\n{$message}\n";
            break;

        default:
            $body .= "No additional data was submitted.\n";
            break;
    }

    // Send admin notification
    wp_mail($to, $subject, $body, $headers);

    // Send confirmation to user
    $confirm_subject = "Thanks for contacting Fat Man Little Kitchen!";
    $confirm_message  = "Hi {$name},\n\nThanks for reaching out regarding {$reason}.\n\n";
    $confirm_message .= "We've received your message and will get back to you soon.\n\n";
    $confirm_message .= "— Fat Man Little Kitchen";
    wp_mail($email, $confirm_subject, $confirm_message, $headers);

    // Redirect with success message
    wp_redirect(wp_get_referer() . '?success=1');
    exit;
}

