<?php
require_once("config/conexion.php");
require_once("models/Socialmedia.models.php");
$socialmedia = new Socialmedia();
$smx = $socialmedia->get_socialmedia();

require_once("models/Lenguaje.models.php");
$lenguje = new Lenguajemodels();
$lenx = $lenguje->get_lenguaje();

require_once("models/curso.models.php");

$curso = new ModelsCursos();
$curdesx = $curso->get_cursosDestacados();
$curx = $curso->get_cursos();
?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/widgets.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="circle"></div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">


    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="index.html"><img class="logo" src="assets/imgs/theme/logo.png" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center position-relative">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li> <a href="#">Inicio</a> </li>
                            <?php
                            foreach ($lenx as $mtr_leng) {
                            ?>
                                <li> <a href="#"><?php echo $mtr_leng['len_nom']; ?></a> </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">

                            <li class="menu-item-has-children"> <a href="#">Inicio</a> </li>
                            <?php
                            foreach ($lenx as $mtr_leng) {
                            ?>
                                <li class="menu-item-has-children"> <a href="#"><?php echo $mtr_leng['len_nom']; ?></a> </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <?php
                        foreach ($smx as $media) {
                        ?>
                            <li class="list-inline-item"><a class="social-icon <?php echo $media["sm_icon1"]; ?> text-xs-center" target="_blank" href="<?php echo $media["sm_rutaweb"]; ?>"><i class="elegant-icon <?php echo $media["sm_icon2"]; ?> "></i></a></li>
                        <?php
                        }
                        ?>

                    </ul>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>

    <!-- Start Main content -->
    <main>
        <div class="featured-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="text-muted"><span class="typewrite d-inline" data-period="2000" data-type='[ " Desarollador ", "Ingeniero de sistemas ", "Analista de sistemas " ]'></span></p>
                        <h2>Hola, soy <span>Juan Carlos </span></h2>
                        <h3 class="mb-20"> Bien venido a mi blog</h3>
                        <h5 class="text-muted">Don't miss out on the latest news about Travel tips, Hotels review, Food guide...</h5>

                    </div>
                    <div class="col-lg-6 text-right d-none d-lg-block">
                        <img src="assets/imgs/authors/featured.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Cursos</h5>
                        </div>
                        <div class="col-md-8 text-md-right font-small align-self-center">
                            <p class="d-inline-block mr-5 mb-0"><i class="elegant-icon  icon_tag_alt mr-5 text-muted"></i> tags:</p>
                            <ul class="list-inline d-inline-block tags">
                                <li class="list-inline-item"><a href="#"># PHP</a></li>
                                <li class="list-inline-item"><a href="#"># Laravel</a></li>
                                <li class="list-inline-item"><a href="#"># Node</a></li>
                                <li class="list-inline-item"><a href="#"># Mysql</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                                <?php
                                foreach ($curdesx as $todosCursos) {


                                ?>
                                    <div class="position-relative post-thumb">

                                        <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/banner/<?= $todosCursos['cur_img']; ?>)">
                                            <a class="img-link" target="_blank" href="<?= $todosCursos['cur_url']; ?>"></a>

                                            <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                                <div class="entry-meta meta-0 font-small mb-20">
                                                    <?php
                                                    $datos = $curso->get_curso_x_etiqueta($todosCursos['cur_id']);
                                                      foreach($datos as $item){

                                                      
                                                    ?>
                                                    <a href="category.html"><span class="post-cat text-white text-uppercase"><strong><?=$item['det_nom'];?></strong></span></a>
                                                     <?php
                                                     }
                                                     ?>
                                                   
                                                    
                                                </div>
                                                <h3 class="post-title font-weight-900 mb-20">
                                                    <a class="text-white" href="#"><?= $todosCursos['cur_titulo'] ?></a>
                                                    <p class="text-white" href="#"><?= $todosCursos['cur_subtitulo'] ?></p>
                                                </h3>

                                            </div>
                                        </div>

                                    </div>
                                <?php
                                }
                                ?>
                                <!-- <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/banner/2.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                                <a href="category.html"><span class="post-cat text-info text-uppercase">PHP</span></a>
                                                <a href="category.html"><span class="post-cat text-success text-uppercase">HTML5</span></a>
                                                <a href="category.html"><span class="post-cat text-success text-uppercase">CSS</span></a>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="single.html">Beachmaster Elephant Seal Fights off Rival Male, The match is uncompromising</a>
                                            </h3>
                                         
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <?php foreach($curx as $cursos){?>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                          
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/banner/<?=$cursos['cur_img'];?>)">
                                <a class="img-link" target="_blank" href="<?=$cursos['cur_url'];?>"></a>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <?php 
                                   $datoss = $curso->get_curso_x_etiqueta($cursos['cur_id']);
                                    foreach($datoss as $itemm){
                                    ?>
                                    <a href="#"><span class="post-cat text-info"><?=$itemm['det_nom'];?></span></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="<?=$cursos['cur_url'];?>" target="_blank"><?=$cursos['cur_titulo'];?></a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on"><?=date("d/m/Y",strtotime($cursos['fech_crea']));?></span>

                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </article>
                    <?php } ?>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-7.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-warning">Fashion</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Put Yourself in Your Customers Shoes</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">17 July</span>
                                        <span class="time-reading has-dot">8 mins read</span>
                                        <span class="post-by has-dot">12k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- 
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-9.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Life and Death in the Empire of the Tiger</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">7 August</span>
                                        <span class="time-reading has-dot">15 mins read</span>
                                        <span class="post-by has-dot">500 views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/news/news-11.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <span class="top-right-icon bg-info"><i class="elegant-icon icon_headphones"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-success">Lifestyle</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">When Two Wheels Are Better Than Four</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">15 Jun</span>
                                        <span class="time-reading has-dot">9 mins read</span>
                                        <span class="post-by has-dot">1.2k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article> -->
                </div>
            </div>
        </div>

    </main>
    <!-- End Main content -->

    <!--end site-bottom-->
    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sidebar-widget wow fadeInUp animated mb-30 text-center">

                        <div class="textwidget">

                            <p><strong class="color-black">sigueme</strong><br>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <?php
                                foreach ($smx as $media) {
                                ?>

                                    <li class="list-inline-item"><a class="<?php echo $media["sm_icon1"]; ?>" href="<?php echo $media["sm_rutaweb"]; ?>" target="_blank" title="<?php echo $media['sm_nom']; ?>"><i class="elegant-icon <?php echo $media["sm_icon2"]; ?>"></i></a></li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>



            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted">© 2023, Juan Carlos Mamani Gutierrez </p>
                <p class="float-md-right font-small text-muted">
                    juan carlos <a href="https://alithemes.com" target="_blank">AliThemes</a> | All rights reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery.slicknav.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/jquery.ticker.js"></script>
    <script src="assets/js/vendor/jquery.vticker-min.js"></script>
    <script src="assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="assets/js/vendor/jquery.sticky.js"></script>
    <script src="assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>