<!DOCTYPE html>

<html lang="en-US">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Load CSS -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/styles.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/plugin/revslider/settings.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/js_composer.css' />
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,500,700,800,200italic,300italic,400italic,500italic,600italic,700italic,800italic' />
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,500,700,800,200italic,300italic,400italic,500italic,600italic,700italic,800italic' />
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,500,700,800,200italic,300italic,400italic,500italic,600italic,700italic,800italic' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/bootstrap.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/bootstrap-responsive.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/folio-font.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/style.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/plugin/prettyPhoto/prettyPhoto.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/project_style.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/red.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/style_dynamic.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/animation.css' />
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/colorbox.min.css' />
        <!-- End Load CSS -->
        <!-- Load Javascript -->
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery-migrate.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.vcsc.modernizr.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.themepunch.tools.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/plugin/revslider/jquery.themepunch.revolution.min.js'></script>
        <!-- End Load Javascript -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!-- fav icon for header -->
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>asset/fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>asset/fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>asset/fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>asset/fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>asset/fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>asset/fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>asset/fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>asset/fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>asset/fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>asset/fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>asset/fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>asset/fav/favicon-16x16.png">
        <link rel="manifest" href="<?php echo base_url(); ?>asset/fav/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- end fav icon for header -->
    </head>

    <body class="home page-template-temp-onepage page-template-temp-onepage-php onepagetemp wpb-js-composer js-comp-ver-4.6.1 vc_responsive">
        <header class="menu-bar sticky-bar">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="logo">
                            <figure>
                                <a href="<?php echo base_url(); ?>" title="The Vive Communication">
                                    <img src="<?php echo base_url(); ?>asset/logo.png" alt="" class="main_logo" style="height: 48px;">
                                </a>
                            </figure>
                            <div class="small_menu">
                                <div class="menu_small_btn">
                                    <div class="open_menu toggle_main_menu_btn">
                                        <i class="fa fa-bars" style="color: black;"></i>
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-bars"></i>
                                        <i class="fa fa-bars"></i>
                                    </div>
                                    <div class="close_menu toggle_main_menu_btn">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(document).ready(function ($) {
                                "use strict";
                                /* Sticky Navigation */
                                jQuery(".sticky-bar").sticky({
                                    topSpacing: 0
                                });
                            });
                        </script>
                        <nav class="main-nav">
                            <ul id="top-nav" class="menu top-nav">
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9"><a href="<?php echo base_url(); ?>/#home">Home</a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-12">
                                    <a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-396" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-396"><a href="<?php echo base_url(); ?>/#about">Who we are</a></li>
                                        <li id="menu-item-385" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-385"><a href="<?php echo base_url(); ?>/#culture">Our Culture</a></li>
                                        <li id="menu-item-385" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-385"><a href="<?php echo base_url(); ?>/#value">Our Values</a></li>
                                        <li id="menu-item-385" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-385"><a href="<?php echo base_url(); ?>/#team">Team</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-93" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-393"><a href="<?php echo base_url(); ?>/#service">Services</a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-10"><a href="<?php echo base_url(); ?>/#project">Projects</a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-11"><a href="<?php echo base_url(); ?>/#client">Clients</a></li>
                                <li id="menu-item-393" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-393"><a href="<?php echo base_url(); ?>/#event">Events</a></li>                           
                                <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-14"><a href="<?php echo base_url(); ?>/#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="clear"></div>
        <script>
            jQuery(document).ready(function ($) {
                "use strict";
                /* Scroll To Navigation For Top menu*/
                jQuery('#top-nav').onePageNav({
                    currentClass: 'current',
                    changeHash: true,
                    scrollSpeed: 200,
                    scrollOffset: 0,
                    scrollThreshold: 0.3,
                    easing: 'swing',
                    filter: ':not(.external a)'
                });
            });
        </script>
        <section id="home">
            <div class="bannercontainer revolution_container bannercontainer fox_container">
                <div class="header-menu-2 menu-bar">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div class="logo" style="margin-top:10px">
                                    <figure>
                                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>asset/logo.png" width="150" height="106" alt="top_logo"></a>
                                    </figure>
                                </div>
                                <div class="header_nav_holder">
                                    <nav class="main-nav">
                                        <ul id="head-nav" class="menu top-nav">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9"><a href="<?php echo base_url(); ?>/#home">Home</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-12"><a href="<?php echo base_url(); ?>">About Us</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-396"><a href="<?php echo base_url(); ?>/#about">Who we are</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-396"><a href="<?php echo base_url(); ?>/#culture">Our Culture</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-396"><a href="<?php echo base_url(); ?>/#value">Our Values</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-385"><a href="<?php echo base_url(); ?>/#team">Team</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-393"><a href="<?php echo base_url(); ?>/#service">Services</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-393"><a href="<?php echo base_url(); ?>/#event">Events</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-10"><a href="<?php echo base_url(); ?>/#project">Projects</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-11"><a href="<?php echo base_url(); ?>/#client">Clients</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-14"><a href="<?php echo base_url(); ?>/#contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                    <!-- Header Toggle Menu -->
                                    <div class="header_toggle_menu">
                                        <div class="menu_small_btn">
                                            <div class="open_menu toggle_top_menu_btn">
                                                <i class="fa fa-bars"></i>
                                            </div>
                                            <div class="close_menu toggle_top_menu_btn">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function ($) {
                                        "use strict";
                                        /* Scroll To Navigation */
                                        jQuery('#head-nav li').on('click', function () {
                                            jQuery('#top-nav').onePageNav({
                                                currentClass: 'current',
                                                changeHash: true,
                                                scrollSpeed: 800,
                                                scrollOffset: 0,
                                                scrollThreshold: 0.3,
                                                easing: 'swing',
                                                filter: ':not(.external a)'
                                            });
                                        });
                                        jQuery('#top-nav li').on('click', function () {
                                            jQuery('#head-nav').onePageNav({
                                                currentClass: 'current',
                                                changeHash: true,
                                                scrollSpeed: 800,
                                                scrollOffset: 0,
                                                scrollThreshold: 0.3,
                                                easing: 'swing',
                                                filter: ':not(.external a)',
                                            });
                                        });
                                        jQuery('#head-nav').onePageNav({
                                            currentClass: 'current',
                                            changeHash: true,
                                            scrollSpeed: 800,
                                            scrollOffset: 0,
                                            scrollThreshold: 0.3,
                                            easing: 'swing',
                                            filter: ':not(.external a)'
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/plugin/revslider/jquery.themepunch.tools.min.js'></script>
                <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/plugin/revslider/jquery.themepunch.revolution.min.js'></script>
                <div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#E9E9E9;padding:0px;">
                    <!-- START REVOLUTION SLIDER 4.6.92 fullscreen mode -->
                    <div id="rev_slider_11_1" class="rev_slider fullscreenbanner" style="display:none;">
                        <ul>
                            <?php
                            foreach ($all_slider as $v_slider) {
                                ?>
                                <!-- SLIDE  -->
                                <li data-transition="fade" data-slotamount="7" data-masterspeed="100" data-saveperformance="off" >
                                    <!-- MAIN IMAGE -->
                                    <img src="<?php echo base_url() . $v_slider->slider_image; ?>" alt="Welcome-Slide" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption Munash01 skewfromleft tp-resizeme" data-x="248" data-y="96" data-speed="1000" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <?php echo $v_slider->slider_heading; ?>
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption munashmedlitwhit lfr tp-resizeme" data-x="173" data-y="168" data-speed="1000" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <?php echo $v_slider->slider_subheading; ?>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                    <style>
                        .tp-caption.Munash01,
                        .Munash01 {
                            font-size: 95px;
                            line-height: 55px;
                            font-weight: 900;
                            font-family: "Arial Black", Gadget, sans-serif;
                            color: rgb(255, 255, 255);
                            text-decoration: none;
                            letter-spacing: 0.0001em;
                            background-color: transparent;
                            border-width: 0px;
                            border-color: rgb(255, 255, 255);
                            border-style: none;
                        }

                        .tp-caption.Munash01-light,
                        .Munash01-light {
                            font-size: 66px;
                            line-height: 55px;
                            font-weight: 100;
                            font-family: "Open Sans", Gadget, sans-serif;
                            color: rgb(255, 255, 255);
                            text-decoration: none;
                            letter-spacing: 0.0001em;
                            background-color: transparent;
                            border-width: 0px;
                            border-color: rgb(255, 255, 255);
                            border-style: none
                        }

                        .tp-caption.munash02,
                        .munash02 {
                            font-size: 66px;
                            line-height: 55px;
                            font-weight: 100;
                            font-family: "Open Sans", Gadget, sans-serif;
                            color: #ffffff;
                            text-decoration: none;
                            letter-spacing: 0.0001em;
                            background-color: transparent;
                            border-width: 0px;
                            border-color: rgb(255, 255, 255);
                            border-style: none
                        }

                        .tp-caption.munashmedlitwhit,
                        .munashmedlitwhit {
                            font-size: 26px;
                            line-height: 36px;
                            font-weight: 500;
                            font-family: "Open Sans";
                            color: rgb(255, 255, 255);
                            text-decoration: none;
                            padding: 0px;
                            background-color: transparent;
                            border-width: 0px;
                            border-color: rgb(255, 214, 88);
                            border-style: none
                        }
                    </style>
                    <script type="text/javascript">
                        /******************************************
                         -	PREPARE PLACEHOLDER FOR SLIDER	-
                         ******************************************/
                        var setREVStartSize = function () {
                            var tpopt = new Object();
                            tpopt.startwidth = 960;
                            tpopt.startheight = 350;
                            tpopt.container = jQuery('#rev_slider_11_1');
                            tpopt.fullScreen = "on";
                            tpopt.forceFullWidth = "off";
                            tpopt.container.closest(".rev_slider_wrapper").css({
                                height: tpopt.container.height()
                            });
                            tpopt.width = parseInt(tpopt.container.width(), 0);
                            tpopt.height = parseInt(tpopt.container.height(), 0);
                            tpopt.bw = tpopt.width / tpopt.startwidth;
                            tpopt.bh = tpopt.height / tpopt.startheight;
                            if (tpopt.bh > tpopt.bw)
                                tpopt.bh = tpopt.bw;
                            if (tpopt.bh < tpopt.bw)
                                tpopt.bw = tpopt.bh;
                            if (tpopt.bw < tpopt.bh)
                                tpopt.bh = tpopt.bw;
                            if (tpopt.bh > 1) {
                                tpopt.bw = 1;
                                tpopt.bh = 1
                            }
                            if (tpopt.bw > 1) {
                                tpopt.bw = 1;
                                tpopt.bh = 1
                            }
                            tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
                            if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on")
                                tpopt.height = tpopt.startheight;
                            if (tpopt.fullScreen == "on") {
                                tpopt.height = tpopt.bw * tpopt.startheight;
                                var cow = tpopt.container.parent().width();
                                var coh = jQuery(window).height();
                                if (tpopt.fullScreenOffsetContainer != undefined) {
                                    try {
                                        var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                                        jQuery.each(offcontainers, function (e, t) {
                                            coh = coh - jQuery(t).outerHeight(true);
                                            if (coh < tpopt.minFullScreenHeight)
                                                coh = tpopt.minFullScreenHeight
                                        })
                                    } catch (e) {
                                    }
                                }
                                tpopt.container.parent().height(coh);
                                tpopt.container.height(coh);
                                tpopt.container.closest(".rev_slider_wrapper").height(coh);
                                tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
                                tpopt.container.css({
                                    height: "100%"
                                });
                                tpopt.height = coh;
                            } else {
                                tpopt.container.height(tpopt.height);
                                tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
                                tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
                            }
                        };

                        /* CALL PLACEHOLDER */
                        setREVStartSize();
                        var tpj = jQuery;
                        tpj.noConflict();
                        var revapi11;
                        tpj(document).ready(function () {
                            if (tpj('#rev_slider_11_1').revolution == undefined) {
                                revslider_showDoubleJqueryError('#rev_slider_11_1');
                            } else {
                                revapi11 = tpj('#rev_slider_11_1').show().revolution({
                                    dottedOverlay: "none",
                                    delay: 3000,
                                    startwidth: 960,
                                    startheight: 350,
                                    hideThumbs: 200,
                                    thumbWidth: 100,
                                    thumbHeight: 50,
                                    thumbAmount: 4,
                                    simplifyAll: "off",
                                    navigationType: "bullet",
                                    navigationArrows: "solo",
                                    navigationStyle: "round",
                                    touchenabled: "on",
                                    onHoverStop: "on",
                                    nextSlideOnWindowFocus: "off",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    drag_block_vertical: false,
                                    keyboardNavigation: "off",
                                    navigationHAlign: "center",
                                    navigationVAlign: "bottom",
                                    navigationHOffset: 0,
                                    navigationVOffset: 20,
                                    soloArrowLeftHalign: "left",
                                    soloArrowLeftValign: "center",
                                    soloArrowLeftHOffset: 20,
                                    soloArrowLeftVOffset: 0,
                                    soloArrowRightHalign: "right",
                                    soloArrowRightValign: "center",
                                    soloArrowRightHOffset: 20,
                                    soloArrowRightVOffset: 0,
                                    shadow: 2,
                                    fullWidth: "off",
                                    fullScreen: "on",
                                    spinner: "spinner0",
                                    stopLoop: "off",
                                    stopAfterLoops: -1,
                                    stopAtSlide: -1,
                                    shuffle: "off",
                                    forceFullWidth: "off",
                                    fullScreenAlignForce: "off",
                                    minFullScreenHeight: "",
                                    hideThumbsOnMobile: "off",
                                    hideNavDelayOnMobile: 1500,
                                    hideBulletsOnMobile: "off",
                                    hideArrowsOnMobile: "off",
                                    hideThumbsUnderResolution: 0,
                                    fullScreenOffsetContainer: "",
                                    fullScreenOffset: "",
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0,
                                    startWithSlide: 0
                                });
                            }
                        });
                    </script>
                </div>
                <!-- END REVOLUTION SLIDER -->
                <div class="next_section">
                    <a href="javascript:void(0);" class="scroll_next_section animated animate_infinite" data-animdelay="0.2s" data-animspeed="1.4s" data-animrepeat="1" data-animtype="bounce">
                        <i class="fa fa-chevron-down"></i>
                    </a>
                </div> 
            </div>
        </section>
        <section id="about" class="section_container vc_row-fluid">
            <div class="container">
                <div class="folio_row">
                    <div class="folio_span12  wpb_column column_container">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="wpb_wrapper">
                                    <br />
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="wpb_wrapper">
                                    <div class="hgroup">
                                        <div class="heading_cover">
                                            <h2>About Us</h2></div>
                                        <div class="heading_cover">
                                            <h3>Events Management <span class="highlight"> &amp;</span> PR Agency</h3></div>
                                        <div class="heading_cover span5 span_center">
                                            <h4>We are a full service Events Management and PR Agency that has significantly serviced the public and private sector.</h4></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="wpb_wrapper">
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_wrapper">
                                    <div class="content_bar wpb_content_element  align_left">
                                        <div class="wpb_wrapper">
                                            <p style="text-align:center;">THE VIVE Communications is a dynamic communications agency that offers clients a fresh perspective to communications services. Our service offering is comprehensive offering clients a wide range of products and services. THE VIVE draws its wealth of experience from providing exceptional communications service to government departments and agencies, corporates, SMEs, foundations and NGOs, Media agency, Televisions. At VIVE imagination really can become a reality so let us take your brand to the next level.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                "use strict";
                /* Parallax Quote Start */
                jQuery(window).scroll(function (event) {
                    // check current parallax is visible and parallax_visible class available?
                    // if not then invoke parallax function on it and add class
                    if (jQuery('#parallax-xxa').visible(true)) {
                        //if (jQuery('#parallax-xxa').visible(true) && (jQuery('#parallax-xxa').hasClass('parallax_visible')!== true)) {
                        // adding class parallax_visible to avoid invoking the parallax function on every scroll
                        jQuery('#parallax-xxa').addClass('parallax_visible');
                        jQuery('#parallax-xxa').parallax("50%", 0.2);
                    }
                });
                /* Parallax Quote End */
            });
        </script>
        <section class="parallex_wrapper vc_row-fluid">
            <div class="parallex_folio" id="parallax-xxa" style="background-image:url(<?php echo base_url(); ?>asset/public/img/about_us.jpg);">
                <div class="container parallax_container">
                    <div class="folio_row">
                        <div class="folio_span12  wpb_column column_container">
                            <div class="folio_spacer" style="height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="service" class="section_container vc_row-fluid">
            <div class="container">
                <div class="folio_row">
                    <div class="folio_span12  wpb_column column_container">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="wpb_wrapper">
                                    <br />
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="wpb_wrapper">
                                    <div class="hgroup">
                                        <div class="heading_cover">
                                            <h2>Our Services</h2></div>
                                        <div class="heading_cover">
                                            <h3>What <span class="highlight"> we </span>do</h3></div>
                                        <div class="heading_cover span5 span_center">
                                            <h4></h4></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="wpb_wrapper">
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="animated" data-animdelay="0.2s" data-animspeed="1.0s" data-animrepeat="0" data-animtype="">
                            <div class="row">
                                <div class="span6 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/1.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span4">
                                            <h4>MARKETING &amp; CORPORATE CONSULTING</h4>
                                            <p style="text-align:justify;">We offer a specialized marketing and communications service designed to maximize your brand potential and position your business for long term success. Our team of experienced account executives will guide you through internal and external communications. We will do for you; Corporate Social Investment plans, change management communications and development of communication and branding strategies.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="span6 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/2.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span4">
                                            <h4>PUBLIC RELATIONS &amp; MEDIA MANAGEMENT</h4>
                                            <p style="text-align:justify;">We offer our clients a modern and innovative approach to public relations. We have built substantial relationships with various media houses and we adapt our approach to extract maximum value in each project. Our specialized service guarantees that your organization of a well-built public image. Our services include; media training, press release writing and translations, planning and implementation of press conferences.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span6 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/3.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span4">
                                            <h4>MEDIA BUYING</h4>
                                            <p style="text-align:justify;">At The Vive, we are specialists in media buying. Before we schedule your advert in the media, we evaluate factors of pricing rates, demographics and geographic relating to your product or service offering. We optimize the reach of your campaign through extensive knowledge of the Bangladesh and its regional media. The Vive has established partnerships with the television, radio, print and outdoor media. We analyses your target market, your campaign objectives and define the best media scheduling strategy for you with the best pricing.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="span6 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/4.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span4">
                                            <h4>CONTENT DEVELOPMENT</h4>
                                            <p style="text-align:justify;">The Vive's team of dedicated copywriters and editors pride themselves in generating clean, clear, concise and interesting copy for varying target audiences. They have the creative flair and proficiency to ensure your every wish is put into words, in the style want. Our list of products includes; company profiles, web content, newsletter, brochures, copy writing, editing and advertorials.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span6 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/9.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span4">
                                            <h4>BRANDING & DESIGN</h4>
                                            <p style="text-align:justify;">Dedicated design studio, and our competent team is always on hand to service clients’ expectations. Armed with cutting-edge designs, and the very latest in design software, our well experienced team of creatives are capable of producing a wide variety of designs; from static, to animated visuals and special effects, we offer tailor made solutions that fit any scale of work demanded.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="span6 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/6.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span4">
                                            <h4>EXHIBITIONS</h4>
                                            <p style="text-align:justify;">We design, layout and manufacture exclusive stands for your exhibitions. Through our team of resourceful and innovative experts, The Vive ensures that your display stands are exceptional. We also assist our clients with setting up the exhibition in trendy ways that draws people’s attention.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span6 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/5.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span4">
                                            <h4>PROMOTIONAL ITEMS</h4>
                                            <p style="text-align:justify;">Our business philosophy rests on a solid foundation of the finest products and quality services tailor-made around the needs of our clients. In the highly competitive corporate arena, image is everything. We have a sound understanding of the importance of corporate identity and branding. We have built up a solid reputation of being able to source or manufacture specialized products to customers' specifications. All our products can be branded by any of the following methods; silk-screening, pad printing, laser engraving, scratch engraving, embossing and embroidery.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="span6 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/8.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span4">
                                            <h4>BRAND STRATEGY & COMMUNICATION</h4>
                                            <p style="text-align:justify;">In today’s highly competitive market place, Strategy defines the success of a brand. A strong strategy can increase brand awareness, increase sales, improve brand equity and build the brand. The strategy you deploy must be very compelling, attractive and unique. The Vive devises strategies which are effective and deliver a competitive advantage and enhance your brand equity. We have the experience and expertise to manage all forms of brand communications and clearly communicate the value, brand personality and positioning of the brand. We offer brand communication services all aimed at strongly connecting your brand with the audience.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span12 service_single">
                                    <div class="row">
                                        <div class="service_block text-center span2">
                                            <img src="<?php echo base_url(); ?>asset/public/service_icon/7.png" class="img-responsive"/>
                                        </div>
                                        <div class="service_right span10">
                                            <h4>SPECIAL EVENTS</h4>
                                            <p style="text-align:justify;">We offer a full event management service, providing a one-stop shop for all of your needs. From our extensive event management experience, we are able to bring cultural and procedural necessities warranted for each new project. We design event experiences that help you inform, influence and entertain your audience. At The Vive, we offer a wide range of event management services to ensure a successful event. We provide clients with the necessary industry related guidance to help make informed decisions, coupled with a highly skilled and experienced team to support you in creating a memorable experience for the event delegates. Our events and conferences vary in size, from smaller intimate gatherings to elaborate productions. Our services include: Creative conceptualizing and theme development, corporate identity, invitations and marketing material design, RSVP management, onsite management, venue management, audiovisual, health & safety, security and exhibitions.</p>
                                            <a href="#" title="" target=" _blank" class="folio-link-url"></a>
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
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";
            /* Parallax Quote Start */
            jQuery(window).scroll(function (event) {
                // check current parallax is visible and parallax_visible class available?
                // if not then invoke parallax function on it and add class
                if (jQuery('#parallax-tkq').visible(true)) {
                    //if (jQuery('#parallax-tkq').visible(true) && (jQuery('#parallax-tkq').hasClass('parallax_visible')!== true)) {
                    // adding class parallax_visible to avoid invoking the parallax function on every scroll
                    jQuery('#parallax-tkq').addClass('parallax_visible');
                    jQuery('#parallax-tkq').parallax("50%", 0.2);
                }
            });
            /* Parallax Quote End */
        });
    </script>
    <section class="parallex_wrapper vc_row-fluid">
        <div class="parallex_folio" id="parallax-tkq" style="background-image:url(<?php echo base_url(); ?>asset/public/img/our_culture.jpg);">
            <div class="container parallax_container">
                <div class="folio_row">
                    <div class="folio_span12 wpb_column column_container" style="margin-left:9%;">
                        <div class="folio_spacer" style="height:80px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="culture" class="section_container vc_row-fluid">
        <div class="container">
            <div class="folio_row">
                <div class="folio_span12  wpb_column column_container">
                    <div class="hgroup">
                        <div class="heading_cover">
                            <h2>Ideal & Culture</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div id="portfolio_wrapper">
                            <div class="portfolio_listing span12" id="container">
                                <div class="portfolio_item span3 isotope-item gallery">
                                    <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                        <figure class="view-sixth">
                                            <img alt="" src="<?php echo base_url(); ?>asset/public/img/culture/1.png" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="portfolio_item span3 isotope-item gallery">
                                    <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                        <figure class="view-sixth">
                                            <img alt="" src="<?php echo base_url(); ?>asset/public/img/culture/2.jpg" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="portfolio_item span3 isotope-item gallery">
                                    <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                        <figure class="view-sixth">
                                            <img alt="" src="<?php echo base_url(); ?>asset/public/img/culture/3.jpg" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="portfolio_item span3 isotope-item gallery">
                                    <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                        <figure class="view-sixth">
                                            <img alt="" src="<?php echo base_url(); ?>asset/public/img/culture/4.jpg" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="portfolio_item span3 isotope-item gallery">
                                    <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                        <figure class="view-sixth">
                                            <img alt="" src="<?php echo base_url(); ?>asset/public/img/culture/5.jpg" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="portfolio_item span3 isotope-item gallery">
                                    <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                        <figure class="view-sixth">
                                            <img alt="" src="<?php echo base_url(); ?>asset/public/img/culture/6.jpg" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="portfolio_item span3 isotope-item gallery">
                                    <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                        <figure class="view-sixth">
                                            <img alt="" src="<?php echo base_url(); ?>asset/public/img/culture/7.jpg" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="portfolio_item span3 isotope-item gallery">
                                    <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                        <figure class="view-sixth">
                                            <img alt="" src="<?php echo base_url(); ?>asset/public/img/culture/8.jpg" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project" class="section_container vc_row-fluid">
        <div class="container">
            <div class="folio_row">
                <div id="ajax_project_wrapper" class="span10 span_center">
                    <div id="project_nav">
                        <ul>
                            <li id="previous_project"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li id="next_project"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="folio_span12  wpb_column column_container">
                    <div class="hgroup">
                        <div class="heading_cover">
                            <h2>Projects</h2>
                        </div>
                        <div class="heading_cover">
                            <h3>Some of our <span class="highlight">Recent</span> work</h3>
                        </div>
                    </div>
                    <div class="span12">
                        <nav class="portfolio_nav">
                            <ul id="filters">
                                <li class="current">
                                    <a data-filter="*" href="#"><i class="fa fa-th-large"></i> All Projects</a>
                                </li>
                                <?php foreach ($all_category as $v_category) { ?>
                                    <li><a data-filter=".<?php echo $v_category->category_name; ?>" href="#"><?php echo $v_category->category_name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <div id="portfolio_wrapper">
                            <div class="portfolio_listing span12" id="container">
                                <?php
                                foreach ($all_project as $v_project) {
                                    ?>
                                    <div class="portfolio_item span3 isotope-item <?php echo $v_project->category_name; ?>">
                                        <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                            <figure class="view view-sixth">
                                                <img alt="" src="<?php echo base_url() . $v_project->project_image; ?>" />
                                                <div class="mask">
                                                    <div class="links">
                                                        <a href="<?php echo base_url(); ?>home/project_details/<?php echo $v_project->project_id; ?>" class="info-link">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                    <div class="port_detail">
                                                        <h3><?php echo $v_project->project_name; ?></h3>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";
            /* Parallax Quote Start */
            jQuery(window).scroll(function (event) {
                // check current parallax is visible and parallax_visible class available?
                // if not then invoke parallax function on it and add class
                if (jQuery('#parallax-csi').visible(true)) {
                    //if (jQuery('#parallax-tkq').visible(true) && (jQuery('#parallax-tkq').hasClass('parallax_visible')!== true)) {
                    // adding class parallax_visible to avoid invoking the parallax function on every scroll
                    jQuery('#parallax-csi').addClass('parallax_visible');
                    jQuery('#parallax-csi').parallax("50%", 0.2);
                }
            });
            /* Parallax Quote End */
        });
    </script>
    <section id="value" class="parallex_wrapper vc_row-fluid">
        <div class="parallex_folio parallax_visible" id="parallax-csi" style="background-image: url(&quot;<?php echo base_url(); ?>asset/public/img/white-elephant.png&quot;); background-position: 50% 41px;">
            <div class="container parallax_container">
                <div class="folio_row">
                    <div class="folio_span12  wpb_column column_container">
                        <div class="span10 span_center parallax_text">
                            <div class="hgroup">
                                <div class="heading_cover">
                                    <h2>The Vive Values</h2>
                                </div>
                                <div class="heading_cover">
                                    <h3>WHAT MAKES US <span class="highlight">DIFFERENT</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="wpb_wrapper">
                                    <div class="stats_single">
                                        <img src="<?php echo base_url(); ?>asset/public/img/customer_service.png" class="img-responsive"/>
                                        <h3>Customer Service</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="wpb_wrapper">
                                    <div class="stats_single">
                                        <img src="<?php echo base_url(); ?>asset/public/img/integrity.png" class="img-responsive"/>
                                        <h3>Integrity</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="wpb_wrapper">
                                    <div class="stats_single">
                                        <img src="<?php echo base_url(); ?>asset/public/img/passion.png" class="img-responsive"/>
                                        <h3>Passion</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        The Vive Creative Communications is a 100% private owned company with joint stock certificate. The Vive is fully committed to the process of business transformation in BANGLADESH. The Vive employs highly competent and qualified web and graphic designers, marketing specialists and media professionals to see each project to perfection.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="client" class="section_container vc_row-fluid">
        <div class="container">
            <div class="folio_row">
                <div class="folio_span12  wpb_column column_container">
                    <div class="hgroup">
                        <div class="heading_cover">
                            <h2>Our Clients</h2>
                        </div>
                        <div class="heading_cover">
                            <h3>Some of our <span class="highlight"> Happy</span> Clients</h3>
                        </div>
                    </div>
                    <div class="content_bar wpb_content_element  align_left">
                        <div class="wpb_wrapper">
                            <div class="lshowcase-clear-both">&nbsp;</div>
                            <div class="lshowcase-logos">
                                <div>
                                    <?php
                                    foreach ($all_client as $v_client) {
                                        ?>
                                        <div class='lshowcase-wrap-normal'>
                                            <div class="lshowcase-box-normal">
                                                <div class="lshowcase-boxInner-normal" style="align: center; text-align: center;"><img src='<?php echo base_url() . $v_client->client_image; ?>' class='lshowcase-hover-grayscale' /></div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="lshowcase-clear-both">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";
            /* Parallax Quote Start */
            jQuery(window).scroll(function (event) {
                // check current parallax is visible and parallax_visible class available?
                // if not then invoke parallax function on it and add class
                if (jQuery('#parallax-biv').visible(true)) {
                    //if (jQuery('#parallax-biv').visible(true) && (jQuery('#parallax-biv').hasClass('parallax_visible')!== true)) {
                    // adding class parallax_visible to avoid invoking the parallax function on every scroll
                    jQuery('#parallax-biv').addClass('parallax_visible');
                    jQuery('#parallax-biv').parallax("50%", 0.2);
                }
            });
            /* Parallax Quote End */
        });
    </script>
    <section class="parallex_wrapper vc_row-fluid">
        <div class="parallex_folio" id="parallax-biv" style="background-image:url(<?php echo base_url(); ?>asset/public/img/testimonial.jpg);">
            <div class="container parallax_container">
                <div class="folio_row">
                    <div class="folio_span12  wpb_column column_container">
                        <div class="span10 span_center parallax_text">
                            <div class="heading_cover">
                                <h5>Testimonies</h5>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="wpb_wrapper">
                                    <div id="ts-vcsc-anyslider-9203224-container" class="ts-vcsc-anyslider-container">
                                        <div id="ts-owlslider-controls-9203224" class="ts-owlslider-controls" style="display: none;">
                                            <div id="ts-owlslider-controls-next-9203224" style="display: none;" class="ts-owlslider-controls-next"><span class="ts-ecommerce-arrowright5"></span></div>
                                            <div id="ts-owlslider-controls-prev-9203224" style="display: none;" class="ts-owlslider-controls-prev"><span class="ts-ecommerce-arrowleft5"></span></div>
                                        </div>
                                        <div id="ts-vcsc-anyslider-9203224" class="ts-vcsc-anyslider ts-owlslider-parent owl-carousel" style="margin-top: 0px; margin-bottom: 0px;" data-id="9203224" data-items="1" data-rtl="false" data-loop="true" data-navigation="false" data-dots="true" data-mobile="false" data-animationin="ts-viewport-css-flipInX" data-animationout="ts-viewport-css-slideOutDown" data-height="false" data-play="false" data-bar="true" data-color="#dd3333" data-speed="5000" data-hover="true">
                                            <?php
                                            foreach ($all_testimonial as $v_testimonial) {
                                                ?> 
                                                <div class="content_bar wpb_content_element align_center">
                                                    <div class="wpb_wrapper">
                                                        <p style="color: #ffffff;"><?php echo $v_testimonial->testimonial_details; ?></p>
                                                        <p style="text-align: center; color: #ffffff;">&#8211; <em><strong><?php echo $v_testimonial->testimonial_name; ?></strong>&#8211; <?php echo $v_testimonial->testimonial_designation; ?></em></p>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ts-vcsc-anyslider-5526806-container" class="ts-vcsc-anyslider-container">
                            <div id="ts-owlslider-controls-5526806" class="ts-owlslider-controls" style="display: block;">
                                <div id="ts-owlslider-controls-next-5526806" style="display: none;" class="ts-owlslider-controls-next"><span class="ts-ecommerce-arrowright5"></span></div>
                                <div id="ts-owlslider-controls-prev-5526806" style="display: none;" class="ts-owlslider-controls-prev"><span class="ts-ecommerce-arrowleft5"></span></div>
                                <div id="ts-owlslider-controls-play-5526806" class="ts-owlslider-controls-play active"><span class="ts-ecommerce-pause"></span></div>
                            </div>
                            <div id="ts-vcsc-anyslider-5526806" class="ts-vcsc-anyslider ts-owlslider-parent owl-carousel" style="margin-top: 0px; margin-bottom: 0px;" data-id="5526806" data-items="1" data-rtl="false" data-loop="true" data-navigation="false" data-dots="true" data-mobile="false" data-animationin="ts-viewport-css-flipInX" data-animationout="ts-viewport-css-slideOutDown" data-height="false" data-play="true" data-bar="false" data-color="#dd3333" data-speed="5000" data-hover="false">
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="event" class="section_container vc_row-fluid">
        <div class="container">
            <div class="folio_row">
                <div class="folio_span12  wpb_column column_container">
                    <div class="hgroup">
                        <div class="heading_cover">
                            <h2>Events Gallery</h2></div>
                        <div class="heading_cover">
                            <h3>Check out some of <span class="highlight">Our </span> Events</h3></div>
                        <div class="heading_cover span5 span_center">
                            <h4></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div id="portfolio_wrapper">
                            <div class="portfolio_listing span12" id="container">
                                <?php
                                foreach ($all_event as $v_event) {
                                    ?>
                                    <div class="portfolio_item span3 isotope-item gallery">
                                        <div class="single_portfolio animated" data-animdelay="0.2s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeInUp">
                                            <figure class="view view-sixth">
                                                <img alt="" src="<?php echo base_url() . $v_event->event_slider_0; ?>" />
                                                <div class="mask">
                                                    <div class="links">
                                                        <a href="<?php echo base_url(); ?>home/event_details/<?php echo $v_event->event_id; ?>" class="info-link">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                    <div class="port_detail">
                                                        <h3><?php echo $v_event->event_name; ?></h3>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="section_container vc_row-fluid">
        <div class="container">
            <div class="row">
                <div class="hgroup">
                    <div class="heading_cover">
                        <h2>The Team</h2></div>
                    <div class="heading_cover">
                        <h3>Check out some of <span class="highlight">Our </span> Team Member</h3>
                    </div>
                </div>
                <div class="heading-title text-center">
                    <p style="color:black; padding: 2%;">
                        The Vive Communications team consists of marketing and communications specialists, creative professions, public relations and media buying experts, event management specialists and brand activation experts who are passionate about communications. At the heart of the team is the desire to exceed client’s expectations in value offering.
                    </p>
                </div>
                <div class="row">
                    <div class="offset2 span4">
                        <div class="team-member">
                            <div class="text-center">
                                <img src="asset/public/img/2.jpg">
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4 class="text-center">Nazmus Sakive Zubair<br>
                                        Co-Founder
                                    </h4>
                                </div>
                                <div class="s-link text-center">
                                    <a href="https://www.facebook.com/nazmus.sakive.9" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/nazmus-sakive-zubair-1124a761?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="team-member">
                            <div class="text-center">
                                <img src="asset/public/img/1.jpg">
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4 class="text-center">Zeaul Huda Hemal<br>
                                        Co-Founder
                                    </h4>
                                </div>
                                <div class="s-link text-center">
                                    <a href="https://www.facebook.com/HEMAL.ZEAULHUDA" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/md-zeaul-huda-hemal-80773554?trk=nav_responsive_tab_profile" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
                foreach ($all_team as $v_team) {
                    ?>
                    <div class="span4">
                        <div class="team-member">
                            <div class="text-center">
                                <img src="<?php echo base_url() . $v_team->team_image; ?>">
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h4 class="text-center"><?php echo $v_team->team_name; ?><br>
                                        <?php echo $v_team->team_designation; ?>
                                    </h4>
                                </div>
                                <div class="s-link text-center">
                                    <a href="<?php echo $v_team->team_facebook_link; ?>" target="_blank" ><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $v_team->team_twitter_link; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>  
            </div>
        </div>
    </section>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";
            /* Parallax Quote Start */
            jQuery(window).scroll(function (event) {
                // check current parallax is visible and parallax_visible class available?
                // if not then invoke parallax function on it and add class
                if (jQuery('#parallax-juy').visible(true)) {
                    //if (jQuery('#parallax-juy').visible(true) && (jQuery('#parallax-juy').hasClass('parallax_visible')!== true)) {
                    // adding class parallax_visible to avoid invoking the parallax function on every scroll
                    jQuery('#parallax-juy').addClass('parallax_visible');
                    jQuery('#parallax-juy').parallax("50%", 0.2);
                }
            });
            /* Parallax Quote End */
        });
    </script>
    <section class="parallex_wrapper vc_row-fluid">
        <div class="parallex_folio" id="parallax-juy" style="background-image:url(<?php echo base_url(); ?>asset/public/img/contact_us.jpg);">
            <div class="container parallax_container">
                <div class="folio_row">
                    <div class="folio_span12  wpb_column column_container">
                        <div class="folio_spacer" style="height:300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="section_container vc_row-fluid">
        <div class="container">
            <div class="folio_row">
                <div class="folio_span12 wpb_column column_container">
                    <div class="hgroup">
                        <div class="heading_cover">
                            <h2>Contact Us</h2></div>
                        <div class="heading_cover">
                            <h3>Get In <span class="highlight">Touch </span>with Us Instantly</h3>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="wpb_wrapper">
                                <div class="contact_area">
                                    <div class="contact_info">
                                        <div class="row info_single info_address">
                                            <div class="span1"><i class="fa fa-home"></i></div>
                                            <div class="span3">
                                                <p>840-841</p>
                                                <p>Baitul Aman Tower</p>
                                                <p>Ring Road</p>                                                
                                                <p>Adabor</p>
                                                <p>Dhaka</p>
                                            </div>
                                        </div>
                                        <div class="row info_single info_tel">
                                            <div class="span1"><i class="fa fa-phone"></i></div>
                                            <div class="span3">
                                                <p>+880 - 1777719633</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="wpb_wrapper">
                                <div role="form" class="wpcf7" id="wpcf7-f7-p1151-o1" lang="en-US" dir="ltr">
                                    <form action="<?php echo base_url(); ?>home/contact" method="post" class="wpcf7-form" novalidate="novalidate">
                                        <p>
                                            <span class="wpcf7-form-control-wrap your-name">
                                                <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Full Name" />
                                            </span>
                                            <br/>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address" />
                                            </span>
                                            <br/>
                                            <span class="wpcf7-form-control-wrap your-message">
                                                <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
                                            </span>
                                        </p>
                                        <p>
                                            <br />
                                            <br />
                                            <input type="submit" value="Send Now" class="wpcf7-form-control wpcf7-submit" />
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="span10 span_center footer_text">
                    <div class="hgroup">
                        <h5>
                            <ul class="sm_links align_center">
                                <li>
                                    <a class="sm_icon" href="https://www.facebook.com/thevivec/?fref=ts" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="sm_icon" href="https://www.linkedin.com/company/the-vive-communication" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            &nbsp;
                            Copyright © 2016 The Vive Communication
                        </h5>
                        <p>View Our <a href="">Privacy Policy Here</a></p>
                        <p>Developed By <a href="http://labtrio.it" target="_blank">Labtrio</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            "use strict";
            /* preloaders calling  */
            if (!$.browser.msie) {
                $("body").queryLoader2({
                    barColor: "#444444",
                    backgroundColor: "#ffffff",
                    percentage: true,
                    barHeight: 3,
                    completeAnimation: "fade",
                    minimumTime: 200
                });
            } else {
                $('#load').hide();
            }
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
        });
    </script>
    <script type="text/javascript">
        var recaptchaCallback = function () {
            var forms = document.getElementsByTagName('form');
            var pattern = /(^|\s)g-recaptcha(\s|$)/;
            for (var i = 0; i < forms.length; i++) {
                var divs = forms[i].getElementsByTagName('div');
                for (var j = 0; j < divs.length; j++) {
                    var sitekey = divs[j].getAttribute('data-sitekey');
                    if (divs[j].className && divs[j].className.match(pattern) && sitekey) {
                        grecaptcha.render(divs[j], {
                            'sitekey': sitekey,
                            'theme': divs[j].getAttribute('data-theme'),
                            'type': divs[j].getAttribute('data-type'),
                            'size': divs[j].getAttribute('data-size'),
                            'tabindex': divs[j].getAttribute('data-tabindex'),
                            'callback': divs[j].getAttribute('data-callback'),
                            'expired-callback': divs[j].getAttribute('data-expired-callback')
                        });
                        break;
                    }
                }
            }
        };
    </script>
    <!-- Lightbox Plus Colorbox v2.7.2/1.5.9 - 2013.01.24 - Message: 0-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $("a[rel*=lightbox]").colorbox({speed: 0, width: false, height: false, innerWidth: false, innerHeight: false, initialWidth: false, initialHeight: false, maxWidth: false, maxHeight: false, scalePhotos: false, opacity: 0, preloading: false, current: " {current}  {total}", previous: "", next: "", close: "", overlayClose: false, loop: false, scrolling: false, escKey: false, arrowKey: false, top: false, right: false, bottom: false, left: false});
            $(".lbp-inline-link-1").colorbox({transition: "elastic", speed: "300", width: "60%", height: "79%", innerWidth: "true", innerHeight: "true", maxWidth: "60%", maxHeight: "79%", top: false, right: false, bottom: false, left: false, fixed: true, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-1"});
            $(".lbp-inline-link-2").colorbox({transition: "elastic", speed: "300", width: "60%", height: "82%", innerWidth: "true", innerHeight: "true", maxWidth: "60%", maxHeight: "82%", top: false, right: false, bottom: false, left: false, fixed: true, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-2"});
            $(".lbp-inline-link-3").colorbox({transition: "elastic", speed: "300", width: "60%", height: "79%", innerWidth: "true", innerHeight: "true", maxWidth: "60%", maxHeight: "79%", top: false, right: false, bottom: false, left: false, fixed: true, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-3"});
            $(".lbp-inline-link-4").colorbox({transition: "elastic", speed: "300", width: "60%", height: "85%", innerWidth: "true", innerHeight: "true", maxWidth: "60%", maxHeight: "85%", top: false, right: false, bottom: false, left: false, fixed: true, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-4"});
            $(".lbp-inline-link-5").colorbox({transition: "elastic", speed: "300", width: "60%", height: "85%", innerWidth: "true", innerHeight: "true", maxWidth: "60%", maxHeight: "85%", top: false, right: false, bottom: false, left: false, fixed: true, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-5"});
            $(".lbp-inline-link-6").colorbox({transition: "elastic", speed: "300", width: "60%", height: "85%", innerWidth: "true", innerHeight: "true", maxWidth: "60%", maxHeight: "85%", top: false, right: false, bottom: false, left: false, fixed: true, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-6"});
            $(".lbp-inline-link-7").colorbox({transition: "elastic", speed: "300", width: "60%", height: "85%", innerWidth: "true", innerHeight: "true", maxWidth: "60%", maxHeight: "85%", top: false, right: false, bottom: false, left: false, fixed: true, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-7"});
            $(".lbp-inline-link-8").colorbox({transition: "elastic", speed: "300", width: "60%", height: "85%", innerWidth: "true", innerHeight: "true", maxWidth: "60%", maxHeight: "85%", top: false, right: false, bottom: false, left: false, fixed: true, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-8"});
            $(".lbp-inline-link-9").colorbox({transition: "elastic", speed: "300", width: "80%", height: "80%", innerWidth: false, innerHeight: false, maxWidth: "80%", maxHeight: "80%", top: false, right: false, bottom: false, left: false, fixed: false, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-9"});
            $(".lbp-inline-link-10").colorbox({transition: "elastic", speed: "300", width: "80%", height: "80%", innerWidth: false, innerHeight: false, maxWidth: "80%", maxHeight: "80%", top: false, right: false, bottom: false, left: false, fixed: false, open: false, opacity: "0.8", inline: true, href: "#lbp-inline-href-10"});
        });
    </script>
    <link rel='stylesheet' href='http://moshatemedia.co.za/wp-content/themes/moshatemedia/assets/css/rev-settings.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/isotope_animation.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/plugin/revslider/responsiveslides.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/js/styles.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/plugin/owl.carousel/jquery.vcsc.owl.carousel.min.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/font-ecommerce.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/visual-composer-extend-animations.min.css'/>
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/jquery.vcsc.simptip.min.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/jquery.vcsc.buttons.min.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/css/visual-composer-extend-front.min.css' />
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/waypoints.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery-ui.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.browser.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/animation.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/modernizr.custom.53451.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.sticky.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.easing.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.scrollTo.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.nav.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.queryloader2.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/main_home.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.colorbox.1.5.9-min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/js_composer_front.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.parallax-1.1.3.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.localscroll-1.2.7-min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/portfolio-isotops.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/project_script.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.fitvids.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/plugin/revslider/responsiveslides.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/plugin/owl.carousel/jquery.vcsc.owl.carousel.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/visual-composer-extend-front.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/gmap3.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/count.js'></script>
</body>
</html>