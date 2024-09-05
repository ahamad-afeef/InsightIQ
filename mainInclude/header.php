<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" type="text/css" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">

  <!-- Student Testimonial Owl Slider CSS -->
  <link rel="stylesheet" type="text/css" href="css/owl.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/testyslider.css">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
  <title>InsightIQ</title>
</head>

<body>
  <!-- Start Nagigation -->
  <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" style="background-color:#225470" ;>
    <a href="index.php" class="navbar-brand">InsightIQ</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse pl-5" id="myMenu">
      <ul class="navbar-nav custom-nav d-flex justify-content-end" style="padding-left : 550px">
        <li class="nav-item custom-nav-item px-3"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item px-3"><a href="courses.php" class="nav-link">Courses</a></li>

        <?php
        session_start();
        if (isset($_SESSION['is_login'])) {
          echo '<li class="nav-item custom-nav-item px-3"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li> <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
        } else {
          echo '<li class="nav-item custom-nav-item px-3"><a href="#login" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li> <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>';
        }
        ?>
        <li class="nav-item custom-nav-item px-3"><a href="#Feedback" class="nav-link">Feedback</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->