<?php
session_start();

$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }

mysqli_select_db($con,"cinepluz");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Barlow+Semi+Condensed:wght@300;400&family=Berkshire+Swash&family=Sofia&family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
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

<?php
    $name=$_SESSION['name'];
    $mail=$_SESSION['mail'];
    $q1="Select score from rank where mailid='$mail'";
    $query1=mysqli_query($con,$q1);
     $rowsans=mysqli_fetch_array($query1);

    ?>

<div class=profile>
    <div class=prf>
    <img src="images/avatar.jpg" alt="img" srcset="">
    <ul class="list-group">
      <li class="list-group-item">Name: <?php echo $name?></li>
      <li class="list-group-item">Email: <?php echo $mail?></li>
      <li class="list-group-item">Your current score: <?php echo $rowsans['score'] ?></li>
     </ul>
</div>
</div>
  
    
</body>
</html>