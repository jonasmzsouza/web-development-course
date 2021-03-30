<?php 

    // "phpmailer/phpmailer": "^6.2"

    require "./library/PHPMailer/Exception.php";
    require "./library/PHPMailer/OAuth.php";
    require "./library/PHPMailer/PHPMailer.php";
    require "./library/PHPMailer/POP3.php";
    require "./library/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    class Message {

        private $to = null;
        private $subject = null;
        private $message = null;
        public $status = array('status_code' => null, 'status_description' => '');

        public function __get($attribute) {
            return $this->$attribute;
        }

        public function __set($attribute, $value) {
            $this->$attribute = $value;
        }

        public function validMessage(){
            if(empty($this->to) || empty($this->subject) || empty($this->message)) {
                return false;
            }

            return true;
        }

    }

    $message = new Message();
    $message->__set('to', $_POST['to']);
    $message->__set('subject', $_POST['subject']);
    $message->__set('message', $_POST['message']);

    if(!$message->validMessage()) {
        echo 'Message is not valid';
        header('Location: index.php');
    } 

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                         //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress($message->__get('to'));     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $message->__get('subject');
        $mail->Body    = $message->__get('message');
        $mail->AltBody = 'It is necessary to use a client that supports HTML to have full access to the content of this message.';

        $mail->send();

        $message->status['status_code'] = 1;
        $message->status['status_description'] = 'Message sent successfully';

    } catch (Exception $e) {

        $message->status['status_code'] = 2;
        $message->status['status_description'] = "This email could not be sent. Please try again later. Error details: {$mail->ErrorInfo}";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP Send Mail</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="py-3 text-center">
            <img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
            <h2>Send Mail</h2>
            <p class="lead">Your private email application!</p>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="card-body font-weight-bold">

                    <?php if($message->status['status_code'] == 1) { ?>
                        <div class="container">
                            <h1 class="display-4 text-success">Success</h1>
                            <p><?= $message->status['status_description'] ?></p>
                            <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Go back</a>
                        </div>
                    <?php } ?>

                    <?php if($message->status['status_code'] == 2) { ?>
                        <div class="container">
                            <h1 class="display-4 text-danger">Failed</h1>
                            <p><?= $message->status['status_description'] ?></p>
                            <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Go back</a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>

</body>

</html>