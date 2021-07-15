<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <!-- ===== CSS ===== -->
	<link rel="stylesheet" type="text/css" href="assets-s/css/styles.css">
	<!-- <link rel="stylesheet" href="assets/css/styles.css" /> -->

    
	
    <!-- ===== BOX ICONS ===== -->
	<link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
	<title>Change Passsword</title>
</head>
<body id="body">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="home.php" class="nav__logo">
                        <img src="assets-s/icons/logo1.png" alt="" class="nav__logo-icon">
                    </a>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>

                    <ul class="nav__list">
                        <a href="home.php" class="nav__link ">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__text">Dashboard</span>
                        </a>
                        <a href="myfiles.php" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__text">My Files</span>
                        </a>
                        
                        
                        <a href="shared.php" class="nav__link">
                            <i class='bx bxs-group nav__icon' ></i>
                            <span class="nav__text">Shared</span>
                        </a>
                        
                        <a href="photos.php" class="nav__link">
                            <i class='bx bxs-photo-album nav__icon' ></i>
                            <span class="nav__text">Photos</span>
                        </a>
                        
                        <a href="recycleBin.php" class="nav__link">
                            <i class='bx bx-trash nav__icon' ></i>
                            <span class="nav__text">Recycle bin</span>
                        </a>

                        <a href="changepass.php" class="nav__link">
                             <i class='bx bxs-lock-alt nav__icon'></i>
                            <span class="nav__text">Change Password</span>
                        </a>


                    </ul>
                </div>
                
                <a href="includes/logout.php" class="nav__link">
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Log Out</span>
                </a>
            </nav>
        </div>
        <h2>Change Password</h2>
</body>
    <div class="change">
        <div class="change__form">
            <form action="" class="change__pass" id="login-in" method="post">
            <h1 class="change__title">Change Password</h1>
            
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

            <div class="change__box">
              <i class='bx bx-lock change__icon' ></i>
              <input type="password" name="cpass" placeholder="Current Password" class="change__input" />
            </div>

            <div class="change__box">
              <i class='bx bxs-lock-open change__icon' ></i>
              <input
                type="password"
                name="newpass"
                placeholder="New Password"
                class="change__input"
              />
            </div>

              <button type="submit" class="change__button">Change</button>
          </form>
        </div>
    </div>
    <!-- MAIN JS -->
    <script src="assets-s/js/main.js"></script>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>