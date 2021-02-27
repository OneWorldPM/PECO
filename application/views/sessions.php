<?php

$session_type = (isset($session_type) && $session_type == 'self_serve_breakout')?'self_serve_breakout':null;

if (isset($_GET['testing']))
{
    echo "<pre>";
    print_r($all_sessions);
    echo "</pre>";
    exit;
}
?>

<style>
    body{
        background-image: url(<?=base_url()?>front_assets/peco/peco_sessions.jpeg);
        background-attachment: fixed;
        background-size: cover !important;
        background-position: center center !important;
    }

    .post-info {
        margin-bottom: 0px; 
        opacity: 1; 
    }
    .post-item {
        border-bottom: 2px solid #9b9b9b;
    }

    .hidden {
        visibility: hidden;
    }
    a:hover {
        color: #439ce4 !important;
    }
    section{
        padding: 25px 0px;
    }

    .icon-home {
        color: #002f70;
        font-size: 1.5em;
        font-weight: 700;
        vertical-align: middle;
    }

    .box-home {
        background-color: #444;
        border-radius: 20px;
        background: rgba(250, 250, 250, 0.8);
        max-width: 250px;
        min-width: 250px;
        min-height: 150px;
        max-height: 150px;
        padding: 15px;
        border-bottom: 5px solid;
    }

    .box_home_active {
        background-color: #002f70;
        border-radius: 20px;
        max-width: 250px;
        min-width: 250px;
        min-height: 150px;
        max-height: 150px;
        padding: 15px;
        border-bottom: 5px solid;
        color: #fff !important;
    }

    .box-home:hover {
        background-color: #002f70;
        color: #fff !important;
    }

    p {
        margin-bottom: 5px !important;
    }

    @media only screen and (max-width: 1000px) {
        .townhall-btn{
            float: unset !important;
            width: 315px !important;
            height: 75px !important;
            font-size: 27px !important;
        }

        .breakout-btn{
            float: unset !important;
            width: 315px !important;
            height: 75px !important;
            font-size: 24px !important;
            margin-top: 15px !important;
        }

        .buttonsRow{
            text-align: center !important;
        }

        .videoDiv{
            height: 250px !important;
            display: inline-block;
        }
    }

    @media only screen and (max-width: 400px) {
        .videoDiv{
            height: 125px !important;
            display: inline-block;
        }
    }

</style>
<section class="parallax" style="top: 0; padding-top: 0px;">
<!--<section class="parallax" style="background-image: url(<?= base_url() ?>front_assets/images/Sessions_BG_screened.jpg); top: 0; padding-top: 0px;">-->
    <div class="container container-fullscreen" style="min-height: 700px;">
        <div class="">
            <div class="row buttonsRow" style="margin-top: 20px;">
                <div class="col-md-6 col-sm-12">
                    <a href="<?=base_url('sessions')?>">
                        <button class="townhall-btn btn btn-large" style="
                        background-color: #4d93e6;
                        color: white;
                        width: 465px;
                        height: 100px;
                        font-size: 35px;
                        font-weight: 700;
                        float: right;
                        "><i class="fas fa-users"></i> Town Hall</button>
                    </a>
                </div>


                <div class="col-md-6 col-sm-12">
                    <a href="<?=base_url('sessions/self_serve_breakout')?>">
                        <button class="breakout-btn btn btn-large" style="
                        background-color: #4d93e6;
                        color: white;
                        width: 465px;
                        height: 100px;
                        font-size: 35px;
                        font-weight: 700;
                        float: left;
                        "><i class="fas fa-chalkboard-teacher"></i> Self-Serve Breakouts</button>
                    </a>
                </div>
            </div>

            <?php
            if (isset($emp_engagement_video))
            {
            ?>
                <div class="row video-row" style="margin-top: 20px;">
                    <div class="col-md-12">
                        <div class="videoDiv" style="width: 100%;height: 535px;"><iframe src="<?=$emp_engagement_video?>?loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                </div>
            <?php
            }
            ?>


            <div class="row">
                <div class="col-md-12">
                    <!-- CONTENT -->
                    <section class="content">
                        <div class="container"">

                            <!-- Blog post-->
                            <div class="post-content post-single"> 

                                <!-- Blog image post-->
                                <?php
                                if (isset($all_sessions) && !empty($all_sessions)) {
                                    foreach ($all_sessions as $val) {
                                        if($session_type == 'self_serve_breakout')
                                        {
                                            $type = str_replace(',', '', $val->session_title);
                                            $type = str_replace('and', '', $type);
                                            $type = str_replace(' ', '_', $type);
                                            $type = str_replace('__', '_', $type);
                                            $type = strtolower($type);
                                        }
                                        ?>
                                        <div class="post-item" style="background-color: #ffffffeb;padding-right: 25px;padding-left: 25px;">
                                            <div class="post-image col-md-3 m-t-20">
                                                <?php
                                                if($val->sessions_date >= date('Y-m-d'))
                                                { ?>
                                                    <a href="<?= base_url() ?>sessions/attend/<?= $val->sessions_id ?>"> <?php if ($val->sessions_photo != "") { ?> <img alt="" src="<?= base_url() ?>uploads/sessions/<?= $val->sessions_photo ?>"> <?php } else { ?>  <img alt="" src="<?= base_url() ?>front_assets/images/session_avtar.jpg"> <?php } ?>  </a>
                                                    <?php
                                                }else{
                                                    if ($session_type == 'self_serve_breakout'){ ?>
                                                        <a href="<?= base_url() ?>sessions/self_serve_breakout/<?=$type?>"> <?php if ($val->sessions_photo != "") { ?> <img alt="" src="<?= base_url() ?>uploads/sessions/<?= $val->sessions_photo ?>"> <?php } else { ?>  <img alt="" src="<?= base_url() ?>front_assets/images/session_avtar.jpg"> <?php } ?>  </a>
                                                    <?php }else{ ?>
                                                        <a href="<?= base_url() ?>sessions/attend/<?= $val->sessions_id ?>"> <?php if ($val->sessions_photo != "") { ?> <img alt="" src="<?= base_url() ?>uploads/sessions/<?= $val->sessions_photo ?>"> <?php } else { ?>  <img alt="" src="<?= base_url() ?>front_assets/images/session_avtar.jpg"> <?php } ?>  </a>
                                                    <?php }
                                                }
                                                ?>

                                            </div>
                                            <div class="post-content-details col-md-9 m-t-30">

                                                <div class="post-title">
                                                    <h6 style="font-weight: 600">
                                                        <?php
                                                        if ($session_type != 'self_serve_breakout')
                                                        { ?>
                                                            <span style="color: #b97a43;"><?= $val->sessions_date . ' ' . date("h:i A", strtotime($val->time_slot))?> - <?=date("h:i A", strtotime($val->end_time)) ?> ET</span>
                                                        <?php
                                                        }
                                                        ?>

                                                        <?php
                                                        if ($val->us_emea_switch == 1)
                                                        { ?>
                                                            <span style="color: #b97a43;">US/EMEA <?= $val->sessions_date_display_us_emea . ' ' . date("h:i A", strtotime($val->start_time_display_us_emea))?> <?=($val->sessions_type_id == 1)?'':' - ' . date("h:i A", strtotime($val->end_time_display_us_emea)) ?> CT</span>
                                                        <?php
                                                        }


                                                        if ($val->us_emea_switch == 1 && $val->apj_switch == 1)
                                                        { ?>
                                                         /
                                                        <?php
                                                        }


                                                        if ($val->apj_switch == 1)
                                                        { ?>
                                                        <span style="color: #358080;">APJ <?= $val->sessions_date_display_apj . ' ' . date("h:i A", strtotime($val->start_time_display_apj))?> <?=($val->sessions_type_id == 1)?'':' - ' . date("h:i A", strtotime($val->end_time_display_apj)) ?> AEDT</span>
                                                        <?php
                                                        }
                                                        ?>
                                                    </h6>
                                                    <?php
                                                    if ($session_type == 'self_serve_breakout'){ ?>
                                                        <h3><a href="<?= base_url() ?>sessions/self_serve_breakout/<?= $type ?>" style="color: #3f72ae; font-weight: 900;"><?= $val->session_title ?></a></h3>
                                                    <?php }else{ ?>
                                                        <h3><a href="<?= base_url() ?>sessions/attend/<?= $val->sessions_id ?>" style="color: #3f72ae; font-weight: 900;"><?= $val->session_title ?></a></h3>
                                                    <?php } ?>
                                                </div>
                                                <?php
                                                if (isset($val->presenter) && !empty($val->presenter)) {
                                                    foreach ($val->presenter as $value) {
                                                        ?>
                                                        <div class="post-info" style="color: #000 !important; font-size: larger; font-weight: 700;"><span class="post-autor"><a href="#" style="color: #000;" data-presenter_photo="<?= $value->presenter_photo ?>" data-presenter_name="<?= $value->presenter_name ?>" data-designation="<?= $value->designation ?>" data-email="<?= $value->email ?>" data-company_name="<?= $value->company_name ?>" data-twitter_link="<?= $value->twitter ?>" data-facebook_link="<?= $value->facebook ?>" data-linkedin_link="<?= $value->linkin ?>" data-bio="<?= $value->bio ?>"  class="presenter_open_modul" style="color: #337ab7;"><?= $value->presenter_name ?><?= ($value->degree != "") ? "," : "" ?> </a></span> <span class="post-category" style="font-size: 13px;font-weight: unset;color: #626262;"> <?= $value->company_name ?></span> </div>
                                                        <!--<div class="post-info" style="color: #000 !important; font-size: larger; font-weight: 700;"><span class="post-category"> <?//= $value->company_name ?></span> </div>-->
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                <div class="post-description">
                                                    <?= $val->sessions_description ?>
                                                </div>
                                            </div>
                                            <?php
                                            if($session_type == 'self_serve_breakout')
                                            { ?>
                                                <a class="button black-light button-3d rounded right" style="margin: 0px 0;background-color: #3e72ae;border-color: #3e72ae;" href="<?= base_url() ?>sessions/self_serve_breakout/<?=$type?>"><span>CLICK TO ACCESS</span></a>
                                            <?php
                                            }elseif ($val->session_reply == 1){ ?>
                                                <a class="button black-light button-3d rounded right" style="margin: 0px 0;background-color: #4087f6;border-color: #79acfb;" href="<?= base_url() ?>sessions/attend/<?= $val->sessions_id ?>"><span>View</span></a>
                                                <?php
                                            }else
                                            { ?>
                                                <a class="button black-light button-3d rounded right" style="margin: 0px 0;background-color: #3e72ae;border-color: #3e72ae;" href="<?= base_url() ?>sessions/attend/<?= $val->sessions_id ?>"><span>Click to Attend</span></a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <!-- END: Blog post--> 
                        </div>
                    </section>
                    <!-- END: SECTION --> 
                </div>
            </div> 
        </div>
    </div>
</section>
<div class="modal fade" id="modal" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding: 0px;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-top: 10px; padding-bottom: 20px;">
                    <div class="col-sm-12">
                        <div class="col-sm-4" id="social_link_div_show">
<!--                            <div id="social_link_div" style="text-align: center; background-color: #ff095c; text-align: center; background-color: #ff095c; position: absolute; padding: 0px 50px 0px 50px; margin-top: 100px; border-bottom-left-radius: 41px; border-bottom-right-radius: 41px;">-->
<!--                                <ul style="list-style: none; display: inline-flex; padding-left: 0px; padding-top: 10px;">-->
<!--                                    <li data-placement="top" data-original-title="Twitter">-->
<!--                                        <a id="twitter_link" target="_blank">-->
<!--                                            <i class="fa fa-twitter" style="color: #fff;"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li data-placement="top" data-original-title="Facebook" style="padding-left: 15px; padding-right: 20px;">-->
<!--                                        <a id="facebook_link" target="_blank">-->
<!--                                            <i class="fa fa-facebook" style="color: #fff;"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li data-placement="top" data-original-title="LinkedIn">-->
<!--                                        <a id="linkedin_link" target="_blank">-->
<!--                                            <i class="fa fa-linkedin" style="color: #fff;"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
                            <img src="" id="presenter_profile" class="img-circle" style="height: 170px; width: 170px;">


                        </div>
                        <div class="col-sm-8" style="padding-top: 15px;">
                            <h3 id="presenter_title" style="font-weight: 700"></h3>
                            <p style="border-bottom: 1px dotted; margin-bottom: 10px; padding-bottom: 10px;"><b style="color: #000;">Email </b> <span id="email" style="padding-left: 10px;"></span></p>
                            <p style="border-bottom: 1px dotted; margin-bottom: 10px; padding-bottom: 10px;"><b style="color: #000;">Company </b> <span id="company" style="padding-left: 10px;"></span></p>
                            <p style="border-bottom: 1px dotted; margin-bottom: 10px; padding-bottom: 10px;"><b style="color: #000;">Bio </b> <span id="bio" style="padding-left: 10px;"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#social_link_div').addClass('hidden');
        $("#social_link_div_show").hover(function () {
            $('#social_link_div').removeClass('hidden');
        }, function () {
            $('#social_link_div').addClass('hidden');
        });
        $(".presenter_open_modul").click(function () {
            var presenter_photo = $(this).attr("data-presenter_photo");
            var presenter_name = $(this).attr("data-presenter_name");
            var designation = $(this).attr("data-designation");
            var company_name = $(this).attr("data-company_name");
            var email = $(this).attr("data-email");
            var twitter_link = $(this).attr("data-twitter_link");
            var facebook_link = $(this).attr("data-facebook_link");
            var linkedin_link = $(this).attr("data-linkedin_link");
            var bio = $(this).attr('data-bio');
            if (presenter_photo != "" && presenter_photo != null) {
                $.ajax({
                    url: '<?= base_url() ?>uploads/presenter_photo/' + presenter_photo,
                    type: 'HEAD',
                    error: function ()
                    {
                        $('#presenter_profile').attr('src', "<?= base_url() ?>uploads/presenter_photo/presenter_avtar.png");
                    },
                    success: function ()
                    {
                        $('#presenter_profile').attr('src', "<?= base_url() ?>uploads/presenter_photo/" + presenter_photo);
                    }
                });
            } else {
                $('#presenter_profile').attr('src', "<?= base_url() ?>uploads/presenter_photo/presenter_avtar.png");
            }
            if (designation != "" && designation != null) {
                $('#presenter_title').text(presenter_name);
            } else {
                $('#presenter_title').text(presenter_name);
            }

            $('#email').text(email);
            if (company_name != "" && company_name != null) {
                $('#company').text(company_name);
                $('#company_lbl').text("Company");
            } else {
                $('#company').text("");
                $('#company_lbl').text("");
            }

            if(bio != "" && bio != null) {
                $('#bio').text(bio);
            } else {
                $('#bio').text("");
            }

            $("#twitter_link").attr("href", twitter_link);
            $("#facebook_link").attr("href", facebook_link);
            $("#linkedin_link").attr("href", linkedin_link);
            $("#bio_text").text(bio);
            $('#modal').modal('show');
        });
    });
</script>
