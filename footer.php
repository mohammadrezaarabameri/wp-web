<footer>
      <div class="wp-center">
        <div class="feature-footer">
          <img src="assets/img/Screenshot 2023-07-22 101414.jpg">
        </div>
        <div class="feature-culmn">
          <h4 class="feature-culmn-title">راه های ارتباطی</h4>
          <p>درباره ما<br/>
          ایمیل: info@wp.com <br/>
        آدرس: تهران - میدان انقلاب </p>
        </div>
        <div class="feature-culmn">
          <h4 class="feature-culmn-title">دسترسی سریع</h4>
         <ul>
          <li><a href="#">درباره ما</a></li>
          <li><a href="#">تماس با ما</a></li>
          <li><a href="#">روش های پرداخت</a></li>
          <li><a href="#">سوالات متداول</a></li>
         </ul>
        </div>
        <div class="feature-culmn">
          <h4 class="feature-culmn-title">مجوز ها</h4>
          <a href="#"><img src="assets/img/Screenshot 2023-07-22 105334.jpg"></a>
          <a href="#"><img src="assets/img/Screenshot 2023-07-22 105334.jpg"></a>
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
