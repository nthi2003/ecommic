<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
};



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./assets/img/logo-removebg-preview.png" type="image/x-icon" />

  <title>Gundam</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="./css/styles.css" />

</head>

<body>

  <?php include 'components/user_header.php'; ?>


  <main class="main">
    <section class="home" id="home">
      <div class="home__container container grid">
        <div class="home__img-bg">
          <img src="./img/home.png" alt="" class="home__img" />
        </div>
        <div class="home__social">
          <a href="" class="home__social-link"> Facebook </a>
          <a href="" class="home__social-link"> Twitter </a>
          <a href="" class="home__social-link"> Instagram </a>
        </div>
        <div class="home__data">
          <h1 class="home__title">
            NEW GUMDAM <br />
            XVX-016 GUNDAM AERIAL
          </h1>
          <p class="home__description">
            The XVX-016 Gundam Aerial (ガンダム・エアリアル Gandamu Eariaru?)
            is a mobile suit introduced in Mobile Suit Gundam the Witch from
            Mercury. It is the main mobile suit of the 1st Season piloted by
            the protagonist Suletta Mercury.
          </p>
          <span class="home__price">$145</span>

          <div class="home__btns">
            <a href="" class="button button--gray button--small">
              Discover
            </a>
            <button class="button home__button">ADD TO CART</button>
          </div>
        </div>
      </div>
    </section>
    <div>
      <div class="swiper mySwiperSale">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img_slide" src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/faa4fe174437409.64a2c37ea4686.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img class="img_slide" src="https://file.hstatic.net/1000231532/file/phu_kien_nintendo_switch_oled_e753fbb191ba422185ef8d7e1782ba76.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img class="img_slide" src="https://file.hstatic.net/1000231532/file/mua_game_nintendo_switch_a59de66e135944ee8166aaeb736715ea.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img class="img_slide" src="https://file.hstatic.net/1000231532/file/mua_may_game_nintendo_switch_f43e9cdae6ed4dadb253b687c1d5def4.jpg" alt="">
          </div>

        </div>
        <div class="swiper-button-next sale">
          <i class="bx bx-right-arrow-alt"></i>
        </div>
        <div class="swiper-button-prev sale_left">
          <i class="bx bx-left-arrow-alt"></i>
        </div>
      </div>



      <section class="slider_container products section container" id="products">
        <h2 class="section__title">Products</h2>
        <p class="section__list">Gumdam</p>
        <div class="container">
          <?php
          $select_products = $conn->prepare("SELECT * FROM `products`");
          $select_products->execute();
          if ($select_products->rowCount() > 0) {
            while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
          ?>
              <div class="swiper card_slider">

                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="products__card">
                      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" class="products__img" alt="" />
                      <h3 class="products__title"><?= $fetch_product['name']; ?>
                      </h3>
                      <span class="products__price"><?= $fetch_product['price']; ?></span>
                      <button class="products__button">
                        <i class="bx bx-shopping-bag"></i>
                      </button>
                    </div>
                  </div>

                  <div class="swiper-pagination"></div>
                </div>
              </div>
      </section>
  <?php
            }
          } else {
            echo '<p class="empty">no products added yet!</p>';
          }
  ?>
  <section class="testimonial section container">
    <h2 class="section__title">Products Review</h2>
    <div class="testimonial__container">
      <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">
          <div class="testimonial__card swiper-slide  ">


            <p class="testimonial__description">
              Good product, the paint color is great, I bought it
            </p>
            <h3 class="testimonial__date">10/9/2023</h3>
            <div class="rating">
              <div class="stars"></div>

            </div>

            <div class="testimonial__perfil">
              <img src="./assets/img/storynew.jpg" alt="" class="testimonial__perfil-img" />

              <div class="testimonial__perfil-data">
                <span class="testimonial__perfil-name">Linh</span>
                <span class="testimonial__perfil-detail">
                  Product Buyers
                </span>
              </div>
            </div>
          </div>
          <div class="testimonial__card swiper-slide  ">


            <p class="testimonial__description">

              I've loved it for a long time from the movies on screen, I really think it's cool and today is the big sale day. UvU
            </p>
            <h3 class="testimonial__date">20/10/2023</h3>
            <div class="rating">
              <div class="stars"></div>

            </div>

            <div class="testimonial__perfil">
              <img src="./assets/img/MG-RX-178-Gundam-Mk-II-Ver.2.0-A.E.U.G-AZGUNDAM-1-removebg-preview (1).png" alt="" class="testimonial__perfil-img" />

              <div class="testimonial__perfil-data">
                <span class="testimonial__perfil-name">Thi</span>
                <span class="testimonial__perfil-detail">
                  Product Buyers
                </span>
              </div>
            </div>
          </div>



          <div class="testimonial__card swiper-slide">

            <p class="testimonial__description">
              The new product is extremely perfect from the paint to the matching frame. I don't know when it will have a 1/10 version. I want to leave it right at the entrance to my house. If possible, the manufacturer can contact me so we can discuss more about that unique gundam
            </p>
            <h3 class="testimonial__date">12/11/2023</h3>
            <div class="rating">
              <div class="stars"></div>

            </div>

            <div class="testimonial__perfil">
              <img src="./assets/img/gumdam-bg.jpg" alt="" class="testimonial__perfil-img" />

              <div class="testimonial__perfil-data">
                <span class="testimonial__perfil-name">Vuong</span>
                <span class="testimonial__perfil-detail">Product Buyers</span>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-button-next">
          <i class="bx bx-right-arrow-alt"></i>
        </div>
        <div class="swiper-button-prev">
          <i class="bx bx-left-arrow-alt"></i>
        </div>
      </div>


    </div>
  </section>
  <?php include 'components/footer.php'; ?>



  <a href="#" class="scrollup" id="scroll-up">
    <i class="bx bx-up-arrow-alt scrollup__icon"></i>
  </a>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="./js/main.js"></script>

</html>