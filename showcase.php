<?php
/**
 * Template Name: ShowCase
 *
 */



get_header(); ?>


    <div class="first-section">
        <div class="section-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contentb">
                            <h2>
                                <span>1 - <?php echo get_field('перша_секція_дата') ?> - 20/04</span>
                                <?php echo get_field('перша_секція_текст') ?>
                                kyiv <br>
                                Project <br>
                                Management <br>
                                Day
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
                        <div class="col-lg-12 mt-5">

                            <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb d-flex align-items-center"><span><?php echo get_field('секція_2_1_число') ?>50+</span></span>
                                <span class="green-circle-text"><?php echo get_field('секція_2_1_текст') ?>доповідачів</span>
                            </div>

                        </div>

                        <div class="col-lg-10 offset-lg-2 mt-5">

                            <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb d-flex align-items-center"><span><?php echo get_field('секція_2_2_число') ?>500+</span></span>
                                <span class="green-circle-text"><?php echo get_field('секція_2_2_текст') ?>учасників</span>
                            </div>

                        </div>

                        <div class="col-lg-11 offset-lg-1 mt-5">

                            <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb d-flex align-items-center"><span class="mr-5"><?php echo get_field('секція_2_3_число') ?>6</span></span>
                                <span class="green-circle-text"><?php echo get_field('секція_2_3_текст') ?>потоків</span>
                            </div>

                        </div>

                        <div class="col-lg-10 offset-lg-2 mt-5">

                            <div class="first-green d-flex">
                                <span class="green-circle-numb big-circle d-flex align-items-start"><span class="text-center text-115"><?php echo get_field('секція_2_4_число') ?>123</span></span>
                                <span class="green-circle-text d-flex align-items-start mt-5"><?php echo get_field('секція_2_4_текст') ?>Дні до конференції</span>
                            </div>

                        </div>

                        <div class="col-lg-3  offset-lg-6 mt-5">

                            <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb circle-cust-5"><span class="d-inline-block text-center text-125"><?php echo get_field('секція_2_5_число') ?>78</span><span class="fs-40 text-center"><?php echo get_field('секція_2_5_текст') ?>годин</span></span>
                            </div>

                        </div>

                        <div class="col-lg-3 mt-5">

                            <div class="first-green d-flex align-items-center">
                                <span class="green-circle-numb small-circle"><span class="mx-0 d-inline-block text-center"><?php echo get_field('секція_2_6_число') ?>95 </span><span class="last-text text-center d-inline-block mx-0"><?php echo get_field('секція_2_6_текст') ?>хвилин</span></span>
                            </div>

                        </div>
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
                                <h3><?php echo get_field('секція_з_6-ма_кругами_тайтл') ?>Подія, яку неможливо пропустити!</h3>
                                <p><?php echo get_field('секція_з_6-ма_кругами_опис') ?>
10 листопада відбулася найбільша в Україні конференція присвячена проектному
менеджменту в ІТ – Lviv Project Management Day 2018. В конференції  взяло участь
близько 500 проектних ІТ-менеджерів з усієї країни. Своїм досвідом для них поділилось
понад 50 досвідчених спікерів!
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row mb--25">
                        <div class="offset-lg-4 col-lg-4">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг1_текст_кнопки') ?>про<br />потік</a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг1_тайтл') ?>CASE STUDY</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг1_опис') ?>Для досвідчених проектних менеджерів та CEO аутсорсингових ІТ компаній, які цікавляться новинками галузі чи хочуть поглянути на управління під новим кутом. </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb--25">
                        <div class="col-lg-4">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг2_текст_кнопки') ?>про<br />потік</a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг2_тайтл') ?>PRODUCT<br>MANAGEMENT </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг2_опис') ?>Для досвідчених проектних менеджерів та CEO аутсорсингових ІТ компаній, які цікавляться новинками галузі чи хочуть поглянути на управління під новим кутом. </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="circle280-wrapp circles-animation-wrap central-circle">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг3_текст_кнопки') ?>про<br />потік</a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг3_тайтл') ?>PM МОДЕЛІ</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг3_опис') ?>Для досвідчених проектних менеджерів та CEO аутсорсингових ІТ компаній, які цікавляться новинками галузі чи хочуть поглянути на управління під новим кутом. </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг4_текст_кнопки') ?>про<br />потік</a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг4_тайтл') ?>AGILE ТА<br>ГНУЧКІ<br>МЕТОДОЛОГІЇ</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг4_опис') ?>Для досвідчених проектних менеджерів та CEO аутсорсингових ІТ компаній, які цікавляться новинками галузі чи хочуть поглянути на управління під новим кутом. </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb--25">
                        <div class="offset-lg-1 col-lg-4">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг5_текст_кнопки') ?>про<br />потік</a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг5_тайтл') ?>МАЙСТЕР-<br>КЛАСИ</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг5_опис') ?>Для досвідчених проектних менеджерів та CEO аутсорсингових ІТ компаній, які цікавляться новинками галузі чи хочуть поглянути на управління під новим кутом. </span>
                                </div>
                            </div>
                        </div>

                        <div class="offset-lg-2 col-lg-4">
                            <div class="circle280-wrapp circles-animation-wrap">

                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span><a href="#spickers-section"><?php echo get_field('круг6_текст_кнопки') ?>про<br />потік</a></span>
                                    </div>
                                    <div class="circles-animation2"></div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white"><?php echo get_field('круг6_тайтл') ?>FAILCONF</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bottom-content" style="display: none;">
                                    <span class="text-center"><?php echo get_field('круг6_опис') ?>Для досвідчених проектних менеджерів та CEO аутсорсингових ІТ компаній, які цікавляться новинками галузі чи хочуть поглянути на управління під новим кутом. </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="section-with-table">
        <div class="container">
            <div class="container-wrapp">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center"><?php echo get_field('програма_конференції_тайтл') ?>Програма конференції</h3>
                    </div>


                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл1') ?>CASE STUDY</span>
                            <a href="#">Детальніше</a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php echo do_shortcode("[table id=1 responsive=flip responsive_breakpoint=desktop /]")?>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл2') ?>PM МОДЕЛІ</span>
                            <a href="#">Детальніше</a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php echo do_shortcode("[table id=7 responsive=flip responsive_breakpoint=desktop /]")?>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл3') ?>AGILE ТА ГНУЧКІ<br>МЕТОДОЛОГІЇ</span>
                            <a href="#">Детальніше</a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php echo do_shortcode("[table id=8 responsive=flip responsive_breakpoint=desktop /]")?>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл4') ?>PRODUCT MANAGEMENT</span>
                            <a href="#">Детальніше</a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php echo do_shortcode("[table id=9 responsive=flip responsive_breakpoint=desktop /]")?>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл5') ?>FAILCONF</span>
                            <a href="#">Детальніше</a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php echo do_shortcode("[table id=10 responsive=flip responsive_breakpoint=desktop /]")?>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-2">
                        <div class="title-block title-block-hidden-table block-title">
                            <span><?php echo get_field('програма_конференції_тайтл6') ?>МАЙСТЕР-КЛАСИ</span>
                            <a href="#">Детальніше</a>
                        </div>
                        <div class="table-hidden-wrapp block-content" style="display: none;">
                            <?php echo do_shortcode("[table id=11 responsive=flip responsive_breakpoint=desktop /]")?>
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
                    <h3><?php echo get_field('спікери_тайтл') ?>Спікери</h3>
                </div>

                <div class="col-lg-12">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_pm_моделі') ?>PM МОДЕЛІ</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="owl-carousel speaker-carousel">


                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_agile_та_гнучкі_методології') ?>Agile та гнучкі методології</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="owl-carousel speaker-carousel">


                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_рм-практики') ?>РМ-практики</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="owl-carousel speaker-carousel">


                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_product_management') ?>Product Management</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="owl-carousel speaker-carousel">


                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="sub-title">
                        <p class="text-center"><?php echo get_field('спікери_майстер-класи') ?>Майстер-класи</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="owl-carousel speaker-carousel">


                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                        <span>
                                            ІМ`Я<br>
                                            ПРІЗВИЩЕ
                                            <span class="small-text">ПОСАДА<br>
                                            компанія</span>
                                        </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                            <span class="main-title text-center text-white">
                                                <span class="img-wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                </span>
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



    <div id="register-section" class="register-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h3><?php echo get_field('реєстрація') ?>Реєстрація</h3>
                </div>

                <div class="col-lg-6">
                    <div class="reg-block-left">
                        <div class="col-lg-12">
                            <div class="circle-el-wrap circle-big-wr position-relative">
                                <div class="circle-big  change-content">
                                    <span class="first-block"><?php echo get_field('standart_тайтл') ?>standard</span>
                                    <span class="second-block desc" style="display: none;"><?php echo get_field('standart_опис') ?>Доступ до<br>
                                        всіх потоків<br>
                                        Відеозапис<br>
                                        потоків<br><br>Обід </span>
                                </div>
                            </div>
                            <div class="circle-el-wrap circle-sm1-wr position-relative">
                                <div class="circle-sm1">
                                    <span><a href="<?php echo get_field('standart_лінк') ?>"><?php echo get_field('standart_лінк_текст') ?>купити квиток</a></span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-12">
                            <div class="circle-el-wrap circle-sm2-wr position-relative">
                                <div class="circle-sm2">
                                    <span><?php echo get_field('standart_ціна') ?>100$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="reg-block-left right-side">
                        <div class="col-lg-12">
                            <div class="circle-el-wrap circle-big-wr position-relative">
                                <div class="circle-big change-content">
                                    <span class="first-block"><?php echo get_field('premium_тайтл') ?>premium</span>
                                    <span class="second-block desc" style="display: none;"><?php echo get_field('premium_опис') ?>Всі опції пакету
                                        "STANDARD" +<br>
                                        Воркшопи<br><br>
                                        Афтепаті
                                    </span>
                                </div>
                            </div>
                            <div class="circle-el-wrap circle-sm1-wr position-relative">
                                <div class="circle-sm1">
                                    <span><a href="<?php echo get_field('premium_лінк') ?>"><?php echo get_field('premium_лінк_текст') ?>купити квиток</a></span>
                                </div>
                            </div>

                            <div class="circle-el-wrap circle-sm3-wr position-relative">
                                <div class="circle-sm3"></div>
                            </div>


                        </div>
                        <div class="col-lg-12">
                            <div class="circle-el-wrap circle-sm2-wr position-relative">
                                <div class="circle-sm2">
                                    <span><?php echo get_field('premium_ціна') ?>200$</span>
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

                    <div class="company-row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="offset-lg-4 col-lg-4">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo1.png" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <h3><?php echo get_field('платиновий_партнер') ?>платиновий партнер</h3>
                    </div>


                    <div class="company-row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="offset-lg-4 col-lg-4">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <h3><?php echo get_field('золотий_партнер') ?>платиновий партнер</h3>
                    </div>


                    <div class="company-row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="offset-lg-2 col-lg-3">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <h3><?php echo get_field('срібний_партнер') ?>срібний партнер</h3>
                    </div>


                    <div class="company-row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="offset-lg-2 col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <h3><?php echo get_field('бронзовий_партнер') ?>бронзовий партнер</h3>
                    </div>


                    <div class="company-row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/comp-logo2.png" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <h3><?php echo get_field('партнер') ?>партнер</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="section-info-partners">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h3><?php echo get_field('інформаційні_партнери') ?>Інформаційні партнери</h3>
                </div>

                <div class="col-lg-12">

                    <div class="info-part-logo-wrap">
                        <div class="row">

                            <div class="owl-carousel logo-carousel">

                                <div class="col-lg-12">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/info-logo1.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/info-logo2.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/info-logo3.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/info-logo4.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/info-logo5.png" alt="logo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="logo-wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/info-logo1.png" alt="logo">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="locate-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo get_field('місце_проведення') ?>Місце проведення</h3>
                </div>

                <div class="col-lg-12">
                    <div class="locate-map-content">
                        <div class="col-lg-12">
                            <div class="locate-block"  data-toggle="modal" data-target="#exampleModalCenter" data-map-src="<?php echo get_template_directory_uri(); ?>/img/map_big1.png">
                                <h4><?php echo get_field('карта_локації') ?>карта локації</h4>
                                <img src="<?php echo get_field('карта_локації_зображення') ?>" alt="map">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="locate-map-content">
                        <div class="col-lg-10">
                            <div class="locate-block block-with-sign">
                                <h4><?php echo get_field('ubi_conference_hall') ?>ubi conference hall</h4>

                                <div class="img-with-sign"  data-toggle="modal" data-target="#exampleModalCenter"  data-map-src="<?php echo get_template_directory_uri(); ?>/img/map_big2.png">
                                    <img src="<?php echo get_field('ubi_conference_hall_зображення') ?>" alt="map">
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
                        <h3 class="text-center"><?php echo get_field('організатори_конференції') ?>Організатори конференції</h3>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="owl-carousel speaker-carousel">


                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                            <span>
                                                ІМ`Я<br>
                                                ПРІЗВИЩЕ
                                                <span class="small-text">ПОСАДА<br>
                                                компанія</span>
                                            </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                            <span>
                                                ІМ`Я<br>
                                                ПРІЗВИЩЕ
                                                <span class="small-text">ПОСАДА<br>
                                                компанія</span>
                                            </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                            <span>
                                                ІМ`Я<br>
                                                ПРІЗВИЩЕ
                                                <span class="small-text">ПОСАДА<br>
                                                компанія</span>
                                            </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                            <span>
                                                ІМ`Я<br>
                                                ПРІЗВИЩЕ
                                                <span class="small-text">ПОСАДА<br>
                                                компанія</span>
                                            </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                            <span>
                                                ІМ`Я<br>
                                                ПРІЗВИЩЕ
                                                <span class="small-text">ПОСАДА<br>
                                                компанія</span>
                                            </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                    </span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="circle280-wrapp circles-animation-wrap right-side">
                                <div class="anim-wrap-container">
                                    <div class="circles-animation1 text-uppercase">
                                            <span>
                                                ІМ`Я<br>
                                                ПРІЗВИЩЕ
                                                <span class="small-text">ПОСАДА<br>
                                                компанія</span>
                                            </span>
                                    </div>
                                    <div class="circles-animation2 text-uppercase">
                                        <span><a href="">Дізнатись <br> більше</a></span>
                                    </div>
                                    <div class="circles-animation3"></div>
                                    <div class="circles-animation4"></div>

                                    <div class="circle280 circle-hover">
                                        <div class="green-circle-numb d-flex align-items-center">
                                                <span class="main-title text-center text-white">
                                                    <span class="img-wrap">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/spiker_man1.png" alt="">
                                                    </span>
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


    <div class="section-about-lembs">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <p><?php echo get_field('про_lembs') ?>
                        Lemberg Tech Business School: освітня організація створена в 2009-му році задля прогресу в
                        технологічній сфері через об’єднання наукових, бізнсових та творчих спільнот. Є організатором
                        близько 15 конференцій на рік: Outsourcing Forum, GameDev Conference, Project Managment Day,
                        Mobile Development Day, iCamp
                        Працює з технологіями, котрі знаходяться на висхідній кривій циклу зрілості технологій та
                        мають значний суспільний та економічний ефект.
                        Випускниками та слухачами навчальних івентів LemBS є близько 20 000 учасників з України,
                        Білорусії, Польщі, країн Європи та Пн. Америки.​

                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="<?php echo get_field('lembs_logo_url') ?>" alt="LemBS">
                </div>
            </div>
        </div>
    </div>

<?php get_footer();

