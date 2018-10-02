<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "horluwatowbeey@gmail.com";
    $email_subject = "Email";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['country']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $country = $_POST['country']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$country)) {
    $error_message .= 'The country you entered does not appear to be valid.<br />';
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Country: ".clean_string($country)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "phone: ".clean_string($phone)."\n";
    $email_message .= "message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 <style>
     body {
         background:#5b3e90;
     }
 </style>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Serpika Web Solution (OPC) PVT LTD offers high quality Android App Development Services to clients worldwide. Call +91 8420197208 to hire Android App Developers from us.">
    <meta name="author" content="">
    <title>Serpika Web Solution</title>
    <link rel="canonical" href="android-app-development.html">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"> -->
    <base>
    <meta name="google-site-verification" content="TwcTFE3dSXcUIqqGm2WrVccQ4iyQRMW3FwbFctAXEB8">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>console.log("index.html");</script>
</head>

<body>
    <style>.pre-loader{position:fixed;top:0;bottom:0;left:0;right:0;width:100%;height:100%;background:#2d2d2d;z-index:9999999}.pre-loader>div{position:absolute;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);-moz-transform:translateX(-50%) translateY(-50%);-o-transform:translateX(-50%) translateY(-50%);-ms-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);background-color:transparent;width:100px;height:100px}.pre-loader>div img{width:100%}@media only screen and (max-width:768px){.pre-loader>div{width:70px;height:70px}}</style>
    <div class="pre-loader">
        <div><img src="assets/images/loader.gif" alt="loader"></div>
    </div>
    <header id="header" class="header">
        <div class="header-backdrop"></div>
        <div class="header-top hidden-xs" style="background:#5b3e90;">
            <div class="container">

                <div class="hdr-right">
                    <div class="social-share-wrapper">
                        <ul class="social-share a2a_kit a2a_kit_size_24 a2a_default_style">
                            <li><a class="a2a_button_linkedin"><i class="fa icon-linkedin-logo"></i></a></li>
                            <li><a class="a2a_button_google_plus"><i class="fa icon-google-plus"></i></a></li>
                            <li><a class="a2a_button_twitter"><i class="fa icon-twitter-logo-silhouette"></i></a></li>
                            <li><a class="a2a_button_facebook"><i class="fa icon-facebook-logo"></i></a></li>
                        </ul><a href="javascript:void(0);" class="ph-no no-margin share-icon"></a>
                    </div><a href="tel:918420197208" class="ph-no"><i class="fa icon-whatsapp-logo-variant"></i>
                        +919828584906</a> <a data-toggle="modal" data-target="#requestQuote" class="request-btn"><i
                            class="fa icon-font-selection-editor"></i> REQUEST A QUOTE</a>
                </div>
            </div>
        </div>
        <div class="header-bottm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="nav">
                            <div class="logo pull-left"><a href="index.html"><img src="assets/images/webguru-infosystems-logo.png"
                                        alt="Serpika Web Solution (OPC) PVT LTD"></a></div><a href="javascript:void(0)"
                                class="menu"><span></span>
                                <span></span> <span></span></a>
                            <ul class="desktop-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="portfolio/website.html">Portfolio</a></li>
                                <li class="nav-dropdown"><a href="javascript:void(0)">Services <i class="icon-down-arrow"></i></a>
                                    <div class="dropdown-block">
                                        <div class="dropdown-section">
                                            <ul class="sub-menu">
                                                <li><a href="website-design-services.html">Website Design <i class="icon-down-arrow"></i></a>
                                                    <ul class="sub-sub-menu">
                                                        <li><a href="small-business-website-design.html">Small Business
                                                                Website</a></li>
                                                        <li><a href="corporate-website-design.html">Corporate Website</a></li>
                                                        <li><a href="ecommerce-website-design-services.html">eCommerce
                                                                Website Design</a></li>
                                                        <li><a href="shopping-cart-development-solutions.html">Shopping
                                                                Cart Development</a></li>
                                                        <li><a href="cms-web-development-services.html">CMS Development</a></li>
                                                        <li><a href="web-application-development.html">Web Application
                                                                Development</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="mobile-app-development-services.html">Mobile App
                                                        Development <i class="icon-down-arrow"></i></a>
                                                    <ul class="sub-sub-menu">
                                                        <li><a href="android-app-development.html">Android App
                                                                Development</a></li>
                                                        <li><a href="ios-app-development-services.html">iOS App
                                                                Development</a></li>
                                                        <li><a href="hybrid-app-development-services.html">Hybrid App
                                                                Development</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="digital-marketing-services.html">Digital Marketing <i
                                                            class="icon-down-arrow"></i></a>
                                                    <ul class="sub-sub-menu">
                                                        <li><a href="seo-services.html">Search Engine Optimization
                                                                (SEO)</a></li>
                                                        <li><a href="social-media-marketing-services.html">Social Media
                                                                Marketing</a></li>
                                                        <li><a href="ppc-management-services.html">PPC Management</a></li>
                                                        <li><a href="local-seo-services.html">Local SEO Services</a></li>
                                                        <li><a href="content-marketing-services.html">Content Marketing
                                                                Services</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="brand-identity-design-services.html">Logo & Branding <i
                                                            class="icon-down-arrow"></i></a>
                                                    <ul class="sub-sub-menu">
                                                        <li><a href="logo-design-services.html">Logo Design</a></li>
                                                        <li><a href="corporate-identity-design-services.html">Corporate
                                                                Identity Design</a></li>
                                                        <li><a href="brochure-design-services.html">Brochure Design</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="explainer-videos-services.html">Explainer Video</a></li>
                                            </ul>
                                        </div>
                                        <div class="nav-bottom"><a href="assets/images/webguru-infosystems.pdf" target="_blank"><span
                                                    class="icon-download"></span> <strong>Brochure</strong> </a><a href="team.html"><span
                                                    class="icon-team"></span> <strong>Our Team</strong> </a><a href="about-us.html"><span
                                                    class="icon-user"></span> <strong>About Us</strong> </a><a href="services.html"><span
                                                    class="icon-gear"></span> <strong>Services</strong></a></div>
                                    </div>
                                </li>
                                <li class="nav-dropdown technology-menu"><a href="javascript:void(0)">Technology <i
                                            class="icon-down-arrow"></i></a>
                                    <div class="dropdown-block">
                                        <div class="dropdown-section">
                                            <ul class="sub-menu">
                                                <li><a href="javascript:void(0)">Web Technologies <i class="icon-down-arrow"></i></a>
                                                    <ul class="sub-sub-menu">
                                                        <li><a href="nodejs-development-services.html">Node JS
                                                                Development</a></li>
                                                        <li><a href="angularjs-development-services.html">Angular JS
                                                                Development</a></li>
                                                        <li><a href="php-programming-services.html">PHP Programming</a></li>
                                                        <li><a href="dynamic-web-design.html">Dynamic Web Design</a></li>
                                                        <li><a href="responsive-website-design-services.html">Bootstrap
                                                                / Mobile Responsive</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)">CMS Technologies <i class="icon-down-arrow"></i></a>
                                                    <ul class="sub-sub-menu">
                                                        <li><a href="wordpress-development-services.html">Wordpress
                                                                Development</a></li>
                                                        <li><a href="drupal-development-services.html">Drupal
                                                                Development</a></li>
                                                        <li><a href="joomla-development-services.html">Joomla
                                                                Development</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)">eCommerce Technologies <i class="icon-down-arrow"></i></a>
                                                    <ul class="sub-sub-menu">
                                                        <li><a href="magento-development-services.html">Magento
                                                                Development</a></li>
                                                        <li><a href="shopify-development-services.html">Shopify
                                                                Development</a></li>
                                                        <li><a href="bigcommerce-development.html">BigCommerce</a></li>
                                                        <li><a href="woocommerce-development-services.html">WooCommerce
                                                                Development</a></li>
                                                        <li><a href="opencart-development-services.html">OpenCart
                                                                Development</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)">Mobile Technologies <i class="icon-down-arrow"></i></a>
                                                    <ul class="sub-sub-menu">
                                                        <li><a href="swift-mobile-app-development-services.html">Swift</a></li>
                                                        <li><a href="jquery-mobile-app-development.html">jQuery Mobile</a></li>
                                                        <li><a href="ionic-development-services.html">Ionic Development</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="mongodb-development-services.html">MongoDB</a></li>
                                            </ul>
                                        </div>
                                        <div class="nav-bottom"><a href="assets/images/webguru-infosystems.pdf" target="_blank"><span
                                                    class="icon-download"></span> <strong>Brochure</strong> </a><a href="team.html"><span
                                                    class="icon-team"></span> <strong>Our Team</strong> </a><a href="about-us.html"><span
                                                    class="icon-user"></span> <strong>About Us</strong> </a><a href="services.html"><span
                                                    class="icon-gear"></span> <strong>Services</strong></a></div>
                                    </div>
                                </li>
                                <li><a href="clients.html">Clients</a></li>
                                <li class="nav-dropdown"><a href="javascript:void(0)">Hire Us <i class="icon-down-arrow"></i></a>
                                    <div class="dropdown-block singleDropDown">
                                        <div class="dropdown-section">
                                            <ul class="sub-menu">
                                                <li><a href="hire-php-developer.html">Hire PHP Developer</a></li>
                                                <li><a href="hire-wordpress-developer.html">Hire Wordpress Developer</a></li>
                                                <li><a href="hire-magento-developer.html">Hire Magento Developer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div> 
        <div class="request-btn-holder"><a class="request-btn-right hidden-xs" data-toggle="modal" data-target="#requestQuote">REQUEST
                A QUOTE</a> <a class="scroll-to-top hidden-xs" href="javascript:void(0)"><i class="fa fa-angle-up icon-down-arrow"></i></a></div>
    </header><a data-target="#requestQuote" class="request-btn visible-xs mobile-request-a-quote"><i class="fa icon-font-selection-editor"></i></a>
    <div class = "styleIt " style="margin-top:5%;background:#df2466;"> 
        <h1 style = "font-family:comic sans ms;color:aliceblue;padding:10%;">Thank you for contacting us. We will be in touch with you very soon.</h1>
    </div>
    <div class="newsletter-sec orange-color grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li>SUBSCRIBE TO OUR NEWSLETTER :</li>
                            <li><input type="text" name="Email"></li>
                            <li><input type="submit" value="Sign up"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer padding-bottom-none">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <ul class="ftr-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="client-testimonials.html">Testimonials</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="jobs-in-kolkata.html">We are Hiring</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="pricelist.html">Pricing</a></li>
                        </ul>
                        <ul class="ftr-nav">
                            <li><a href="press-release.html">Press Release</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                            <li><a href="privacy-policy.html">Privacy & Terms of Service</a></li>
                            <li><a href="free-webdesign-ebook.html">Free Web Design Ebook</a></li>
                            <li><a href="content-writing-services.html">Content Writing</a></li>
                        </ul>

                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="footer-block hidden-xs"><strong class="footer-heading">For Business Enquiry</strong>
                            <ul class="contact-list">
                                <li class="ind-call common-icon-set"><a href="tel:+919828584906">+919828584906</a></li>
                                <li class="usa-call common-icon-set"><a href="tel:+1 (315) 820-2084 ">+1 (315) 820-2084
                                    </a></li>
                                <li class="email common-icon-set"><a href="mailto:info@serpika.com">info@ serpika
                                        .com</a></li>
                            </ul>
                        </div>
                        <!-- <div class="footer-block hidden-xs"><strong class="footer-heading">For Job Opening</strong>
                            <ul class="contact-list">
                                <li class="job-call common-icon-set"><a href="tel:+917595064760">+91-7595064760</a></li>
                                <li class="email common-icon-set"><a href="mailto:hr@webguru-india.com">hr@webguru-india.com</a></li>
                            </ul>
                        </div> -->
                        <div class="footer-block">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/dinitictechnologies" target="_blank"><i class="fa fa-facebook icon-facebook-logo"></i></a></li>
                                <li><a href="https://twitter.com/dinitictechnologies" target="_blank"><i class="fa fa-twitter icon-twitter-logo-silhouette"></i></a></li>
                                <li><a href="https://plus.google.com/+dinitictechnologies" target="_blank"><i class="fa fa-google-plus icon-google-plus"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/dinitictechnologies" target="_blank"><i
                                            class="fa fa-youtube icon-youtube-logo"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/dinitictechnologies" target="_blank"><i
                                            class="fa fa-linkedin icon-linkedin-logo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 copy-right">
                        <p>&copy; 2018 Copyright Dinitic Technologies Pvt. Ltd. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade pop-up" id="requestQuote" tabindex="-1" role="dialog" aria-labelledby="requestQuote">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row contact-form">
                        <div class="col-sm-12">
                            <h2>REQUEST A QUOTE</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <form id="" method="POST" action="send_email.php" name="">
                            <div class="col-sm-12 col-xs-12">
                                <div class="input-group"><input type="text" class="form-control" name="name"
                                        placeholder="Name" maxlength="32" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="input-group"><input type="email" class="form-control" name="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="input-group"><input type="text" class="form-control" maxlength="40" name="country"
                                        placeholder="Country" required> </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="input-group"><input type="tel" maxlength="20" class="form-control" name="phone"
                                        placeholder="Phone" required> </div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="input-group"><textarea class="form-control" name="message" placeholder="Message"
                                        required></textarea></div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="input-group no-pad"><input type="submit" class="submit-btn" value="Submit">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer pop-phone-no"><a href="tel:+919828584906" class="text-link"><span>CALL US:</span>
                        +919828584906</a></div>
            </div>
        </div>
    </div>
    <script>  var sessionSetFirstTime = 0;  </script>
<link rel="stylesheet" type="text/css" href="assets/css/webguru.min04be.css?v=1538329905">
    <script src="assets/js/webguru.minf700.js?v=1.0.1" async defer="defer"></script>
<?php
 
}
?>

