<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Bracebrownn </title>
    <link rel='icon' href='#' type='image/x-icon' />
    <!--logo-->

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
    <link href="css/gallery.css?" rel="stylesheet" />
    <link href="css/style.css?" rel="stylesheet" />
    <link href="css/customize.css?" rel="stylesheet" />
    <script src="plugin/modernizr.js?"></script>




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
                                <li><a href="index.html">home</a></li>

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


                    <!-- The four columns -->
                    <div class="row" data-layout="masonry">
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/1.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/2.jpg" alt="Bed Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/3.jpg" alt="Office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/4.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>


                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/6.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/7.jpg" alt="Bed Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/8.jpg" alt="Bed Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/9.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/10.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>

                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/12.jpg" alt="office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bath-room" data-filter="data image bath-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/13.jpg" alt="Bathroom" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image kitchen" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/14.jpg" alt="Kitchen" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image kitchen" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/15.jpg" alt="Kitchen" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/16.jpg" alt="Office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/17.jpg" alt="office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bathroom" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/18.jpg" alt="Bathroom" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/19.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image kitchen" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/20.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/21.jpg" alt="Kitchen" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/23.jpg" alt="Office" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/25.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/26.jpg" alt="Living Room" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/27.jpg" alt="Mountains" style="width:100%" onclick="modals(this);">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item">
                            <img src="images/portfolio/masonry/24.jpg" alt="Lights" style="width:100%" onclick="modals(this);">
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
    <script src="plugin/jquery/jquery-2.0.2.min.js?"></script>

    <script src="plugin/plugin.min.js?"></script>
    <script src="./js/main.js?"></script>

    <script src="plugin/main.js?"></script>
    <script src="plugin/custom.js?"></script>
    <!-- END: SCRIPT -->
</body>


</html>