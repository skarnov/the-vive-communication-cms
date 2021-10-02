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
        <!-- Project Starts -->
        <section class="content_area ">
            <div class="container">
                <div class="row">
                    <div class="span10 span_center">
                        <div id="project_ajax_content">
                            <div class="content_bar project">
                                <div class="project_detail">
                                    <h3 class="portfolio_title"><?php echo $project_info->project_name; ?></h3>
                                </div>
                                <div class="row client_description">
                                    <div class="span7">
                                        <h2>Description</h2>
                                        <p><?php echo $project_info->project_description; ?></p>
                                    </div>
                                    <div class="span3">
                                        <img alt="" src="<?php echo base_url() . $project_info->project_image; ?>" />
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
    </body>
</html>