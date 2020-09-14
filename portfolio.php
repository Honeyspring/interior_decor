<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Bracebrownn </title>

    <link href="css/animate.min.css?" rel="stylesheet" />

    <link href="plugin/main.min.css?" rel="stylesheet" />



    <!-- import css →-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link href="css/style.min.css?" rel="stylesheet" />
</head>

<body>
    <div class=" main-wrapper">

        <?php include('./header.html') ?>

        <!--./vk-header-->

        <section class="vk-content ">
            <div class="vk-banner vk-background-image-2">
                <div class="vk-background-overlay vk-background-black _70"></div>
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
                            <li data-filter=".exterior">Exterior</li>
                            <li data-filter=".living-room">Living room</li>
                            <li data-filter=".bed-room">Bed room</li>
                            <li data-filter=".kitchen">Kitchen</li>
                            <li data-filter=".dining">Dining</li>
                            <li data-filter=".office">Office</li>
                            <li data-filter=".bathroom">Bathroom</li>
                        </ul>


                        <div class="vk-filtter-dropdown-box">
                            <select name="" id="" class="form-control vk-filtter-dropdown hidden-md hidden-lg" data-filter-button="default">
                                <option value="*">All</option>
                                <option value=".exterior">Exterior</option>
                                <option value=".living-room">Living room</option>
                                <option value=".bed-room">Bed room</option>
                                <option value=".kitchen">Kitchen</option>
                                <option value=".dining">Dining</option>
                                <option value=".office">Office</option>
                                <option value=".bathroom">Bathroom</option>
                            </select>
                        </div>


                    </div>
                    <!--./vk-filter-box-->

                    <!-- Grid row -->


                    <!-- The columns -->
                    <div class="row" data-layout="masonry" data-target="#modal" data-toggle="modal">

                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item">
                            <a href="images/portfolio/living (1).webp" data-toggle="lightbox" data-footer="Living  Room">

                                <img src="images/portfolio/living (1).webp" alt="Living Room" style="width:100%">

                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="1">
                            <a href="images/portfolio/bedroom.webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bed Room">

                                <img src=" images/portfolio/bedroom.webp" alt="Bed Room" style="width:100%">
                            </a>
                        </div>
                       

                        <div class="col-md-3  col-xs-6 column data image exterior" data-filter="data image exterior" data-layout="masonry-item" data-target="#carousel" data-slide-to="3">
                            <a href="images/portfolio/exterior.webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Exterior Design">

                                <img src="images/portfolio/exterior.webp" alt="Exterior Design" style="width:100%">
                            </a>
                        </div>


                        <div class="col-md-3  col-xs-6 column data image bathroom" data-filter="data image bath-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="4">
                            <a href="images/portfolio/bathroom (2).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bath Room">

                                <img src="images/portfolio/bathroom (2).webp" alt="Bath Room" style="width:100%">
                            </a>
                        </div>

                        <div class="col-md-3  col-xs-6 column data image exterior" data-filter="data image exterior" data-layout="masonry-item" data-target="#carousel" data-slide-to="3">
                            <a href="images/portfolio/exterior2.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Exterior Design">

                                <img src="images/portfolio/exterior2.jpg" alt="Exterior Design" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="5">
                            <a href="images/portfolio/office (7).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">

                                <img src="images/portfolio/office (7).webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bathroom" data-filter="data image bath-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="6">
                            <a href="images/portfolio/bathroom2.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bath Room">

                                <img src="images/portfolio/bathroom2.jpg" alt="Bath Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="7">
                            <a href="images/portfolio/office2.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">

                                <img src="images/portfolio/office2.jpg" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="8">
                            <a href="images/portfolio/office.webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">
                                <img src="images/portfolio/office.webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="9">
                            <a href="images/portfolio/living (5).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (5).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="10">
                            <a href="images/portfolio/bedroom (3).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bed Room">
                                <img src="images/portfolio/bedroom (3).webp" alt="Bed Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="11">
                            <a href="images/portfolio/office (1).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Office">
                                <img src="images/portfolio/office (1).webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="12">
                            <a href="images/portfolio/office3.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">

                                <img src="images/portfolio/office3.jpg" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="13">
                            <a href="images/portfolio/living (6).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (6).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="14">
                            <a href="images/portfolio/office (9).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">
                                <img src="images/portfolio/office (9).webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="15">
                            <a href="images/portfolio/office (6).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">
                                <img src="images/portfolio/office (6).webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="16">
                            <a href="images/portfolio/bedroom3.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bed Room">
                                <img src="images/portfolio/bedroom3.jpg" alt="Bed Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="17">
                            <a href="images/portfolio/bedroom2.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bed Room">
                                <img src="images/portfolio/bedroom2.jpg" alt="Bed Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="18">
                            <a href="images/portfolio/office (8).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Office">
                                <img src="images/portfolio/office (8).webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="19">
                            <a href="images/portfolio/bedroom (4).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="BedRoom">
                                <img src="images/portfolio/bedroom (4).webp" alt="Bed Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="20">
                            <a href="images/portfolio/office (10).webpp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Office">
                                <img src="images/portfolio/office (10).webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="21">
                            <a href="images/portfolio/office4.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">

                                <img src="images/portfolio/office4.jpg" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="22">
                            <a href="images/portfolio/living (8).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (8).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="23">
                            <a href="images/portfolio/living (9).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (9).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>


                        <div class="col-md-3  col-xs-6 column data image bath-room" data-filter="data image bath-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="24">
                            <a href="images/portfolio/bathroom.webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bath Room">
                                <img src="images/portfolio/bathroom.webp" alt="Bathroom" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image dining" data-filter="data image dining" data-layout="masonry-item" data-target="#carousel" data-slide-to="25">
                            <a href="images/portfolio/dining.webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Dining">
                                <img src="images/portfolio/dining.webp" alt="Dining" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image kitchen" data-layout="masonry-item" data-target="#carousel" data-slide-to="26">
                            <a href="images/portfolio/kitchen (2).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Kitchen">
                                <img src="images/portfolio/kitchen (2).webp" alt="Kitchen" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image kitchen" data-layout="masonry-item" data-target="#carousel" data-slide-to="27">
                            <a href="images/portfolio/kitchen2.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Kitchen">
                                <img src="images/portfolio/kitchen2.jpg" alt="Kitchen" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image dining" data-filter="data image dining" data-layout="masonry-item" data-target="#carousel" data-slide-to="28">
                            <a href="images/portfolio/dining2.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Dining">
                                <img src="images/portfolio/dining2.jpg" alt="Dining" style="width:100%">
                            </a>
                        </div>
                       
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="29">
                            <a href="images/portfolio/living (16).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (16).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="30">
                            <a href="images/portfolio/office5.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">

                                <img src="images/portfolio/office5.jpg" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image kitchen" data-layout="masonry-item" data-target="#carousel" data-slide-to="31">
                            <a href="images/portfolio/kitchen3.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Kitchen">
                                <img src="images/portfolio/kitchen3.jpg" alt="Kitchen" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="32">
                            <a href="images/portfolio/living.webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living.webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="33">
                            <a href="images/portfolio/office (3).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Office">
                                <img src="images/portfolio/office (3).webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="34">
                            <a href="images/portfolio/office (4).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Office">
                                <img src="images/portfolio/office (4).webp" alt="office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="35">
                            <a href="images/portfolio/living3.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living3.jpg" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="36">
                            <a href="images/portfolio/living (3).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (3).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bathroom" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="26">
                            <a href="images/portfolio/bathroom.webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bathroom">
                                <img src="images/portfolio/bathroom.webp" alt="Bathroom" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="37">
                            <a href="images/portfolio/office6.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="office">

                                <img src="images/portfolio/office6.jpg" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="38">
                            <a href="images/portfolio/living (10).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (10).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="39">
                            <a href="images/portfolio/living4.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living4.jpg" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image kitchen" data-layout="masonry-item" data-target="#carousel" data-slide-to="40">
                            <a href="images/portfolio/living (11).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (11).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image kitchen" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="41">
                            <a href="images/portfolio/kitchen.webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Kitchen">
                                <img src="images/portfolio/kitchen.jpg" alt="Kitchen" style="width:100%">
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="42">
                            <a href="images/portfolio/living5.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living5.jpg" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image office" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="43">
                            <a href="images/portfolio/office (5).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Office">
                                <img src="images/portfolio/office (5).webp" alt="Office" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image office" data-layout="masonry-item" data-target="#carousel" data-slide-to="44">
                            <a href="images/portfolio/living (12).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (12).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="45">
                            <a href="images/portfolio/living (13).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (13).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="46">
                            <a href="images/portfolio/living6.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living6.jpg" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="47">
                            <a href="images/portfolio/bedroom (7).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bedroom">
                                <img src="images/portfolio/bedroom (7).webp" alt="Bed Room" style="width:100%" onclick="modals() ;current(32);">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="48">
                            <a href="images/portfolio/living (14).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (14).webp" alt="Mountains" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image living-room" data-filter="data image living-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="49">
                            <a href="images/portfolio/living (15).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Living Room">
                                <img src="images/portfolio/living (15).webp" alt="Living Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="50">
                            <a href="images/portfolio/bedroom (6).webp" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bedroom">
                                <img src="images/portfolio/bedroom (6).webp" alt="Bedroom" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image dining" data-filter="data image dining" data-layout="masonry-item" data-target="#carousel" data-slide-to="51">
                            <a href="images/portfolio/dining3.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Dining">
                                <img src="images/portfolio/dining3.jpg" alt="Dining" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="52">
                            <a href="images/portfolio/bedroom.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bed Room">

                                <img src=" images/portfolio/bedroom.jpg" alt="Bed Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image dining" data-filter="data image dining" data-layout="masonry-item" data-target="#carousel" data-slide-to="53">
                            <a href="images/portfolio/dining4.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Dining">
                                <img src="images/portfolio/dining4.jpg" alt="Dining" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image dining" data-filter="data image dining" data-layout="masonry-item" data-target="#carousel" data-slide-to="54">
                            <a href="images/portfolio/dining5.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Dining">
                                <img src="images/portfolio/dining5.jpg" alt="Dining" style="width:100%">
                            </a>
                    </div>
                    <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="55">
                            <a href="images/portfolio/bedroom1.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bed Room">

                                <img src=" images/portfolio/bedroom1.jpg" alt="Bed Room" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-3  col-xs-6 column data image dining" data-filter="data image dining" data-layout="masonry-item" data-target="#carousel" data-slide-to="56">
                            <a href="images/portfolio/dining6.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Dining">
                                <img src="images/portfolio/dining6.jpg" alt="Dining" style="width:100%">
                            </a>
                    </div>
                    <div class="col-md-3  col-xs-6 column data image bed-room" data-filter="data image bed-room" data-layout="masonry-item" data-target="#carousel" data-slide-to="55">
                            <a href="images/portfolio/bedroom8.jpg" data-toggle="lightbox" data-gallery="image-gallery" data-footer="Bed Room">

                                <img src=" images/portfolio/bedroom8.jpg" alt="Bed Room" style="width:100%">
                            </a>
                        </div>
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
    <!--script src="./js/main.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true,
                    showArrows: true,
                });
            });
        });
    </script>
    <script src="plugin/plugin.min.js"></script>

    <script src="plugin/main.min.js"></script>
    <!-- END: SCRIPT -->
</body>


</html>