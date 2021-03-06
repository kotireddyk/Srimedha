<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Srimedha Computers</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/srimedha.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/srimedha-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
         <script type="text/javascript">
 function validateEmail() { 
    var emailid=document.getElementById("email");
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(emailid.value))
    {
        return true;
        alert('Message has been sent');
    }
    else
    {
        alert("Please enter valid email id");
        emailid.focus();
        return false;
    }    
} 
 </script>
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                    </a>
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active">
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <a href="#service">Services</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#clients">Clients</a>
                            </li>
                            <li>
                                <a href="#price">Price</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="home">
            <div id="da-slider" class="da-slider">
                <div class="mask"></div>
                <div class="container">
                    <div class="da-slide">
                        <h2 class="fittext2">Welcome to SriMedha Computers</h2>
                        <h4>Sales & Service</h4>
                        <p>Are you searching for the best model of Printer in market with reasonable price???<br/>
                        Are you searching for the best service center for your printer???</p>
                        <div class="da-img">
                            <img src="images/Slider01.png" alt="image01" width="320">
                        </div>
                    </div>
                    <div class="da-slide">
                        <h2>Management</h2>
                        <h4>Quick and Responsible</h4>
                        <p>Give us a call or message us with your requirements, our certified print specialists guide you in selecting the best printer at present in the market which has the best printing quality with reasonable cost.</p>
                        <div class="da-img">
                            <img src="images/Slider02.png" width="320" alt="image02">
                        </div>
                    </div>
                    <div class="da-slide">
                        <h2>Door Delivery</h2>
                        <h4>In time</h4>
                        <p>Order your Printer online/through call and we will be at your door within specified time to deliver your model and assist you in all your queries. Call us for repair service, our staff will reach you to give the best service for lower cost.</p>
                        <div class="da-img">
                            <img src="images/Slider03.png" width="320" alt="image03">
                        </div>
                    </div>
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section primary-section" id="service">
            <div class="container">
                <div class="title">
                    <h1>What We Do?</h1>
                    <p>Sales and Service of all models of printers available in market</p>
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/service01.png" alt="Catridge Refilling">
                            </div>
                            <h3>CISS tanks installations</h3>
                            <p>We install CISS tanks for supported models of printer.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/service02.png" alt="CISS Tank Installation" />
                            </div>
                            <h3>Catridge Refilling</h3>
                            <p>We refill the powder for all models of Catridges.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/service03.png" alt="Toner Refilling">
                            </div>
                            <h3>Toner Refilling</h3>
                            <p>We refill the powder for all types of ink toner catridges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section secondary-section" id="about">
            <div class="container">
                <div class="title">
                    <h1>Who We Are?</h1>
                    <p>Qualified, well mannered, Certified and responsible print specialists.</p>
                </div>
                <div class="row-fluid team">
                    <div class="span4" id="first-person">
                        <div class="thumbnail">
                            <img src="images/team1.png" alt="Srinivas Reddy">
                            <h3>Srinivas Reddy</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100002933442539" target="_blank">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/SrimedhaC" target="_blank">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Sales Manager</h2>
                                <p>Sells products by implementing sales plans; supervising sales staff.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="second-person">
                        <div class="thumbnail">
                            <img src="images/team2.png" alt="Vishnu Vardhan Reddy">
                            <h3>Vishnu Vardhan Reddy</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/vishnu.vardhan.399488?fref=ts" target="_blank">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/SrimedhaC" target="_blank">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Technician</h2>
                                <p>Maintains printer Toner refilling.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">
                            <img src="images/team3.png" alt="Khaja Hussain">
                            <h3>Khaja Hussain</h3>
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/khaja.hussain.1069?fref=tl_fr_box" target="_blank">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/SrimedhaC" target="_blank">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Technician</h2>
                                <p>Maintain and repair printers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-text centered">
                    <h3>About Us</h3>
                    <p>SriMedha Computers was built on the platform of highest quality standards, with the intent of providing best product & solutions to the printing industry. SriMedha has always focused on satisfaction of the customers. Srimedha provides A3 XEROX MACHINES, SAMSUNG, EPSON, CANON, BROTHER, RICOH printers with reasonable price and highest quality. Sri Medha provides servicing of all models of printers at reasonable cost. The main goal of Sri Medha is to keep every customer happy and satisfied.</p>
                </div>
            </div>
        </div>
        <div id="clients">
            <div class="section primary-section">
                <div class="container">
                    <div class="title">
                        <h1>What Client Say?</h1>
                        <p>Best choice of a client for excellent sales performance in printing industry.</p>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="testimonial">
                                <p>"Best team to trust on and give our products for sale. More number of our products have been sold by SriMedha team."</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/canon_200.png" class="centered" alt="CANON">
                                    <strong>Canon
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial">
                                <p>"Ricoh printers are sold in large number by SriMedha team in Andhra Pradesh for which we awarded them as Platinum partner."</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/epson_200.png" class="centered" alt="EPSON">
                                    <strong>RICOH
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="testimonial">
                                <p>"We are very much satisfied with SriMedha team and we have awarded them for excellence in sales performance."</p>
                                <div class="whopic">
                                    <div class="arrow"></div>
                                    <img src="images/ricoh_200.png" class="centered" alt="RICOH">
                                    <strong>EPSON
                                        <small>Client</small>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away"
                    </p>
                </div>
            </div>
        </div>
        <div class="section third-section">
            <div class="container centered">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Our Clients</h3>
                        </div>
                        <ul class="client-nav pull-right">
                            <li id="client-prev"></li>
                            <li id="client-next"></li>
                        </ul>
                    </div>
                    <ul class="row client-slider" id="clint-slider">
                        <li>
                            <a href="http://www.canon.co.in/personal/products/laser-printers" target="_blank">
                                <img src="images/clients/clientlogo_canon.png" alt="CANON">
                            </a>
                        </li>
                        <li>
                            <a href="http://www.epson.co.in/sites/epson_india/printers_and_all_in_ones/printers_and_all_in_ones.page" target="_blank">
                                <img src="images/clients/clientlogo_epson.png" alt="EPSON">
                            </a>
                        </li>
                        <li>
                            <a href="http://www.samsung.com/in/business/business-products/printers-multifunction#resultBar" target="_blank">
                                <img src="images/clients/clientlogo_samsung.png" alt="SAMSUNG">
                            </a>
                        </li>
                        <li>
                            <a href="http://welcome.brother.com/in-en.html" target="_blank">
                                <img src="images/clients/clientlogo_brother.png" alt="BROTHER">
                            </a>
                        </li>
                        <li>
                            <a href="https://ricoh.co.in/products/printers/3/" target="_blank">
                                <img src="images/clients/clientlogo_ricoh.png" alt="RICOH">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="price" class="section primary-section">
            <div class="container">
                <div class="title">
                    <h1>Price</h1>
                    <p>Reasonable price for sale and cheapest price for service.</p>
                </div>
                <div class="price-table row-fluid">
                    <div class="span3 price-column">
                        <h3>EPSON</h3>
                        <ul class="list">
                            <li><strong>EPSON L210 - 9,700rs</strong></li>
                            <li><strong>EPSON 245 - 12,300rs</strong></li>
                            <li><strong>EPSON M200 - 12000rs</strong></li>
                            <li><strong><a href="#contact" class="button button-ps">Contact</a></strong>
                        </ul>
                    </div>
                    <div class="span3 price-column">
                        <h3>SAMSUNG</h3>
                        <ul class="list">
                            <li><strong>SAMSUNG XPRESS M2876nd - 13,500rs</strong></li>
                            <li><strong>SAMSUNG 4321ns - 12500rs</strong></li>
                            <li><strong><a href="#contact" class="button button-ps">Contact</a></strong>
                        </ul>
                    </div>
                    <div class="span3 price-column">
                        <h3>RICOH</h3>
                        <ul class="list">
                            <li><strong>RICOH 202 - 11,000rs</strong></li>
                            <li><strong>RICOH 200S - 8,000rs</strong></li>
                            <li><strong><a href="#contact" class="button button-ps">Contact</a></strong>
                        </ul>
                    </div>
                    <div class="span3 price-column">
                        <h3>BROTHER</h3>
                        <ul class="list">
                            <li><strong>Brother J100 - 8,600rs</strong></li>
                            <li><strong>Brother 3520 A3 Xerox - 26000rs</strong></li>
                            <li><strong><a href="#contact" class="button button-ps">Contact</a></strong>
                        </ul>
                    </div>
                    <!--div class="span3 price-column">
                        <h3>CANON</h3>
                        <ul class="list">
                            <li><strong>CANON M287 - 5,500rS</strong></li>
                        </ul>
                        <a href="#contact" class="button button-ps">Contact</a>
                    </div-->
                </div>
            </div>
        </div>
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="map-canvas" id="map-canvas">Loading map...</div>
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3>Say Hello</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Well done!</strong>Your message has been sent.</div>
                                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                <form id="contact-form" name="home" method="POST" action="index.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />
                                            <div class="error left-align" id="err-name">Please enter name.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />
                                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                            <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn" onclick="return validateEmail()">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p>1st floor, Congress office road, Opp. Rainbow colour lab, Arundel pet, Vijayawada, Andhra Pradesh, India - 520002</p>
                        <p class="info-mail">srimedhac@gmail.com</p>
                        <p>+91 9866577796</p>
                        <div class="title">
                            <h3>We Are Social</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/pages/Srimedha-Computers/1578053662412674" target="_blank">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/SrimedhaC" target="_blank">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/100440006324473507130/posts" target="_blank">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Srimedha Computers &copy; 2015 All Rights Reserved | Developed by  <a href="https://github.com/kotireddyk" style="color:#fece1a;"> KGPL </a></p>
        </div>
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>   
 
<?php
if(isset($_POST["email"]))
    {
include "classes/class.phpmailer.php"; // include the class name
$email = $_POST["email"] . "\r\n";
$path="email_db.txt";
file_put_contents($path, $email, FILE_APPEND);
$mail = new PHPMailer(); // create a new object
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
    $mail->AddAddress($_POST['email']);
    $mail->AddReplyTo('srimedhac@gmail.com', 'Srimedha');
    $mail->AddBCC('srimedhac@gmail.com');
    $mail->Body = "<b>Hello, </b><br/>User Feedback : <br/>Email Id : " . $_POST['email'] . "<br/> Name : " . $_POST['name'] . "<br/> Comments : " . $_POST['comment'];
    if(!$mail->Send()){
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
  echo "<script type='text/javascript'>";
  echo "alert('Message has been sent');";
  echo "</script>";
  $data['success'] = true;
  echo json_encode($data);
}
}
?>
    </body>
</html>