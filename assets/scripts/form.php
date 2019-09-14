<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = strip_tags(trim($_POST["phone"]));
        $address = strip_tags(trim($_POST["address"]));
        $zip = strip_tags(trim($_POST["zip"]));
        $city = strip_tags(trim($_POST["city"]));
        $tickets = trim($_POST["tickets"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($email) OR empty($phone) OR empty($address) OR empty($zip) OR empty($city) OR empty($tickets) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Er is iets fout gegaan bij de verwerking van uw bestelling, alle velden zijn verplicht!";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "gvankruijsdijk@gmail.com";

        // Set the email subject.
        $subject = "Nieuwe kaartbestelling voor SNATM";

        // Build the email content.
        $email_content = "Naam: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Telefoonnummer: $phone\n";
        $email_content .= "Adres: $address\n";
        $email_content .= "Postcode: $zip\n";
        $email_content .= "Woonplaats: $city\n";
        $email_content .= "Aantal tickets: $tickets\n";

        // Send the email.
        if (mail($recipient, $subject, $email_content)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Bedankt! Uw bestelling is geplaatst!";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Er is iets fout gegaan, neemt u alstublief contact met ons op.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Er is iets fout gegaan, neemt u alstublief contact met ons op.";
    }

?>