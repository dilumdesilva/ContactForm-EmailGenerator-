<?php
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';

        echo "hello";
        function sendEmail($to, $from, $fromName, $body, $attchment){
        $mail = new PHPMailer();
        $mail->setFrom($from, $fromName);
        $mail->addAddress($to);
        $mail-> addAttachment($attchment);
        $mail-> addSubject = 'Contact Form - Email';
        $mail-> Body = $body;
        $mail-> isHTML(false);

        return  $mail->send();
    }

    $name = $_POST['username'];
    $email = $_POST['email'];
    $body = $_POST['body'];

    $file = "attachment/".basename($_FILES['attachment']['name']);
    echo "<pre>";
    print_r($_FILES);
}
?>
<html> 
    <head>
        <title>test form</title>
        <style type="text/css">
            input, textarea{
                width:250px;
                height: 27px;
                margin-bottom:10px; 
            }

            textarea{
                height:100px;
                resize:vertical;
            }

            body{
                text-align:center;
                margin-top:150px;
            }
        </style>
    </head>
    <body>
        <h1>Hello world</h1>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Name.." required><br>
            <input type="email" name="email" placeholder="email..." required><br>
            <textarea name="body" cols="20" rows="30" placeholder="Message..." required></textarea><br>
            <input type="file" name="attachment" placeholder="Name.." required><br>
            <input type="submit" name="submit" value="send"><br>
       
        </form>
    </body>
</html>