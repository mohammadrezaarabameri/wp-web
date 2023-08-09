<?php get_header(); ?>
      <div class="left-banner">
        <a href="#"
          ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-13 110332.jpg"
        /></a>
      </div>
      <!-- start slider -->
      <div class="home-banner">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <?php 
            $args = array('post_type' => 'slider',
            'posts_per_page' => 3
);
$the_query = new WP_Query($args);
// The Loop
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
  $the_query->the_post(); ?>
              <div class="swiper-slide"><a href='<?php bloginfo("url"); ?>'><?php the_post_thumbnail(); ?></a></div>
  <?php
}
} else {
echo 'پستی برای نمایش وجود ندارد!';
}
/* Restore original Post Data */
wp_reset_postdata();
             ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!-- end slider -->
      <div class="clear"></div>
      <div class="banner-container">
        <div class="banner-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-14 113538.jpg"
          /></a>
        </div>
        <div class="banner-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-13 110332.jpg"
          /></a>
        </div>
        <div class="banner-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-14 113604.jpg"
          /></a>
        </div>
        <div class="banner-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-14 113648.jpg"
          /></a>
        </div>
      </div>
      <div class="suggest-product">
        <h2 class="wp-suggest-title">پیشنهاد وردپرس</h2>
        <a href="#"
          ><img
            class="suggest-product-img"
            src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-16 122723.jpg"
        /></a>
        <a href="#"
          ><h3 class="title-product">
            گوشی موبایل سامسونگ مدل Galaxy A13 دو سیم کارت
          </h3></a
        >
        <span class="sug-product-price">6,956,000 تومان</span>
        <a href="#"><span class="add-to-cart">افزودن به سبد خرید</span></a>
      </div>
      <div class="discount-box swiper discount-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="discount-coulmn">
              <span class="sale-percent">20%</span>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-15 102948.jpg" />
            </div>
            <div class="discount-coulmn content">
              <div class="product-prices">
                <span class="regular-price">4,200,000 تومان</span>
                <span class="sale-price">4,050,000 تومان</span>
              </div>
              <h2 class="discount-title">
                جاروشارژی هوشمند شیائومی مدل D9 max
              </h2>
              <h3 class="discount-title short">ویژگی ها</h3>
              <p class="short-desc">
                محدوده میزان شارژدهی باتری : بیشتر از 20 دقیقه <br />

                امکانات جارو شارژی : باتری لیتیومی
              </p>
            </div>
            <div class="discount-coulmn suggest-time">
              <div class="suggest-item">
                <span class="wonderfull-suggest">پیشنهاد شگفت انگیز</span>
                <span class="until-time">فرصت باقی مانده</span>
              </div>
              <div class="countdown">
                <div class="day">
                  <span class="no">02</span>
                  <span class="txt">روز</span>
                </div>
                <div class="hour">
                  <span class="no">20</span>
                  <span class="txt">ساعت</span>
                </div>
                <div class="min">
                  <span class="no">14</span>
                  <span class="txt">دقیقه</span>
                </div>
                <div class="sec">
                  <span class="no">23</span>
                  <span class="txt">ثانیه</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="discount-coulmn">
              <span class="sale-percent">20%</span>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-15 102948.jpg" />
            </div>
            <div class="discount-coulmn content">
              <div class="product-prices">
                <span class="regular-price">4,200,000 تومان</span>
                <span class="sale-price">4,050,000 تومان</span>
              </div>
              <h2 class="discount-title">
                جاروشارژی هوشمند شیائومی مدل D9 max
              </h2>
              <h3 class="discount-title short">ویژگی ها</h3>
              <p class="short-desc">
                محدوده میزان شارژدهی باتری : بیشتر از 20 دقیقه <br />

                امکانات جارو شارژی : باتری لیتیومی
              </p>
            </div>
            <div class="discount-coulmn suggest-time">
              <div class="suggest-item">
                <span class="wonderfull-suggest">پیشنهاد شگفت انگیز</span>
                <span class="until-time">فرصت باقی مانده</span>
              </div>
              <div class="countdown">
                <div class="day">
                  <span class="no">02</span>
                  <span class="txt">روز</span>
                </div>
                <div class="hour">
                  <span class="no">20</span>
                  <span class="txt">ساعت</span>
                </div>
                <div class="min">
                  <span class="no">14</span>
                  <span class="txt">دقیقه</span>
                </div>
                <div class="sec">
                  <span class="no">23</span>
                  <span class="txt">ثانیه</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="discount-coulmn">
              <span class="sale-percent">20%</span>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-15 102948.jpg" />
            </div>
            <div class="discount-coulmn content">
              <div class="product-prices">
                <span class="regular-price">4,200,000 تومان</span>
                <span class="sale-price">4,050,000 تومان</span>
              </div>
              <h2 class="discount-title">
                جاروشارژی هوشمند شیائومی مدل D9 max
              </h2>
              <h3 class="discount-title short">ویژگی ها</h3>
              <p class="short-desc">
                محدوده میزان شارژدهی باتری : بیشتر از 20 دقیقه <br />

                امکانات جارو شارژی : باتری لیتیومی
              </p>
            </div>
            <div class="discount-coulmn suggest-time">
              <div class="suggest-item">
                <span class="wonderfull-suggest">پیشنهاد شگفت انگیز</span>
                <span class="until-time">فرصت باقی مانده</span>
              </div>
              <div class="countdown">
                <div class="day">
                  <span class="no">02</span>
                  <span class="txt">روز</span>
                </div>
                <div class="hour">
                  <span class="no">20</span>
                  <span class="txt">ساعت</span>
                </div>
                <div class="min">
                  <span class="no">14</span>
                  <span class="txt">دقیقه</span>
                </div>
                <div class="sec">
                  <span class="no">23</span>
                  <span class="txt">ثانیه</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination discount"></div>
      </div>
      <div class="wp-feature">
        <div>
          <span class="feature"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-17 105951.jpg" />امکان
            تحویل اکسپرس</span
          >
          <span class="feature"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-17 110012.jpg" />امکان
            پرداخت در محل</span
          >
          <span class="feature"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-17 110031.jpg" />7 روز
            هفته، 24 ساعته</span
          >
          <span class="feature"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-17 110052.jpg" />هفت روز
            ضمانت بازگشت وجه</span
          >
          <span class="feature"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-17 110113.jpg" /> ضمانت اصل
            بودن کالا</span
          >
          <span class="feature"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-17 110012.jpg" />ارسال به
            تمام نقاط کشور</span
          >
        </div>
      </div>
      <div class="most-sells-product">
        <h2 class="most-sells-title">پر فروش ترین ها</h2>
      </div>
      <div class="inner-product-item">
        <div class="product-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-18 104712.jpg"
          /></a>
          <a href="#"><h3>لپ تاپ 15.6 اینچی ایسوس</h3></a>
          <span>32.050.000</span>
        </div>
        <div class="product-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-18 104712.jpg"
          /></a>
          <a href="#"><h3>لپ تاپ 15.6 اینچی ایسوس</h3></a>
          <span>32.050.000</span>
        </div>
        <div class="product-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-18 104712.jpg"
          /></a>
          <a href="#"><h3>لپ تاپ 15.6 اینچی ایسوس</h3></a>
          <span>32.050.000</span>
        </div>
        <div class="product-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-18 104712.jpg"
          /></a>
          <a href="#"><h3>لپ تاپ 15.6 اینچی ایسوس</h3></a>
          <span>32.050.000</span>
        </div>
        <div class="product-item">
          <a href="#"
            ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-18 104712.jpg"
          /></a>
          <a href="#"><h3>لپ تاپ 15.6 اینچی ایسوس</h3></a>
          <span>32.050.000</span>
        </div>
      </div>
      <div class="home-middle-banner">
        <a class="adl-banner" href="#"
          ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-18 113502.jpg"
        /></a>
        <a class="adr-banner" href="#"
          ><img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-18 113524.jpg"
        /></a>
      </div>
      <div class="home-article">
        <h2 class="home-art-title">آخرین مقالات سایت</h2>
        <div class="home-box-article">
        <?php 
            $args = array('post_type' => 'post',
            'posts_per_page' => 5
);
$the_query = new WP_Query($args);
// The Loop
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
  $the_query->the_post(); ?>
          <div class="article-item">
            <a href="<?php the_permalink(); ?>"
              ><?php the_post_thumbnail(); ?></a>
              <div class='title-author'>
            <a href="<?php the_permalink(); ?>"
            ><h3><?php the_title(); ?></h3></a>
            <span class="author"><?php echo get_the_author_posts_link(); ?></span>
              </div>
            <span class="publish-data"><?php echo get_the_date('j F Y'); ?></span>
            <span class="comment-site"><?php echo get_comments_number(); ?></span>
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
      </div>
      <h4 class="home-brand-title">برندهای ویژه</h4>
      <div class="home-brands swiper brand-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="center-item">
            <?php 
            $args = array('post_type' => 'brands',
            'posts_per_page' => 8
);
$the_query = new WP_Query($args);
// The Loop
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
  $the_query->the_post(); ?>
              <div class="brand-item">
                <a href="<?php the_permalink(); ?>"
                  ><?php the_post_thumbnail(); ?></a>
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
          </div>
        </div>
      </div>
  <?php get_footer(); ?>