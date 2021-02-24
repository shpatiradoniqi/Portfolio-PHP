<head>
    <meta charset="utf-8" />
    <title>Questions</title>
    <link rel="stylesheet" href="css.css" />
</head>
<div class="logo">
    <!--<img src="logo.png" alt="" />-->
</div>
<button class="nav-toggle" aria-label="toggle navigation">
    <span class="hamburger"></span>
</button>
<nav class="nav">
    <ul class="nav__list">
        <li class="nav__item"><a href="website.php" class="nav__link">Home</a></li>
        <li class="nav__item"><a href="MyServices.php" class="nav__link">My Services</a></li>
        <li class="nav__item"><a href="#website.php" class="nav__link">About me</a></li>
        <li class="nav__item"><a href="showUsers.php" class="nav__link">ShowUsers</a></li>
        <li class="nav__item"><a href="add_users.php" class="nav__link">Add/Users</a></li>
        <li class="nav__item"><a href="news.php" class="nav__link">News</a></li>
        <li class="nav__item"><a href="add_news.php" class="nav__link">Add/News</a></li>
        <li class="nav__item"><a href="contacts.php" class="nav__link">Contacts</a></li>
        <li class="nav__item"><a href="logout.php" class="nav__link">LogOut</a></li>
      
    </ul>
</nav>
</header>
<?php
session_start();
if($_SESSION['role']==1){
    require './databaseconfig2.php';
?>

<h2>This is DashboardPage</h2>
<footer class="footer">
                <a href="#" class="footer__link">someone@gmail.com</a>
            <ul class="social-list">
                <li class="social-list__item"><a class="social-list__link" href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="social-list__item"><a class="social-list__link" href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="social-list__item"><a class="social-list__link" href="#"><i class="fab fa-github"></i></a></li>
                <li class="social-list__item"><a class="social-list__link" href="#"><i class="fab fa-stack-overflow"></i></a></li>
            </ul>

        
    </footer>

<script src="index.js"></script>
</body>
</html>

<?php } else{
  header("Location: ./error.php");
} ?>