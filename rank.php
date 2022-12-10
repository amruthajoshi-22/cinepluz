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
                  <a class="nav-link active" href="aboutus.html">About</a>
                 </li>
               <li class="nav-item">
                <a class="nav-link active" href="login.php">Signup</a>
               </li>
            </ul>
        </div>
    </nav>
    <section>

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
     
        
     
         <!-- <div class="winners">
            <div style="margin-top: 1rem; text-align: center;">
            
            <div id="secondround">
               <p class="prize2">#2</p>
            <img id="second" src="images/avatar.jpg" alt="" srcset="">
            <button class="btn award" style="display:block; margin:1rem 0 0 4rem">Claim Reward</button>
         </div>
            <p class="prize2">PLAYER</p>
            <p class="prize2">500 POINTS</p>
            

            </div>
            <div style="text-align: center;">
               <div id="firstround">
            <p class="prize1">#1</p>
            <img id="first" src="images/avatar.jpg" alt="" srcset="">
            <button class="btn award" onclick="prize_1()" style="display:block; margin:1rem 0 0 5.8rem">Claim Reward</button>
         </div>
            <p class="prize1">PLAYER</p>
            <p class="prize1">400 POINTS</p>
            </div>
            <div style="margin-top:2rem; text-align: center;">
               <div id="thirdround">
            <p class="prize3">#3</p>
            <img id="third" src="images/avatar.jpg" alt="" srcset="">
            <button class="btn award" style="display:block; margin:0.5rem 0 0 2.2rem">Claim Reward</button>
         </div>
            <p class="prize3">PLAYER</p>
            <p class="prize3">300 POINTS</p>
        </div>
         </div> -->

         <div class="otherplayer">
            <p><?php echo $i ?></p>
            <img class="otherimages" src="images/avatar.jpg" alt="" srcset="">
            <p><?php echo $rows['uname'] ?></p>
            <p><?php echo $rows['score'] ?></p>
         </div>
         <?php 
     }
         ?>
         <!-- <div class="otherplayer">
            <p>#5</p>
            <img class="otherimages" src="images/avatar.jpg" alt="" srcset="">
            <p>PLAYER</p>
            <p>150 POINTS</p>
         </div>
         <div class="otherplayer">
            <p>#6</p>
            <img class="otherimages" src="images/avatar.jpg" alt="" srcset="">
            <p>PLAYER</p>
            <p>120 POINTS</p>
         </div>
         <div class="otherplayer">
            <p>#7</p>
            <img class="otherimages" src="images/avatar.jpg" alt="" srcset="">
            <p>PLAYER</p>
            <p>100 POINTS</p>
         </div>
         <div class="otherplayer">
            <p>#8</p>
            <img class="otherimages" src="images/avatar.jpg" alt="" srcset="">
            <p>PLAYER</p>
            <p>80 POINTS</p>
         </div>
         <div class="otherplayer">
            <p>#9</p>
            <img class="otherimages" src="images/avatar.jpg" alt="" srcset="">
            <p>PLAYER</p>
            <p>75 POINTS</p>
         </div>
         <div class="otherplayer">
            <p>#10</p>
            <img class="otherimages" src="images/avatar.jpg" alt="" srcset="">
            <p>PLAYER</p>
            <p>70 POINTS</p>
         </div> -->

     </div>

     
    </section>
    <div>
     <button class="first" type="button" class="btn btn-success">First</button>
     <button class="second" type="button" class="btn btn-primary">Second</button>
     <button class="third" type="button" class="btn btn-primary">Third</button>
     </div>
   <!-- <script>
      function prize_1(){
         
      }
   </script>
     -->
</body>
</html>