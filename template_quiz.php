 <?php
 session_start();
$quiz_categary=$_SESSION["quizcat"];

$catqns=$quiz_categary."_qns";
$catans=$quiz_categary."_ans";
require('database.php');
   ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Quiz Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/template_quiz.css?v=<?php echo time(); ?>">
</head>
<body>
    <form action="results.php" method="POST">
<?php




for($i=1;$i<=10;$i++){
$q="select * from $catqns where qid=$i";
$query=mysqli_query($con,$q);
$k=1;
while($rows=mysqli_fetch_assoc($query)){
     $temp=$rows['aid']
   
    
?>

    
 <div class="container-full">
     <div class="ques">
        <div class="circle1">
            <div class="cirq"><h2 style="font-size:5rem;margin-top:0rem;margin-left:3rem;"><?php echo $rows['qid'] ?></h2></div>
        </div>
        <div class="qns"><?php echo $rows['qname'] ?></div>
    </div>
    <div class="mygrid">
    <?php
      $k=1;
    $qa="select * from $catans where ans_id=$temp";
   $queryans=mysqli_query($con,$qa);
   
    while($rowsans=mysqli_fetch_assoc($queryans)){
      
        ?>
      
    <div class="op1">
      <div class="cir1">
        <div class="cir2"><h1 style="margin-left:20px;margin-top:14px;"><?php echo $k++ ?></h1>
    </div>
    </div>
        <div class="options">
        <input  type="radio" name="quizcheck[<?php echo $rowsans['ans_id']?>]" value="<?php  echo $rowsans['aid']?>">
   
      
    <?php echo $rowsans['answer']; ?>
    </div></div>
    <?php
    }
    ?>
    </div></div>
    <?php
}
}
?>
  <div class="button">
        <input class="button1" name="quizsubmit" type="submit" value="SUBMIT">
    
      </div>
     
  
     
    
      </form>  
</body>
</html>