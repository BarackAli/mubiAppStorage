<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- ===== BOX ICONS ===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Reset Password</title>
  </head>
  <body>
    <div class="login">
      <div class="login__content">
        <div class="login__img">
          <img src="assets/img/mubi2.svg" alt="" />
        </div>

        <div class="login__forms">
          <form action="passwordsuccess.php" class="login__register" id="login-in" method="post">
            <h1 class="login__title">Reset Your Password</h1>
            
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
           
            <p class="success">An e-mail will be send to you with instructions on how to reset your password.</p>

            <div class="login__box">
              <i class="bx bx-at login__icon"></i>
              <input type="email" name="email" placeholder="Enter email..." class="login__input" />
            </div>

              <button type="submit" name="reset-request-submit" class="login__button">Reset Password</button>

          </form>
        </div>
      </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
