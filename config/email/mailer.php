<?php
    // Parâmetros form
    $smtp_contato            = "dlucca29@hotmail.com";
    $email_remetente         = "dlucca39@gmail.com";
    $senha_remetente         = "Vm05Wy@EpA0vzWqJ";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        
        //Server settings

        $mail->SMTPDebug = 4; 
        $mail->isSMTP(); 
        $mail->SMTPAuth   = true; 
        $mail->Host       = $smtp_contato;
        $mail->Port       = 465;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => false
            )
        );
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";

        $tipo = $_POST["tipo"];
        $empresa = $_POST["empresa"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $produtos = $_POST["produtos"];
    
        $conteudo  = "<h3>Contato via site</h3>";
        $conteudo .= "<p><strong>Tipo de contato</strong>: " . $tipo . "</p>";
        if (!empty($empresa)) {
            $conteudo .= "<p><strong>Nome da Empresa</strong>: " . $empresa . "</p>";
        }
        $conteudo .= "<p><strong>Nome</strong>: " . $nome . "</p>";
        $conteudo .= "<p><strong>Email</strong>: " . $email . "</p>";
        $conteudo .= "<p><strong>Telefone</strong>: " . $telefone . "</p>";
        if (isset($_POST["produtos"])) {
            $conteudo .= "<h4>Produtos:</h4>";
            foreach ($produtos as $key => $value) {
                $conteudo .= "<p><strong>$value</strong></p>";
            }
        }


        $mail->Username   = $email_remetente;
        $mail->Password   = $senha_remetente;
        $mail->setFrom($email, $nome);
        $mail->addReplyTo($email, $nome);
        $mail->addAddress($email_remetente);
        $mail->Subject = "Contato via site - ".$nome;
        $mail->Body    = $conteudo;

        //Recipients
        // $mail->addAddress($emailContato);               //Name is optional
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }