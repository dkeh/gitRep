<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */
$varfname=$_POST["fullname"];
$varln   =$_POST["faddress"];
$varpin  =$_POST["fpincode"];
$varmail =$_POST["fcontact"];
$varmailf=$_POST["ffmail"];
$numPl   =$_POST["amount"];;
$amount  =$_POST["plants"];;

require '../PHPMailerAutoload.php';

ini_set('display_errors', 1);


//Create a new PHPMailer instance
$mail = new PHPMailer;
//$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 587; // Set the SMTP port i tried and 457
$mail->Username = 'dheerajrtx@gmail.com';                // SMTP username
$mail->Password = 'hellboy123';

//Set the subject line
$mail->setFrom('dheerajrtx@gmail.com', 'Unpolluted Sales');
$mail->addAddress('dheerajhasija1992@gmail.com', 'Dheeraj Hasija');
//$mail->addAddress($varmailf, $varfname);
$mail->Subject = 'Lets purify your home together!';
$mail->msgHTML("Thanks for showing interest in buying hybrid plants. We at unpolluted are committed to give you best service. Our executive will call you shortly to confirm the details. Shipment will be done soon!".$varfname."  ".$varln."  ".$varpin."   ".$varmail."   ".$varmailf."  number of plants ".$numPl." amount of plants  ".$amount );

//send the message, check for errors
if (!$mail->send()) {
    $mailmessage= "Mailer Error: " . $mail->ErrorInfo;
} else {
    $mailmessage="Message sent!";
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $mailmessage;?>Buy air purifying plants in Delhi/NCR | Unpolluted</title>
        <link href="img/assets/favicon.png" rel="icon" type="image/png">
        <link href="../../css/plugins.css" rel="stylesheet" type="text/css">
        <link href="../../css/style.css" rel="stylesheet" type="text/css">
        <link href="../../css/backgrounds.css" rel="stylesheet" type="text/css">
        <link href="../../css/colors/primary.css" id="color-scheme" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7CPoppins:300,600%7CRaleway:300" rel="stylesheet">
        <link href="../../fonts/Themify%20Icons/stylesheet.css" rel="stylesheet" type="text/css">
        <link href="../../fonts/Ion%20Icons/stylesheet.css" rel="stylesheet" type="text/css">
        <link href="../../fonts/FontAwesome/stylesheet.css" rel="stylesheet" type="text/css">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-92772724-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
					<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','//connect.facebook.net/en_US/fbevents.js');
		// Insert Your Facebook Pixel ID below. 
		fbq('init', '1892586660971645');
		fbq('track', 'PageView');
		</script>
		<!-- Insert Your Facebook Pixel ID below. --> 
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=1892586660971645&amp;ev=PageView&amp;noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->



    </head>
    <body data-fade-in="true">




        <div class="preloader"><div></div></div>
        



        <!-- Start Header Section -->
        <nav class="navbar transparent-white navbar-fixed-top">
            <div class="container">


                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
					<h2 class="logo-dark" style="font-color:black;">Unpolluted</h2>
					<h2 class="logo-light" style="font-color:white;">Unpolluted</h2>
                   <!-- <img src="img/assets/logo-light.png" alt="#" class="logo-light">
                    <img src="img/assets/logo-dark.png" alt="#" class="logo-dark">-->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a data-scroll href="index.html#hero">Home</a></li>
                        
                        
                        <li class="active"><a href="shop.php">Shop Now</a></li>
                        <li><a data-scroll href="index.html#contact-form">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->


            </div><!-- /.container -->
        </nav>
        <!-- End Header Section -->




        <!-- Start Hero Section -->
        



        <!-- Start About Section -->
        <section id="about" class="bg-white">
            <div class="container text-center pt130 pb120">
                <div class="heading black">
                    <div class="heading-title"></div>
                    <h3>Thanks for showing interest in buying from unpolluted. Our executive will call you soon to confirm and ship the order soon. </h3>
                </div>
                </div><!-- /.container -->
        </section>
        <!-- End About Section -->












<!---->


  <!-- Start Footer Section -->
        <footer id="footer" class="bg-gray">
            <div class="container pt60 pb60 border-top">
                <div class="text-center m-auto">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook x1"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter x1"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa fa-instagram x1"></i>Instagram</a></li>
                        
                    </ul>
                    <div class="footer-info">
                        <h6><i class="fa fa-envelope-o pr5"></i>support@unpolluted.in</h6>
                        <h6><i class="fa fa-home pr5"></i>3 Byron Ave, Yonkers NY</h6>
                    </div>
                    <h6>© 2017 Unpolluted. All Rights Reserved.</h6>
                </div>
            </div><!-- /.container -->
        </footer><!-- /#footer -->
        <!-- End Footer Section -->




        <!-- Start Back To Top Section -->
        <a data-scroll id="back-to-top" href="#hero"><i class="icon ion-chevron-up"></i></a>
        <!-- End Back To Top Section -->




        <script src="../../js/jquery.min.js"></script>
        <script src="../../php/contact-form/assets/js/contact.js"></script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/scripts.js"></script>
        <script src="../../js/google-maps.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOell7tuOKPu75RHP6FQGKEWz6TQE5_JM&callback=initMap"
            async defer></script>
    </body>
</html>


