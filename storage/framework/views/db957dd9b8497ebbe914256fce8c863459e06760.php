<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Résultat de la recherche </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('vjr2/assets/img/favicon.png')); ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/slicknav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vjr2/assets/css/responsive.css')); ?>">
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
    <!-- Preloader Start-->
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <a href="#" class="blog_item_date">
                                    <h5 class="blog_item_date1">Nombre des Résultat : <?php echo e(count($results)); ?></h5>
                                   
                                </a>
                            </div>
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php echo e(route('reglement.view',['reglement'=>$result->id])); ?>">
                                        <h2><?php echo e($result->titre); ?></h2>
                                    </a>
                                    <p><?php echo e($result->contenu ?? ''); ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> <?php echo e($result->type); ?></a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> <?php echo e($result->secteur); ?></a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> <?php echo e($result->organisme); ?></a></li>
                                        <li><a href="<?php echo e(route('reglement.view',['reglement'=>$result->id])); ?>">Lire la suite <i class="fa fa-arrow-alt-circle-right"></i> </a></li>
                                    </ul>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if(count($results)== 0): ?>
                            <div class="blog_item_img">
                                <a href="#" class="blog_item_date">
                                    <h5 class="blog_item_date1">Pas De Résultats</h5>
                                </a>
                            </div>                  
                            <?php endif; ?>

                            
                        </article>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                
                
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">


                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Secteurs</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Administration</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Agronimie</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Bourse</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Commerce</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>

                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Derniers Règlements</h3>
                            <div class="media post_item">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    <!-- JS here -->

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