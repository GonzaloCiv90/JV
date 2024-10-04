<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretKey = "6LckMlcqAAAAAAxWwrgox8ySw8ooCeA0tN1FVEHq";
    $captcha = $_POST['g-recaptcha-response'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    // Verificar reCAPTCHA
    $response = file_get_contents($url . '?secret=' . $secretKey . '&response=' . $captcha);
    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
        // Procesa el formulario aquí
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Aquí puedes enviar un correo o guardar la información en la base de datos
        echo "Formulario enviado correctamente.";
    } else {
        echo "Error: Verificación reCAPTCHA fallida.";
    }
} else {
    echo "No se ha enviado ningún formulario.";
}
