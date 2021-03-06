<?php session_start();


    
    $prekes_id = $_SESSION['id'];
    $prekes_kaina = $_SESSION['kaina'];
    $kliento_vardas = $_SESSION['vardas'];
    $kliento_telefonas = $_SESSION['telefonas'];
    $kliento_elpastas = $_SESSION['elpastas'];
    $kliento_miestas = $_SESSION['miestas'];
    $kliento_gatve = $_SESSION['gatve'];
    $kliento_postCode = $_SESSION['postCode'];
    $kliento_postMethod = $_SESSION['postMethod'];
    
    
    
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    //Load composer's autoloader
    require 'libs/PHPMailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        $mail->Host = 'tls://smtp.gmail.com:587';

        $mail->Host = 'tls://smtp.gmail.com:587';

        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        // $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'testams752@gmail.com';                 // SMTP username
        $mail->Password = 'LabaiSlaptas';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        // $mail->Port = 587;                                    // TCP port to connect to
        $mail->Port = 465;                                    // TCP port to connect to

        
        
        //Recipients
        $mail->setFrom('info@gaudykles.lt', 'Sapnu gaudykles uzsakymas');  //Kas siuncia, test@gmail. (email bus tas is kurio siunciama, vardas veikia)
        $mail->addAddress($kliento_elpastas, $kliento_vardas);     // Kam siunti marius752@gmail 
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('gaudykles@gmail.com', 'Del mano uzsakymo');      // kam bus atsakoma is emailo   prideti kam bus reply kai paspaus (i cia eis pastas is uzpildytos formos)
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Sapnu gaudykles uzsakymas';
        $mail->Body    =    '<h3>Sveikiname užsisakius Sapnų Gaudyklę</h3>  
                            <p>Primename, jei dar to nepadarėte, persiųskite ' . $prekes_kaina . ' eur į sąskaitą LT497300010141118654 Kamilė Steponavičiūtė "Swedbank" ir mes išsiųsime jums jūsų užsakymą.</p>
                            <br>
                            <p> Užsakymo duomenys:  </p>
                            Telefonas: ' . $kliento_telefonas . ' <br>
                            El paštas: ' . $kliento_elpastas . ' <br>
                            Miestas: ' . $kliento_miestas . ' <br>
                            Gatvė ir nr: ' . $kliento_gatve . ' <br>
                            Pašto kodas: ' . $kliento_postCode . ' <br>
                            Siuntimo metodas: ' . $kliento_postMethod . ' <br>
                            Kaina su siuntimu: ' . $prekes_kaina . ' eur <br>
                            Parduota gaudyklė ID: ' . $prekes_id;
                            
        $mail->AltBody = "";

            
        
        $mail->send();
        
        
         //$_SESSION["isiuntimas"] = 1;
         header("Location: ../confirm.php?id=$prekes_id");
         //echo "<meta http-equiv='refresh' content='0'>";
        // echo 'Message has been sent';
    } catch (Exception $e) {
       // echo 'Klaida, seni kazko pridirbai.';
       // echo 'Mailer Error: ' . $mail->ErrorInfo;
    }


