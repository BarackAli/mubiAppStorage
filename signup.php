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

    <title>Sign Up | mubiAppStorage</title>
  </head>
  <body>
    <div class="login">
      <div class="login__content">
        <div class="login__img">
          <img src="assets/img/mubi2.svg" alt="" />
        </div>

        <div class="login__forms">
          <form action="includes/signup-check.php" class="login__create" id="login-up" method="post">
            <h1 class="signup__title">Create Account</h1>
            
            <?php if (isset($_GET['error'])) { ?>
     		<p class="signup-error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

            <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>           

            <div class="login__box">
              <i class="bx bx-user login__icon"></i>
          <?php if (isset($_GET['uname'])) { ?>
              <input type="text" 
              placeholder="Username" 
              name="uname" 
              class="login__input" 
              value="<?php echo $_GET['uname']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="uname"
                      class="login__input"                 
                      placeholder="Username">
          <?php }?>
            </div>

            <div class="login__box">
              <i class="bx bx-at login__icon"></i>
            <?php if (isset($_GET['email'])) { ?>

              <input type="text" 
              placeholder="Email" 
              name="email" 
              class="login__input"
              value="<?php echo $_GET['email']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="email"
                      class="login__input"
                      placeholder="E-mail">
          <?php }?>
            </div>

            <div class="login__box">
              <i class="bx bx-lock login__icon"></i>
              <input
                type="password"
                placeholder="Password"
                name ="password"
                class="login__input"
              />
            </div>

            <div class="login__box">
              <i class="bx bx-lock-alt login__icon"></i>
              <input
                type="password"
                placeholder="Repeat Password"
                name ="re_password"
                class="login__input"
              />
            </div>

            <button type="submit" class="login__button">Sign Up</button>

            <div>
              <span class="login__account">Already have an Account ?</span>
                        <a href="index.php"><span class="login__signup" id="sign-in">Sign In</span></a>
            </div>

            <div class="login__social">
              <a href="https://web.facebook.com/mubarak.aliyu.948/" class="login__social-icon"
                ><i class="bx bxl-facebook"></i
              ></a>
              <a href="https://twitter.com/mubeey_ali" class="login__social-icon"
                ><i class="bx bxl-twitter"></i
              ></a>
              <a href="mailto:mubeeali@outlook.com" class="login__social-icon"
                ><i class='bx bx-mail-send'></i></a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
