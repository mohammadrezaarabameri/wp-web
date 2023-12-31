</div>
<div class="clear"></div>
<footer>
      <div class="wp-center">
        <div class="feature-footer">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/Screenshot 2023-07-22 101414.jpg">
        </div>
        <div class="feature-culmn">
         <?php if(is_active_sidebar('footer-1')){
                  dynamic_sidebar('footer-1');
           } ?>
        </div>
        <div class="feature-culmn">
        <?php if(is_active_sidebar('footer-2')){
                  dynamic_sidebar('footer-2');
           } ?>
        </div>
        <div class="feature-culmn">
        <?php if(is_active_sidebar('footer-3')){
                  dynamic_sidebar('footer-3');
           } ?>
        </div>
        <div class="copyright-text">
          <p>استفاده از مطالب سایت فروشگاهی وردپرس برای مقاصد غیر تجاری با ذکر منبع بلامانع می باشد.</p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      loop: true,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
      },
    });
  </script>
  <script>
    var menu = ["10%", "20%", "30%"];
    var swiper = new Swiper(".discount-slider", {
      direction: "vertical",
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + menu[index] + "</span>";
        },
      },
      loop: true,
      autoplay: {
        delay: 3000,
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".brand-slider", {
      loop: true,
    });
  </script>
</html>
