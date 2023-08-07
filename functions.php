<?php
//for header menu
function my_header_menu(){
    register_nav_menu('header-menu',__('هدر بالایی'));
}
add_action('init','my_header_menu');

// add slider post type
add_theme_support('post-thumbnails');
function my_slider_post_type(){
    register_post_type('slider',
    array(
        'labels' => array(
            'name' => __('اسلایدرها'),
            'singular_name' => __('اسلایدر'),
            'add_new' => __('افزودن اسلاید'),
            'add_new_item' => __('افزودن اسلاید'),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'link', 'thumbnail'),
    )
    );
}
add_action('init', 'my_slider_post_type');

// add brand post type
function myBrandPostType(){
    register_post_type('brands',
    array(
        'labels' => array(
            'name' => __('برندها'),
            'singular_name' => __('برند'),
            'add_new' => __('افزودن برند'),
            'add_new_item' => __('افزودن برند'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-screenoptions',
        'supports' => array('title', 'editor', 'link', 'thumbnail'),
    )
    );
}
add_action('init', 'myBrandPostType');

// add sidebar footer
function sidebarWidgetsFooter() {
	register_sidebar( array(
		'name'          => __( 'فوتر سایت 1', 'zibashoo' ),
		'id'            => 'footer-1',
		'description'   => __( 'در این بخش شما می توانید ابزارک های خودتون را در ستون اول فوتر ایجاد کنید', 'zibashoo' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'فوتر سایت 2', 'zibashoo' ),
		'id'            => 'footer-2',
		'description'   => __( 'در این بخش شما می توانید ابزارک های خودتون را در ستون دوم فوتر ایجاد کنید', 'zibashoo' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'فوتر سایت 3', 'zibashoo' ),
		'id'            => 'footer-3',
		'description'   => __( 'در این بخش شما می توانید ابزارک های خودتون را در ستون سوم فوتر ایجاد کنید', 'zibashoo' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'سایدبار', 'zibashoo' ),
		'id'            => 'sidebar-widget',
		'description'   => __( 'این ابزارک برای سایدبار قالب ایجاد شده است', 'zibashoo' ),
	) );
}
add_action( 'widgets_init', 'sidebarWidgetsFooter' );

//add register recent post widget
class registerRecentPost extends WP_Widget {

	function __construct() {
		// Instantiate the parent object.
		parent::__construct( false, __( 'آخرین نوشته ها', 'zibashoo' ) );
	}

	function widget( $args, $instance ) {
        ?>
    <div class="sidebar-related-post">
    <span class="last-post-title">آخرین نوشته ها</span>
    <?php 
            $args = array('post_type' => 'post',
            'posts_per_page' => 4
);
$the_query = new WP_Query($args);
// The Loop
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
  $the_query->the_post(); ?>
  <div class='item-post'>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <a href="<?php the_permalink(); ?>"><h3 class="title-post"><?php the_title(); ?></h3></a> 
</div>
           <?php
}
} else {
echo 'پستی برای نمایش وجود ندارد!';
}
/* Restore original Post Data */
wp_reset_postdata();
             ?>
    </div>
        <?php
    }

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	function form( $instance ) {
		return '';
	}
}

add_action( 'widgets_init', 'widgetRecentPost' );

function widgetRecentPost() {
	register_widget( 'registerRecentPost' );
}

?>
