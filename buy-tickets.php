<?php
/**
 * Template Name: Buy tickets
 *
 */



get_header(); ?>


    <div class="section-with-tickets">
        <div class="section-wrap">
            <div class="container maxw-960" >
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-wrapper">

                            <div id="2event_tickets_widget" style="width: 100%;"></div>
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <h3>FAQ</h3>
                        <span class="buy-text-page">
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                the_content();


                            endwhile; // End of the loop.
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        var widgetOptions = {bg_color: 'fcfcfc', id: 1719671, lang: 'uk', tickets_type: ''};
        (function() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.async = true;
            script.src = "https://2event.com/js/widget-tickets.js";
            document.getElementsByTagName('head')[0].appendChild(script);
        })();
    </script>


<?php get_footer();
