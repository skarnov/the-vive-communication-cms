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
    </head>

    <body>
        <header class="menu-bar sticky-bar always_show">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <!-- logo starts -->
                        <div class="logo">
                            <figure>
                                <a href="<?php echo base_url(); ?>" title="">
                                    <img src="<?php echo base_url(); ?>asset/logo.png" alt="" class="main_logo" style="height: 41px;">
                                </a>
                            </figure>
                            <div class="small_menu">
                                <div class="menu_small_btn">
                                    <div class="open_menu toggle_main_menu_btn">
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
                                jQuery(".sticky-bar").sticky({topSpacing: 0});
                            });
                        </script>
                        <nav class="main-nav">
                            <ul id="top-nav" class="menu top-nav">
                                <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9"><a href="<?php echo base_url(); ?>/#home">Home</a></li>
                                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-12">
                                    <a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-396" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-396"><a href="<?php echo base_url(); ?>/#about">Who we are</a></li>
                                        <li id="menu-item-385" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-385"><a href="<?php echo base_url(); ?>/#team">Team</a></li>
                                        <li id="menu-item-509" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-509"><a href="<?php echo base_url(); ?>/#services">Services</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-393" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-393"><a href="<?php echo base_url(); ?>/#events">Events</a></li>
                                <li id="menu-item-395" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-395"><a href="<?php echo base_url(); ?>/#blog">PR</a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-10"><a href="<?php echo base_url(); ?>/#projects">Projects</a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-11"><a href="<?php echo base_url(); ?>/#clients">Clients</a></li>
                                <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-14"><a href="<?php echo base_url(); ?>/#contact">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- main-nav ends-->
                    </div>
                </div>
            </div>
        </header>
        <section class="content_area ">
            <div class="container">
                <div class="row">
                    <div class="span10 span_center">
                        <div id="project_ajax_content">
                            <div class="content_bar project">
                                <div class="project_detail">
                                    <h3 class="portfolio_title"><?php echo $event_info->event_name; ?></h3>
                                </div>
                                <div class="row client_description">
                                    <div class="span7">
                                        <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:600px;">
                                            <!-- START REVOLUTION SLIDER 4.6.92 fullwidth mode -->
                                            <div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;max-height:600px;height:600px;">
                                                <ul>
                                                    <!-- SLIDE  -->
                                                    <li data-transition="slideright" data-slotamount="7" data-masterspeed="300" data-thumb="<?php echo base_url(). $event_info->event_slider_0; ?>" data-saveperformance="off" data-title="Slide">
                                                        <!-- MAIN IMAGE -->
                                                        <img src="<?php echo base_url(). $event_info->event_slider_0; ?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                                        <!-- LAYERS -->
                                                    </li>
                                                    <?php
                                                        if($event_info->event_slider_1)
                                                        {
                                                    ?>
                                                    <!-- SLIDE  -->
                                                    <li data-transition="slideright" data-slotamount="7" data-masterspeed="300" data-thumb="<?php echo base_url(). $event_info->event_slider_1; ?>" data-saveperformance="off" data-title="Slide">
                                                        <!-- MAIN IMAGE -->
                                                        <img src="<?php echo base_url(). $event_info->event_slider_1; ?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                                        <!-- LAYERS -->
                                                    </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <?php
                                                        if($event_info->event_slider_2)
                                                        {
                                                    ?>
                                                    <!-- SLIDE  -->
                                                    <li data-transition="slideright" data-slotamount="7" data-masterspeed="300" data-thumb="<?php echo base_url(). $event_info->event_slider_2; ?>" data-saveperformance="off" data-title="Slide">
                                                        <!-- MAIN IMAGE -->
                                                        <img src="<?php echo base_url(). $event_info->event_slider_2; ?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                                        <!-- LAYERS -->
                                                    </li>
                                                    <?php
                                                    
                                                        }
                                                    ?>
                                                    <?php
                                                        if($event_info->event_slider_3)
                                                        {
                                                    ?>
                                                    <!-- SLIDE  -->
                                                    <li data-transition="slideright" data-slotamount="7" data-masterspeed="300" data-thumb="<?php echo base_url(). $event_info->event_slider_3; ?>" data-saveperformance="off" data-title="Slide">
                                                        <!-- MAIN IMAGE -->
                                                        <img src="<?php echo base_url(). $event_info->event_slider_3; ?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                                        <!-- LAYERS -->
                                                    </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <?php 
                                                        if($event_info->event_slider_4)
                                                        {
                                                    ?>
                                                    <!-- SLIDE  -->
                                                    <li data-transition="slideright" data-slotamount="7" data-masterspeed="300" data-thumb="<?php echo base_url(). $event_info->event_slider_4; ?>" data-saveperformance="off" data-title="Slide">
                                                        <!-- MAIN IMAGE -->
                                                        <img src="<?php echo base_url(). $event_info->event_slider_4; ?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                                        <!-- LAYERS -->
                                                    </li>
                                                    <?php
                                                        }
                                                    ?>
                                                </ul>
                                            </div>
                                            <script type="text/javascript">
                                                /******************************************
                                                 -	PREPARE PLACEHOLDER FOR SLIDER	-
                                                 ******************************************/
                                                var setREVStartSize = function () {
                                                    var tpopt = new Object();
                                                    tpopt.startwidth = 900;
                                                    tpopt.startheight = 600;
                                                    tpopt.container = jQuery('#rev_slider_8_1');
                                                    tpopt.fullScreen = "off";
                                                    tpopt.forceFullWidth = "off";
                                                    tpopt.container.closest(".rev_slider_wrapper").css({height: tpopt.container.height()});
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
                                                        tpopt.container.css({height: "100%"});
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
                                                var revapi8;
                                                tpj(document).ready(function () {

                                                    if (tpj('#rev_slider_8_1').revolution == undefined) {
                                                        revslider_showDoubleJqueryError('#rev_slider_8_1');
                                                    } else {
                                                        revapi8 = tpj('#rev_slider_8_1').show().revolution(
                                                                {
                                                                    dottedOverlay: "none",
                                                                    delay: 9000,
                                                                    startwidth: 900,
                                                                    startheight: 600,
                                                                    hideThumbs: 200,
                                                                    thumbWidth: 100,
                                                                    thumbHeight: 50,
                                                                    thumbAmount: 5,
                                                                    simplifyAll: "off",
                                                                    navigationType: "bullet",
                                                                    navigationArrows: "solo",
                                                                    navigationStyle: "preview4",
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
                                                                    shadow: 0,
                                                                    fullWidth: "on",
                                                                    fullScreen: "off",
                                                                    spinner: "spinner0",
                                                                    stopLoop: "off",
                                                                    stopAfterLoops: -1,
                                                                    stopAtSlide: -1,
                                                                    shuffle: "off",
                                                                    autoHeight: "off",
                                                                    forceFullWidth: "off",
                                                                    hideThumbsOnMobile: "off",
                                                                    hideNavDelayOnMobile: 1500,
                                                                    hideBulletsOnMobile: "off",
                                                                    hideArrowsOnMobile: "off",
                                                                    hideThumbsUnderResolution: 0,
                                                                    hideSliderAtLimit: 0,
                                                                    hideCaptionAtLimit: 0,
                                                                    hideAllCaptionAtLilmit: 0,
                                                                    startWithSlide: 0});



                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="span3">
                                        <h2>Description</h2>
                                        <p><?php echo $event_info->event_description; ?></p>
                                    </div>               
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- project_ajax_content ends -->
                </div>
            </div>
        </section>
        <!-- content_area project ends -->
        <!-- sec-map starts -->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                "use strict";
                /* Google Map Loading */
                $('#map-cjx').gmap3({
                    map: {
                        options: {
                            maxZoom: 14,
                            mapTypeId: "folio_map",
                            mapTypeControlOptions: {
                                mapTypeIds: ["folio_map",
                                    google.maps.MapTypeId.ROADMAP,
                                    google.maps.MapTypeId.SATELLITE,
                                    google.maps.MapTypeId.TERRAIN]
                            }
                        }
                    },
                    styledmaptype: {
                        id: "folio_map",
                        options: {
                            name: "Folio Map"
                        },
                        //map type here : i.e default, dark, greyscale
                        styles: [
                            {
                                featureType: "all",
                                elementType: "all",
                                stylers: [
                                    {saturation: -100},
                                ]
                            }
                        ]},
                    marker: {
                        address: "10 Muswell Road, Bryanston, 2191", data: "Moshate Media",
                        options: {
                        },
                        events: {
                            mouseover: function (marker, event, context) {
                                var map = $(this).gmap3("get"),
                                        infowindow = $(this).gmap3({get: {name: "infowindow"}});
                                if (infowindow) {
                                    infowindow.open(map, marker);
                                    infowindow.setContent(context.data);
                                } else {
                                    $(this).gmap3({
                                        infowindow: {
                                            anchor: marker,
                                            options: {content: context.data}
                                        }
                                    });
                                }
                            },
                            mouseout: function () {
                                var infowindow = $(this).gmap3({get: {name: "infowindow"}});
                                if (infowindow) {
                                    infowindow.close();
                                }
                            }
                        }
                    },
                },
                        "autofit");
            });
        </script>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="span10 span_center footer_text">
                        <div class="hgroup">
                            <h5>
                                <ul class="sm_links align_center">
                                    <li>
                                        <a class="sm_icon" href="https://www.facebook.com/Moshate-Media-163355783862932" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sm_icon" href="https://www.facebook.com/Moshate-Media-163355783862932" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                                &nbsp;
                                Copyright © 2016 The Vive Communication
                            </h5>
                            <p>View Our <a href="http://moshatemedia.co.za/privacy-policy/">Privacy Policy Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
        <script type="text/javascript">
            /*alert(" Preloader: true<br>
             is_front_page: true<br />
             only_pre_loader_on: on_front_page<br />
             ");*/
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
            }
        </script>
        <!-- Lightbox Plus Colorbox v2.7.2/1.5.9 - 2013.01.24 - Message: 0-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $("a[rel*=lightbox]").colorbox({
                    speed: 0,
                    width: false,
                    height: false,
                    innerWidth: false,
                    innerHeight: false,
                    initialWidth: false,
                    initialHeight: false,
                    maxWidth: false,
                    maxHeight: false,
                    scalePhotos: false,
                    opacity: 0,
                    preloading: false,
                    current: " {current}  {total}",
                    previous: "",
                    next: "",
                    close: "",
                    overlayClose: false,
                    loop: false,
                    scrolling: false,
                    escKey: false,
                    arrowKey: false,
                    top: false,
                    right: false,
                    bottom: false,
                    left: false
                });
                $(".lbp-inline-link-1").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "60%",
                    height: "79%",
                    innerWidth: "true",
                    innerHeight: "true",
                    maxWidth: "60%",
                    maxHeight: "79%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: true,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-1"
                });
                $(".lbp-inline-link-2").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "60%",
                    height: "82%",
                    innerWidth: "true",
                    innerHeight: "true",
                    maxWidth: "60%",
                    maxHeight: "82%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: true,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-2"
                });
                $(".lbp-inline-link-3").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "60%",
                    height: "79%",
                    innerWidth: "true",
                    innerHeight: "true",
                    maxWidth: "60%",
                    maxHeight: "79%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: true,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-3"
                });
                $(".lbp-inline-link-4").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "60%",
                    height: "85%",
                    innerWidth: "true",
                    innerHeight: "true",
                    maxWidth: "60%",
                    maxHeight: "85%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: true,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-4"
                });
                $(".lbp-inline-link-5").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "60%",
                    height: "85%",
                    innerWidth: "true",
                    innerHeight: "true",
                    maxWidth: "60%",
                    maxHeight: "85%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: true,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-5"
                });
                $(".lbp-inline-link-6").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "60%",
                    height: "85%",
                    innerWidth: "true",
                    innerHeight: "true",
                    maxWidth: "60%",
                    maxHeight: "85%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: true,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-6"
                });
                $(".lbp-inline-link-7").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "60%",
                    height: "85%",
                    innerWidth: "true",
                    innerHeight: "true",
                    maxWidth: "60%",
                    maxHeight: "85%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: true,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-7"
                });
                $(".lbp-inline-link-8").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "60%",
                    height: "85%",
                    innerWidth: "true",
                    innerHeight: "true",
                    maxWidth: "60%",
                    maxHeight: "85%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: true,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-8"
                });
                $(".lbp-inline-link-9").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "80%",
                    height: "80%",
                    innerWidth: false,
                    innerHeight: false,
                    maxWidth: "80%",
                    maxHeight: "80%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: false,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-9"
                });
                $(".lbp-inline-link-10").colorbox({
                    transition: "elastic",
                    speed: "300",
                    width: "80%",
                    height: "80%",
                    innerWidth: false,
                    innerHeight: false,
                    maxWidth: "80%",
                    maxHeight: "80%",
                    top: false,
                    right: false,
                    bottom: false,
                    left: false,
                    fixed: false,
                    open: false,
                    opacity: "0.8",
                    inline: true,
                    href: "#lbp-inline-href-10"
                });
            });
        </script>
        <link rel='stylesheet' href='<?php echo base_url(); ?>asset/public/plugin/revslider/rev-settings.css' />
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