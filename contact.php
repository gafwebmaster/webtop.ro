<?php 
    $title="Oferta servicii web";
    $desc="Oferta servicii web profesionale: creare site, SEO, newslettere, hosting, domenii web";
    include "inc/header.php";
    
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
?>
    <section>
        <div>
            <h1>Servicii web profesionale</h1>
            <p>Cereți oferta noastră pentru a avea o imagine online mai bună.</p>
            
       
        <?php 
                    $actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
                    ?>
                <?php
                    if(isset($_POST['sendOffer'])){
                         //Take details filled above
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $phone = $_POST['phone'];
                                    $website = $_POST['website'];
                                    $service = $_POST['service'];
                                    $message = $_POST['message'];                                                    
                                   
                                    $message = "
                                        <html>
                                        <head>
                                            <title>Website - Cerere oferta</title>
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
                                                <td>Website</td>
                                                <td>$website</td>
                                            </tr>
                                            <tr>
                                                <td>Servici ales</td>
                                                <td>$service</td>
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
                    $mail->isSMTP();                                            //Send using SMTP
                    //$mail->Host       = 'mail.webtop.ro';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    //$mail->Username   = 'contact@webtop.ro';                     //SMTP username
                    //$mail->Password   = 'wWebmaster1#';                               //SMTP password
                    $mail->SMTPSecure = 'tls';          //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 25;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                    
                    //Recipients
                    //$mail->setFrom('contact@webtop.ro', 'Website Cerere oferta');
                    //$mail->addAddress('contact@webtop.ro', 'Website Cerere oferta');     //Add a recipient
                    //$mail->addAddress('ellen@example.com');               //Name is optional
                    //$mail->addReplyTo('contact@webtop.ro', 'Website Cerere oferta');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');
                    
                    //Attachments
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                    
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Website - cerere oferta';
                    $mail->Body    = $message;
                    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                    $mail->send();
                    ?>
                <div class="mb-3">
                    <h3>Mesajul a fost trimis. Va vom contacta curand!</h3>
                </div>
                <?php
                    } catch (Exception $e) {
                        echo "Mesajul nu a fost trimis {$mail->ErrorInfo}";
                    }
                                                    
                                                    
                                                  
}
                                    
                                                   
                                                    ?>

               
      
            
        </div>        
    </section>

    <section>
        <h2>Promovare website</h2>
        <p><a href="tel:+40741579161"> <i class="fa fa-phone" aria-hidden="true"></i> 0741 579 161</a> | <a href="mailto:contact@webtop.ro"><i class="fa fa-envelope" aria-hidden="true"></i> contact@webtop.ro</a></p>
    </section>

<?php 
    include "inc/footer.php";
?>