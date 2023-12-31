<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/css/blog.css" />
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
  </head>
  <body>
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

    <main class="main">
      <section class="home" id="home">
        <div class="home__container container login_container">
          <div>
            <p class="name_blog">Blog Gundam</p>
            <h2>Lịch phát hành Gunpla tháng 09 năm 2023</h2>
            <div class="flex_blog">
              <div class="flex_left">
                <img
                  src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/df1fac182071577.6526e75dcf663.gif"
                  alt=""
                  class="img_blog"
                />
              </div>

              <div class="flex_right">
                <p class="text_right">
                  AZGundam Shop xin gửi đến Quý Khách Hàng lịch phát hành Gunpla
                  trong tháng 09 năm 2020 tại thị trường Nhật Bản Hàng sẽ về đến
                  Việt Nam sau khoảng 01 tháng 1. Entry Grade 1/144 RX-78-2
                  Gundam Nhân dịp kỉ niệm 40 năm Gunpla đầu tiên được sản xuất,
                  Bandai sẽ giới thiệu dòng […]
                </p>

                <div class="story__description text_blog">
                  <i class="bx bx-table"></i>
                  21/09/2023
                </div>

                <button class="button">VIEW ALL</button>
              </div>
            </div>
          </div>
          <div>
            <hr class="hr_blog" />
            <p class="name_blog">Blog Gundam</p>
            <h2>Gundam Astray No Name</h2>
            <div class="flex_blog">
              <div class="flex_left">
                <img
                  src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/2c663f143028461.6277bb4c8e3c7.png"
                  alt=""
                  class="img_blog"
                />
              </div>

              <div class="flex_right">
                <p class="text_right">
                  Gundam Astray No Name (ガンダムアストレイノーネイム) là Gundam
                  xuất hiện trong Gundam Build Divers dựa trên Gundam Astray,
                  được nghiên cứu và dẫn dắt bởi Tsukasa Shiba. I. Đặc điểm công
                  nghệ và chiến đấu: Gundam Astray No Name được chế tạo chuyên
                  biệt cho GP duel ( viết tắt là GPD, Gunpla Duel), là một […]
                </p>
                <div class="story__description text_blog">
                  <i class="bx bx-table"></i>
                  21/09/2023
                </div>

                <button class="button">VIEW ALL</button>
              </div>
            </div>
          </div>
          <hr class="hr_blog" />
          <div>
            <p class="name_blog">Blog Gundam</p>
            <h2>Bandai chuẩn bị ra mắt RG mới?</h2>
            <div class="flex_blog">
              <div class="flex_left">
                <img
                  src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/79d25068695395.5b65fd6793298.jpg"
                  alt=""
                  class="img_blog"
                />
              </div>

              <div class="flex_right">
                <p class="text_right">
                  Việc ra mắt RG 1/144 Nu Gundam sẽ được công bố vào ngày
                  23/04/2019 tại THE GUNDAM BASE TOKYO. AZGundam Shop sẽ thông
                  tin đến các bạn khi RG 1/144 Nu Gundam ra mắt chính thức.
                </p>
                <div class="story__description text_blog">
                  <i class="bx bx-table"></i>
                  21/09/2023
                </div>

                <button class="button">VIEW ALL</button>
              </div>
            </div>
          </div>
        </div>
      </section>
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

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
