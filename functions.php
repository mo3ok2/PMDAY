<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
    $content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function twentyfifteen_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
         * If you're building a theme based on twentyfifteen, use a find and replace
         * to change 'twentyfifteen' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'twentyfifteen' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 825, 510, true );



        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );

        /*
         * Enable support for custom logo.
         *
         * @since Twenty Fifteen 1.5
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 248,
            'width'       => 248,
            'flex-height' => true,
        ) );


        /*
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
//        add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

        // Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Area', 'twentyfifteen' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
    /**
     * Register Google fonts for Twenty Fifteen.
     *
     * @since Twenty Fifteen 1.0
     *
     * @return string Google fonts URL for the theme.
     */
    function twentyfifteen_fonts_url() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';

        /*
         * Translators: If there are characters in your language that are not supported
         * by Noto Sans, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
            $fonts[] = 'Noto Sans:400italic,700italic,400,700';
        }

        /*
         * Translators: If there are characters in your language that are not supported
         * by Noto Serif, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
            $fonts[] = 'Noto Serif:400italic,700italic,400,700';
        }

        /*
         * Translators: If there are characters in your language that are not supported
         * by Inconsolata, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
            $fonts[] = 'Inconsolata:400,700';
        }

        /*
         * Translators: To add an additional character subset specific to your language,
         * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
         */
        $subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

        if ( 'cyrillic' == $subset ) {
            $subsets .= ',cyrillic,cyrillic-ext';
        } elseif ( 'greek' == $subset ) {
            $subsets .= ',greek,greek-ext';
        } elseif ( 'devanagari' == $subset ) {
            $subsets .= ',devanagari';
        } elseif ( 'vietnamese' == $subset ) {
            $subsets .= ',vietnamese';
        }

        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), 'https://fonts.googleapis.com/css' );
        }

        return $fonts_url;
    }
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );



/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fifteen 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function twentyfifteen_resource_hints( $urls, $relation_type ) {
    if ( wp_style_is( 'twentyfifteen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
        if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
            $urls[] = array(
                'href' => 'https://fonts.gstatic.com',
                'crossorigin',
            );
        } else {
            $urls[] = 'https://fonts.gstatic.com';
        }
    }

    return $urls;
}
add_filter( 'wp_resource_hints', 'twentyfifteen_resource_hints', 10, 2 );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
    if ( ! is_single() ) {
        return;
    }

    $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );
    $css      = '';

    if ( is_attachment() && 'attachment' == $previous->post_type ) {
        return;
    }

    if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
        $prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
        $css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
    }

    if ( $next && has_post_thumbnail( $next->ID ) ) {
        $nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
        $css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
    }

    wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
    if ( 'primary' == $args->theme_location && $item->description ) {
        $item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
    return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Fifteen 1.9
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentyfifteen_widget_tag_cloud_args( $args ) {
    $args['largest']  = 22;
    $args['smallest'] = 8;
    $args['unit']     = 'pt';
    $args['format']   = 'list';

    return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentyfifteen_widget_tag_cloud_args' );




/**
 * Rivo.Agency code
 */

// Change logo class in default to custom
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {

    // img-fluid
    $html = str_replace( 'custom-logo', 'logo', $html );
    $html = str_replace( 'custom-logo-link', 'logo', $html );

    return $html;
}



// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'top'    => __( 'Header Menu', 'twentyseventeen' ),
    'footer1' => __( 'Footer Menu 1', 'twentyseventeen' ),
    'footer2' => __( 'Footer Menu 2', 'twentyseventeen' ),
    'footer3' => __( 'Footer Menu 3', 'twentyseventeen' ),
) );

function wpb_widgets_init() {

    register_sidebar( array(
        'name'          => 'Widget footer 1',
        'id'            => 'custom-header-widget1',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<p class="chw-title">',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
        'name'          => 'Widget footer 2',
        'id'            => 'custom-header-widget2',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<p class="chw-title">',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
        'name'          => 'Widget footer 3',
        'id'            => 'custom-header-widget3',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<p class="chw-title">',
        'after_title'   => '</p>',
    ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

function add_menuclass($ulclass) {

    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');



function atg_menu_classes($classes, $item, $args) {

    $classes[] = 'nav-item';

    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);


// Rivo Scripts in footer
add_action( 'wp_enqueue_scripts', 'rivoScripts' );
function rivoScripts(){
//    wp_deregister_script( 'owl-carousel' );
//    wp_deregister_script( 'jquery' );
//    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), false, false);
//    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), false, true );
    wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), false, true );
    wp_enqueue_script('fontawesomejs', 'https://use.fontawesome.com/4c9a08d616.js', array('jquery'), false, true );
//    wp_enqueue_script('owl-caruseljs', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true );
    wp_enqueue_script('owl-caruseljs', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), false, true );
    wp_enqueue_script('jquery-countdown', get_template_directory_uri() . '/assets/countdown/countdown/jquery.countdown.js', array('jquery'), false, true );
//    wp_enqueue_script('aosjs', get_template_directory_uri() . '/js/aos.js', array('jquery'), false, true );
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true );
}


// Rivo Styles in footer 
add_action( 'get_header', 'rivoStyles' );
//add_action( 'get_footer', 'rivoStyles' );
function rivoStyles() {
    wp_deregister_style( 'owl-carousel' );
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), null );
    wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), null );
//    wp_enqueue_style( 'fontsExo','https://fonts.googleapis.com/css?family=Exo+2:200,300,400,500,600,700,900', array(), null );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), null );
    wp_enqueue_style( 'style-countdown', get_template_directory_uri() . '/assets/countdown/countdown/jquery.countdown.css', array(), null );

//    wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css', array(), null );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), null );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), null );
};


// Include King Composer Mapping file
if(function_exists (kc_include_map)) {
    kc_include_map(get_template_directory_uri() . '/kingcomposer/shortcode_maps_november-24-2018-1240.kc');
}



// Register post types speaker
add_action('init', 'speakers_init');
function speakers_init(){

    register_post_type('speakers', array(
        'labels'             => array(
            'name'               => 'Спікер', // Основное название типа записи
            'singular_name'      => 'Спікер', // отдельное название записи типа Book
            'add_new'            => 'Додати',
            'add_new_item'       => 'Додати',
            'edit_item'          => 'Редагувати',
            'new_item'           => 'Новий',
            'view_item'          => 'Переглянути',
            'search_items'       => 'Знайти',
            'not_found'          => 'Спікерів не знайдено',
            'not_found_in_trash' => 'В кошику немає спікерів',
            'parent_item_colon'  => '',
            'menu_name'          => 'Спікери'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'taxonomies'         => array( 'category' ),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail', 'custom-fields')
    ) );

    register_post_type('logo', array(
        'labels'             => array(
            'name'               => 'Логотипи', // Основное название типа записи
            'singular_name'      => 'Логотипи', // отдельное название записи типа Book
            'add_new'            => 'Додати',
            'add_new_item'       => 'Додати',
            'edit_item'          => 'Редагувати',
            'new_item'           => 'Новий',
            'view_item'          => 'Переглянути',
            'search_items'       => 'Знайти',
            'not_found'          => 'Логотипи не знайдено',
            'not_found_in_trash' => 'В кошику немає логотипів',
            'parent_item_colon'  => '',
            'menu_name'          => 'Логотипи'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'taxonomies'         => array( 'category' ),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail', 'custom-fields')
    ) );
}


// створюю кастомні поля для типу постів speakers
function speaker_get_meta_box( $meta_boxes ) {
    $prefix = 'speaker-';

    $meta_boxes[] = array(
        'id' => 'speakersmeta',
        'title' => esc_html__( 'Інформація про спікерів', 'metabox-speakers' ),
        'post_types' => array('speakers'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => 'true',
        'fields' => array(
            array(
                'id' => $prefix . 'name',
                'type' => 'text',
                'name' => esc_html__( 'Імя', 'metabox-speakers' ),
            ),
            array(
                'id' => $prefix . 'position',
                'type' => 'text',
                'name' => esc_html__( 'Посада', 'metabox-speakers' ),
            ),
            array(
                'id' => $prefix . 'telegram',
                'type' => 'text',
                'name' => esc_html__( 'Телеграм', 'metabox-speakers' ),
            ),
            array(
                'id' => $prefix . 'fb',
                'type' => 'text',
                'name' => esc_html__( 'Фейсбук', 'metabox-speakers' ),
            ),
            array(
                'id' => $prefix . 'twitter',
                'type' => 'text',
                'name' => esc_html__( 'Твіттер', 'metabox-speakers' ),
            ),
            array(
                'id' => $prefix . 'country_img',
                'type' => 'image_advanced',
                'name' => esc_html__( 'Прапор країни', 'metabox-online-generator' ),
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'speaker_get_meta_box' );


## Отключает Гутенберг (новый редактор блоков в WordPress).
## ver: 1.0
if( 'disable_gutenberg' ){
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

    // Move the Privacy Policy help notice back under the title field.
    add_action( 'admin_init', function(){
        remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
        add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
}



// Створюємо ThemeOptions для посилань в футері

$true_page = 'myparameters.php'; // это часть URL страницы, рекомендую использовать строковое значение, т.к. в данном случае не будет зависимости от того, в какой файл вы всё это вставите
 
/*
 * Функция, добавляющая страницу в пункт меню Настройки
 */
function true_options() {
    global $true_page;
    add_menu_page( 'Опції теми', 'Опції теми', 'manage_options', $true_page, 'true_option_page');
}
add_action('admin_menu', 'true_options');

/**
 * Возвратная функция (Callback)
 */
function true_option_page(){
    global $true_page;
    ?><div class="wrap">
    <h2>Додаткові налаштування сайту</h2>
    <form method="post" enctype="multipart/form-data" action="options.php">
        <?php
        settings_fields('true_options'); // меняем под себя только здесь (название настроек)
        do_settings_sections($true_page);
        ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
    </div><?php
}

/*
 * Регистрируем настройки
 * Мои настройки будут храниться в базе под названием true_options (это также видно в предыдущей функции)
 */
function true_option_settings() {
    global $true_page;
    // Присваиваем функцию валидации ( true_validate_settings() ). Вы найдете её ниже
    register_setting( 'true_options', 'true_options', 'true_validate_settings' ); // true_options


    // Добавляем секцию
    add_settings_section( 'true_section_1', 'Футер (блок соціальних мереж)', '', $true_page );

    // Создадим текстовое поле в первой секции
    $true_field_params = array(
        'type'      => 'text', // тип
        'id'        => 'footer_link_fb',
    );
    add_settings_field( 'footer_link_fb_field', 'Посилання на фейсбук.', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

    // Создадим текстовое поле в первой секции
    $true_field_params = array(
        'type'      => 'text', // тип
        'id'        => 'footer_link_telegram',
    );
    add_settings_field( 'footer_link_telegram_field', 'Посилання на телеграм.', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

    // Создадим текстовое поле в первой секции
    $true_field_params = array(
        'type'      => 'text', // тип
        'id'        => 'footer_link_youtube',
    );
    add_settings_field( 'footer_link_youtube_field', 'Посилання на ютуб.', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );
//
//    // Создадим textarea в первой секции
//    $true_field_params = array(
//        'type'      => 'textarea',
//        'id'        => 'my_textarea',
//        'desc'      => 'Пример большого текстового поля.'
//    );
//    add_settings_field( 'my_textarea_field', 'Большое текстовое поле', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );
//
//    // Добавляем вторую секцию настроек
//
//    add_settings_section( 'true_section_2', 'Другие поля ввода', '', $true_page );
//
//    // Создадим чекбокс
//    $true_field_params = array(
//        'type'      => 'checkbox',
//        'id'        => 'my_checkbox',
//        'desc'      => 'Пример чекбокса.'
//    );
//    add_settings_field( 'my_checkbox_field', 'Чекбокс', 'true_option_display_settings', $true_page, 'true_section_2', $true_field_params );
//
//    // Создадим выпадающий список
//    $true_field_params = array(
//        'type'      => 'select',
//        'id'        => 'my_select',
//        'desc'      => 'Пример выпадающего списка.',
//        'vals'		=> array( 'val1' => 'Значение 1', 'val2' => 'Значение 2', 'val3' => 'Значение 3')
//    );
//    add_settings_field( 'my_select_field', 'Выпадающий список', 'true_option_display_settings', $true_page, 'true_section_2', $true_field_params );
//
//    // Создадим радио-кнопку
//    $true_field_params = array(
//        'type'      => 'radio',
//        'id'      => 'my_radio',
//        'vals'		=> array( 'val1' => 'Значение 1', 'val2' => 'Значение 2', 'val3' => 'Значение 3')
//    );
//    add_settings_field( 'my_radio', 'Радио кнопки', 'true_option_display_settings', $true_page, 'true_section_2', $true_field_params );

}
add_action( 'admin_init', 'true_option_settings' );

/*
 * Функция отображения полей ввода
 * Здесь задаётся HTML и PHP, выводящий поля
 */
function true_option_display_settings($args) {
    extract( $args );

    $option_name = 'true_options';

    $o = get_option( $option_name );

    switch ( $type ) {
        case 'text':
            $o[$id] = esc_attr( stripslashes($o[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'textarea':
            $o[$id] = esc_attr( stripslashes($o[$id]) );
            echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$o[$id]</textarea>";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'checkbox':
            $checked = ($o[$id] == 'on') ? " checked='checked'" :  '';
            echo "<label><input type='checkbox' id='$id' name='" . $option_name . "[$id]' $checked /> ";
            echo ($desc != '') ? $desc : "";
            echo "</label>";
            break;
        case 'select':
            echo "<select id='$id' name='" . $option_name . "[$id]'>";
            foreach($vals as $v=>$l){
                $selected = ($o[$id] == $v) ? "selected='selected'" : '';
                echo "<option value='$v' $selected>$l</option>";
            }
            echo ($desc != '') ? $desc : "";
            echo "</select>";
            break;
        case 'radio':
            echo "<fieldset>";
            foreach($vals as $v=>$l){
                $checked = ($o[$id] == $v) ? "checked='checked'" : '';
                echo "<label><input type='radio' name='" . $option_name . "[$id]' value='$v' $checked />$l</label><br />";
            }
            echo "</fieldset>";
            break;
    }
}
 
/*
 * Функция проверки правильности вводимых полей
 */
function true_validate_settings($input) {
//    foreach($input as $k => $v) {
//        $valid_input[$k] = trim($v);
//
//        /* Вы можете включить в эту функцию различные проверки значений, например
//        if(! задаем условие ) { // если не выполняется
//            $valid_input[$k] = ''; // тогда присваиваем значению пустую строку
//        }
//        */
//    }
//    return $valid_input;
    return $input;
}





/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';
