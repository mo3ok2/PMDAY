<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */



get_header(); ?>


    <div class="first-section">
        <div class="section-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contentb">
                            <h2>
                                <span><?php echo get_field('перша_секція_дата') ?></span>
                                <?php echo get_field('перша_секція_текст') ?>
                            </h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="green-point-section">
        <div class="section-wrap">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-12 mt-2">

                            <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb d-flex align-items-center"><span><?php echo get_field('секція_2_1_число') ?></span></span>
                                <span class="green-circle-text"><?php echo get_field('секція_2_1_текст') ?></span>
                            </div>

                        </div>

                        <div class="col-lg-10 offset-lg-2 mt-2">

                            <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb d-flex align-items-center"><span><?php echo get_field('секція_2_2_число') ?></span></span>
                                <span class="green-circle-text"><?php echo get_field('секція_2_2_текст') ?></span>
                            </div>

                        </div>

                        <div class="col-lg-11 offset-lg-1 mt-2">

                            <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb d-flex align-items-center"><span class="mr-5"><?php echo get_field('секція_2_3_число') ?></span></span>
                                <span class="green-circle-text"><?php echo get_field('секція_2_3_текст') ?></span>
                            </div>

                        </div>

                        <div class="col-lg-10 offset-lg-2 mt-4 countdown-mobile-dn">

                            <div class="first-green d-flex">
                                <span class="green-circle-numb big-circle d-flex align-items-start">
                                    <span class="text-center text-115 days-for-countdown"><?php echo get_field('секція_2_4_число') ?></span>
                                </span>
                                <span class="green-circle-text d-flex align-items-start mt-5"><?php echo get_field('секція_2_4_текст') ?></span>
                            </div>

                        </div>


                        <div class="col-lg-6  offset-lg-4 mt--30 d-flex countdown-mobile-dn">

                            <div class="wrap-1">
                                <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb circle-cust-5">
                                    <span class="d-inline-block text-center text-125 hours-fro-countdown"><?php echo get_field('секція_2_5_число') ?></span>
                                    <span class="fs-40 text-center"><?php echo get_field('секція_2_5_текст') ?></span>
                                </span>
                                </div>
                            </div>


                            <div class="wrap-2">
                                <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb small-circle">
                                    <span class="mx-0 d-inline-block text-center minutes-fro-countdown"><?php echo get_field('секція_2_6_число') ?> </span>
                                    <span class="last-text text-center d-inline-block mx-0"><?php echo get_field('секція_2_6_текст') ?></span>
                                </span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-with-timer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="timer-wrap">
                        <div id="countdown" style="display: none;" data-date="<?php echo strtotime(get_field('таймер')) * 1000; ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-with-six-circle">
        <div class="content-wrapp">
            <div class="container">
                <div class="section-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="wrapp-text">
                                <h3><?php echo get_field('секція_з_6-ма_кругами_тайтл') ?></h3>
                                <p><?php echo get_field('секція_з_6-ма_кругами_опис') ?>
                                </p>
                            </div>
                        </div>
                    </div>


<!--                    <div class="row mb--25 mb--80">-->
<!--                        <div class="col-6 offset-lg-4 col-lg-3 mb-30px">-->
<!--                            <div class="circle280-wrapp circles-animation-wrap">-->
<!---->
<!--                                <div class="anim-wrap-container">-->
<!--                                    <div class="circles-animation1 text-uppercase">-->
<!--                                        <span><a href="#spickers-section">--><?php //echo get_field('круг1_текст_кнопки') ?><!--</a></span>-->
<!--                                    </div>-->
<!--                                    <div class="circles-animation2"></div>-->
<!--                                    <div class="circles-animation3"></div>-->
<!--                                    <div class="circles-animation4"></div>-->
<!---->
<!--                                    <div class="circle280 circle-hover">-->
<!--                                        <div class="green-circle-numb d-flex align-items-center">-->
<!--                                            <span class="main-title text-center text-white">--><?php //echo get_field('круг1_тайтл') ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="bottom-content" style="display: none;">-->
<!--                                    <span class="text-center">--><?php //echo get_field('круг1_опис') ?><!--</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!---->
<!--                    <div class="row mb--25">-->
<!--                        <div class="col-6 hidden-lg-up ml--10-less-768">-->
<!--                            <div class="circle280-wrapp circles-animation-wrap">-->
<!---->
<!--                                <div class="anim-wrap-container">-->
<!--                                    <div class="circles-animation1 text-uppercase">-->
<!--                                        <span><a href="#spickers-section">--><?php //echo get_field('круг2_текст_кнопки') ?><!--</a></span>-->
<!--                                    </div>-->
<!--                                    <div class="circles-animation2"></div>-->
<!--                                    <div class="circles-animation3"></div>-->
<!--                                    <div class="circles-animation4"></div>-->
<!---->
<!--                                    <div class="circle280 circle-hover">-->
<!--                                        <div class="green-circle-numb d-flex align-items-center">-->
<!--                                            <span class="main-title text-center text-white">--><?php //echo get_field('круг2_тайтл') ?><!-- </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="bottom-content" style="display: none;">-->
<!--                                    <span class="text-center">--><?php //echo get_field('круг2_опис') ?><!--</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-lg-4">-->
<!--                            <div class="circle280-wrapp circles-animation-wrap central-circle">-->
<!---->
<!--                                <div class="anim-wrap-container">-->
<!--                                    <div class="circles-animation1 text-uppercase">-->
<!--                                        <span><a href="#spickers-section">--><?php //echo get_field('круг3_текст_кнопки') ?><!--</a></span>-->
<!--                                    </div>-->
<!--                                    <div class="circles-animation2"></div>-->
<!--                                    <div class="circles-animation3"></div>-->
<!--                                    <div class="circles-animation4"></div>-->
<!---->
<!--                                    <div class="circle280 circle-hover">-->
<!--                                        <div class="green-circle-numb d-flex align-items-center">-->
<!--                                            <span class="main-title text-center text-white">--><?php //echo get_field('круг3_тайтл') ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="bottom-content" style="display: none;">-->
<!--                                    <span class="text-center">--><?php //echo get_field('круг3_опис') ?><!-- </span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-lg-4">-->
<!--                            <div class="circle280-wrapp circles-animation-wrap">-->
<!---->
<!--                                <div class="anim-wrap-container">-->
<!--                                    <div class="circles-animation1 text-uppercase">-->
<!--                                        <span><a href="#spickers-section">--><?php //echo get_field('круг4_текст_кнопки') ?><!--</a></span>-->
<!--                                    </div>-->
<!--                                    <div class="circles-animation2"></div>-->
<!--                                    <div class="circles-animation3"></div>-->
<!--                                    <div class="circles-animation4"></div>-->
<!---->
<!--                                    <div class="circle280 circle-hover">-->
<!--                                        <div class="green-circle-numb d-flex align-items-center">-->
<!--                                            <span class="main-title text-center text-white">--><?php //echo get_field('круг4_тайтл') ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="bottom-content" style="display: none;">-->
<!--                                    <span class="text-center">--><?php //echo get_field('круг4_опис') ?><!-- </span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!---->
<!--                    <div class="row mb--25">-->
<!--                        <div class="offset-lg-1 col-lg-4">-->
<!--                            <div class="circle280-wrapp circles-animation-wrap">-->
<!---->
<!--                                <div class="anim-wrap-container">-->
<!--                                    <div class="circles-animation1 text-uppercase">-->
<!--                                        <span><a href="#spickers-section">--><?php //echo get_field('круг5_текст_кнопки') ?><!--</a></span>-->
<!--                                    </div>-->
<!--                                    <div class="circles-animation2"></div>-->
<!--                                    <div class="circles-animation3"></div>-->
<!--                                    <div class="circles-animation4"></div>-->
<!---->
<!--                                    <div class="circle280 circle-hover">-->
<!--                                        <div class="green-circle-numb d-flex align-items-center">-->
<!--                                            <span class="main-title text-center text-white">--><?php //echo get_field('круг5_тайтл') ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="bottom-content" style="display: none;">-->
<!--                                    <span class="text-center">--><?php //echo get_field('круг5_опис') ?><!-- </span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="offset-lg-2 col-lg-4">-->
<!--                            <div class="circle280-wrapp circles-animation-wrap">-->
<!---->
<!--                                <div class="anim-wrap-container">-->
<!--                                    <div class="circles-animation1 text-uppercase">-->
<!--                                        <span><a href="#spickers-section">--><?php //echo get_field('круг6_текст_кнопки') ?><!--</a></span>-->
<!--                                    </div>-->
<!--                                    <div class="circles-animation2"></div>-->
<!--                                    <div class="circles-animation3"></div>-->
<!--                                    <div class="circles-animation4"></div>-->
<!---->
<!--                                    <div class="circle280 circle-hover">-->
<!--                                        <div class="green-circle-numb d-flex align-items-center">-->
<!--                                            <span class="main-title text-center text-white">--><?php //echo get_field('круг6_тайтл') ?><!--</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="bottom-content" style="display: none;">-->
<!--                                    <span class="text-center">--><?php //echo get_field('круг6_опис') ?><!-- </span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="row mb--25 mb--80">
                        <div class="col-6 offset-lg-4 col-lg-3 mb-30px ">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг1_текст_кнопки') ?></a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг1_тайтл') ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг1_опис') ?></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-6 hidden-lg-up ml--10-less-768">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг4_текст_кнопки') ?></a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг4_тайтл') ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг4_опис') ?> </span>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row mb--25">
                        <div class="col-6  offset-lg-1 col-lg-3">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг2_текст_кнопки') ?></a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг2_тайтл') ?> </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг2_опис') ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6  col-lg-3  ml--10-less-768">
                            <div class="circle280-wrapp circles-animation-wrap central-circle">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг3_текст_кнопки') ?></a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг3_тайтл') ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг3_опис') ?> </span>
                                </div>
                            </div>
                        </div>

                        <div class="hidden-lg-down col-6 col-lg-3">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг4_текст_кнопки') ?></a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг4_тайтл') ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг4_опис') ?> </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb--25 mt-5">
                        <div class="col-6 offset-lg-2 col-lg-3">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг5_текст_кнопки') ?></a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг5_тайтл') ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг5_опис') ?> </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 offset-lg-1 col-lg-3 ml--10-less-768">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг6_текст_кнопки') ?></a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг6_тайтл') ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг6_опис') ?> </span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>



    <div id="section-with-table" class="section-with-table">
        <div class="container">
            <div class="container-wrapp">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center"><?php echo get_field('програма_конференції_тайтл') ?></h3>
                    </div>


                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл1') ?></span>
                            <a href="#"><?php if(get_locale() == "uk") {echo "Детальніше";}else {echo "More";};?></a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php
                            if(get_locale() == "uk") {
                                echo do_shortcode("[table id=1 /]");
                            }else {
                                echo do_shortcode("[table id=12 /]");
                            };?>
                        </div>
                    </div>


                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл2') ?></span>
                            <a href="#"><?php if(get_locale() == "uk") {echo "Детальніше";}else {echo "More";};?></a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php
                            if(get_locale() == "uk") {
                                echo do_shortcode("[table id=7 /]");
                            }else {
                                echo do_shortcode("[table id=13 /]");
                            };?>
                        </div>
                    </div>


                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл3') ?></span>
                            <a href="#"><?php if(get_locale() == "uk") {echo "Детальніше";}else {echo "More";};?></a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php
                            if(get_locale() == "uk") {
                                echo do_shortcode("[table id=8 /]");
                            }else {
                                echo do_shortcode("[table id=14 /]");
                            };?>
                        </div>
                    </div>


                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл4') ?></span>
                            <a href="#"><?php if(get_locale() == "uk") {echo "Детальніше";}else {echo "More";};?></a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php
                            if(get_locale() == "uk") {
                                echo do_shortcode("[table id=9 /]");
                            }else {
                                echo do_shortcode("[table id=15 /]");
                            };?>
                        </div>
                    </div>


                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл5') ?></span>
                            <a href="#"><?php if(get_locale() == "uk") {echo "Детальніше";}else {echo "More";};?></a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php
                            if(get_locale() == "uk") {
                                echo do_shortcode("[table id=10 /]");
                            }else {
                                echo do_shortcode("[table id=16 /]");
                            };?>
                        </div>
                    </div>


                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл6') ?></span>
                            <a href="#"><?php if(get_locale() == "uk") {echo "Детальніше";}else {echo "More";};?></a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php
                            if(get_locale() == "uk") {
                                echo do_shortcode("[table id=11 /]");
                            }else {
                                echo do_shortcode("[table id=17 /]");
                            };?> 
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <div id="spickers-section" class="spickers-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo get_field('спікери_тайтл') ?></h3>
                </div>

                <div class="col-lg-12 spicker-row1">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_pm_моделі') ?></p>
                    </div>
                </div>

                <?php
                $args = array(
                    'post_type' 		=> 'speakers',
                    'category_name'     => 'pm-моделі,pm-моделі-en',
                    'post_status'       => 'publish',
                    'order' 			=> 'DESC',
                );


                $query = new WP_Query( $args ); ?>

                <div class="col-lg-12 spicker-row1">
                    <div class="owl-carousel speaker-carousel">

                        <?php  // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>


                                <div class="col-lg-12">
                                    <div class="circle280-wrapp circles-animation-wrap right-side speaker-item-wrapper"  data-toggle="modal" data-target="#exampleModalCenter1">
                                        <div class="anim-wrap-container" style="text-align: right;">
                                            <div class="circles-animation1 text-uppercase">
                                            <span>
                                                <?php echo get_field('імя') ?><br>
                                                <?php echo get_field('прізвище') ?>
                                                <span class="small-text"><?php echo get_field('посада') ?><br>
                                                    <?php echo get_field('кампанія') ?></span>
                                            </span>
                                            </div>
                                            <div class="circles-animation2 text-uppercase">
<!--                                                <span><a href="--><?php //echo get_field('посилання') ?><!--">--><?php //echo get_field('текст_посилання') ?><!--</a></span>-->
                                                <span><?php echo get_field('текст_посилання') ?></span>
                                            </div>
                                            <div class="circles-animation3"></div>
                                            <div class="circles-animation4"></div>

                                            <div class="circle280 circle-hover">
                                                <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                    </span>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="data-speaker-dn d-none">

                                                <img class="speaker-img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                <div class="foto-name">
                                                    <?php echo get_field('імя') ?>
                                                </div>
                                                <div class="foto-sure-name">
                                                    <?php echo get_field('прізвище') ?>
                                                </div>
                                                <div class="posada">
                                                    <?php echo get_field('посада') ?>
                                                </div>
                                                <div class="company">
                                                    <?php echo get_field('кампанія') ?>
                                                </div>
                                                <div class="foto-description">
                                                    <?php echo get_field('опис_спікера') ?>
                                                </div>
                                                <div class="speaker-thema">
                                                    <?php echo get_field('тема_виступу') ?>
                                                </div>
                                                <div class="speaker-tezu">
                                                    <?php echo get_field('тези_доповіді') ?>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <?php
                            }
                        }?>

                    </div>
                </div>

                <?php wp_reset_postdata(); ?>


                <div class="col-lg-12 spicker-row2">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_agile_та_гнучкі_методології') ?></p>
                    </div>
                </div>

                <?php
                $args = array(
                    'post_type' 		=> 'speakers',
                    'category_name'     => 'agile-та-гнучкі-методології,agile-та-гнучкі-методології-en',
                    'post_status'       => 'publish',
                    'order' 			=> 'DESC',
                );


                $query = new WP_Query( $args ); ?>

                <div class="col-lg-12 spicker-row2">
                    <div class="owl-carousel speaker-carousel">

                        <?php  // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>


                                <div class="col-lg-12">
                                    <div class="circle280-wrapp circles-animation-wrap right-side speaker-item-wrapper"  data-toggle="modal" data-target="#exampleModalCenter1">
                                        <div class="anim-wrap-container"  style="text-align: right;">
                                            <div class="circles-animation1 text-uppercase">
                                            <span>
                                                <?php echo get_field('імя') ?><br>
                                                <?php echo get_field('прізвище') ?>
                                                <span class="small-text"><?php echo get_field('посада') ?><br>
                                                    <?php echo get_field('кампанія') ?></span>
                                            </span>
                                            </div>
                                            <div class="circles-animation2 text-uppercase">
<!--                                                <span><a href="--><?php //echo get_field('посилання') ?><!--">--><?php //echo get_field('текст_посилання') ?><!--</a></span>-->
                                                <span><?php echo get_field('текст_посилання') ?></span>
                                            </div>
                                            <div class="circles-animation3"></div>
                                            <div class="circles-animation4"></div>

                                            <div class="circle280 circle-hover">
                                                <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                    </span>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="data-speaker-dn d-none">

                                                <img class="speaker-img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                <div class="foto-name">
                                                    <?php echo get_field('імя') ?>
                                                </div>
                                                <div class="foto-sure-name">
                                                    <?php echo get_field('прізвище') ?>
                                                </div>
                                                <div class="posada">
                                                    <?php echo get_field('посада') ?>
                                                </div>
                                                <div class="company">
                                                    <?php echo get_field('кампанія') ?>
                                                </div>
                                                <div class="foto-description">
                                                    <?php echo get_field('опис_спікера') ?>
                                                </div>
                                                <div class="speaker-thema">
                                                    <?php echo get_field('тема_виступу') ?>
                                                </div>
                                                <div class="speaker-tezu">
                                                    <?php echo get_field('тези_доповіді') ?>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <?php
                            }
                        }?>

                    </div>
                </div>

                <?php wp_reset_postdata(); ?>


                <div class="col-lg-12 spicker-row3">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_рм-практики') ?></p>
                    </div>
                </div>

                <?php
                $args = array(
                    'post_type' 		=> 'speakers',
                    'category_name'     => 'рм-практики,рм-практики-en',
                    'post_status'       => 'publish',
                    'order' 			=> 'DESC',
                );


                $query = new WP_Query( $args ); ?>

                <div class="col-lg-12 spicker-row3">
                    <div class="owl-carousel speaker-carousel">

                        <?php  // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>


                                <div class="col-lg-12">
                                    <div class="circle280-wrapp circles-animation-wrap right-side speaker-item-wrapper"  data-toggle="modal" data-target="#exampleModalCenter1">
                                        <div class="anim-wrap-container" style="text-align: right;">
                                            <div class="circles-animation1 text-uppercase">
                                            <span>
                                                <?php echo get_field('імя') ?><br>
                                                <?php echo get_field('прізвище') ?>
                                                <span class="small-text"><?php echo get_field('посада') ?><br>
                                                    <?php echo get_field('кампанія') ?></span>
                                            </span>
                                            </div>
                                            <div class="circles-animation2 text-uppercase">
<!--                                                <span><a href="--><?php //echo get_field('посилання') ?><!--">--><?php //echo get_field('текст_посилання') ?><!--</a></span>-->
                                                <span><?php echo get_field('текст_посилання') ?></span>
                                            </div>
                                            <div class="circles-animation3"></div>
                                            <div class="circles-animation4"></div>

                                            <div class="circle280 circle-hover">
                                                <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                    </span>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="data-speaker-dn d-none">

                                                <img class="speaker-img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                <div class="foto-name">
                                                    <?php echo get_field('імя') ?>
                                                </div>
                                                <div class="foto-sure-name">
                                                    <?php echo get_field('прізвище') ?>
                                                </div>
                                                <div class="posada">
                                                    <?php echo get_field('посада') ?>
                                                </div>
                                                <div class="company">
                                                    <?php echo get_field('кампанія') ?>
                                                </div>
                                                <div class="foto-description">
                                                    <?php echo get_field('опис_спікера') ?>
                                                </div>
                                                <div class="speaker-thema">
                                                    <?php echo get_field('тема_виступу') ?>
                                                </div>
                                                <div class="speaker-tezu">
                                                    <?php echo get_field('тези_доповіді') ?>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <?php
                            }
                        }?>

                    </div>
                </div>

                <?php wp_reset_postdata(); ?>

                <div class="col-lg-12  spicker-row4">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_product_management') ?></p>
                    </div>
                </div>

                <?php
                $args = array(
                    'post_type' 		=> 'speakers',
                    'category_name'     => 'product-management,product-management-en',
                    'post_status'       => 'publish',
                    'order' 			=> 'DESC',
                );


                $query = new WP_Query( $args ); ?>

                <div class="col-lg-12 spicker-row4">
                    <div class="owl-carousel speaker-carousel">

                        <?php  // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>


                                <div class="col-lg-12">
                                    <div class="circle280-wrapp circles-animation-wrap right-side speaker-item-wrapper"  data-toggle="modal" data-target="#exampleModalCenter1">
                                        <div class="anim-wrap-container" style="text-align: right;">
                                            <div class="circles-animation1 text-uppercase">
                                            <span>
                                                <?php echo get_field('імя') ?><br>
                                                <?php echo get_field('прізвище') ?>
                                                <span class="small-text"><?php echo get_field('посада') ?><br>
                                                    <?php echo get_field('кампанія') ?></span>
                                            </span>
                                            </div>
                                            <div class="circles-animation2 text-uppercase">
<!--                                                <span><a href="--><?php //echo get_field('посилання') ?><!--">--><?php //echo get_field('текст_посилання') ?><!--</a></span>-->
                                                <span><?php echo get_field('текст_посилання') ?></span>
                                            </div>
                                            <div class="circles-animation3"></div>
                                            <div class="circles-animation4"></div>

                                            <div class="circle280 circle-hover">
                                                <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                    </span>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="data-speaker-dn d-none">

                                                <img class="speaker-img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                <div class="foto-name">
                                                    <?php echo get_field('імя') ?>
                                                </div>
                                                <div class="foto-sure-name">
                                                    <?php echo get_field('прізвище') ?>
                                                </div>
                                                <div class="posada">
                                                    <?php echo get_field('посада') ?>
                                                </div>
                                                <div class="company">
                                                    <?php echo get_field('кампанія') ?>
                                                </div>
                                                <div class="foto-description">
                                                    <?php echo get_field('опис_спікера') ?>
                                                </div>
                                                <div class="speaker-thema">
                                                    <?php echo get_field('тема_виступу') ?>
                                                </div>
                                                <div class="speaker-tezu">
                                                    <?php echo get_field('тези_доповіді') ?>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <?php
                            }
                        }?>

                    </div>
                </div>



                <?php wp_reset_postdata(); ?>




                <div class="col-lg-12 spicker-row5">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_майстер-класи') ?></p>
                    </div>
                </div>


                <?php
                $args = array(
                    'post_type' 		=> 'speakers',
                    'category_name'     => 'майстер-класи,майстер-класи-en',
                    'post_status'       => 'publish',
                    'order' 			=> 'DESC',
                );


                $query = new WP_Query( $args ); ?>

                <div class="col-lg-12 spicker-row5">
                    <div class="owl-carousel speaker-carousel">

                        <?php  // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>


                                <div class="col-lg-12">
                                    <div class="circle280-wrapp circles-animation-wrap right-side speaker-item-wrapper"  data-toggle="modal" data-target="#exampleModalCenter1">
                                        <div class="anim-wrap-container" style="text-align: right;">
                                            <div class="circles-animation1 text-uppercase">
                                            <span>
                                                <?php echo get_field('імя') ?><br>
                                                <?php echo get_field('прізвище') ?>
                                                <span class="small-text"><?php echo get_field('посада') ?><br>
                                                    <?php echo get_field('кампанія') ?></span>
                                            </span>
                                            </div>
                                            <div class="circles-animation2 text-uppercase">
<!--                                                <span><a href="--><?php //echo get_field('посилання') ?><!--">--><?php //echo get_field('текст_посилання') ?><!--</a></span>-->
                                                <span><?php echo get_field('текст_посилання') ?></span>
                                            </div>
                                            <div class="circles-animation3"></div>
                                            <div class="circles-animation4"></div>

                                            <div class="circle280 circle-hover">
                                                <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                    </span>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="data-speaker-dn d-none">

                                                <img class="speaker-img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                <div class="foto-name">
                                                    <?php echo get_field('імя') ?>
                                                </div>
                                                <div class="foto-sure-name">
                                                    <?php echo get_field('прізвище') ?>
                                                </div>
                                                <div class="posada">
                                                    <?php echo get_field('посада') ?>
                                                </div>
                                                <div class="company">
                                                    <?php echo get_field('кампанія') ?>
                                                </div>
                                                <div class="foto-description">
                                                    <?php echo get_field('опис_спікера') ?>
                                                </div>
                                                <div class="speaker-thema">
                                                    <?php echo get_field('тема_виступу') ?>
                                                </div>
                                                <div class="speaker-tezu">
                                                    <?php echo get_field('тези_доповіді') ?>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <?php
                            }
                        }?>

                    </div>
                </div>

                <?php wp_reset_postdata(); ?>

                <div class="col-lg-12">
                    <div class="text-center">
                        <a class="m-5 btn btn-primary btn-lg active bgc-green" href="https://docs.google.com/forms/d/e/1FAIpQLSfd1fvayGPz-gFq6y7TCH_9F_hGyyR4outhlX3NElc0ExwY0w/viewform"><?php if(get_locale() == "uk") {echo "Стати доповідачем";}else {echo "Become a speaker";};?></a>
                    </div>
                </div>

            </div>
        </div>
    </div>



<!--    <div id="register-section" class="register-section">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!---->
<!--                <div class="col-lg-12">-->
<!--                    <h3>--><?php //echo get_field('реєстрація') ?><!--</h3>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-6">-->
<!--                    <div class="reg-block-left">-->
<!--                        <div class="col-lg-12 text-center">-->
<!--                            <div class="register-circles-wrap">-->
<!--                                -->
<!--                            </div>-->
<!--                            <div class="circle-el-wrap circle-big-wr position-relative">-->
<!--                                <div class="circle-big  change-content">-->
<!--                                    <span class="first-block">--><?php //echo get_field('standart_тайтл') ?><!--</span>-->
<!--                                    <span class="second-block desc" style="display: none;">--><?php //echo get_field('standart_опис') ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="circle-el-wrap circle-sm1-wr position-relative">-->
<!--                                <div class="circle-sm1">-->
<!--                                    <span><a href="--><?php //echo get_field('standart_лінк') ?><!--">--><?php //echo get_field('standart_лінк_текст') ?><!--</a></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="circle-el-wrap circle-sm1-wr position-relative circle-new-add-1">-->
<!--                                <div class="circle-sm1">-->
<!--                                    <span><a href="--><?php //echo get_field('standart_груповая_реестрация_link') ?><!--">--><?php //echo get_field('standart_груповая_реестрация') ?><!--</a></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!--                        </div>-->
<!--                        <div class="col-lg-12">-->
<!--                            <div class="circle-el-wrap circle-sm2-wr position-relative">-->
<!--                                <div class="circle-sm2">-->
<!--                                    <span>--><?php //echo get_field('standart_ціна') ?><!--</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-6">-->
<!--                    <div class="reg-block-left right-side">-->
<!--                        <div class="col-lg-12">-->
<!--                            <div class="circle-el-wrap circle-big-wr position-relative">-->
<!--                                <div class="circle-big change-content">-->
<!--                                    <span class="first-block">--><?php //echo get_field('premium_тайтл') ?><!--</span>-->
<!--                                    <span class="second-block desc" style="display: none;">--><?php //echo get_field('premium_опис') ?>
<!--                                    </span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="circle-el-wrap circle-sm1-wr position-relative">-->
<!--                                <div class="circle-sm1">-->
<!--                                    <span><a href="--><?php //echo get_field('premium_лінк') ?><!--">--><?php //echo get_field('premium_лінк_текст') ?><!--</a></span>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="circle-el-wrap circle-sm3-wr position-relative">-->
<!--                                <div class="circle-sm3"><a href="--><?php //echo get_field('premium_груповая_реестрация_link') ?><!--">--><?php //echo get_field('premium_груповая_реестрация') ?><!--</a></div>-->
<!--                            </div>-->
<!---->
<!---->
<!--                        </div>-->
<!--                        <div class="col-lg-12">-->
<!--                            <div class="circle-el-wrap circle-sm2-wr position-relative">-->
<!--                                <div class="circle-sm2">-->
<!--                                    <span>--><?php //echo get_field('premium_ціна') ?><!--</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div id="register-section" class="register-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h3><?php echo get_field('реєстрація') ?></h3>
                </div>

                <div class="col-lg-6">
                    <div class="reg-block-left">
                        <div class="col-lg-12 text-center">

                            <div class="register-circles-wrap">
                                <div class="circle-el-wrap circle-big-wr position-relative">
                                    <div class="circle-big  change-content">
                                        <span class="first-block"><?php echo get_field('standart_тайтл') ?></span>
                                        <span class="second-block desc" style="display: none;"><?php echo get_field('standart_опис') ?>
                                    </div>
                                </div>
                                <div class="circle-el-wrap circle-sm1-wr position-relative">
                                    <div class="circle-sm1">
                                        <span><a href="<?php echo get_field('standart_лінк') ?>"><?php echo get_field('standart_лінк_текст') ?></a></span>
                                    </div>
                                </div>

                                <div class="circle-el-wrap circle-sm1-wr position-relative circle-new-add-1 left-new-left">
                                    <div class="circle-sm1">
                                        <span><a href="<?php echo get_field('standart_груповая_реестрация_link') ?>"><?php echo get_field('standart_груповая_реестрация') ?></a></span>
                                    </div>
                                </div>

                                <div class="circle-el-wrap circle-sm2-wr position-relative">
                                    <div class="circle-sm2">
                                        <span><?php echo get_field('standart_ціна') ?></span>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="reg-block-left right-side text-center">
                        <div class="col-lg-12 text-center">
                            <div class="register-circles-wrap">
                                <div class="circle-el-wrap circle-big-wr position-relative">
                                    <div class="circle-big change-content">
                                        <span class="first-block"><?php echo get_field('premium_тайтл') ?></span>
                                        <span class="second-block desc" style="display: none;"><?php echo get_field('premium_опис') ?>
                                    </span>
                                    </div>
                                </div>

                                <div class="circle-el-wrap circle-sm1-wr  position-relative">
                                    <div class="circle-sm1">
                                        <span><a href="<?php echo get_field('premium_лінк') ?>"><?php echo get_field('premium_лінк_текст') ?></a></span>
                                    </div>
                                </div>

                                <div class="circle-el-wrap circle-sm3-wr position-relative">
                                    <div class="circle-sm3"><a href="<?php echo get_field('premium_груповая_реестрация_link') ?>"><?php echo get_field('premium_груповая_реестрация') ?></a></div>
                                </div>

                                <div class="circle-el-wrap circle-sm2-wr position-relative">
                                    <div class="circle-sm2">
                                        <span><?php echo get_field('premium_ціна') ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>






















    <div id="section-company-logos" class="section-company-logos">
        <div class="container">
            <div class="row">
                <div class="logos-company-wrap">

                    <?php if(get_field('головний_іт_рекрутинговий_партнер')) {?>

                        <div id="platinum-partner1">

                            <div class="col-lg-12">
                                <h3><?php echo get_field('головний_іт_рекрутинговий_партнер') ?></h3>
                            </div>

                            <div class="company-row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="offset-lg-4 col-lg-4">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('головний_іт_рекрутинговий_партнер_лого_link') ?>">
                                                    <img src="<?php echo get_field('головний_іт_рекрутинговий_партнер_лого') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php }?>


                    <?php if(get_field('платиновий_партнер')) {?>

                        <div id="platinum-partner">

                            <div class="col-lg-12">
                                <h3><?php echo get_field('платиновий_партнер') ?></h3>
                            </div>

                            <div class="company-row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="offset-lg-4 col-lg-4">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('платиновий_партнер_link') ?>">
                                                    <img src="<?php echo get_field('платиновий_партнер_лого_1') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php }?>


                    <?php if(get_field('золотий_партнер')) {?>


                        <div id="gold-partner">

                            <div class="col-lg-12">
                                <h3><?php echo get_field('золотий_партнер') ?></h3>
                            </div>

                            <div class="company-row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="offset-lg-4 col-lg-4">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('золотий_партнер_link') ?>">
                                                    <img src="<?php echo get_field('золотий_партнер_лого_1') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php }?>


                    <?php if(get_field('срібний_партнер')) {?>



                        <div id="silver-partner">

                            <div class="col-lg-12  silver-partner-title">
                                <h3><?php echo get_field('срібний_партнер') ?></h3>
                            </div>

                            <div class="company-row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="offset-lg-2 col-lg-3 silver-partner-1">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('срібний_партнер_лого_1_link') ?>">
                                                    <img src="<?php echo get_field('срібний_партнер_лого_1') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 silver-partner-2">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('срібний_партнер_лого_2_link') ?>">
                                                    <img src="<?php echo get_field('срібний_партнер_лого_2') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 silver-partner-3">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('срібний_партнер_лого_3_link') ?>">
                                                    <img src="<?php echo get_field('срібний_партнер_лого_3') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }?>


                    <?php if(get_field('бронзовий_партнер')) {?>


                        <div id="bronz-partner">

                            <div class="col-lg-12 bronz-partner-title">
                                <h3><?php echo get_field('бронзовий_партнер') ?></h3>
                            </div>

                            <div class="company-row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="offset-lg-2 col-lg-2 bronz-partner-1">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('бронзовий_партнер_лого_1_link') ?>">
                                                    <img src="<?php echo get_field('бронзовий_партнер_лого_1') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 bronz-partner-2">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('бронзовий_партнер_лого_2_link') ?>">
                                                    <img src="<?php echo get_field('бронзовий_партнер_лого_2') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 bronz-partner-3">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('бронзовий_партнер_лого_3_link') ?>">
                                                    <img src="<?php echo get_field('бронзовий_партнер_лого_3') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 bronz-partner-4">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('бронзовий_партнер_лого_4_link') ?>">
                                                    <img src="<?php echo get_field('бронзовий_партнер_лого_4') ?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }?>


                    <?php if(get_field('партнер')) {?>


                        <div id="simple-partner">

                            <div class="col-lg-12 simple-partner-title">
                                <h3><?php echo get_field('партнер') ?></h3>
                            </div>

                            <div class="company-row">
                                <div class="col-lg-12">
                                    <div class="row">
                                    	<div class="owl-carousel logo-carousel-simple">



											<?php 

											// var_dump(get_field('партнер_карусель'));   
											if( have_rows('партнер_карусель') ):  

												while( have_rows('партнер_карусель') ): the_row();
													
													for($i = 1; $i <= 10; $i++) { 
	  
														// vars
														$image = get_sub_field('партнер_лого_' . $i);
														$link = get_sub_field('партнер_лого_лінк_' . $i);

														?>

														<div class="col-lg-12 simple-partner-1">
				                                            <div class="logo-wrap">
				                                                <a target="_blank" href="<?php echo $link; ?>"> 
				                                                    <img src="<?php echo $image; ?>" alt="logo">
				                                                </a>
				                                            </div> 
				                                        </div>

												<?php }  

												endwhile; ?>  
												
											<?php endif; ?>


										</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="text-center">
                                    <a class="mt-5 btn btn-primary btn-lg active bgc-green" href="https://docs.google.com/forms/d/e/1FAIpQLSeqA8XXmyp-GwfgrAof80CBHmh2rsaXAyNRt_gNYxYAYpagww/viewform"><?php if(get_locale() == "uk") {echo "Стати партнером";}else {echo "Become a partner";};?></a>
                                </div>
                            </div>
                        </div>

                    <?php }?>

                </div>
            </div>
        </div>
    </div>



    <div class="section-info-partners">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h3><?php echo get_field('інформаційні_партнери') ?></h3>
                </div>

                <div class="col-lg-12">

                    <div class="info-part-logo-wrap">
                        <div class="row">

                            <?php
                            $args = array(
                                'post_type' 		=> 'logo',
                                'category_name'     => 'інформаційні-партнери,інформаційні-партнери-en',
                                'post_status'       => 'publish',
                                'order' 			=> 'DESC',
                            );


                            $query = new WP_Query( $args ); ?>

                            <div class="owl-carousel logo-carousel">

                                <?php  // Цикл
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post(); ?>

                                        <div class="col-lg-12">
                                            <div class="logo-wrap">
                                                <a target="_blank" href="<?php echo get_field('link') ?>">
                                                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="logo">
                                                </a>
                                            </div>
                                        </div>

                                    <?php
                                    }
                                }?>

                            </div>
                            <?php wp_reset_postdata(); ?>

                        </div>
                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="text-center">
                        <a class="mt-3 btn btn-primary btn-lg active bgc-green" href="https://docs.google.com/forms/d/e/1FAIpQLSfe87x-j29Qbij2a64t7T_mcGFOF4mds_RAxMrLP-r7a-AEiQ/viewform"><?php if(get_locale() == "uk") {echo "Стати інфопартнером";}else {echo "Become a info-partner";};?></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>



    <div class="locate-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo get_field('місце_проведення') ?></h3>
                </div>

                <div class="col-lg-12">
                    <div class="locate-map-content">
                        <div class="col-lg-12">
                            <div class="locate-block"  data-toggle="modal" data-target="#exampleModalCenter" data-map="<?php echo get_field('карта_локації_img_src') ?>">
                                <h4><?php echo get_field('карта_локації') ?></h4>
                                <img src="<?php echo get_field('карта_локації_img_src_small') ?>" alt="map">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="locate-map-content">
                        <div class="col-lg-10">
                            <div class="locate-block block-with-sign">
                                <h4><?php echo get_field('ubi_conference_hall') ?></h4>

                                <div class="img-with-sign locate-block"  data-toggle="modal" data-target="#exampleModalCenter"  data-map="<?php echo get_field('ubi_conference_hall_img_src') ?>">
                                    <img src="<?php echo get_field('ubi_conference_hall_img_src_small') ?>" alt="map">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">


                    <div class="form-block">
                        <?php echo do_shortcode('[contact-form-7 id="71" title="Contact form 1"]')?>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div id="section-organizations" class="section-organizations">


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-title">
                        <h3 class="text-center"><?php echo get_field('організатори_конференції') ?></h3>
                    </div>
                </div>


                <?php
                $args = array(
                'post_type' 		=> 'speakers',
                'category_name'     => 'організатори,організатори-en',
                'post_status'       => 'publish',
                'order' 			=> 'DESC',
                );


                $query = new WP_Query( $args ); ?>

                <div class="col-lg-12">
                    <div class="owl-carousel speaker-carousel">

                        <?php  // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>


                                <div class="col-lg-12">
                                    <div class="circle280-wrapp circles-animation-wrap right-side speaker-item-wrapper organization-items">
                                        <div class="anim-wrap-container">
                                            <div class="circles-animation1 text-uppercase">
                                            <span>
                                                <?php echo get_field('імя') ?><br>
                                                <?php echo get_field('прізвище') ?>
                                                <span class="small-text"><?php echo get_field('посада') ?><br>
                                                    <?php echo get_field('кампанія') ?></span>
                                            </span>
                                            </div>
                                            <div class="circles-animation2 text-uppercase">
                                                <span><?php echo get_field('текст_посилання') ?></span>
                                            </div>
                                            <div class="circles-animation3"></div>
                                            <div class="circles-animation4"></div>

                                            <div class="circle280 circle-hover">
                                                <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                    </span>
                                                </span>
                                                </div>
                                            </div>

                                            <div class="data-speaker-dn d-none">

                                                <img class="speaker-img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="<?php echo get_field('імя') ?>">
                                                <div class="foto-name">
                                                    <?php echo get_field('імя') ?>
                                                </div>
                                                <div class="foto-sure-name">
                                                    <?php echo get_field('прізвище') ?>
                                                </div>
                                                <div class="posada">
                                                    <?php echo get_field('посада') ?>
                                                </div>
                                                <div class="company">
                                                    <?php echo get_field('кампанія') ?>
                                                </div>
                                                <div class="foto-description">
                                                    <?php echo get_field('опис_спікера') ?>
                                                </div>
                                                <div class="speaker-thema">
                                                    <?php echo get_field('тема_виступу') ?>
                                                </div>
                                                <div class="speaker-tezu">
                                                    <?php echo get_field('тези_доповіді') ?>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            <?php
                            }
                        } ?>

                    </div>
                </div>

                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>


    <div class="section-about-lembs">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <p><?php echo get_field('про_lembs') ?>
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="<?php echo get_field('lembs_logo_url') ?>" alt="LemBS">
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
