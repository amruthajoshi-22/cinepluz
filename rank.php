<?php
    // require('database.php');
    $con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }
 if(isset($_SESSION["email"]))
 {
    session_destroy();
 }
 
 session_start();
 mysqli_select_db($con,"cinepluz");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rank.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Barlow+Semi+Condensed:wght@500&family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Rank</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark  ">
        <a class="navbar-brand n-brand" href="#">CINEPLUZ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
               </li>
               
               <li class="nav-item">
                <a class="nav-link active" href="quiz.php">Quizes</a>
               </li>
               <li class="nav-item">
                <a class="nav-link active" href="rank.php">Ranklist</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="aboutus.html">AboutUs</a>
                 </li>
               <li class="nav-item">
                <a class="nav-link active" href="profile.php">Profile</a>
               </li>
            </ul>
        </div>
    </nav>
    <?php $mail=$_SESSION['mail'];
    ?>
     <p class="board">LEADERBOARD</p>
     <div class="rank-box">
     
      <?php
     $q="SELECT  uname,score from rank  ORDER BY score DESC";
     $query=mysqli_query($con,$q);
     $i=0;
     while($rows=mysqli_fetch_array($query)){
      $i++;
      ?>
     
         <div class="otherplayer">
            <p><?php echo $i ?></p>
            <img class="otherimages" src="images/avatar.jpg" alt="" srcset="">
            <p><?php echo $rows['uname'] ?></p>
            <p><?php echo $rows['score'] ?></p>
         </div>
         <?php 
     }
         ?>
          </div>
    <div>
   <img src="images/firstprize.jpg" class="first" alt="" srcset="">
   <img src="images/firstprize.jpg" class="second" alt="" srcset="">
   <img src="images/firstprize.jpg" class="third" alt="" srcset="">
     
     </div>
   
     
</body>
</html>