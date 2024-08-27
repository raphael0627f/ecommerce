<div>

    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Charme Jóias</title>
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="template/media/favicon.png">

        <!-- Dependency Styles -->
        <link rel="stylesheet" href="template/libs/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="template/libs/feather-font/css/iconfont.css" type="text/css">
        <link rel="stylesheet" href="template/libs/icomoon-font/css/icomoon.css" type="text/css">
        <link rel="stylesheet" href="template/libs/font-awesome/css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="template/libs/wpbingofont/css/wpbingofont.css" type="text/css">
        <link rel="stylesheet" href="template/libs/elegant-icons/css/elegant.css" type="text/css">
        <link rel="stylesheet" href="template/libs/slick/css/slick.css" type="text/css">
        <link rel="stylesheet" href="template/libs/slick/css/slick-theme.css" type="text/css">
        <link rel="stylesheet" href="template/libs/mmenu/css/mmenu.min.css" type="text/css">

        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="template/assets/css/app.css" type="text/css">
        <link rel="stylesheet" href="template/assets/css/responsive.css" type="text/css">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    </head>

    <body class="home">
        <div id="page" class="hfeed page-wrapper">
            <header id="site-header" class="site-header header-v1 color-white">
                <div class="header-mobile">
                    <div class="section-padding">
                        <div class="section-container">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" class="navbar-toggle"></button>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
                                    <div class="site-logo">
                                        <a href="index.html">
                                            <img width="400" height="79" src="template/media/logo-white.png" alt="Mojuri – Jewelry Store HTML Template" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
                                    <div class="mojuri-topcart dropdown">
                                        <div class="dropdown mini-cart top-cart">
                                            <div class="remove-cart-shadow"></div>
                                            <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
                                            </a>
                                            <div class="dropdown-menu cart-popup">
                                                <div class="cart-empty-wrap">
                                                    <ul class="cart-list">
                                                        <li class="empty">
                                                            <span>No products in the cart.</span>
                                                            <a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cart-list-wrap">
                                                    <ul class="cart-list ">
                                                        <li class="mini-cart-item">
                                                            <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                            <a href="shop-details.html" class="product-image"><img width="600" height="600" src="template/media/product/3.jpg" alt=""></a>
                                                            <a href="shop-details.html" class="product-name">Twin
                                                                Hoops</a>
                                                            <div class="quantity">Qty: 1</div>
                                                            <div class="price">$150.00</div>
                                                        </li>
                                                        <li class="mini-cart-item">
                                                            <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                            <a href="shop-details.html" class="product-image"><img width="600" height="600" src="template/media/product/1.jpg" alt=""></a>
                                                            <a href="shop-details.html" class="product-name">Medium Flat
                                                                Hoops</a>
                                                            <div class="quantity">Qty: 1</div>
                                                            <div class="price">$100.00</div>
                                                        </li>
                                                    </ul>
                                                    <div class="total-cart">
                                                        <div class="title-total">Total: </div>
                                                        <div class="total-price"><span>$250.00</span></div>
                                                    </div>
                                                    <div class="free-ship">
                                                        <div class="title-ship">Buy <strong>$400</strong> more to enjoy
                                                            <strong>FREE Shipping</strong>
                                                        </div>
                                                        <div class="total-percent">
                                                            <div class="percent" style="width:20%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <a href="shop-cart.html" class="button btn view-cart btn-primary">View cart</a>
                                                        <a href="shop-checkout.html" class="button btn checkout btn-default">Check out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-mobile-fixed">
                        <!-- Shop -->
                        <div class="shop-page">
                            <a href="shop-grid-left.html"><i class="wpb-icon-shop"></i></a>
                        </div>

                        <!-- Login -->
                        <div class="my-account">
                            <div class="login-header">
                                <a href="page-my-account.html"><i class="wpb-icon-user"></i></a>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="search-box">
                            <div class="search-toggle"><i class="wpb-icon-magnifying-glass"></i></div>
                        </div>

                        <!-- Wishlist -->
                        <div class="wishlist-box">
                            <a href="shop-wishlist.html"><i class="wpb-icon-heart"></i></a>
                        </div>
                    </div>
                </div>

                <div class="header-desktop">
                    <div class="header-wrapper">
                        <div class="section-padding">
                            <div class="section-container large p-l-r">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-left">
                                        <div class="site-logo">
                                            <a href="index.html">
                                                <img width="400" height="140" src="template/media/logo-white.png" alt="Mojuri – Jewelry Store HTML Template" />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
                                        <div class="site-navigation">
                                            <nav id="main-navigation">
                                                <ul id="menu-main-menu" class="menu">
                                                    <li class="level-0 menu-item">
                                                        <a href="/"><span class="menu-item-text">Home</span></a>
                                                    </li>
                                                    <li class="level-0 menu-item">
                                                        <a href="/produtos"><span class="menu-item-text">Produtos</span></a>
                                                    </li>
                                                    <li class="level-0 menu-item menu-item-has-children">
                                                        <a href="shop-grid-left.html"><span class="menu-item-text">Categorias</span></a>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="shop-wishlist.html"><span class="menu-item-text">Shop -
                                                                        Wishlist</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="level-0 menu-item">
                                                        <a href="/contato"><span class="menu-item-text">Contato</span></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 header-right">
                                        <div class="header-page-link">
                                            <!-- Search -->
                                            <!-- <div class="search-box">
                                                <div class="search-toggle"><i class="icon-search"></i></div>
                                            </div> -->

                                            <!-- Login -->
                                            <div class="login-header icon">
                                                <a class="active-login" href="#"><i class="icon-user"></i></a>
                                                <div class="form-login-register">
                                                    <div class="box-form-login">
                                                        <div class="active-login"></div>
                                                        <div class="box-content">
                                                            <div class="form-login active">
                                                                <form id="login_ajax" method="post" class="login">
                                                                    <h2>Sign in</h2>
                                                                    <p class="status"></p>
                                                                    <div class="content">
                                                                        <div class="username">
                                                                            <input type="text" required="required" class="input-text" name="username" id="username" placeholder="Your name" />
                                                                        </div>
                                                                        <div class="password">
                                                                            <input class="input-text" required="required" type="password" name="password" id="password" placeholder="Password" />
                                                                        </div>
                                                                        <div class="rememberme-lost">
                                                                            <div class="rememberme">
                                                                                <input name="rememberme" type="checkbox" id="rememberme" value="forever" />
                                                                                <label for="rememberme" class="inline">Remember me</label>
                                                                            </div>
                                                                            <div class="lost_password">
                                                                                <a href="forgot-password.html">Lost your
                                                                                    password?</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="button-login">
                                                                            <input type="submit" class="button" name="login" value="Login" />
                                                                        </div>
                                                                        <div class="button-next-reregister">Create An
                                                                            Account</div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="form-register">
                                                                <form method="post" class="register">
                                                                    <h2>REGISTER</h2>
                                                                    <div class="content">
                                                                        <div class="email">
                                                                            <input type="email" class="input-text" placeholder="Email" name="email" id="reg_email" value="" />
                                                                        </div>
                                                                        <div class="password">
                                                                            <input type="password" class="input-text" placeholder="Password" name="password" id="reg_password" />
                                                                        </div>
                                                                        <div class="button-register">
                                                                            <input type="submit" class="button" name="register" value="Register" />
                                                                        </div>
                                                                        <div class="button-next-login">Already has an
                                                                            account</div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Wishlist -->
                                            <!-- <div class="wishlist-box">
                                                <a href="shop-wishlist.html"><i class="icon-heart"></i></a>
                                                <span class="count-wishlist">1</span>
                                            </div> -->

                                            <!-- Cart -->
                                            <div class="mojuri-topcart dropdown light">
                                                <div class="dropdown mini-cart top-cart">
                                                    <div class="remove-cart-shadow"></div>
                                                    <a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
                                                    </a>
                                                    <div class="dropdown-menu cart-popup">
                                                        <div class="cart-empty-wrap">
                                                            <ul class="cart-list">
                                                                <li class="empty">
                                                                    <span>No products in the cart.</span>
                                                                    <a class="go-shop" href="shop-grid-left.html">GO TO
                                                                        SHOP<i aria-hidden="true" class="arrow_right"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="cart-list-wrap">
                                                            <ul class="cart-list ">
                                                                <li class="mini-cart-item">
                                                                    <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                                    <a href="shop-details.html" class="product-image"><img width="600" height="600" src="template/media/product/3.jpg" alt=""></a>
                                                                    <a href="shop-details.html" class="product-name">Twin Hoops</a>
                                                                    <div class="quantity">Qty: 1</div>
                                                                    <div class="price">$150.00</div>
                                                                </li>
                                                                <li class="mini-cart-item">
                                                                    <a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
                                                                    <a href="shop-details.html" class="product-image"><img width="600" height="600" src="template/media/product/1.jpg" alt=""></a>
                                                                    <a href="shop-details.html" class="product-name">Medium Flat Hoops</a>
                                                                    <div class="quantity">Qty: 1</div>
                                                                    <div class="price">$100.00</div>
                                                                </li>
                                                            </ul>
                                                            <div class="total-cart">
                                                                <div class="title-total">Total: </div>
                                                                <div class="total-price"><span>$250.00</span></div>
                                                            </div>
                                                            <div class="free-ship">
                                                                <div class="title-ship">Buy <strong>$400</strong> more
                                                                    to enjoy <strong>FREE Shipping</strong></div>
                                                                <div class="total-percent">
                                                                    <div class="percent" style="width:20%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="buttons">
                                                                <a href="shop-cart.html" class="button btn view-cart btn-primary">View
                                                                    cart</a>
                                                                <a href="shop-checkout.html" class="button btn checkout btn-default">Check
                                                                    out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="site-main" class="site-main">
                <div id="main-content" class="main-content">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
                            <section class="section m-b-70">
                                <!-- Block Sliders -->
                                <div class="block block-sliders auto-height color-white nav-center">
                                    <div class="slick-sliders" data-autoplay="true" data-dots="true" data-nav="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1">
                                        <div class="item slick-slide">
                                            <div class="item-content">
                                                <div class="content-image">
                                                    <img width="1920" height="1080" src="template/media/slider/1-1.jpg" alt="Image Slider">
                                                </div>
                                                <div class="item-info horizontal-start vertical-middle">
                                                    <div class="content">
                                                        <h2 class="title-slider">Brilhe mais <br> que as estrelas</h2>
                                                        <a class="button-slider button button-white button-outline thick-border" href="/produtos">Ver Produtos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item slick-slide">
                                            <div class="item-content">
                                                <div class="content-image">
                                                    <img width="1920" height="1080" src="template/media/slider/1-2.jpg" alt="Image Slider">
                                                </div>
                                                <div class="item-info horizontal-start vertical-middle">
                                                    <div class="content">
                                                        <h2 class="title-slider">A joia perfeita <br> para cada ocasião</h2>
                                                        <a class="button-slider button button-white button-outline thick-border" href="/produtos">Ver Produtos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item slick-slide">
                                            <div class="item-content">
                                                <div class="content-image">
                                                    <img width="1920" height="1080" src="template/media/slider/1-3.jpg" alt="Image Slider">
                                                </div>
                                                <div class="item-info horizontal-start vertical-middle">
                                                    <div class="content">
                                                        <h2 class="title-slider">Peças únicas<br> para mulheres únicas!</h2>
                                                        <a class="button-slider button button-white button-outline thick-border" href="/produtos">Ver Produtos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section section-padding m-b-70">
                                <div class="section-container large">
                                    <!-- Block Banners (Layout 1) -->
                                    <div class="block block-banners layout-1 banners-effect">
                                        <div class="block-widget-wrap small-space">
                                            <div class="row">
                                                <div class="section-column left sm-m-b">
                                                    <div class="block-widget-banner">
                                                        <div class="bg-banner">
                                                            <div class="banner-wrapper banners">
                                                                <div class="banner-image">
                                                                    <a href="shop-grid-left.html">
                                                                        <img width="630" height="457" src="template/media/banner/banner-1-1.jpg" alt="Banner Image">
                                                                    </a>
                                                                </div>
                                                                <div class="banner-wrapper-infor">
                                                                    <div class="info">
                                                                        <div class="content">
                                                                            <h3 class="title-banner">New Arrivals</h3>
                                                                            <a class="button" href="shop-grid-left.html">Shop Now</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section-column center sm-m-b">
                                                    <div class="block-widget-banner">
                                                        <div class="bg-banner">
                                                            <div class="banner-wrapper banners">
                                                                <div class="banner-image">
                                                                    <a href="shop-grid-left.html">
                                                                        <img width="450" height="457" src="template/media/banner/banner-1-2.jpg" alt="Banner Image">
                                                                    </a>
                                                                </div>
                                                                <div class="banner-wrapper-infor text-center">
                                                                    <div class="info">
                                                                        <div class="content">
                                                                            <h3 class="title-banner">Best Seller</h3>
                                                                            <a class="button center" href="shop-grid-left.html">Shop Now</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section-column right">
                                                    <div class="block-widget-banner">
                                                        <div class="bg-banner">
                                                            <div class="banner-wrapper banners">
                                                                <div class="banner-image">
                                                                    <a href="shop-grid-left.html">
                                                                        <img width="630" height="457" src="template/media/banner/banner-1-3.jpg" alt="Banner Image">
                                                                    </a>
                                                                </div>
                                                                <div class="banner-wrapper-infor">
                                                                    <div class="info">
                                                                        <div class="content">
                                                                            <h3 class="title-banner">Clearance Sale</h3>
                                                                            <a class="button" href="shop-grid-left.html">Shop Now</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section section-padding m-b-70">
                                <div class="section-container">
                                    <!-- Block Product Categories -->
                                    <div class="block block-product-cats slider round-border">
                                        <div class="block-widget-wrap">
                                            <div class="block-title">
                                                <h2>Categorias</h2>
                                            </div>
                                            <div class="block-content">
                                                <div class="product-cats-list slick-wrap">
                                                    <div class="slick-sliders content-category" data-dots="0" data-slidestoscroll="true" data-nav="1" data-columns4="2" data-columns3="3" data-columns2="3" data-columns1="5" data-columns1440="5" data-columns="5">
                                                        <div class="item item-product-cat slick-slide">
                                                            <div class="item-product-cat-content">
                                                                <a href="shop-grid-left.html">
                                                                    <div class="item-image animation-horizontal">
                                                                        <img width="258" height="258" src="template/media/product/cat-1.jpg" alt="Bracelets">
                                                                    </div>
                                                                </a>
                                                                <div class="product-cat-content-info">
                                                                    <h2 class="item-title">
                                                                        <a href="shop-grid-left.html">Bracelets</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item item-product-cat slick-slide">
                                                            <div class="item-product-cat-content">
                                                                <a href="shop-grid-left.html">
                                                                    <div class="item-image animation-horizontal">
                                                                        <img width="258" height="258" src="template/media/product/cat-2.jpg" alt="Charms">
                                                                    </div>
                                                                </a>
                                                                <div class="product-cat-content-info">
                                                                    <h2 class="item-title">
                                                                        <a href="shop-grid-left.html">Charms</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item item-product-cat slick-slide">
                                                            <div class="item-product-cat-content">
                                                                <a href="shop-grid-left.html">
                                                                    <div class="item-image animation-horizontal">
                                                                        <img width="258" height="258" src="template/media/product/cat-3.jpg" alt="Earrings">
                                                                    </div>
                                                                </a>
                                                                <div class="product-cat-content-info">
                                                                    <h2 class="item-title">
                                                                        <a href="shop-grid-left.html">Earrings</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item item-product-cat slick-slide">
                                                            <div class="item-product-cat-content">
                                                                <a href="shop-grid-left.html">
                                                                    <div class="item-image animation-horizontal">
                                                                        <img width="258" height="258" src="template/media/product/cat-4.jpg" alt="Necklaces">
                                                                    </div>
                                                                </a>
                                                                <div class="product-cat-content-info">
                                                                    <h2 class="item-title">
                                                                        <a href="shop-grid-left.html">Necklaces</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item item-product-cat slick-slide">
                                                            <div class="item-product-cat-content">
                                                                <a href="shop-grid-left.html">
                                                                    <div class="item-image animation-horizontal">
                                                                        <img width="258" height="258" src="template/media/product/cat-5.jpg" alt="Rings">
                                                                    </div>
                                                                </a>
                                                                <div class="product-cat-content-info">
                                                                    <h2 class="item-title">
                                                                        <a href="shop-grid-left.html">Rings</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item item-product-cat slick-slide">
                                                            <div class="item-product-cat-content">
                                                                <a href="shop-grid-left.html">
                                                                    <div class="item-image animation-horizontal">
                                                                        <img width="258" height="258" src="template/media/product/cat-1.jpg" alt="Bracelets">
                                                                    </div>
                                                                </a>
                                                                <div class="product-cat-content-info">
                                                                    <h2 class="item-title">
                                                                        <a href="shop-grid-left.html">Bracelets</a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section background-img bg-img-1 m-b-70">
                                <!-- Block Intro -->
                                <div class="block block-intro">
                                    <div class="row">
                                        <div class="section-column left">
                                            <div class="intro-wrap">
                                                <h2 class="intro-title">Joias tão <br> especiais quanto você</h2>
                                                <div class="intro-item">
                                                    <div class="icon">
                                                        <span class="wrap animation-horizontal">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="100%" viewBox="0 0 512.001 512.001" width="100%">
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="m479.371 131.029c-3.099 0-6.154-1.436-8.11-4.139-3.236-4.475-2.233-10.727 2.241-13.963l22.638-16.376c4.475-3.239 10.727-2.233 13.964 2.241 3.236 4.475 2.233 10.727-2.241 13.963l-22.638 16.376c-1.772 1.281-3.823 1.898-5.854 1.898z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="m32.63 131.029c-2.032 0-4.082-.617-5.854-1.898l-22.637-16.376c-4.475-3.237-5.478-9.488-2.241-13.963 3.238-4.474 9.49-5.478 13.964-2.241l22.638 16.375c4.475 3.237 5.478 9.488 2.241 13.963-1.956 2.703-5.012 4.14-8.111 4.14z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="m256.001 49.025c-5.522 0-10-4.477-10-10v-23.867c0-5.523 4.478-10 10-10s10 4.477 10 10v23.866c0 5.523-4.478 10.001-10 10.001z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                        <g>
                                                                            <path d="m492.647 215.277-77.499-133.949c-1.787-3.09-5.086-4.992-8.655-4.992h-300.986c-3.569 0-6.868 1.902-8.655 4.992l-77.498 133.949c-2.092 3.614-1.717 8.147.939 11.369l227.991 276.558c1.899 2.305 4.729 3.639 7.716 3.639s5.816-1.334 7.716-3.639l85.631-103.871 1.009.399 22.572 57.368c1.505 3.824 5.196 6.338 9.306 6.338s7.801-2.514 9.306-6.338l22.572-57.368 57.228-22.623c3.817-1.509 6.324-5.196 6.324-9.3s-2.507-7.791-6.323-9.3l-57.229-22.623-4.026-10.231 81.621-99.009c2.657-3.222 3.032-7.754.94-11.369zm-25.994-4.992h-113.904l53.737-103.991zm-210.652 248.864-67.465-228.863h22.259c5.522 0 10-4.477 10-10s-4.478-10-10-10h-17.303l62.508-102.427 62.508 102.426h-17.301c-5.522 0-10 4.477-10 10s4.478 10 10 10h22.26zm79.601-259.246-63.204-103.567h116.722zm-167.918 30.382 65.943 223.697-184.414-223.697zm8.713-30.382-53.517-103.567h116.722zm-70.883-93.609 53.736 103.991h-113.902zm172.86 347.689 21.836-74.074 29.588 11.696zm162.089-86.174-37.741 14.919c-2.577 1.019-4.615 3.06-5.63 5.638l-14.857 37.76-14.857-37.76c-1.015-2.578-3.053-4.62-5.63-5.638l-37.741-14.919 37.742-14.92c2.576-1.019 4.614-3.06 5.629-5.638l14.857-37.76 14.857 37.76c1.015 2.578 3.053 4.62 5.629 5.638zm-48.923-89.291c-1.505-3.824-5.196-6.338-9.306-6.338s-7.801 2.514-9.306 6.338l-22.572 57.368-42.071 16.631 36.032-122.232h118.47l-61.075 74.087z">
                                                                            </path>
                                                                            <g>
                                                                                <path d="m256.18 230.291c-4.12 0-7.897-2.638-9.35-6.483-1.491-3.948-.269-8.58 3.006-11.255 3.235-2.643 7.897-2.987 11.481-.842 3.583 2.144 5.496 6.426 4.674 10.529-.924 4.61-5.103 8.051-9.811 8.051z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title">Preços Acessíveis</h3>
                                                        <div class="text">Luxo ao alcance de todos! Semijoias com design exclusivo e qualidade superior, por preços que cabem no seu bolso.</div>
                                                    </div>
                                                </div>
                                                <div class="intro-item">
                                                    <div class="icon">
                                                        <span class="wrap animation-horizontal">
                                                            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="100%" viewBox="0 0 511.985 511.985" width="100%">
                                                                <g>
                                                                    <g>
                                                                        <path d="m256.002 19.995c-4.193 0-8.038-2.714-9.438-6.667-1.415-3.996-.091-8.565 3.231-11.192 3.218-2.545 7.81-2.846 11.333-.741 3.587 2.144 5.493 6.408 4.697 10.512-.902 4.643-5.097 8.088-9.823 8.088z">
                                                                        </path>
                                                                        <path d="m486.898 258.449c12.552-6.567 20.748-20.113 19.768-35.14-.641-9.838-5.073-18.839-12.478-25.343-4.91-4.312-10.737-7.185-16.974-8.444-14.109-91.307-83.346-165.063-174.016-184.544-5.399-1.16-10.723 2.277-11.883 7.68-1.162 5.402 2.278 10.723 7.68 11.884 82.042 17.628 144.813 84.063 158.199 166.49-14.984 5.483-25.248 20.366-24.158 37.083.64 9.831 5.066 18.824 12.46 25.326-8.551 4.454-14.918 11.927-17.963 21.102-3.64 10.962-1.835 22.447 3.935 31.503-1.269-.047-2.548-.03-3.833.054-9.835.642-18.83 5.079-25.331 12.493-7.141 8.146-10.047 18.579-8.897 28.58-.57-.221-1.148-.429-1.732-.623-9.356-3.111-19.359-2.388-28.169 2.032-8.947 4.489-15.278 12.151-18.315 20.944l-81.746-89.114-.161-.16c-4.044-4.041-10.602-4.025-14.626.035l-.032.032c-.002.002-81.832 89.207-81.832 89.207-3.037-8.793-9.368-16.455-18.315-20.944-8.81-4.42-18.817-5.144-28.169-2.032-.584.194-1.162.402-1.732.623 1.15-10.002-1.756-20.435-8.897-28.581-6.501-7.413-15.496-11.85-25.331-12.492-1.284-.085-2.563-.103-3.831-.056 5.769-9.056 7.574-20.539 3.935-31.5-3.046-9.176-9.413-16.649-17.964-21.103 7.394-6.502 11.819-15.495 12.46-25.326 1.09-16.717-9.173-31.6-24.157-37.083 13.363-82.19 76.353-148.774 157.896-166.426 5.366-1.162 9.066-6.345 8.026-11.735-1.066-5.526-6.455-9.066-11.928-7.893-90.28 19.398-159.919 93.388-174.016 184.542-6.234 1.26-12.064 4.135-16.973 8.446-7.405 6.504-11.838 15.504-12.479 25.343-.98 15.028 7.216 28.573 19.768 35.14-10.777 9.503-15.465 24.89-10.66 39.366 3.107 9.358 9.668 16.946 18.478 21.365 5.21 2.614 10.837 3.935 16.5 3.935.477 0 .955-.01 1.433-.028-8.588 13.487-7.683 31.584 3.374 44.198 6.501 7.413 15.496 11.85 25.331 12.492.822.054 1.64.08 2.455.08 4.598 0 9.089-.848 13.29-2.48-1.698 14.954 5.912 30.08 20.119 37.209 5.21 2.614 10.836 3.934 16.499 3.934 3.914 0 7.847-.631 11.67-1.902 4.973-1.653 9.445-4.285 13.207-7.712l91.792 100.065c.005.005.018.019.04.04 4.089 3.962 10.592 3.958 14.72.036l.03-.029 91.836-100.113c3.762 3.427 8.234 6.058 13.207 7.712 3.824 1.271 7.755 1.902 11.67 1.902 5.662 0 11.289-1.32 16.499-3.934 14.206-7.128 21.817-22.255 20.119-37.209 4.201 1.632 8.691 2.48 13.29 2.48.815 0 1.634-.026 2.455-.08 9.835-.642 18.83-5.079 25.331-12.493 11.057-12.613 11.962-30.709 3.375-44.197.477.019.955.028 1.432.028 5.662 0 11.29-1.321 16.5-3.935 8.809-4.419 15.371-12.007 18.478-21.365 4.806-14.475.117-29.862-10.659-39.365zm-18.146-49.608c4.491-.292 8.841 1.184 12.229 4.16 3.391 2.979 5.422 7.101 5.716 11.61.607 9.302-6.459 17.364-15.749 17.971-4.492.296-8.841-1.183-12.23-4.159-3.391-2.978-5.421-7.101-5.715-11.609-.606-9.303 6.459-17.366 15.749-17.973zm-212.76 224.088-32.196-38.257 32.196-38.257 32.195 38.257zm10.006-95.702v-24.429l65.927 71.869h-26.004zm-20.011-24.429v24.429l-39.924 47.44h-26.003zm-220.7-88.188c.294-4.507 2.324-8.63 5.716-11.609 3.106-2.728 7.014-4.197 11.109-4.197.371 0 .746.012 1.121.036 9.29.607 16.355 8.67 15.749 17.973-.294 4.507-2.324 8.631-5.715 11.609-3.389 2.974-7.728 4.445-12.23 4.159-9.291-.606-16.357-8.668-15.75-17.971zm16.591 76.684c-4.032-2.023-7.036-5.497-8.459-9.783-2.937-8.849 1.863-18.438 10.7-21.377 1.749-.581 3.547-.87 5.337-.87 2.59 0 5.163.604 7.546 1.8 4.031 2.023 7.036 5.496 8.459 9.783 2.937 8.849-1.863 18.438-10.701 21.377-4.278 1.422-8.854 1.093-12.882-.93zm51.2 54.354c-3.389 2.977-7.74 4.454-12.23 4.16-4.499-.294-8.614-2.324-11.588-5.716-6.145-7.01-5.447-17.715 1.557-23.864 3.105-2.728 7.013-4.197 11.107-4.197.373 0 .747.012 1.123.036 4.499.294 8.614 2.324 11.588 5.716 6.142 7.011 5.445 17.717-1.557 23.865zm44.184 41.98c-4.28 1.422-8.854 1.093-12.882-.929-8.327-4.177-11.704-14.358-7.528-22.695 2.022-4.035 5.491-7.042 9.77-8.465 1.749-.581 3.546-.87 5.336-.87 2.59 0 5.164.604 7.547 1.8 8.326 4.177 11.704 14.357 7.528 22.694-2.021 4.036-5.492 7.042-9.771 8.465zm68.801 7.05 39.924 47.44v24.429l-65.927-71.869zm59.935 71.869v-24.429l39.923-47.44h26.004zm121.606-79.848c-4.029 2.023-8.604 2.352-12.882.929-4.279-1.423-7.749-4.429-9.771-8.465-4.175-8.337-.797-18.517 7.528-22.694 4.03-2.022 8.604-2.354 12.883-.93 4.279 1.423 7.748 4.429 9.77 8.465 4.176 8.337.799 18.518-7.528 22.695zm55.122-42.607c-2.974 3.392-7.09 5.423-11.588 5.717-4.488.293-8.841-1.183-12.229-4.16-.001 0-.001 0-.001 0-7.003-6.149-7.699-16.855-1.556-23.863 2.974-3.392 7.09-5.423 11.588-5.717.375-.024.749-.036 1.123-.036 4.094 0 8.001 1.469 11.108 4.197 7.002 6.148 7.699 16.853 1.555 23.862zm35.839-62.581c-1.423 4.286-4.426 7.76-8.459 9.783-4.03 2.023-8.604 2.353-12.882.93-8.838-2.939-13.638-12.528-10.7-21.378 1.422-4.285 4.426-7.759 8.458-9.782 4.03-2.023 8.604-2.353 12.882-.93 8.838 2.94 13.638 12.529 10.701 21.377z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="title">Design Exclusivo</h3>
                                                        <div class="text">Designers talentosos criam peças únicas e sofisticadas, com detalhes que fazem a diferença. Encontre a semi-joia que expressa sua personalidade.</div>
                                                    </div>
                                                </div>
                                                <div class="intro-btn">
                                                    <a href="/produtos" class="button button-black button-arrow animation-horizontal">Catálogo de Semi-Joias</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section-column right">
                                            <img class="hover-opacity" width="820" height="674" src="template/media/banner/intro-1.jpg" alt="intro">
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section section-padding m-b-70">
                                <div class="section-container large">
                                    <!-- Block Products -->
                                    <div class="block block-products slider">
                                        <div class="block-widget-wrap">
                                            <div class="block-title">
                                                <h2>Produtos em Destaque</h2>
                                            </div>
                                            <div class="block-content">
                                                <div class="content-product-list slick-wrap">
                                                    <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="2" data-columns1="3" data-columns1440="4" data-columns="4">
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="template/media/product/1.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="template/media/product/1-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to
                                                                                    cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to
                                                                                    wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick
                                                                                    View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents">
                                                                            <div class="rating">
                                                                                <div class="star star-0"></div><span class="count">(0 review)</span>
                                                                            </div>
                                                                            <h3 class="product-title"><a href="shop-details.html">Medium Flat
                                                                                    Hoops</a></h3>
                                                                            <span class="price">$100.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="onsale">-10%</div>
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="template/media/product/2.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="template/media/product/2-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to
                                                                                    cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to
                                                                                    wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick
                                                                                    View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents">
                                                                            <div class="rating">
                                                                                <div class="star star-5"></div><span class="count">(1 review)</span>
                                                                            </div>
                                                                            <h3 class="product-title"><a href="shop-details.html">Bold Pearl
                                                                                    Hoop Earrings</a></h3>
                                                                            <span class="price">
                                                                                <del aria-hidden="true"><span>$200.00</span></del>
                                                                                <ins><span>$180.00</span></ins>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="hot">Hot</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="template/media/product/3.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="template/media/product/3-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to
                                                                                    cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to
                                                                                    wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick
                                                                                    View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents">
                                                                            <div class="rating">
                                                                                <div class="star star-0"></div><span class="count">(0 review)</span>
                                                                            </div>
                                                                            <h3 class="product-title"><a href="shop-details.html">Twin
                                                                                    Hoops</a></h3>
                                                                            <span class="price">$150.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="onsale">-33%</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="template/media/product/4.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="template/media/product/4-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to
                                                                                    cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to
                                                                                    wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick
                                                                                    View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents">
                                                                            <div class="rating">
                                                                                <div class="star star-4"></div><span class="count">(2 reviews)</span>
                                                                            </div>
                                                                            <h3 class="product-title"><a href="shop-details.html">Yilver And
                                                                                    Turquoise Earrings</a></h3>
                                                                            <span class="price">
                                                                                <del aria-hidden="true"><span>$150.00</span></del>
                                                                                <ins><span>$100.00</span></ins>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-product slick-slide">
                                                            <div class="items">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-lable">
                                                                            <div class="onsale">-7%</div>
                                                                        </div>
                                                                        <div class="product-thumb-hover">
                                                                            <a href="shop-details.html">
                                                                                <img width="600" height="600" src="template/media/product/13.jpg" class="post-image" alt="">
                                                                                <img width="600" height="600" src="template/media/product/13-2.jpg" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-add-to-cart" data-title="Add to cart">
                                                                                <a rel="nofollow" href="#" class="product-btn button">Add to
                                                                                    cart</a>
                                                                            </div>
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button class="product-btn">Add to
                                                                                    wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Compare">
                                                                                <button class="product-btn">Compare</button>
                                                                            </div>
                                                                            <span class="product-quickview" data-title="Quick View">
                                                                                <a href="#" class="quickview quickview-button">Quick
                                                                                    View <i class="icon-search"></i></a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="product-stock">
                                                                            <span class="stock">Out Of Stock</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents">
                                                                            <div class="rating">
                                                                                <div class="star star-5"></div><span class="count">(1 review)</span>
                                                                            </div>
                                                                            <h3 class="product-title"><a href="shop-details.html">Medium Flat
                                                                                    Hoops</a></h3>
                                                                            <span class="price">
                                                                                <del aria-hidden="true"><span>$150.00</span></del>
                                                                                <ins><span>$140.00</span></ins>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section section-padding">
                                <div class="section-container large">
                                    <!-- Block Banners (Layout 2) -->
                                    <div class="block block-banners layout-2 banners-effect">
                                        <div class="block-widget-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="block-widget-banner m-b-15">
                                                        <div class="bg-banner">
                                                            <div class="banner-wrapper banners">
                                                                <div class="banner-image">
                                                                    <a href="shop-grid-left.html">
                                                                        <img width="856" height="496" src="template/media/banner/banner-1-4.jpg" alt="Banner Image">
                                                                    </a>
                                                                </div>
                                                                <div class="banner-wrapper-infor">
                                                                    <div class="info">
                                                                        <div class="content">
                                                                            <h3 class="title-banner">Coleção de Verão
                                                                            </h3>
                                                                            <div class="banner-image-description">
                                                                                Brilho e elegância para os dias mais radiantes
                                                                            </div>
                                                                            <a class="button button-outline thick-border border-white button-arrow" href="/produtos">Ver peças da coleção</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="block-widget-banner">
                                                        <div class="bg-banner">
                                                            <div class="banner-wrapper banners">
                                                                <div class="banner-image">
                                                                    <a href="shop-grid-left.html">
                                                                        <img width="856" height="496" src="template/media/banner/banner-1-5.jpg" alt="Banner Image">
                                                                    </a>
                                                                </div>
                                                                <div class="banner-wrapper-infor">
                                                                    <div class="info">
                                                                        <div class="content">
                                                                            <h3 class="title-banner"> Make It Memorable
                                                                            </h3>
                                                                            <div class="banner-image-description">
                                                                                Freshwater pearl necklace and earrings
                                                                            </div>
                                                                            <a class="button button-outline thick-border border-white button-arrow" href="shop-grid-left.html">Explore</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section section-padding background-img bg-img-2 m-b-70 p-t-140 p-b-70 m-t-n-130">
                                <div class="section-container">
                                    <!-- Block Testimonial -->
                                    <div class="block block-testimonial layout-2">
                                        <div class="block-widget-wrap">
                                            <div class="block-title">
                                                <h2>Nossas Consultoras</h2>
                                            </div>
                                            <div class="block-content">
                                                <div class="testimonial-wrap slick-wrap">
                                                    <div class="slick-sliders" data-slidestoscroll="true" data-slidestoscroll="true" data-nav="1" data-dots="0" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="2" data-columns="3">
                                                        <div class="testimonial-content">
                                                            <div class="item">
                                                                <div class="testimonial-item">
                                                                    <div class="testimonial-icon">
                                                                        <div class="rating">
                                                                            <div class="star star-5"></div>
                                                                        </div>
                                                                    </div>
                                                                    <h2 class="testimonial-title">“Minha Experiência com Charme Jóias”</h2>
                                                                    <div class="testimonial-excerpt">
                                                                        Sou Luciene, de Silveiras, SP, consultora Charme Jóias há 3 anos. Peças de qualidade, clientes satisfeitos e atendimento excelente. Amo ser consultora e não vou parar!
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial-image image-position-top">
                                                                    <div class="thumbnail">
                                                                        <img width="110" height="110" src="template/media/testimonial/luciene.jpg" alt="">
                                                                    </div>
                                                                    <div class="testimonial-info">
                                                                        <h2 class="testimonial-customer-name">Luciene</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-content">
                                                            <div class="item">
                                                                <div class="testimonial-item">
                                                                    <div class="testimonial-icon">
                                                                        <div class="rating">
                                                                            <div class="star star-5"></div>
                                                                        </div>
                                                                    </div>
                                                                    <h2 class="testimonial-title">“Peças com ótima Qualidade”
                                                                    </h2>
                                                                    <div class="testimonial-excerpt">
                                                                        Sou Anandriele, de Itamonte, trabalha com Charme Jóias há 4 anos. Peças acessíveis, que não escurecem, e clientes satisfeitas. Ótimo complemento de renda!
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial-image image-position-top">
                                                                    <div class="thumbnail">
                                                                        <img width="110" height="110" src="template/media/testimonial/anandriele.jpg" alt="">
                                                                    </div>
                                                                    <div class="testimonial-info">
                                                                        <h2 class="testimonial-customer-name">Anandriele</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-content">
                                                            <div class="item">
                                                                <div class="testimonial-item">
                                                                    <div class="testimonial-icon">
                                                                        <div class="rating">
                                                                            <div class="star star-5"></div>
                                                                        </div>
                                                                    </div>
                                                                    <h2 class="testimonial-title">Satisfação com Charme Jóias”</h2>
                                                                    <div class="testimonial-excerpt">
                                                                        Sou Lucilene, de Caxambu, e trabalho com Charme Jóias há 1 ano. Minhas clientes adoram as semi-joias de alta qualidade. Primeira vez que trabalho com uma empresa tão responsável.
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial-image image-position-top">
                                                                    <div class="thumbnail">
                                                                        <img width="110" height="110" src="template/media/testimonial/lucilene.jpg" alt="">
                                                                    </div>
                                                                    <div class="testimonial-info">
                                                                        <h2 class="testimonial-customer-name">Lucilene</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- <section class="section section-padding m-b-80">
                                <div class="section-container">
                                    "Block Newsletter (Layout 2)"
                                    <div class="block block-newsletter layout-2 one-col">
                                        <div class="block-widget-wrap">
                                            <div class="newsletter-title-wrap">
                                                <h2 class="newsletter-title">Latest From MoJuri!</h2>
                                                <div class="newsletter-text">Sign-up to receive 10% off your next
                                                    purchase. Plus hear about new arrivals and offers.</div>
                                            </div>
                                            <form action="" method="post" class="newsletter-form">
                                                <input type="email" name="your-email" value="" size="40" placeholder="Email address">
                                                <span class="btn-submit">
                                                    <input type="submit" value="SUBSCRIBE">
                                                </span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section> -->

                            <!-- <section class="section section-padding top-border p-t-10 p-b-10 m-b-0">
                                <div class="section-container">
                                     "Block Image"
                                    <div class="block block-image slider">
                                        <div class="block-widget-wrap">
                                            <div class="slick-wrap">
                                                <div class="slick-sliders" data-nav="0" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="4" data-columns1440="4" data-columns="5">
                                                    <div class="item slick-slide">
                                                        <div class="item-image animation-horizontal">
                                                            <a href="#">
                                                                <img width="450" height="450" src="template/media/brand/1.jpg" alt="Brand 1">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item slick-slide">
                                                        <div class="item-image animation-horizontal">
                                                            <a href="#">
                                                                <img width="450" height="450" src="template/media/brand/2.jpg" alt="Brand 2">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item slick-slide">
                                                        <div class="item-image animation-horizontal">
                                                            <a href="#">
                                                                <img width="450" height="450" src="template/media/brand/3.jpg" alt="Brand 3">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item slick-slide">
                                                        <div class="item-image animation-horizontal">
                                                            <a href="#">
                                                                <img width="450" height="450" src="template/media/brand/4.jpg" alt="Brand 4">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item slick-slide">
                                                        <div class="item-image animation-horizontal">
                                                            <a href="#">
                                                                <img width="450" height="450" src="template/media/brand/5.jpg" alt="Brand 5">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> -->
                        </div><!-- #content -->
                    </div><!-- #primary -->
                </div><!-- #main-content -->
            </div>

            <footer id="site-footer" class="site-footer background four-columns">
                <div class="footer">
                    <div class="section-padding">
                        <div class="section-container">
                            <div class="block-widget-wrap">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 column-1">
                                        <div class="block block-menu m-b-20">
                                            <h2 class="block-title">Contato</h2>
                                            <div class="block-content">
                                                <ul>
                                                    <li>
                                                        <span>WhatsApp:</span> 24 3323-5374
                                                    </li>
                                                    <li>
                                                        <span>Email:</span> <a href="mailto:faleconosco@charmejoias.com.br">faleconosco@charmejoias.com.br</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="block block-social">
                                            <ul class="social-link">
                                                <li><a href="https://instagram.com/charmejoias.oficial"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="https://facebook.com/charmejoias.oficial"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://wa.me/552433235374?text=Ol%C3%A1,%20quero%20mais%20informa%C3%A7%C3%B5es!"><i class="fa fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3 col-md-6 column-2">
                                        <div class="block block-menu">
                                            <h2 class="block-title">Customer Services</h2>
                                            <div class="block-content">
                                                <ul>
                                                    <li>
                                                        <a href="shop-grid-left.html">Contact Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Track Your Order</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Product Care & Repair</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Book an Appointment</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Frequently Asked Questions</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Shipping & Returns</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-3 col-md-6 column-3">
                                        <div class="block block-menu">
                                            <h2 class="block-title">About Us</h2>
                                            <div class="block-content">
                                                <ul>
                                                    <li>
                                                        <a href="#">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">FAQ</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Our Producers</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sitemap</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Terms & Conditions</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Privacy Policy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-3 col-md-6 column-4">
                                        <div class="block block-menu">
                                            <h2 class="block-title">Categorias</h2>
                                            <div class="block-content">
                                                <ul>
                                                    <li>
                                                        <a href="shop-grid-left.html">Anéis</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Cordões</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Brincos</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Pulseiras</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-left.html">Tornozeleiras</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="section-padding">
                        <div class="section-container">
                            <div class="block-widget-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="footer-left">
                                            <p class="copyright">Copyright © 2024. Todos os Direitos Reservados</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="footer-right">
                                            <div class="block block-image">
                                                <img width="309" height="32" src="template/media/payments.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Back Top button -->
        <div class="back-top button-show">
            <i class="arrow_carrot-up"></i>
        </div>

        <!-- Search -->
        <div class="search-overlay">
            <div class="close-search"></div>
            <div class="wrapper-search">
                <form role="search" method="get" class="search-from ajax-search" action="">
                    <a href="#" class="search-close"></a>
                    <div class="search-box">
                        <button id="searchsubmit" class="btn" type="submit">
                            <i class="icon-search"></i>
                        </button>
                        <input type="text" autocomplete="off" value="" name="s" class="input-search s" placeholder="Search...">
                        <div class="content-menu_search">
                            <label>Suggested</label>
                            <ul id="menu_search" class="menu">
                                <li><a href="#">Earrings</a></li>
                                <li><a href="#">Necklaces</a></li>
                                <li><a href="#">Bracelets</a></li>
                                <li><a href="#">Jewelry Box</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Wishlist -->
        <div class="wishlist-popup">
            <div class="wishlist-popup-inner">
                <div class="wishlist-popup-content">
                    <div class="wishlist-popup-content-top">
                        <span class="wishlist-name">Wishlist</span>
                        <span class="wishlist-count-wrapper"><span class="wishlist-count">2</span></span>
                        <span class="wishlist-popup-close"></span>
                    </div>
                    <div class="wishlist-popup-content-mid">
                        <table class="wishlist-items">
                            <tbody>
                                <tr class="wishlist-item">
                                    <td class="wishlist-item-remove"><span></span></td>
                                    <td class="wishlist-item-image">
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="template/media/product/3.jpg" alt="">
                                        </a>
                                    </td>
                                    <td class="wishlist-item-info">
                                        <div class="wishlist-item-name">
                                            <a href="shop-details.html">Twin Hoops</a>
                                        </div>
                                        <div class="wishlist-item-price">
                                            <span>$150.00</span>
                                        </div>
                                        <div class="wishlist-item-time">June 4, 2022</div>
                                    </td>
                                    <td class="wishlist-item-actions">
                                        <div class="wishlist-item-stock">
                                            In stock
                                        </div>
                                        <div class="wishlist-item-add">
                                            <div data-title="Add to cart">
                                                <a rel="nofollow" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="wishlist-item">
                                    <td class="wishlist-item-remove"><span></span></td>
                                    <td class="wishlist-item-image">
                                        <a href="shop-details.html">
                                            <img width="600" height="600" src="template/media/product/4.jpg" alt="">
                                        </a>
                                    </td>
                                    <td class="wishlist-item-info">
                                        <div class="wishlist-item-name">
                                            <a href="shop-details.html">Yilver And Turquoise Earrings</a>
                                        </div>
                                        <div class="wishlist-item-price">
                                            <del aria-hidden="true"><span>$150.00</span></del>
                                            <ins><span>$100.00</span></ins>
                                        </div>
                                        <div class="wishlist-item-time">June 4, 2022</div>
                                    </td>
                                    <td class="wishlist-item-actions">
                                        <div class="wishlist-item-stock">
                                            In stock
                                        </div>
                                        <div class="wishlist-item-add">
                                            <div data-title="Add to cart">
                                                <a rel="nofollow" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="wishlist-popup-content-bot">
                        <div class="wishlist-popup-content-bot-inner">
                            <a class="wishlist-page" href="shop-wishlist.html">
                                Open wishlist page
                            </a>
                            <span class="wishlist-continue" data-url="">
                                Continue shopping
                            </span>
                        </div>
                        <div class="wishlist-notice wishlist-notice-show">Added to the wishlist!</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compare -->
        <div class="compare-popup">
            <div class="compare-popup-inner">
                <div class="compare-table">
                    <div class="compare-table-inner">
                        <a href="#" id="compare-table-close" class="compare-table-close">
                            <span class="compare-table-close-icon"></span>
                        </a>
                        <div class="compare-table-items">
                            <table id="product-table" class="product-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <a href="#" class="compare-table-settings">Settings</a>
                                        </th>
                                        <th>
                                            <a href="shop-details.html">Twin Hoops</a> <span class="remove">remove</span>
                                        </th>
                                        <th>
                                            <a href="shop-details.html">Medium Flat Hoops</a> <span class="remove">remove</span>
                                        </th>
                                        <th>
                                            <a href="shop-details.html">Bold Pearl Hoop Earrings</a> <span class="remove">remove</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr-image">
                                        <td class="td-label">Image</td>
                                        <td>
                                            <a href="shop-details.html">
                                                <img width="600" height="600" src="template/media/product/3.jpg" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="shop-details.html">
                                                <img width="600" height="600" src="template/media/product/1.jpg" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="shop-details.html">
                                                <img width="600" height="600" src="template/media/product/2.jpg" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="tr-sku">
                                        <td class="td-label">SKU</td>
                                        <td>VN00189</td>
                                        <td></td>
                                        <td>D1116</td>
                                    </tr>
                                    <tr class="tr-rating">
                                        <td class="td-label">Rating</td>
                                        <td>
                                            <div class="star-rating">
                                                <span style="width:80%"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="star-rating">
                                                <span style="width:100%"></span>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr class="tr-price">
                                        <td class="td-label">Price</td>
                                        <td><span class="amount">$150.00</span></td>
                                        <td><del><span class="amount">$150.00</span></del> <ins><span class="amount">$100.00</span></ins></td>
                                        <td><span class="amount">$200.00</span></td>
                                    </tr>
                                    <tr class="tr-add-to-cart">
                                        <td class="td-label">Add to cart</td>
                                        <td>
                                            <div data-title="Add to cart">
                                                <a href="#" class="button">Add to cart</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div data-title="Add to cart">
                                                <a href="#" class="button">Add to cart</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div data-title="Add to cart">
                                                <a href="#" class="button">Add to cart</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="tr-description">
                                        <td class="td-label">Description</td>
                                        <td>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum
                                            gravida nec dui. Aenean aliquam varius ipsum, non ultricies tellus sodales
                                            eu. Donec dignissim viverra nunc, ut aliquet magna posuere eget.</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur.</td>
                                        <td>The EcoSmart Fleece Hoodie full-zip hooded jacket provides medium weight
                                            fleece comfort all year around. Feel better in this sweatshirt because Hanes
                                            keeps plastic bottles of landfills by using recycled polyester.7.8 ounce
                                            fleece sweatshirt made with up to 5 percent polyester created from recycled
                                            plastic.</td>
                                    </tr>
                                    <tr class="tr-content">
                                        <td class="td-label">Content</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                            porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                            dolore magnam aliquam quaerat voluptatem.</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                            porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                            dolore magnam aliquam quaerat voluptatem.</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                            porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                            dolore magnam aliquam quaerat voluptatem.</td>
                                    </tr>
                                    <tr class="tr-dimensions">
                                        <td class="td-label">Dimensions</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quickview -->
        <div class="quickview-popup">
            <div id="quickview-container">
                <div class="quickview-container">
                    <a href="#" class="quickview-close"></a>
                    <div class="quickview-notices-wrapper"></div>
                    <div class="product single-product product-type-simple">
                        <div class="product-detail">
                            <div class="row">
                                <div class="img-quickview">
                                    <div class="product-images-slider">
                                        <div id="quickview-slick-carousel">
                                            <div class="images">
                                                <div class="scroll-image">
                                                    <div class="slick-wrap">
                                                        <div class="slick-sliders image-additional" data-dots="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
                                                            <div class="img-thumbnail slick-slide">
                                                                <a href="template/media/product/3.jpg" class="image-scroll" title="">
                                                                    <img width="900" height="900" src="template/media/product/3.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="img-thumbnail slick-slide">
                                                                <a href="template/media/product/3-2.jpg" class="image-scroll" title="">
                                                                    <img width="900" height="900" src="template/media/product/3-2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quickview-single-info">
                                    <div class="product-content-detail entry-summary">
                                        <h1 class="product-title entry-title">Twin Hoops</h1>
                                        <div class="price-single">
                                            <div class="price">
                                                <del><span>$150.00</span></del>
                                                <span>$100.00</span>
                                            </div>
                                        </div>
                                        <div class="product-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                <span style="width:80%">Rated <strong class="rating">4.00</strong> out
                                                    of 5 based on <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <a href="#" class="review-link">(<span class="count">1</span> customer
                                                review)</a>
                                        </div>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis…</p>
                                        </div>
                                        <form class="cart" method="post" enctype="multipart/form-data">
                                            <div class="quantity-button">
                                                <div class="quantity">
                                                    <button type="button" class="plus">+</button>
                                                    <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                                    <button type="button" class="minus">-</button>
                                                </div>
                                                <button type="submit" class="single-add-to-cart-button button alt">Add
                                                    to cart</button>
                                            </div>
                                            <button class="button quick-buy">Buy It Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- Newsletter Popup -->
        <div class="popup-shadow"></div>
        <div class="newsletter-popup">
            <a href="#" class="newsletter-close"></a>
            <div class="newsletter-container">
                <div class="newsletter-img">
                    <img src="template/media/banner/newsletter-popup.jpg" alt="">
                </div>
                <div class="newsletter-form">
                    <form action="" method="post">
                        <div class="newsletter-title">
                            <div class="title">Get<br> free shipping</div>
                            <div class="sub-title">on your first order. Offer ends soon.</div>
                        </div>
                        <div class="newsletter-input clearfix">
                            <input type="email" name="your-email" size="40" class="form-control" placeholder="Enter Your Email ...">
                            <input type="submit" value="Subscribe" class="form-control">
                        </div>
                        <div class="newsletter-no">no thanks !</div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Page Loader -->
        <div class="page-preloader">
            <div class="loader">
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- Dependency Scripts -->
        <script src="template/libs/popper/js/popper.min.js"></script>
        <script src="template/libs/jquery/js/jquery.min.js"></script>
        <script src="template/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="template/libs/slick/js/slick.min.js"></script>
        <script src="template/libs/mmenu/js/jquery.mmenu.all.min.js"></script>

        <!-- Site Scripts -->
        <script src="template/assets/js/app.js"></script>
        @livewireScripts
    </body>
</div>