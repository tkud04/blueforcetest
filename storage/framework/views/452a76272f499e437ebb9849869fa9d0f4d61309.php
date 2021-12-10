<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <title><?php echo $__env->yieldContent('title'); ?> | Eko Fashion Store - Top Quality Affordable Clothing from Lagos Island</title>



    <!--== Favicon ==-->

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />



    <!--== Google Fonts ==-->

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400i,700,700i" rel="stylesheet">



    <!--== Bootstrap CSS ==-->

    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!--== Font-awesome Icons CSS ==-->

    <link href="css/font-awesome.min.css" rel="stylesheet"/>

    <!--== Icofont Min Icons CSS ==-->

    <link href="css/icofont.min.css" rel="stylesheet"/>

    <!--== lastudioIcons CSS ==-->

    <link href="css/lastudioIcons.css" rel="stylesheet"/>

    <!--== Animate CSS ==-->

    <link href="css/animate.css" rel="stylesheet"/>

    <!--== Aos CSS ==-->
    <link href="css/aos.css" rel="stylesheet"/>

    <!--== FancyBox CSS ==-->
    <link href="css/jquery.fancybox.min.css" rel="stylesheet"/>

    <!--== Slicknav CSS ==-->
    <link href="css/slicknav.css" rel="stylesheet"/>

    <!--== Swiper CSS ==-->
    <link href="css/swiper.min.css" rel="stylesheet"/>

    <!--== Slick CSS ==-->
    <link href="css/slick.css" rel="stylesheet"/>

    <!--== Main Style CSS ==-->
    <link href="css/style.css" rel="stylesheet" />

	<?php echo $__env->yieldContent('styles'); ?>

    <!--=== Modernizr Min Js ===-->
     <script src="js/modernizr.js"></script>

    <!--=== jQuery Min Js ===-->
   <script src="js/jquery-main.js"></script>
   
   <!--=== Popper Min Js ===-->

<script src="js/popper.min.js"></script>

<!--=== Bootstrap Min Js ===-->

<script src="js/bootstrap.min.js"></script>

	<!-- custom js -->
	<script src="<?php echo e(asset('js/helpers.js').'?ver='.rand(56,99999)); ?>"></script>
	<script src="<?php echo e(asset('js/mmm.js').'?ver='.rand(56,99999)); ?>"></script>
	
<?php echo $__env->yieldContent('scripts'); ?>

</head>



<body>



<!--wrapper start-->

<div class="wrapper home-two-wrapper">



  <!--== Start Preloader Content ==-->

  <div class="preloader-wrap">

    <div class="preloader">

      <span class="dot"></span>

      <div class="dots">

        <span></span>

        <span></span>

        <span></span>

      </div>

    </div>

  </div>

  <!--== End Preloader Content ==-->



  <!--== Start Header Wrapper ==-->

  <header class="header-area header-default header-style3 header-transparent sticky-header">

    <div class="container-fluid">

      <div class="row row-gutter-0 align-items-center">

        <div class="col-12">

          <div class="header-align">

            <div class="header-align-left">

              <button class="btn-menu">

                <i class="lastudioicon-menu-3-1"></i>

              </button>

              <div class="header-logo-area">

                <a href="<?php echo e(url('/')); ?>">

                  <img class="logo-main" src="img/logo-main.svg" alt="Logo" />

                  <img class="logo-light" src="img/logo-main-light.svg" alt="Logo" />

                </a>

              </div>

              <div class="header-navigation-area">

                <ul class="main-menu nav justify-content-center position-relative">

                  <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a>
</li>

                  <li class="has-submenu"><a href="<?php echo e(url('shop')); ?>">Shop</a>

                    <ul class="submenu-nav">

                    <?php
					
                     foreach($categories as $c)
                      {
                      	$cu = url('categories')."?xf=".$c['category'];
                    ?>
                      <li><a href="<?php echo e($cu); ?>"><?php echo e($c['name']); ?></a></li>
   
                   <?php
                     }
                    ?>
                    </ul>

                  </li>
                 
                  <li><a href="<?php echo e(url('contact')); ?>">Contact</a></li>

                </ul>

              </div>

            </div>

            <div class="header-align-right">

              <div class="header-action-area">

                <div class="header-action-search">

                  <button class="btn-search btn-search-menu">

                    <i class="lastudioicon-zoom-1"></i>

                  </button>

                </div>

                <div class="header-action-login">

                  <button class="btn-login" onclick="window.location.href='login.html'">

                    <i class="lastudioicon-single-01-2"></i>

                  </button>

                </div>

                <div class="header-action-cart">

                  <button class="btn-cart cart-icon">

                    <span class="cart-count">2</span>

                    <i class="lastudioicon-shopping-cart-2"></i>

                  </button>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </header>

  <!--== End Header Wrapper ==-->
  
   <main class="main-content">
   </main>
   
  <!--== Start Footer Area Wrapper ==-->

  <footer class="footer-area footer-style2">

    <div class="footer-main">

      <div class="container">

        <div class="row row-gutter-0">

          <div class="col-md-4 col-lg-4">

            <div class="footer-logo-area">

              <a href="index.html">

                <img class="logo-main" src="img/logo-main-light.svg" alt="Logo" />

              </a>

              <p>His verterem consectetuer consequuntur ne, no <br>virtute atomoru molestie</p>

            </div>

          </div>

          <div class="col-md-4 col-lg-2">

            <div class="widget-item mt-sm-40">

              <h4>COMPANY</h4>

              <nav class="widget-menu-wrap">

                <ul class="nav-menu nav">

                  <li><a href="about.html">About Us</a></li>

                  <li><a href="index.html">Our Studio</a></li>

                  <li><a href="Contact.html">Contact Us</a></li>

                </ul>

              </nav>

            </div>

            <div class="widget-item widget-item-style2 mb-sm-30">

              <h4>USEFUL</h4>

              <nav class="widget-menu-wrap">

                <ul class="nav-menu nav">

                  <li><a href="index.html">Help Center</a></li>

                  <li><a href="index.html">Affiliate Program</a></li>

                  <li><a href="index.html">Services</a></li>

                  <li><a href="index.html">Terms & Conditions</a></li>

                </ul>

              </nav>

            </div>

          </div>

          <div class="col-md-4 col-lg-3">

            <div class="widget-item">

              <h4>CATEGORIES</h4>

              <nav class="widget-menu-wrap menu-col-2">

                <ul class="nav-menu nav">

                  <li><a href="shop.html">All</a></li>

                  <li><a href="shop.html">Earrings</a></li>

                  <li><a href="shop.html">Necklaces</a></li>

                </ul>

                <ul class="nav-menu nav">

                  <li><a href="shop.html">Rings</a></li>

                  <li><a href="shop.html">Bracelets</a></li>

                  <li><a href="shop.html">Hair</a></li>

                </ul>

              </nav>

            </div>

            <div class="widget-item widget-item-style2">

              <h4>HOT TAGS</h4>

              <nav class="widget-menu-wrap menu-col-2">

                <ul class="nav-menu nav">

                  <li><a href="blog.html">#Always Elegant</a></li>

                  <li><a href="blog.html">#Garden Child</a></li>

                  <li><a href="blog.html">#Girl Gang</a></li>

                  <li><a href="blog.html">#A Love Story</a></li>

                </ul>

                <ul class="nav-menu nav">

                  <li><a href="blog.html">#Dainty</a></li>

                  <li><a href="blog.html">#Galactic Babe</a></li>

                  <li><a href="blog.html">#Animal Lover</a></li>

                  <li><a href="blog.html">#Creative Spirit</a></li>

                </ul>

              </nav>

            </div>

          </div>

          <div class="col-lg-3 d-block d-md-none d-lg-block">

            <div class="widget-item mt-sm-40">

              <h4>ON SOCIAL NETWORKS</h4>

              <div class="widget-social-icons">

                <a href="#/"><i class="lastudioicon lastudioicon-b-facebook"></i></a> 

                <a href="#/"><i class="lastudioicon lastudioicon-b-pinterest"></i></a>

                <a href="#/"><i class="lastudioicon lastudioicon-b-twitter"></i></a>

                <a href="#/"><i class="lastudioicon lastudioicon-b-instagram"></i></a>

              </div>

            </div>

            <div class="widget-item widget-item-style3">

              <h4>CONTACT INFO</h4>

              <ul class="widget-contact-info">

                <li><a href="tel://+54.8638.8583.43">Phone: +54.8638.8583.43</a></li>

                <li><a href="mailto://info@la-studioweb.com">Email: info@la-studioweb.com</a></li>

                <li><a href="contact.html">Open time: 9:00 - 19:00, Monday - Saturday</a></li>

                <li class="info-address"><a href="contact.html">Local: 121 King Street, Melbourne Victoria 3000 Australia</a></li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </div>

  </footer>

  <!--== End Footer Area Wrapper ==-->

  

  <!--== Scroll Top Button ==-->

  <div class="scroll-to-top"><span class="icofont-arrow-up"></span></div>



  <!--== Start Product Quick View ==-->

  <aside class="product-quick-view-modal">

    <div class="product-quick-view-inner">

      <div class="product-quick-view-content">

        <button type="button" class="btn-close">

          <span class="close-icon"><i class="lastudioicon-e-remove"></i></span>

        </button>

        <div class="row row-gutter-0">

          <div class="col-lg-6 col-md-6 col-12">

            <div class="thumb">

              <img src="img/shop/quick-view1.jpg" alt="Moren-Shop">

            </div>

          </div>

          <div class="col-lg-6 col-md-6 col-12">

            <div class="single-product-info">

              <h4 class="title">Product Simple</h4>

              <div class="product-rating">

                <div class="review">

                  <p><span></span>99 in stock</p>

                </div>

              </div>

              <div class="prices">

                <span class="price">£49.90</span>

              </div>

              <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>

              <div class="quick-product-action">

                <div class="action-top">

                  <div class="pro-qty-area">

                    <div class="pro-qty">

                      <input type="text" id="quantity" title="Quantity" value="1">

                    <a href="#" class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a></div>

                  </div>

                  <a class="btn-theme btn-black" href="shop-cart.html">Add to cart</a>

                </div>

                <div class="action-bottom">

                  <a class="btn-wishlist" href="shop-wishlist.html"><i class="labtn-icon labtn-icon-wishlist"></i>Add to wishlist</a>

                  <a class="btn-compare" href="shop-compare.html"><i class="labtn-icon labtn-icon-compare"></i>Add to compare</a>

                </div>

              </div>

              <div class="product-ratting">

                <div class="product-sku">

                  SKU: <span>REF. LA-276</span>

                </div>

              </div>

              <div class="product-categorys">

                <div class="product-category">

                  Category: <span>Uncategorized</span>

                </div>

              </div>

              <div class="widget">

                <h3 class="title">Tags:</h3>

                <div class="widget-tags">

                  <ul>

                    <li><a href="shop.html">Blazer,</a></li>

                    <li><a href="shop.html">Fashion,</a></li>

                    <li><a href="shop.html">wordpress,</a></li>

                  </ul>

                </div>

              </div>

              <div class="product-social-info">

                <a href="#"><span class="lastudioicon-b-facebook"></span></a>

                <a href="#"><span class="lastudioicon-b-twitter"></span></a>

                <a href="#"><span class="lastudioicon-b-linkedin"></span></a>

                <a href="#"><span class="lastudioicon-b-pinterest"></span></a>

              </div>

              <div class="product-nextprev">

                <a href="shop-single-product.html">

                  <i class="lastudioicon-arrow-left"></i>

                </a>

                <a href="shop-single-product.html">

                  <i class="lastudioicon-arrow-right"></i>

                </a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="canvas-overlay"></div>

  </aside>

  <!--== End Product Quick View ==-->



  <!--== Start Aside Search Menu ==-->

  <div class="search-box-wrapper">

    <div class="search-box-content-inner">

      <div class="search-box-form-wrap">

        <div class="search-note">

          <p>Start typing and press Enter to search</p>

        </div>

        <form action="#" method="post">

          <div class="search-form position-relative">

            <label for="search-input" class="sr-only">Search</label>

            <input type="search" class="form-control" placeholder="Search" id="search-input">

            <button class="search-button"><i class="lastudioicon-zoom-1"></i></button>

          </div>

        </form>

      </div>

    </div>

    <!--== End Aside Search Menu ==-->

    <a href="javascript:;" class="search-close"><i class="lastudioicon-e-remove"></i></a>

  </div>

  <!--== End Aside Search Menu ==-->



  <!--== Start Sidebar Cart Menu ==-->

  <aside class="sidebar-cart-modal">

    <div class="sidebar-cart-inner">

      <div class="sidebar-cart-content">

        <a class="cart-close" href="javascript:void(0);"><i class="lastudioicon-e-remove"></i></a>

        <div class="sidebar-cart">

          <h4 class="sidebar-cart-title">Shopping Cart</h4>

          <div class="product-cart">

            <div class="product-cart-item">

              <div class="product-img">

                <a href="shop.html"><img src="img/shop/cart/1.jpg" alt=""></a>

              </div>

              <div class="product-info">

                <h4 class="title"><a href="shop.html">I’m a Unicorn Earrings</a></h4>

                <span class="info">1 × £69.00</span>

              </div>

              <div class="product-delete"><a href="#/">×</a></div>

            </div>

            <div class="product-cart-item">

              <div class="product-img">

                <a href="shop.html"><img src="img/shop/cart/2.jpg" alt=""></a>

              </div>

              <div class="product-info">

                <h4 class="title"><a href="shop.html">Knit cropped cardigan</a></h4>

                <span class="info">1 × £29.90</span>

              </div>

              <div class="product-delete"><a href="#/">×</a></div>

            </div>

          </div>

          <div class="cart-total">

            <h4>Subtotal: <span class="money">£98.90</span></h4>

          </div>

          <div class="shipping-info">

            <div class="loading-bar">

              <div class="load-percent"></div>

              <div class="label-free-shipping">

                <div class="free-shipping svg-icon-style">

                  <span class="svg-icon" id="svg-icon-shipping" data-svg-icon="img/icons/shop1.svg"></span>

                </div>

                <p>Spend £101.10 to get Free Shipping</p>

              </div>

            </div>

          </div>

          <div class="cart-checkout-btn">

            <a class="btn-theme" href="shop-cart.html">View cart</a>

            <a class="btn-theme" href="shop-checkout.html">Checkout</a>

          </div>

        </div>

      </div>

    </div>

  </aside>

  <div class="sidebar-cart-overlay"></div>

  <!--== End Sidebar Cart Menu ==-->



  <!--== Start Side Menu ==-->

  <aside class="off-canvas-wrapper canvas-fullpage-menu">

    <div class="off-canvas-inner">

      <div class="off-canvas-overlay"></div>

      <!-- Start Off Canvas Content Wrapper -->

      <div class="off-canvas-content">

        <!-- Off Canvas Header -->

        <div class="off-canvas-header">

          <div class="close-action">

            <button class="btn-close"><i class="lastudioicon-e-remove"></i></button>

          </div>

        </div>



        <div class="off-canvas-item">

          <!-- Start Mobile Menu Wrapper -->

          <div class="res-mobile-menu">

            <!-- Note Content Auto Generate By Jquery From Main Menu -->

          </div>

          <!-- End Mobile Menu Wrapper -->

        </div>

        <!-- Off Canvas Footer -->

        <div class="off-canvas-footer"></div>

      </div>

      <!-- End Off Canvas Content Wrapper -->

    </div>

  </aside>

  <!--== End Side Menu ==-->

</div>



<!--=======================Javascript============================-->





<!--=== jQuery Migration Min Js ===-->

<script src="js/jquery-migrate.js"></script>


<!--=== jquery Appear Js ===-->

<script src="js/jquery.appear.js"></script>

<!--=== jquery Swiper Min Js ===-->

<script src="js/swiper.min.js"></script>

<!--=== jquery Fancybox Min Js ===-->

<script src="js/fancybox.min.js"></script>

<!--=== jquery Aos Min Js ===-->

<script src="js/aos.min.js"></script>

<!--=== jquery Slicknav Js ===-->

<script src="js/jquery.slicknav.js"></script>

<!--=== jquery Countdown Js ===-->

<script src="js/jquery.countdown.min.js"></script>

<!--=== jquery Tippy Js ===-->

<script src="js/tippy.all.min.js"></script>

<!--=== Isotope Min Js ===-->

<script src="js/isotope.pkgd.min.js"></script>

<!--=== jquery Vivus Js ===-->

<script src="js/vivus.js"></script>

<!--=== Parallax Min Js ===-->

<script src="js/parallax.min.js"></script>

<!--=== Slick  Min Js ===-->

<script src="js/slick.min.js"></script>

<!--=== jquery Wow Min Js ===-->

<script src="js/wow.min.js"></script>

<!--=== jquery Zoom Min Js ===-->

<script src="js/jquery-zoom.min.js"></script>



<!--=== Custom Js ===-->

<script src="js/custom.js"></script>



</body>



</html>
<?php /**PATH C:\bkupp\lokl\repo\ekofashionstore\resources\views/layout.blade.php ENDPATH**/ ?>