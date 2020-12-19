<?php
  
    require 'vendor/autoload.php'; 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception; 
    use \Mailjet\src\Resources;    

    class SendEmail{
        public static function SendMail($to, $subject, $content){
            
            $apiKey = "8a8a5c16887259a01f6afa52a990358f";
            $secretKey = "1cc8e3ddf266274bfd4a97072f21fed6";

            try {

                $mj = new \Mailjet\src\Client($apiKey,$secretKey,true,['version' => 'v3.1']);
                $body = [
                  'Messages' => [
                    [
                      'From' => [
                        'Email' => "utonseniormbhs@gmail.com",
                        'Name' => "IT Conference"
                      ],
                      'To' => [
                        [
                          'Email' => "utonseniormbhs@gmail.com",
                          //'Name' => "Uton"
                        ]
                      ],
                      'Subject' => $subject,
                      'TextPart' => $content,
                      'HTMLPart' => $content,
                    ]
                  ]
                ];
                $response = $mj->post(Vendor\mailjet\src\Resources::$Email, ['body' => $body]);
                //$response->success() && var_dump($response->getData());
              

            } catch (Exception $e) {
                echo 'Email exception Caught : ' . $e->getMessage() . "\n";
                return false;
            }
        }

        public static function ContactUs($subject, $content){
          
          $mail = new PHPMailer(true);
  
          try {
              $mail->isSMTP();
              $mail->Host = 'in-v3.mailjet.com'; // host
              $mail->SMTPAuth = true;
              $mail->Username = '8a8a5c16887259a01f6afa52a990358f'; //username
              $mail->Password = '1cc8e3ddf266274bfd4a97072f21fed6'; //password
              $mail->SMTPSecure = 'tls';
              $mail->Port = 587; //smtp port
            
              $mail->setFrom('utonseniormbhs@gmail.com', 'UDS WIFI');
              $mail->addAddress('utonblue@yahoo.com', 'UDS WIFI Info Team');
            
              $mail->isHTML(true);
              $mail->Subject = $subject;
              $mail->Body    = $content;
            
              //$mail->send();
              //echo 'Email has been sent.';
              return 1;
          } catch (Exception $e) {
              echo 'Email could not be sent. Mailer Error: '. $mail->ErrorInfo;
          }
        }
    }
?>


































<!-- <?php
    // require 'vendor/autoload.php';    

    // class SendEmail{
    //     public static function SendMail($to, $subject, $content){
    //         $key = 'EC9DE9ADB8B7A2637B8F6626E3F5BC5F0D7C0C132B88EA3C1363F0FC60F2D3FE0CCF6B8F73D40336C7EAE0C243821EBD';
    //         $url = 'https://api.elasticemail.com/v2/email/send';

    //         try {

    //             $email = array('from' => $to,
    //             'fromName' => 'Message sent by client',
    //             'apikey' => $key,
    //             'subject' => $subject,
    //             'to' => 'arobertsgraham@gmail.com',
    //             'bodyHtml' => $content,
    //             'bodyText' => $content,
    //             'isTransactional' => false);
                
    //             $ch = curl_init();
    //             curl_setopt_array($ch, array(
    //                 CURLOPT_URL => $url,
    //                 CURLOPT_POST => true,
    //                 CURLOPT_POSTFIELDS => $email,
    //                 CURLOPT_RETURNTRANSFER => true,
    //                 CURLOPT_HEADER => false,
    //                 CURLOPT_SSL_VERIFYPEER => false
    //             ));
                
    //             $result=curl_exec ($ch);
    //             curl_close ($ch);
                
    //             //echo $result;

    //            // echo $to;

    //         } catch (Exception $e) {
    //             echo 'Email exception Caught : ' . $e->getMessage() . "\n";
    //             return false;
    //         }
    //     }
    // }
?>
 -->


<!-- 
 <?php  

// require 'vendor/autoload.php';

// class SendEmail{
//    public static function Sendmail($to,$subject,$content){

//        $key = '';

//        $email = new \SendGrid\Mail\Mail();
//         $email->setFrom("annntoboo@gmail.com","Ann");
//         $email->setSubject($subject);
//         $email->addTo($to);
//         $email->addContent("text/plain",$content);

//         $sendgrid = new \SendGrid($key);

//         try{
//             $response = $sendgrid->send($email);
//             return $response;
//         }catch(Exception $e){
//             echo 'Email exception Caught:'.$e->getMessage()."\n";
//             return false;
//         }

//    }
// } 



// ?> 

