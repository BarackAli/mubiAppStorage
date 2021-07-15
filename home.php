<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <!-- ===== CSS ===== -->
	<link rel="stylesheet" type="text/css" href="assets-s/css/styles.css">
	
    <!-- ===== BOX ICONS ===== -->
	<link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
	<title>Home</title>
</head>
<body id="body">
            <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="assets/img/Barack.jpg" alt="" class="header__img">
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <!-- <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div> -->
            </div>
        </header>
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <a href="home.php" class="nav__logo">
                        <img src="assets-s/icons/logo1.png" alt="" class="nav__logo-icon">
                        <!-- <span class="nav__logo-text">Mubi Graphics</span> -->
                    </a>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-chevron-right'></i>
                    </div>

                    <ul class="nav__list">
                        <a href="home.php" class="nav__link active">
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
                <div class="nav__nav">
                <div class="nav__content">
                        <div class="nav__data"><div class="nav__info">Get 1TB of storage from MubiGraphic apps.</div>
                        <div class="nav__learn"><a href="" class="nav__learn-more">Learn More</a>
                        </div>
                        </div>
                        <div class="nav__button">
                            <i class='bx bx-diamond icon-diamond' ></i>
                            <div class="nav__button-info">Go premium</div>
                        </div>
                </div>
                        
                <div class="nav__storage">
                    <span class="nav__storage-bar-under nav__storage-width-under"></span> 
                    <span class="nav__storage-bar nav__storage-width"></span>
                    <span class="nav__storage-number"><span class="nav__storage-number-color">3.45 GB</span> used of 5 GB</span>
                </div>
                </div>
                <a href="includes/logout.php" class="nav__link">
                    <i class='bx bx-log-out-circle nav__icon'></i>
                    <span class="nav__text">Log Out</span>
                </a>
            </nav>
        </div>
    <div class="welcome_user">    
    <h2 class="first__title">Welcome, <?php echo $_SESSION['username']; ?></h2>
    <div class="user-icon">
        <i class='bx bxs-user nav__icon' ></i>
    </div>
    <p>mubiAppStorage is a fast and easy way to store your files on cloud.
    Helps you to keep files safe and prevent all external attacks, on top
    of all that it also uses Hybrid Cryptographic Method to secure files on
    cloud.</p>
    </div>
</body>
    <!-- MAIN JS -->
    <script src="assets-s/js/main.js"></script>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>