<?php
if (isset($_GET['testing']))
{
    echo "<pre>";
    print_r($session_resource);
    exit("</pre>");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="icon" href="<?= base_url() ?>front_assets/peco/peco_favicon.png">
        <title>PECO</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>front_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>front_assets/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="<?= base_url() ?>front_assets/vendor/animateit/animate.min.css" rel="stylesheet">

        <!-- Vendor css -->
        <link href="<?= base_url() ?>front_assets/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
        <link href="<?= base_url() ?>front_assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Template base -->
        <link href="<?= base_url() ?>front_assets/css/theme-base.css?v=6" rel="stylesheet">

        <!-- Template elements -->
        <link href="<?= base_url() ?>front_assets/css/theme-elements.css" rel="stylesheet">

        <!-- Responsive classes -->
        <link href="<?= base_url() ?>front_assets/css/responsive.css" rel="stylesheet">

        <!-- [if lt IE 9]>
        <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif] -->

        <!-- Template color -->
        <link href="<?= base_url() ?>front_assets/css/color-variations/blue.css?v=2" rel="stylesheet" type="text/css" media="screen" title="blue">

        <!-- LOAD GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

        <!-- CSS CUSTOM STYLE -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>front_assets/css/custom.css?v=2" media="screen" />
        <!--VENDOR SCRIPT-->
        <script src="<?= base_url() ?>front_assets/vendor/jquery/jquery-1.11.2.min.js"></script>
        <script src="<?= base_url() ?>front_assets/vendor/plugins-compressed.js"></script>

        <link href="<?= base_url() ?>assets/alertify/alertify.core.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/alertify/alertify.default.css" rel="stylesheet" type="text/css" />
        <style>
            @media (min-width: 1200px){
                .container {
                    width: 1300px;
                }
            }
            @media (min-width: 1400px){
                .container {
                    width: 1450px;
                }
            }
            @media (min-width: 1600px){
                .container {
                    width: 1600px;
                }
            }
            @media (min-width: 1800px){
                .container {
                    width: 1700px;
                }
            }

            @media (min-width: 1900px){
                .container {
                    width: 1850px;
                }
            }
            @media (min-width: 2200px){
                .container {
                    width: 2400px;
                }
            }

            .button.black-light {
                border-color: #22a5da;
            }

            .logo{
                cursor: pointer;
            }

            .logo2 {
                border-left: 1px solid black;
                float: left;
                padding-left: 15px;
                margin-top: 8px;
            }

            .logo2 img {
                object-fit: contain;
                width: 79px;
                height: 50px;
            }
            .logo2 span {
                position: absolute;
                top: -6px;
                font-family: sans-serif;
                font-size: 11px;
            }

            #mainMenu2 {
                margin-right: 100px;
                margin-top: 20px !important;
            }

            #mainMenu2 .nav {
                height: max-content;
            }

            #mainMenu2 ul li a {
                 color: white;
             }

            #mainMenu2 ul li {
                margin-right: 0px;
                border-bottom: unset;
            }

            #mainMenu2 ul li a:hover {
                background-color: transparent;
                color: #22a5da;
                cursor: pointer;
            }

            #mainMenu2 ul li:hover ul {
                display: block !important;
            }

            .toolboxCustomDrop {

                display: none;
                background-color: white;
                position: absolute;
                width: 180px;
                box-shadow: 0 0 12px -6px black;
                padding: 11px !important;
                position: absolute;
                z-index: 124214214;
            }

            .toolboxCustomDrop li {
                margin-right: 0 !important;

                font-weight: bold;
            }

            .toolboxCustomDrop li a {
                color: #7a7a7a !important;
                cursor: pointer;
            }

            .toolboxCustomDrop li a:hover {
                color: #22a5da !important;

            }

            .toolboxCustomDrop li i {
                font-size: 19px !important;
            }

            .toolboxCustomDrop li:nth-of-type(1n+2) {
                margin-top: 12px;
            }

            @media screen and (max-width: 1290px) {
                #header-wrap {
                    padding: 16px 30px;
                }
            }

            @media screen and (max-width: 1200px) {
                #header-wrap {
                    padding: 16px 10px;
                }

                #header .container {
                    width: 100% !important;
                }

                #mainMenu2 {
                    margin-right: 0;
                }

                #mainMenu2 ul li {
                    margin-right: 10px;
                }
            }

            @media screen and (max-width: 992px) {
                .parallax {
                    margin-top: 0;
                }

                #mainMenu2 .nav {
                    background-color: white;
                    height: 200px;
                    width: 200px;
                    float: right;
                }

                .nav-main-menu-responsive {
                    height: max-content;
                    line-height: 0;
                }

            }

            @media screen and (max-width: 493px) {
                .logo2 {
                    margin-left: 5px;
                }

                .logo2 img {
                    width: 115px;
                }
            }
        </style>

    </head>
    <body class="wide">
        <!-- WRAPPER -->
        <div class="wrapper">
            <!-- HEADER -->
            <header id="header" class="header-transparent header-sticky" style="height: 70px;">
                <div id="header-wrap" style="background-color: #0d3f7b;height: 70px;">
                    <div class="container">
                        <!--LOGO-->
                        <?php
                        if ($this->session->userdata('cid') != "") {
                            $profile_data = $this->common->get_user_details($this->session->userdata('cid'));
                            ?>
                            <div id="logo">
                                <a href="<?= base_url() ?>home" class="logo" data-dark-logo="<?= base_url() ?>front_assets/peco/IAMPECO.png" style="margin-top: 12px; cursor: pointer">
                                    <img src="<?=base_url()?>front_assets/peco/IAMPECO.png" alt="PECO" width="100px" style="height: unset;padding-bottom: unset;">
                                </a>
                            </div>
                        <?php } else { ?>
                            <div id="logo">
                                <a href="<?= base_url() ?>home" class="logo" data-dark-logo="<?= base_url() ?>front_assets/peco/IAMPECO.png">
                                    <img src="<?=base_url()?>front_assets/peco/IAMPECO.png" alt="PECO" width="100px" style="height: unset;padding-bottom: unset;">
                                </a>
                            </div>
                        <?php } ?>

                        <?php
                        if (isset($sesions_logo)) {
                            ?>
                            <div class="logo2">
                                <span><?= $sponsor_type ?></span>
                                <img src="<?= base_url() . "uploads/sessions_logo/" . $sesions_logo ?>" onerror="$(this).parent().remove()">
                            </div>
                            <?php
                        }
                        ?>
                        <!--END: LOGO-->
                        <!--MOBILE MENU -->
                        <div class="nav-main-menu-responsive">
                            <button class="lines-button x" type="button" data-toggle="collapse" data-target=".main-menu-collapse">
                                <span class="lines"></span>
                            </button>
                        </div>
                        <!--END: MOBILE MENU -->
                        <!--SHOPPING CART -->

                        <!--END: SHOPPING CART -->

                        <!--NAVIGATION-->
                        <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                            <div class="container">
                                <nav id="mainMenu2" class="main-menu mega-menu" style="margin-top: 10px;">

                                    <!--<ul class="nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?//=($profile_data->profile == null)?'<i class="fas fa-user-circle"></i>':'<img src="'.base_url().'uploads/customer_profile/'.$profile_data->profile.'" alt="Avatar" style="border-radius: 50%;width: 25px;height: 26px;">'?> <?//= $profile_data->first_name ?> <span class="caret"></span></a>
                                            <ul class="dropdown-menu" style="position: absolute;margin-top: -23px;">
                                                <li><a href="<?//= base_url() ?>register/user_profile/<?//= $profile_data->cust_id ?>" style="color: black"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
                                                <li><a href="--><?//= base_url() ?><!--home/notes" style="color: black"><i class="fas fa-briefcase"></i> My Briefcase</a></li>-->
                                                <!--<li role="separator" class="msg-divider divider" style="margin-top: 0px;margin-bottom: 2px;"></li>
                                                <li><a href="<?//= base_url() ?>login/logout" style="color: black"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->

<!--                                    <ul class="nav navbar-nav navbar-right">-->
<!--                                        <li class="dropdown">-->
<!--                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                                                <i class="fas fa-envelope" style="font-size: 22px;" aria-hidden="true"></i> <span class="msg-noti-count badge badge-danger" style="display: none;background-color: #ee5656;margin-right: 0;">0</span>-->
<!--                                                <span class="caret"></span></a>-->
<!--                                            <ul class="unread-msgs-list dropdown-menu" style="position: absolute;margin-top: -20px;">-->
<!--                                                <li role="separator" class="msg-divider divider" style="margin-top: 0px;margin-bottom: 2px;"></li>-->
<!--                                                <li class="msg-mark-all-read" style="display: none;"><span style="color: black;cursor: pointer;"><i class="fas fa-check-double" style="color: #2290df;"></i> Mark all as read</span></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                    </ul>-->

                                    <ul class="main-menu nav navbar-nav navbar-right">
                                        <li><a href="<?= base_url() ?>login/logout">LOGOUT</a></li>
                                    </ul>

                                    <ul class="main-menu nav navbar-nav navbar-right">
                                        <li><a href="https://yourconference.live/support/submit_ticket" target="_blank">SUPPORT</a></li>
                                    </ul>

                                    <?php
                                    if (isset($right_bar) && isset($tool_box_status) && !isset($is_attend_page)) {
                                        if ($tool_box_status == "1" && sessionRightBarControl($right_bar, "resources")) {
                                            ?>
                                            <ul class="main-menu nav navbar-nav navbar-right">
                                                <li class="sticky_resources_open" data-type="resourcesSticky"><a data-type2="off" class="hoverThemeColour">RESOURCES</a></li>
                                            </ul>
                                            <?php
                                        }}
                                    ?>

                                    <?php
                                    if (isset($right_bar) && isset($tool_box_status) && isset($is_attend_page)) {
                                        if ($tool_box_status == "1" && sessionRightBarControl($right_bar, "resources")) {
                                            ?>
                                            <ul class="main-menu nav navbar-nav navbar-right">
                                                <li class="dropdown">
                                                    <a href="<?= base_url() ?>sessions/self_serve_breakout" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RESOURCES <span class="caret"></span></a>
                                                    <ul class="dropdown-menu" style="right: auto;">
                                                        <?php foreach ($session_resource as $resource): ?>
                                                            <?php if($resource->resource_link != ''): ?>
                                                                <li><a href="<?=$resource->resource_link?>" style="color: black"><?=$resource->link_published_name?></a></li>
                                                            <?php endif; ?>
                                                            <?php if($resource->resource_link == ''): ?>
                                                                <li><a href="<?=base_url().'uploads/resource_sessions/'.$resource->resource_file?>" style="color: black" download=""><?=$resource->upload_published_name?></a></li>
                                                            <?php endif; ?>

                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <?php
                                        }}
                                    ?>

                                    <!--<ul class="main-menu nav navbar-nav navbar-right">
                                        <li><a href="<?//= base_url() ?>resources">RESOURCES</a></li>
                                    </ul>-->

                                    <ul class="main-menu nav navbar-nav navbar-right">
                                        <li class="dropdown">
                                            <a href="<?= base_url() ?>sessions/self_serve_breakout" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SELF-SERVE BREAKOUTS <span class="caret"></span></a>
                                            <ul class="dropdown-menu" style="right: auto;">
                                                <li role="separator" class="divider"></li>
                                                <li><a href="<?= base_url() ?>sessions/self_serve_breakout" style="color: black">All Self-Serve Breakouts</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="<?= base_url() ?>sessions/self_serve_breakout/safety" style="color: black">Safety</a></li>
                                                <li><a href="<?= base_url() ?>sessions/self_serve_breakout/community" style="color: black">Community</a></li>
                                                <li><a href="<?= base_url() ?>sessions/self_serve_breakout/innovation" style="color: black">Innovation</a></li>
                                                <li><a href="<?= base_url() ?>sessions/self_serve_breakout/diversity_equity_inclusion" style="color: black">Diversity, Equity & Inclusion</a></li>
                                                <li><a href="<?= base_url() ?>sessions/self_serve_breakout/strategic_initiatives" style="color: black">Strategic Initiatives</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <ul class="main-menu nav navbar-nav navbar-right">
                                        <li><a href="<?= base_url() ?>sessions">TOWN HALL</a></li>
                                    </ul>
<!---->
<!--                                    <ul class="main-menu nav navbar-nav navbar-right">-->
<!--                                        <li><a href="--><?//= base_url() ?><!--home">LOBBY</a></li>-->
<!--                                    </ul>-->

                                    <ul class="main-menu nav navbar-nav navbar-right">
                                        <?php
                                        if (isset($attendee_view_links_status) && isset($attendee_view_links_status)) {
                                            if ($attendee_view_links_status == "1") {
                                                ?>
                                                <li><a target="_blank" href="<?= $url_link ?>"><?= $link_text ?></a></li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!--END: NAVIGATION-->
                    </div>
                </div>
            </header>
            <!-- END: HEADER -->
            <script src="https://kit.fontawesome.com/fd91b3535c.js" crossorigin="anonymous"></script>
