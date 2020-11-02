<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to projectUnity</title>
    <script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>templates/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<!-- <body id="overlay"> -->
<body>

    <!-- Topbar starts here -->

    <section id="topbar">
        <div class="topbar-content">
            <span><i class="fas fa-envelope topbar-icon"></i></span>
            <p class="topbar-email">rimalkrishna205657@gmail.com</p>
        </div>
        <div class="topbar-social">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
        </div>
    </section>

    <!-- Topbar ends here -->

    <!-- Navbar starts here -->
    
    <section id="navbar">
        <nav class="main-navbar">
            <div class="navbar-logo">
                <img src="<?php echo BASE_URL;?>templates/img/logo.png" alt="logo">
            </div>
            <div class="navbar-search">
                <input type="text" name="search_text" placeholder="Search your topic">
                <a href="#"><i class="fas fa-search"></i></a>
            </div>
            <div class="navbar-breadcrumbs">
                <ul class="navbar-list">
                    <li><a href="#"><i class="far fa-comment"></i></a></li>
                    <li><a href="#"><i class="fas fa-user-friends"></i></a></li>
                    <li><a href="#"><h6 class="signin-signup">SignIn/SignUp</h6></a></li>
                    <li>
                        <div class="user-avatar">
                            <img src="<?php echo BASE_URL;?>templates/img/avatar.jpg" alt="avatar">
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <!-- Navbar ends here -->