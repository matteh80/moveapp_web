<?php
add_filter( 'wp_mail_content_type', 'set_content_type' );
function set_content_type( $content_type ){
    return 'text/html';
}

add_action( 'wp_ajax_send_mail', 'callback_send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'callback_send_mail' );

function callback_send_mail() {

    //$to = get_bloginfo('admin_email');
    $to = "hedstrom.mathias@gmail.com";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $homepage = '<a href="'.$_POST["homepage"].'">'.$_POST['homepage'].'</a>';
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = "<hr><br><br>".nl2br($_POST['message']);

    $message = "<p>Nytt mail från hemsidan!</p> <p>Hemsida: ".$homepage."</p><p>Telefon: ".$phone."</p><p>".$message."</p>";
    $headers = 'From: '.$name.' <'.$email.'>' . "\r\n";

    return wp_mail( $to, $subject, $message, $headers );


    die(); // this is required to return a proper result

}

add_action( 'wp_ajax_add_foobar', 'prefix_ajax_add_foobar' );
add_action( 'wp_ajax_nopriv_add_foobar', 'prefix_ajax_add_foobar' );

function prefix_ajax_add_foobar() {
    // Handle request then generate response using WP_Ajax_Response
    return 213;
}


?>