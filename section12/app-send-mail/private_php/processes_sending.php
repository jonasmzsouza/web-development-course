<?php 

    // "phpmailer/phpmailer": "^6.8"

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require "./library/PHPMailer/Exception.php";
    require "./library/PHPMailer/PHPMailer.php";
    require "./library/PHPMailer/POP3.php";
    require "./library/PHPMailer/SMTP.php";

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

    $mail = new PHPMailer();

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'First Last');
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
    $mail->Body    = $message->__get('message') . '<br><br> Message sent by IP: ' . get_user_ip();
    $mail->AltBody = 'It is necessary to use a client that supports HTML to have full access to the content of this message.';

    if($mail->send()) {
        $message->status['status_code'] = 1;
        $message->status['status_description'] = 'Message sent successfully';
        #Section 2: IMAP
        if (save_mail($mail)) {
            echo "Message saved!";
        }
    } else {
        $message->status['status_code'] = 2;
        $message->status['status_description'] = "This email could not be sent. Please try again later. Error details: {$mail->ErrorInfo}";
    }

    //Section 2: IMAP
    //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
    //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
    //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
    //be useful if you are trying to get this working on a non-Gmail IMAP server.
    function save_mail($mail)
    {
        //You can change 'Sent Mail' to any other folder or tag
        $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

        //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
        $imapStream = imap_open($path, $mail->Username, $mail->Password);

        $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
        imap_close($imapStream);

        return $result;
    }

    /**
     * Function that returns the real IP of the client
     * @return string $ip
     */
    function get_user_ip()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
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