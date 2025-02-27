<?php
if (!isset($_SESSION)) {
   session_start();
}
include('../dbConnection.php');

if (isset($_SESSION['is_login'])) {
   $stuEmail = $_SESSION['stuLogEmail'];
} else {
   echo "<script> location.href='../index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Watch Course</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="../css/all.min.css">

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="../css/stustyle.css">
</head>

<body>

   <div class="container-fluid p-2 text-white fixed-top" style="background-color:#225470" ;>
      <h3>InsightIQ</h3>
      <a class="btn text-white font-weight-bold" style="font-size:larger;" href="./myCourse.php">My Courses</a>
   </div>

   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-3 border-right" style="margin-top:8%;">
            <h4 class="text-center">Lessons</h4>
            <ul id="playlist" class="nav flex-column">
               <?php
               if (isset($_GET['course_id'])) {
                  $course_id = $_GET['course_id'];
                  $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                        echo '<li class="nav-item border-bottom py-2" movieurl=' . $row['lesson_link'] . ' style="cursor: pointer;">' . $row['lesson_name'] . '</li>';
                     }
                  }
               }
               ?>
            </ul>
         </div>
         <div class="col-sm-8 my-5">
            <video id="videoarea" src="" class="w-75 ml-2" controls style="margin-top : 10%;">
            </video>
         </div>
      </div>
   </div>



   <!-- Jquery and Boostrap JavaScript -->
   <script type="text/javascript" src="../js/jquery.min.js"></script>
   <script type="text/javascript" src="../js/popper.min.js"></script>
   <script type="text/javascript" src="../js/bootstrap.min.js"></script>

   <!-- Font Awesome JS -->
   <script type="text/javascript" src="../js/all.min.js"></script>

   <!-- Ajax Call JavaScript -->
   <!-- <script type="text/javascript" src="..js/ajaxrequest.js"></script> -->

   <!-- Custom JavaScript -->
   <script type="text/javascript" src="../js/custom.js"></script>
</body>

</html>