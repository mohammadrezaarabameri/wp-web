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
        'before_widget' => '',
		'after_widget'  => '',
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
    <span class="last-post-title"><?php echo $instance['recenttitle']; ?></span>
    <?php 
            $args = array('post_type' => 'post',
            'posts_per_page' =>  $instance['recentnumber']
);
$the_query = new WP_Query($args);
// The Loop
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
  $the_query->the_post(); ?>
  <div class='item-post'>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('recent-post'); ?></a>
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
        $instance = $old_instance;
        $instance['recenttitle'] = $new_instance['recenttitle'];
        $instance['recentnumber'] = $new_instance['recentnumber'];
        return $instance;
	}

	function form( $instance ) {
        $title = $instance['recenttitle'];
        $number = $instance['recentnumber'];
        ?>
        <label >عنوان</label>
        <br/>
        <input type='text' id='<?php echo $this->get_field_id('recenttitle'); ?>' name='<?php echo $this->get_field_name('recenttitle'); ?>' value='<?php echo $title ?>'>
        <br/>
        <label >تعداد</label>
        <br/>
        <input type='number' id='<?php echo $this->get_field_id('recentnumber'); ?>' name='<?php echo $this->get_field_name('recentnumber'); ?>' value='<?php echo $number ?>'>
   <?php }
}

add_action( 'widgets_init', 'widgetRecentPost' );

function widgetRecentPost() {
	register_widget( 'registerRecentPost' );
};
//add image size for recent post
add_image_size( 'recent-post', 60, 60, true );
add_image_size( 'post-thumbnail' );
add_image_size( 'archive-thumbnail', 190, 200, true );
//dynumic title
function dynumicTitle(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'dynumicTitle');

//pagination for archive

function paginationArchive() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    echo '</ul></div>' . "\n";
};

// support theme with woocommerce
function wpSuppurtWoocommerce(){
    add_theme_support('woocoomerce');
};
add_action('after_setup_theme', 'wpSuppurtWoocommerce');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {      
add_theme_support( 'woocommerce' );};

// change price location in woocommerce
function change_price_position() {
    global $product;
    if($product -> is_type('simple')){
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );
    }
}
add_action( 'woocommerce_before_single_product', 'change_price_position' );

?>
