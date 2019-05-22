<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

$theme_options = get_option('true_options'); // это массив

?>


<footer id="footer" class="footer-section py-5 font-italic">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 col-md-12">
                <div class="soc-icons">
                    <div class="row">
                        <div class="col-4 col-lg-4 first-duo">
                            <a href="<?php echo $theme_options['footer_link_telegram']; ?>" class="white">
                                <i class="fab fa-telegram-plane"></i>
                            </a>
                        </div>
                        <div class="col-4 col-lg-4 first-duo">
                            <a href="<?php echo $theme_options['footer_link_fb']; ?>" class="white">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="col-4 col-lg-4">
                            <a href="<?php echo $theme_options['footer_link_youtube']; ?>" class="white">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-2 offset-lg-2  col-md-12">


                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('custom-header-widget1');
                ?>

            </div>
            <div class="col-12 col-lg-2  col-md-12">


                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('custom-header-widget2');
                ?>

            </div>

            <div class="col-12 col-lg-2  col-md-12">


                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('custom-header-widget3');
                ?>

            </div>
        </div>
    </div>


    <!-- Modal Map -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <img src="<?php echo get_template_directory_uri(); ?>/img/map_big1.png" alt="Map">
                
            </div>
        </div>
    </div>
    <!-- End Modal Map -->


    <!-- Modal Speakers-->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="<?php echo get_template_directory_uri()?>/img/close.png" alt="close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-speaker-content-wrap">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="title1 speaker-modal-img">
                                        <img src="" alt="" class="speaker-modal-img">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="title1 speaker-modal-name">

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="title1 speaker-modal-surname">

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="title1 speaker-modal-posada">

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <span class="title2"><?php if(get_locale() == "uk") {echo "Про спікера";}else {echo "About spicker";}?></span>
                                </div>

                                <div class="col-md-12">
                                    <div class="text speaker-modal-dosyagnennya">

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <span class="title2"><?php if(get_locale() == "uk") {echo "ТЕМА";}else {echo "TOPIC";}?></span>
                                </div>

                                <div class="col-md-12">
                                    <div class="text speaker-modal-topic">

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <span class="title2"><?php if(get_locale() == "uk") {echo "Тези доповіді";}else {echo "Report theses";}?></span>
                                </div>

                                <div class="col-md-12">
                                    <div class="text speaker-modal-tezu">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Speakers-->

</footer>

<?php wp_footer(); ?>

</body>
</html>
