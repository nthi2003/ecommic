<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
};

if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $pass = sha1($_POST['pass']);
  $pass = filter_var($pass, FILTER_SANITIZE_STRING);

  $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
  $select_user->execute([$email, $pass]);
  $row = $select_user->fetch(PDO::FETCH_ASSOC);

  if ($select_user->rowCount() > 0) {
    $_SESSION['user_id'] = $row['id'];
    header('location:home.php');
  } else {
    $message[] = 'incorrect username or password!';
  }
}

?>
<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
  </head>

  <body>
    <?php include 'components/user_header.php'; ?>

    <main class="main">
      <section class="home" id="home">
        <div class="home__container container login_container">
          <div class="center_form">
            <form class="login-input" action="" method="post">
              <h3 class="text_login">LOGIN</h3>
              <div class="">
                <div class="item_input">
                  <span class="text_form">Username</span>
                </div>
                <div class="input_login">
                  <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="input100" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>

                <div class="item_input">
                  <span class="text_form">Password</span>

                  <a href="#" class="text_forgot"> Forgot? </a>
                </div>
                <div class="input_login">
                  <input type="password" name="pass" required placeholder="enter your password" maxlength="20" class="input100" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
              </div>
          </div>
          <div class="signup_text">
            <div class="Ormember">
              <span class="text_member">Or</span>
            </div>
            <div class="text_sigups">
              <div class="box_login facebook text_members">
                <i class="bx bxl-facebook-circle"></i> Facebook
              </div>
              <div class="box_login google text_members">
                <i class="bx bxl-google"></i> Google
              </div>
            </div>
          </div>
          <input type="submit" value="LOGIN" class="login_box mg_box" name="submit">
          </form>
          <div class="signup_text">
            <span class="text_member">Not a member?</span>
            <a href="./user_register.php" class="text_forgot">Sign up now</a>
          </div>
        </div>
      </section>
    </main>
    <?php include 'components/footer.php'; ?>


    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>

</php>