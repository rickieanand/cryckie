<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="primary-desktop">
        <div class="header-logo">
            <a href="<?php echo get_home_url(); ?>" class="header-logo-container">
                <img class="light-logo" src="assets/images/logo.jpeg" alt="Greenhashes" />
                <div class="logo-text">Greenhashes</div>
            </a>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'navigation-main' ) ); ?>
    </header>
    

    <header class="primary-mobile primary-mobile-light">                    
        <div id="header-mobile" class="header-mobile">
            <div class="header-mobile-navigation">
                <div class="container">
                    <div class="table">
                        <div class="table-cell group">
                            <div class="header-logo group-equal">
                                <a href="<?php echo get_home_url(); ?>" class="header-logo-container table-small">
                                    <div class="table-cell">
                                        <img class="light-logo" src="assets/images/logo.jpeg" alt="Greenhashes" />
                                        <h1>Greenhashes</h1>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="table-cell">
                            <nav id="header-navigation-mobile" class="header-standard-position">
                                <div class="nav-container">
                                    <ul class="nav">								    
                                        <li class="menu-item nav-dropdown" onclick="openMenu()">
                                            <a>
                                                <div class="table-full">
                                                    <div class="table-cell">
                                                        <span class="c-hamburger c-hamburger--htx">
                                                            <span>Toggle menu</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="header-mobile-dropdown">
                <div class="container nav-container">
                    <ul class="nav-mobile">
                        <li id="menu-item-758" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-758"><a href="#backtotop" >Home</a></li>
                        <li id="menu-item-741" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-741"><a href="#services" >Services</a></li>
                        <li id="menu-item-958" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-958"><a href="#roadmap" >Roadmap</a></li>
                        <li id="menu-item-738" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-738"><a href="#experts" >Experts</a></li>
                        <li id="menu-item-740" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-740"><a href="#blog" >Blog</a></li>
                        <li id="menu-item-1753" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1753"><a href="#contacts" >Contacts</a></li>
                        <li class="menu-item nav-social nav-special">
                            <a href="#"  target = "_blank"  class="social-media-twitter">
                                <i class="icon-social-twitter"></i>
                            </a>
                            <a href="#"  target = "_blank"  class="social-media-facebook">
                                <i class="icon-social-facebook"></i>
                            </a>
                            <a href="#"  target = "_blank"  class="social-media-instagram">
                                <i class="icon-social-instagram"></i>
                            </a>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
                <div class="container nav-container">
                </div>
            </nav>
        </div>
    </header>
<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>

    <div class="row">