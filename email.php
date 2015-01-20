        <?php
if(isset($_POST["email"]))
    {
    include "classes/class.phpmailer.php"; // include the class name
    $mail = new PHPMailer(); // create a new object
    $email = $_POST['email'] . "\r\n";
    $path = "reddy.txt";
    file_put_contents($path, $email, FILE_APPEND);
    $url = "http://www.facebook.com/";
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "srimedhac@gmail.com";
    $mail->Password = "God@2015";
    $mail->From = 'srimedhac@gmail.com';
    $mail->FromName = 'Srimedha';
    $mail->Subject = "Thanks for your feedback";
    //$mail->Body = "<b>Dear Customer, <br/>Visit us again.</b>";
    $mail->AddAddress($_POST['email']);
    $mail->AddReplyTo('srimedhac@gmail.com', 'Srimedha');
    $mail->AddBCC('srimedhac@gmail.com');
    // $mail->From = 'srimedhac@gmail.com';
    // $mail->FromName = 'Srimedha';
    // $mail->Subject = "Your Gmail SMTP Mail";
    $mail->Body = "<b>Hello, </b><br/>User Feedback : <br/>Email Id : " . $_POST['email'] . "<br/> Name : " . $_POST['name'] . "<br/> Comments : " . $_POST['comment'];
    // $mail->AddAddress('srimedhac@gmail.com');
    if($mail->Send())
    {
        header('Location: ' . $url, true, 301);
        echo "<script type='text/javascript'>alert('Message has been sent');</script>";
      //echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
        //header('Location: ' . $url, true, 301);
        //echo "<script type='text/javascript'>alert('Message has been sent');</script>";

    }
}
 
?>