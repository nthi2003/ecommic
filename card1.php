<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gundam</title>
    <link rel="stylesheet" href="./assets/css/card.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link
      rel="shortcut icon"
      href="assets/img/favicon.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
  </head>
  <body>
    <!--header-->
    <header class="header w-full" id="header">
      <nav class="nav container">
        <a href="./index.html" class="nav__logo">
          <img
            src="./assets/img/logo-removebg-preview.png"
            class="img_logo"
            alt=""
          />
          LYN
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#featured" class="nav__link">Featured</a>
            </li>
            <li class="nav__item">
              <a href="#products" class="nav__link">Products</a>
            </li>
            <li class="nav__item">
              <a href="./blog.html" class="nav__link">Blog</a>
            </li>
            <div class="search-box">
              <form action="" class="search">
                <span class="icon-large"><i class="ri-search-line"></i></span>
                <input type="search" placeholder="Search for products" />
                <button type="submit">Search</button>
              </form>
            </div>
          </ul>

          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
        </div>

        <div class="nav__btns">
          <i class="bx bx-moon change-theme" id="theme-button"></i>

          <div class="nav__shop" id="cart-shop">
            <i class="bx bx-shopping-bag"></i>
          </div>
          <div class="nav__shop" id="cart-shop">
            <a href="./Login.html" class="nav__shop">
              <i class="bx bx-user-circle"></i>
            </a>
          </div>
          <div class="nav__toggle" id="nav-toggle">
            <i class="bx bx-grid-alt"></i>
          </div>
        </div>
      </nav>
    </header>
    <div class="cart" id="cart">
      <i class="bx bx-x cart__close" id="cart-close"></i>

      <h2 class="cart__title-center">My Cart</h2>

      <div class="cart__container">
        <article class="cart__card">
          <div class="cart__box">
            <img
              src="assets/img/Calibarn-removebg-preview.png"
              alt=""
              class="cart__img"
            />
          </div>

          <div class="cart__details">
            <h3 class="cart__title">BANDAI HG CALIBARN</h3>
            <span class="cart__price">$60</span>

            <div class="cart__amount">
              <div class="cart__amount-content">
                <span class="cart__amount-box">
                  <i class="bx bx-minus"></i>
                </span>

                <span class="cart__amount-number">1</span>

                <span class="cart__amount-box">
                  <i class="bx bx-plus"></i>
                </span>
              </div>

              <i class="bx bx-trash-alt cart__amount-trash"></i>
            </div>
          </div>
        </article>

        <article class="cart__card">
          <div class="cart__box">
            <img
              src="assets/img/RG-32-RX-93-2-NU-AZGUNDAM-510x510.jpg"
              alt=""
              class="cart__img"
            />
          </div>

          <div class="cart__details">
            <h3 class="cart__title">RG 32 RX-93 Nu VGundam</h3>
            <span class="cart__price">$96</span>

            <div class="cart__amount">
              <div class="cart__amount-content">
                <span class="cart__amount-box">
                  <i class="bx bx-minus"></i>
                </span>

                <span class="cart__amount-number">1</span>

                <span class="cart__amount-box">
                  <i class="bx bx-plus"></i>
                </span>
              </div>

              <i class="bx bx-trash-alt cart__amount-trash"></i>
            </div>
          </div>
        </article>

        <article class="cart__card">
          <div class="cart__box">
            <img
              src="./assets/img/MG-RX-178-Gundam-Mk-II-Ver.2.0-A.E.U.G-AZGUNDAM-1-removebg-preview (1).png"
              alt=""
              class="cart__img"
            />
          </div>

          <div class="cart__details">
            <h3 class="cart__title">MG RX-178 Gundam Mk-II Ver.2.0 A.E.U.G</h3>
            <span class="cart__price">$87</span>

            <div class="cart__amount">
              <div class="cart__amount-content">
                <span class="cart__amount-box">
                  <i class="bx bx-minus"></i>
                </span>

                <span class="cart__amount-number">1</span>

                <span class="cart__amount-box">
                  <i class="bx bx-plus"></i>
                </span>
              </div>

              <i class="bx bx-trash-alt cart__amount-trash"></i>
            </div>
          </div>
        </article>
      </div>

      <div class="cart__prices">
        <span class="cart__prices-item">3 items</span>
        <span class="cart__prices-total">$243</span>
      </div>
    </div>

    <main class="main card__sp">
      <section class="home slider" id="home">
        <div class="">
          <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./assets/img/Calibarn-removebg-preview.png" />
              </div>
              <div class="swiper-slide">
                <img
                  src="https://bizweb.dktcdn.net/thumb/grande/100/451/227/products/86779fec-a75b-4df6-a314-280f15310e06-1691491683708.jpg"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/RG-32-RX-93-2-NU-AZGUNDAM-510x510-removebg-preview.png"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/RG-35-GOD-GUNDAM-AZGUNDAM-12-removebg-preview.png"
                />
              </div>
            </div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./assets/img/Calibarn-removebg-preview.png" />
              </div>
              <div class="swiper-slide">
                <img
                  src="https://bizweb.dktcdn.net/thumb/grande/100/451/227/products/86779fec-a75b-4df6-a314-280f15310e06-1691491683708.jpg"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/RG-32-RX-93-2-NU-AZGUNDAM-510x510-removebg-preview.png"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="./assets/img/RG-35-GOD-GUNDAM-AZGUNDAM-12-removebg-preview.png"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="name_card">
        <h1 class="name__title">HG Gundam Calibarn</h1>
        <div class="price">
          <span class="current">$60</span>
          <span class="normal mini-text">$80</span>
        </div>
        <div class="rating">
          <div class="stars"></div>
          <span class="mini-text">(2,548)</span>
        </div>
        <div>
          <ul>
            <li>Series: Entry Grade</li>
            <li>Tỉ lệ: 1/144</li>
            <li>Hàng chính hãng Bandai (Nhật Bản)</li>
          </ul>
        </div>
        <div class="cart__amount cart__number">
          <div class="cart__amount-content">
            <span class="cart__amount-box">
              <i class="bx bx-minus"></i>
            </span>

            <span class="cart__amount-number">1</span>

            <span class="cart__amount-box">
              <i class="bx bx-plus"></i>
            </span>
          </div>
        </div>
        <button class="button button_card home__button">ADD TO CART</button>
        <ul class="ul_class">
          <li>Mã: EGBSEXCEED</li>
          <li>Danh mục: Entry Grade, Gundam Bandai</li>
          <li>Từ khóa: entry grade</li>
        </ul>
      </div>
      <div></div>
    </main>
    <section class="newsletter section container">
      <div class="newsletter__bg grid">
        <div>
          <h2 class="newsletter__title">
            Subscribe Our <br />
            Newsletter
          </h2>
          <p class="newsletter__description">
            Don't miss out on your discounts. Subscribe to our email newsletter
            to get the best offers, discounts, coupons, gifts and much more.
          </p>
        </div>

        <form action="" class="newsletter__subscribe">
          <input
            type="email"
            placeholder="quocthi.dev@gmail.com"
            class="newsletter__input"
          />
          <button class="button">SUBSCRIBE</button>
        </form>
      </div>
    </section>
    <footer class="footer section">
      <div class="footer__container container grid">
        <div class="footer__content">
          <h3 class="footer__title">Our information</h3>

          <ul class="footer__list">
            <li>Viet Nam</li>
            <li>University of Science and Education</li>
            <li>123-456-789</li>
          </ul>
        </div>
        <div class="footer__content">
          <h3 class="footer__title">About Us</h3>

          <ul class="footer__links">
            <li>
              <a href="#" class="footer__link">Support Center</a>
            </li>
            <li>
              <a href="#" class="footer__link">Customer Support</a>
            </li>
            <li>
              <a href="#" class="footer__link">About Us</a>
            </li>
            <li>
              <a href="#" class="footer__link">Copy Right</a>
            </li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Product</h3>

          <ul class="footer__links">
            <li>
              <a href="#" class="footer__link">GUNDAM</a>
            </li>
            <li>
              <a href="#" class="footer__link">TOKIT</a>
            </li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Social</h3>

          <ul class="footer__social">
            <a
              href="https://www.facebook.com/"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-facebook"></i>
            </a>

            <a
              href="https://twitter.com/"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-twitter"></i>
            </a>

            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-instagram"></i>
            </a>
          </ul>
        </div>
      </div>

      <span class="footer__copy">&#169; QuocThi</span>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
  </body>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="./assets/js/main.js"></script>
</html>
