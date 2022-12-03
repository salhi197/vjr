<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Veille Juridique & Règlementaire </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('vjr2/assets/img/favicon.ico')); ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/slicknav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/style.css')); ?>">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="<?php echo e(asset('vjr2/assets/img/hero/1.jpg')); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <h1>Trouver votre Besoin </h1>
                                    <p>Base de données des lois juridiques et règlements</p>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- form -->
                                <form action="<?php echo e(route('search')); ?>" method="post" class="search-box">
                                    <div class="select-form mb-30">
                                        <div class="select-itms">
                                            <select name="type" id="">
                                                <option value="">Type de Texte</option>
                                                <option value="Accord">Accord</option>
                                                <option value="Avis">Avis</option>
                                                <option value="Code">Code</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-form mb-30">
                                        <input type="text" placeholder="Rechercher...">
                                    </div>


                                    <div class="search-form mb-30">
                                        <button lass="btn btn-success btn-sm" stype="submit">Rechercher</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?php echo e(asset('vjr2/assets/js/vendor/modernizr-3.5.0.min.js')); ?>"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo e(asset('vjr2/assets/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/bootstrap.min.js')); ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?php echo e(asset('vjr2/assets/js/jquery.slicknav.min.js')); ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?php echo e(asset('vjr2/assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/slick.min.js')); ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?php echo e(asset('vjr2/assets/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/animated.headline.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/jquery.magnific-popup.js')); ?>"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?php echo e(asset('vjr2/assets/js/jquery.scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/jquery.sticky.js')); ?>"></script>

    <!-- contact js -->
    <script src="<?php echo e(asset('vjr2/assets/js/contact.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/jquery.form.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/mail-script.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/jquery.ajaxchimp.min.js')); ?>"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?php echo e(asset('vjr2/assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('vjr2/assets/js/main.js')); ?>"></script>

</body>

</html>