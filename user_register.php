<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
};

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $pass = sha1($_POST['pass']);
  $pass = filter_var($pass, FILTER_SANITIZE_STRING);
  $cpass = sha1($_POST['cpass']);
  $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

  $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
  $select_user->execute([$email,]);
  $row = $select_user->fetch(PDO::FETCH_ASSOC);

  if ($select_user->rowCount() > 0) {
    $message[] = 'email already exists!';
  } else {
    if ($pass != $cpass) {
      $message[] = 'confirm password not matched!';
    } else {
      $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
      $insert_user->execute([$name, $email, $cpass]);
      $message[] = 'registered successfully, login now please!';
    }
  }
}

?>
<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/input100icons@latest/css/input100icons.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

  </head>

  <body>
    <?php include 'components/user_header.php'; ?>


    <main class="main">
      <section class="home" id="home">
        <div class="home__container container login_container">
          <div class="center_form">
            <form class="login-input" action="" method="post">
              <h3 class="text_login">SIGN UP</h3>
              <div class="item_input">
                <span class="text_form">Username</span>
              </div>
              <div class="input_login">
                <input type="text" name="name" required placeholder="enter your username" maxlength="20" class="input100">
              </div>
              <div class="item_input">
                <span class="text_form">Email</span>
              </div>
              <div class="input_login">
                <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="input100" oninput="this.value = this.value.replace(/\s/g, '')">
              </div>
              <div class="item_input">
                <span class="text_form">Password</span>
              </div>
              <div class="input_login">
                <input type="password" name="pass" required placeholder="enter your password" maxlength="20" class="input100" oninput="this.value = this.value.replace(/\s/g, '')">
              </div>
              <div class="item_input">
                <span class="text_form"> Re-enter Password</span>
              </div>
              <div class="input_login">
                <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20" class="input100" oninput="this.value = this.value.replace(/\s/g, '')">
              </div>
              <input class="login_box" type="submit" value="SIGN UP" class="btn" name="submit">

            </form>

          </div>
          <div class="signup_text">
            <span class="text_member">Already have an account?</span>
            <a href="./user_login.php" class="text_forgot">Login here</a>
          </div>
        </div>
      </section>
    </main>
    <?php include 'components/footer.php'; ?>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>

  </html>