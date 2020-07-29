<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Bracebrownn</title>
    <link rel='icon' href='images/logo/logo.png' type='image/x-icon' />
    <link href="plugin/fonts/transfonter/fonts.css" rel="stylesheet" />
    <link href="plugin/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="plugin/fonts/platicon/font/flaticon.css" rel="stylesheet" />
    <link href="plugin/fonts/themify/themify-icons.css" rel="stylesheet" />
    <link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="plugin/animsition/css/animsition.min.css" rel="stylesheet" />
    <link href="plugin/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="plugin/slick/slick.css" rel="stylesheet" />
    <link href="plugin/player/mediaelementplayer.css" rel="stylesheet" />
    <link href="plugin/jquery-ui/jquery-ui.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />
    <link href="css/customize.css" rel="stylesheet" />
    <script src="plugin/modernizr.js"></script>





</head>

<body>
    <div class="animsition main-wrapper">

        <?php include('./header.html') ?>

        <!--./vk-header-->

        <section class="vk-content ">
            <div class="vk-banner vk-background-image-2">
                <div class="vk-background-overlay vk-background-black _90"></div>
                <div class="container">
                    <div class="vk-banner-wrapper">
                        <div class="page-heading text-center">
                            Portfolio
                        </div>

                        <div class="vk-breadcrumb">
                            <ul class="">
                                <li><a href="index.php">home</a></li>

                                <li class="active"><a href="portfolio.php">Portfolio</a></li>
                            </ul>
                        </div>
                        <!--./vk-breadcrumb-->
                    </div>
                    <!--./vk-banner-wrapper-->
                </div>
            </div>
            <!--./vk-banner-->

            <div class="vk-page portfolio portfolio-masonry">
                <div class="container">
                    <div class="vk-filter-box">
                        <ul class="vk-list vk-list-inline vk-list-filter vk-filter-left hidden-xs hidden-sm" data-list-active="true" data-filter-button="default">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".living-room">Living room</li>
                            <li data-filter=".bed-room">Bed room</li>
                            <li data-filter=".kitchen">Kitchen</li>
                            <li data-filter=".office">Office</li>
                            <li data-filter=".bathroom">Bathroom</li>
                        </ul>


                        <div class="vk-filtter-dropdown-box">
                            <select name="" id="" class="form-control vk-filtter-dropdown hidden-md hidden-lg" data-filter-button="default">
                                <option value="*">All</option>
                                <option value=".living-room">Living room</option>
                                <option value=".bed-room">Bed room</option>
                                <option value=".kitchen">Kitchen</option>
                                <option value=".office">Office</option>
                                <option value=".bathroom">Bathroom</option>
                            </select>
                        </div>


                    </div>
                    <!--./vk-filter-box-->

                    <!-- Grid row -->


                    <!-- The columns -->
                    <div class="row" data-layout="masonry">

                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (1).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/bedroom.webp" alt="Bed Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/office (6).webp" alt="Office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/bedroom (1).webp" alt="Bedroom" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (2).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>


                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (3).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>

                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/bedroom (2).webp" alt="Bed Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (4).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/office.jpg" alt="Office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (5).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/bedroom (3).webp" alt="Bed Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/office (1).webp" alt="Office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (6).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>


                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (7).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/bedroom (4).webp" alt="Bed Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/bedroom (5).webp" alt="Bed Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (8).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (9).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>

                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/office (2).webp" alt="office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bath-room" data-filter="data image bath-room" data-layout="masonry-item">
                            <img src="images/portfolio/bathroom.webp" alt="Bathroom" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image kitchen" data-layout="masonry-item">
                            <img src="images/portfolio/kitchen (1).webp" alt="Kitchen" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image kitchen" data-layout="masonry-item">
                            <img src="images/portfolio/kitchen (2).webp" alt="Kitchen" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/office (3).webp" alt="Office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/office (4).webp" alt="office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bathroom" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/bathroom.webp" alt="Bathroom" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (10).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image kitchen" data-layout="masonry-item">
                            <img src="images/portfolio/living (11).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/kitchen.jpg" alt="Kitchen" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/office (5).webp" alt="Office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/living (12).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (13).webp" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living (14).webp" alt="Mountains" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/living.webp" alt="Lights" style="width:100%" onclick="modals(this);">
                        </div>
                    </div>

                    <div class="modal" id="modal">
                        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                        <div class="modal-content ">
                            <img id="expandedImg" style="width:100%">

                            <div class="overlay" id="imgtext"></div>
                        </div>

                    </div>

                </div>

            </div>
            <!--./container-->
    </div>
    <!--./vk-page-->
    </section>
    <!--./content-->

    <footer class="vk-footer vk-footer-style-1" id="footer">
        <?php include('./footer.html') ?>
    </footer>
    <!--./vk-footer-->
    </div>
    <!--./main-wrapper-->

    <!-- BEGIN: SCRIPT -->
    <script src="plugin/jquery/jquery-2.0.2.min.js"></script>

    <script src="plugin/plugin.min.js"></script>
    <script src="./js/main.js"></script>

    <script src="plugin/main.js"></script>
    <script src="plugin/custom.js"></script>
    <!-- END: SCRIPT -->
</body>


</html>