<?php
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

if (isset($_POST['sendOffer'])) {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];
    
    $message = "
                <html>
                <head>
                    <title>Formular contact Unitate Protejata</title>
                </head>
                <body>
                
                <table>                                    
                    <tr>
                        <td>Nume</td>
                        <td>$name</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td>Telefon</td>
                        <td>$phone</td>
                    </tr>                                            
                    <tr>
                        <td>Message</td>
                        <td>$message</td>
                    </tr>                                                                              
                </table>
                </body>
                </html>
        ";
    
    
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  
        $mail->SMTPDebug = 0;
        $mail->isSMTP(); //Send using SMTP
        $mail->Host       = 'mail.webtop.ro'; //Set the SMTP server to send through
        $mail->SMTPAuth   = true; //Enable SMTP authentication
        $mail->Username   = 'contact@webtop.ro'; //SMTP username
        $mail->Password   = 'wWebmaster1#'; //SMTP password
        $mail->SMTPSecure = 'tls'; //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 25; //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
        //Recipients
        $mail->setFrom('contact@webtop.ro', 'Formular contact Unitate Protejata');
        $mail->addAddress('contact@webtop.ro', 'Formular contact Unitate Protejata'); //Add a recipient
        $mail->addAddress('catalinabseo@gmail.com'); //Name is optional
        $mail->addReplyTo('contact@webtop.ro', 'Formular contact Unitate Protejata');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Formular contact Unitate Protejata';
        $mail->Body    = $message;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        $mail->send();
?>
<div class="mb-3">
    <h3>Mesajul a fost trimis. Va vom contacta curand!</h3>
</div>
<?php
    }
    catch (Exception $e) {
        echo "Mesajul nu a fost trimis";
    }
}

?>
<form action="" method="post" style="display: none">    
    <h2>Cu ce vă putem ajuta?</h2>
    <span class="dflex spaceBetween">
        <div>                      
            <input type="text" name="name" placeholder="Nume*" required>
            <input type="text" name="email" placeholder="Email*" required>
            <input type="text" name="phone" placeholder="Telefon">
        </div>
        <div>
            <textarea name="message" rows="8" cols="50">Mesaj</textarea>
            <input type="checkbox" required="">
            <label for="scales">Am citit Termeni și condiții și sunt de acord cu procesarea datelor personale</label>
        </div>
    </span>
    <input class="btn" type="submit" value="Trimite" name="sendOffer">    
</form>