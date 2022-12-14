
     <?php
      // session_start();
  //     if(isset($_SESSION["quizcat"]))
	// {
	// 	session_destroy();
	// }
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Barlow+Semi+Condensed:wght@500&family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sofia&family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/quiz.css"> 
    <title>Quiz</title>
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
      <div class="container-fluid quiz_type-1">
      <div class="boxwood" id="bolly">
        <p class="type_head">Bollywood Movies</p>
        <img class="type_image"  src="https://pinkroom-main.s3.amazonaws.com/Copy-of-800-x-500-Blog-Post-13-5.png" alt="" srcset="">
      </div>

      <div class="template_head">
        <button type="button" class="btn btn-lg"  id="btn-bolly" onclick="template(this)">Click Here</button>
      </div>
    
    
    <div class="templates" style="display:none;">
       <li class="quiz_list ql-1" ><a id="Bahubali" href="intermediate.php?quizcat=Bahubali"> Bahubali</a></li>
       <li class="quiz_list ql-1" ><a id="3idiots" href="intermediate.php?quizcat=3idiots">3 idiots</a></li>
       <!-- <li class="quiz_list ql-1" ><a id="">Level-3<</a></li> -->
       
       
    </div>
  </div>

      <div class="container-fluid quiz_type-2">
        <div class="template_head">
          <button type="button" class="btn btn-lg" id="btn-holly" onclick="template(this)">Click Here</button>
        </div>
        <div class="templates" style="display:none;">
          <li class="quiz_list ql-2"><a id="Titanic" href="intermediate.php?quizcat=thetitanic"> Titanic</a></li>
          <li class="quiz_list ql-2"><a id="Spiderman" href="intermediate.php?quizcat=spiderman">Spiderman</a></li>
          <!-- <li class="quiz_list ql-2"><a id="" href="intermediate.php?quizcat=moneyheist">Level-3</a></li> -->
          
       </div>
      <div class="boxwood" id="holly">
        <p class="type_head">Hollywood Movies</p>
        <img class="type_image"  src="https://i1.wp.com/www.moviescut.com/wp-content/uploads/2012/12/10-Best-Hollywood-Movie-of-2012.jpg?fit=1024%2C576&ssl=1&resize=1280%2C720" alt="" srcset="">
      </div>  
  </div>
      <div class="container-fluid quiz_type-1">
      <div class="boxwood"id="h-series">
        <p class="type_head">Hindi Series</p>
        <img class="type_image"  src="https://www.koimoi.com/wp-content/new-galleries/2020/03/from-mirzapur-to-sacred-games-7-indian-web-series-that-drove-the-audiences-insane-001.jpg" alt="" srcset="">
      </div>

      <div class="template_head">
        <button type="button" class="btn btn-lg" id="btn-h-series" onclick="template(this)">Click Here</button>
      </div>
    
    
    <div class="templates" style="display:none;">
       <!-- <li class="quiz_list ql-3" id="family-man" href="intermediate.php?quizcat=familyman">Family-man</li> -->
       <li class="quiz_list ql-3"><a id="Sacred Games" href="intermediate.php?quizcat=sacredgames">Sacred Games</a></li>
       <li class="quiz_list ql-3"><a id="Paatallok" href="intermediate.php?quizcat=paatallok">Paatallok</a></li>
      
    </div>
  </div>

      <div class="container-fluid quiz_type-2">
        <div class="template_head">
          <button type="button" class="btn btn-lg" id="btn-e-series" onclick="template(this)">Click Here</button>
        </div>
        <div class="templates" style="display:none;">
          <li class="quiz_list ql-4"><a  id="moneyheist" href="intermediate.php?quizcat=moneyheist"> Money heist</a></li>
          <li class="quiz_list ql-4" ><a  id="strangerthings" href="intermediate.php?quizcat=strangerthings">Stranger Things</a></li>
          <!-- <li class="quiz_list ql-4" ><a  id="friends" href="intermediate.php?quizcat=friends">Level-5</a></li> -->
         
       </div>
      <div class="boxwood" id="e-series">
        <p class="type_head">English Series</p>
        <img class="type_image"  src="https://deasilex.com/wp-content/uploads/2021/03/Best-Web-Series-of-2021-on-Netflix-HBO-Amazon-Prime.jpg" alt="" srcset="">
      </div>
  </div>
  <script src="quizbutton.js"></script>

   <?php
   
  //  $cookie=$_COOKIE['category'];
  //  echo "$cookie";
  //  $_SESSION["quizcat"]=$cookie;
?>
  
   
  
</body>

</html>