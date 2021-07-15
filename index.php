<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css" />
<!--    <link rel="stylesheet" href="assets/css/styles.css" />-->

    <!-- ===== BOX ICONS ===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>mubiAppStorage</title>
  </head>
  <body>
    <div class="login">
      <div class="login__content">
        <div class="login__img">
          <img src="assets/img/mubi2.svg" alt="" />
        </div>

        <div class="login__forms">
          <form action="includes/login.php" class="login__register" id="login-in" method="post">
            <h1 class="login__title">Sign In</h1>
            
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
              <input type="text" name="uname" placeholder="Username" class="login__input" />
            </div>

            <div class="login__box">
              <i class="bx bx-lock-alt login__icon"></i>
              <input
                type="password"
                name="password"
                placeholder="Password"
                class="login__input"
              />
            </div>

            <a href="reset-password.php" class="login__forgot">Forgot password?</a>

              <button type="submit" class="login__button">Sign In</button>

            <div>
              <span class="login__account">Don't have an Account ?</span>
                  	<a href="signup.php" class="login__signin"><span id="sign-up">Sign Up</span></a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
