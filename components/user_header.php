<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
    }
}
?>
<header class="header w-full" id="header">
    <nav class="nav container">
        <a href="./home.php" class="nav__logo">
            <img src="./img/logo-removebg-preview.png" class="img_logo" alt="" />
            LYN
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">About</a>
                </li>
                <li class="nav__item">
                    <a href="#products" class="nav__link">Order</a>
                </li>
                <li class="nav__item">
                    <a href="./" class="nav__link">Shop</a>
                </li>
                <li class="nav__item">
                    <a href="./" class="nav__link">Contact</a>
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
            <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
                <div class="nav__shop" id="cart-shop" style="display: flex;">
                    <a href="../user_login.php" class="nav__shop">
                        <i class="bx bx-user-circle"></i>
                    </a>
                    <a href="">
                        <span style="padding: 2px 20px;"><?= $fetch_profile["name"]; ?></span>
                    </a>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"></i>

                </div>
            <?php
            }
            ?>
        </div>
    </nav>
</header>