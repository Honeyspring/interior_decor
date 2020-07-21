<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Bracebrownn</title>
    <link rel='icon' href='images/logo/logo.jpeg' type='image/x-icon' />
    <link href="plugin/fonts/transfonter/fonts.css?" rel="stylesheet" />
    <link href="plugin/fonts/font-awesome/css/font-awesome.min.css?" rel="stylesheet" />
    <link href="plugin/fonts/platicon/font/flaticon.css?" rel="stylesheet" />
    <link href="plugin/fonts/themify/themify-icons.css?" rel="stylesheet" />
    <link href="plugin/bootstrap/css/bootstrap.min.css?" rel="stylesheet" />
    <link href="plugin/animsition/css/animsition.min.css?" rel="stylesheet" />
    <link href="plugin/lightbox/css/lightbox.min.css?" rel="stylesheet" />
    <link href="css/animate.css?" rel="stylesheet" />
    <link href="plugin/slick/slick.css?" rel="stylesheet" />
    <link href="plugin/player/mediaelementplayer.css?" rel="stylesheet" />
    <link href="plugin/jquery-ui/jquery-ui.css?" rel="stylesheet" />
    <link href="../../vjs.zencdn.net/6.1.0/video-js.css?" rel="stylesheet" />
    <link href="css/style.css?" rel="stylesheet" />
    <link href="css/customize.css?" rel="stylesheet" />
    <script src="plugin/modernizr.js?"></script>
    <script src="../../vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js?"></script>


</head>

<body>
    <div class="animsition main-wrapper">

        <?php include('./header.html') ?>
        <section class="vk-content ">
            <div class="vk-banner vk-background-image-1">
                <div class="vk-background-overlay vk-background-black _80"></div>
                <div class="container ">
                    <div class="vk-banner-wrapper">
                        <div class="page-heading text-center">
                            Contact
                        </div>

                        <div class="vk-breadcrumb">
                            <ul class="">
                                <li><a href="index.php">home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                        <!--./vk-breadcrumb-->
                    </div>
                    <!--./vk-banner-wrapper-->
                </div>
            </div>
            <!--./vk-banner-->

            <div class="vk-page page page-contact ">
                <div class="vk-contact-us">
                    <div class="container">
                        <h6 class="vk-heading vk-heading-style-3"><span class="vk-line"></span>CONTACT US</h6>
                        <h1 class="vk-heading vk-main-heading">Give us <span class="vk-text-color-yellow-1">your questions.</span></h1>
                        <div class="vk-about-list">
                            <div class="row">
                                <ul class="vk-list vk-contac-list">
                                    <li class="col-md-5">
                                        <div class="vk-contact-item">
                                            <i class="vk-icon ti-location-pin"></i>
                                            <div class="vk-title"> Office Address</div>
                                            <p class="vk-contact-info"> 16, Moses Shomefun Street, <br />
                                                College Road Ogba,Lagos,Nigeria.</p>
                                        </div>
                                    </li>
                                    <li class="col-md-4 ">
                                        <div class="vk-contact-item">
                                            <i class="vk-icon ti-email"></i>
                                            <div class="vk-title"> Email Address</div>
                                            <p class="vk-contact-info">
                                                <a href="mailto: yemi_christy@yahoo.com"> yemi_christy@yahoo.com</a>

                                            </p>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="vk-contact-item">
                                            <i class="vk-icon ti-mobile"></i>
                                            <div class="vk-title"> Contact</div>
                                            <p class="vk-contact-info">
                                                <a href="callto:+2348171883657"> 08171883657</a><br />
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <!--./vk-contac-list-->
                            </div>
                            <!--./row-->

                        </div>
                        <!--./vk-about-list-->

                        <div class="vk-contact-form vk-form vk-section-distance-top responsive-fix-2">
                            <h6 class="vk-heading vk-heading-form vk-heading-style-3 text-center">SEND TO US AN EMAIL</h6>
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 15px; color:red;">
                                    <div id="message-contact"></div>
                                </div>
                                <form method="post" action="mail/send-email.php">
                                    <div class="col-md-4">
                                        <input type="text" id="name_contact" name="name" class="form-control" placeholder="Your name" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" id="email_contact" name="email" class="form-control" placeholder="Your email" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="tel" id="phone_contact" name="phone_number" class="form-control" placeholder="Your Phone" required>
                                    </div>
                                    <div class="col-md-12" id="submitInput">
                                        <input id="message_contact" name="message" type="text" class="form-control" placeholder="Message" required>
                                    </div>
                                    <div class="col-md-4 col-lg-offset-4">
                                        <div class="mb-4 g-recaptcha" data-sitekey="6Ld-obMZAAAAANHWZVPSFLdDH8kwpAxdkyzyG1HO"></div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="vk-btn">Send</button>
                                    </div>
                                </form>
                            </div>
                            <!--./row-->
                        </div>
                        <!--./vk-contact-form-->
                    </div>
                    <!--./container-->
                </div>
                <!--./contact-us-->
            </div>
    </div>
    <!--./vk-page-->
    </section>
    <!--./content-->
    <footer class="vk-footer vk-footer-style-1" id=footer>
        <?php include('./footer.html');
        ?>
        <!--./container-->
    </footer>
    <!--./vk-footer-->
    </div>
    <!--./main-wrapper-->

    <!-- BEGIN: SCRIPT -->
    <script src="plugin/jquery/jquery-2.0.2.min.js?"></script>
    <script src="../../vjs.zencdn.net/6.1.0/video.js?"></script>
    <script src="plugin/plugin.min.js?"></script>

    <script src="plugin/main.js?"></script>
    <script src="plugin/custom.js?"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- END: SCRIPT -->
    <?php if(!isset($_COOKIE['result'])) {

    } else {
        if($_COOKIE['result'] == "The captcha field must be checked"){?>
            <script type='text/javascript'>
                alert('The captcha field must be checked');
                $('#submitInput').after('<div class="mb-4" style="color: red; text-align: center"><h3 style="color: red; text-align: center">The captcha field must be checked</h3></div>');
            </script>
        <?php  }
        elseif ($_COOKIE['result'] == "All field must be filled") {?>
            <script type='text/javascript'>
                alert('All field must be filled');
                $('#submitInput').after('<div class="mb-4" style="color: red; text-align: center"><h3 style="color: red; text-align: center">All field must be filled</h3></div>');
            </script>
        <?php }
        elseif ($_COOKIE['result'] == "Form submitted Successfully") {?>
            <script type='text/javascript'>
                alert('Form submitted successfully');
                $('#submitInput').after('<div class="mb-4" style="color: green; text-align: center"><h3 style="color: green; text-align: center">Form submitted successfully</h3></div>');
            </script>
        <?php }
        else{
        ?>
            <script type='text/javascript'>
                alert('Error Submitting the form');
                $('#submitInput').after('<div class="mb-4" style="color: red; text-align: center"><h3 style="color: red; text-align: center">Error Submitting the form</h3></div>');
            </script>
        <?php }
    } ?>
</body>
</html>