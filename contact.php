<?php
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "$name,$email";

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $to = 'elio.kyomo@gmail.com';
        $subject = 'Test data';
        $body = '<html>
                    <body>
                        <h2>Feedback - example.com</h2>
                        <hr>
                        <p>Name<br>.$name.</p>
                        <p>Email<br>.$email.</p>
                    </body>
                </html>';

        $headers = "Reply-To ".$email."\r\n";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: '.$name. '<'.$subject.'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $send = mail($to, $subject, $body, $headers);

        if ($send) {
            echo '<br>';
            echo 'Thanks for contacting us. We will get back to you shortly';
        } else {
            echo 'error';
        }
    }
?>