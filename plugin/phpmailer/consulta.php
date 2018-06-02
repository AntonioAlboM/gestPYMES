!DOCTYPE html>
<html lang="es">
    <head>

    </head>
    <body id="container-page-index">

<?php 
        include "/class.phpmailer.php";
        include "./class.smtp.php";
        
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $nombre = $_POST['nombre'];

        $variable = $_POST['mensajecontacto'];
       

        $body = $variable;
        $address_to = "numismaticacalderilla@gmail.com";
        $the_subject ="$nombre,  telefono: $telefono, email: $email ";


        $email_user = "numismaticacalderilla@gmail.com";//aqui el usuario de la cuenta de correo
        $email_password = "calderilla1234";//aqui la contraseña de la cuenta de correo
        $from_name = $nombre;//aqui el alias que sustituye al correo
        $phpmailer = new PHPMailer();

        // ---------- datos de la cuenta de Gmail -------------------------------
        $phpmailer->Username = $email_user;
        $phpmailer->Password = $email_password;
        //-----------------------------------------------------------------------
        //$phpmailer->SMTPDebug = 4;
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->Host = "smtp.gmail.com"; // GMail
        $phpmailer->Port = 465;
        $phpmailer->IsSMTP(); // use SMTP
        $phpmailer->SMTPAuth = true;

        $phpmailer->setFrom( $email_user,$the_subject);//email que uso para mandar y el alias
        $phpmailer->AddAddress($address_to); // recipients email
        //$phpmailer->addBCC("email de copia oculta");

        $phpmailer->Subject = $the_subject;
        $phpmailer->Body .=$variable;

        $phpmailer->IsHTML(true);

        if($phpmailer->Send()){
            
            header("Location:/GESTPYMES");
        }



        ?>
