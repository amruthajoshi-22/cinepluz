
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
$i=0;
 $con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }

mysqli_select_db($con,"cinepluz");




$q="select * from strangerthings_qns";
$query=mysqli_query($con,$q);
while($rows=mysqli_fetch_array($query)){
    $temp=$rows['ans_id']
   
    
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
    $qa="select * from strangerthings_ans where ans_id=$temp";
   $queryans=mysqli_query($con,$qa);
   $temp2=++$i;
   ?>
   
    <?php
    while($rowsans=mysqli_fetch_array($queryans)){
        
      ?>
    
    <div class="op1">
      <div class="cir1">
        <div class="cir2"><h1 style="margin-left:20px;margin-top:14px;">A</h1>
    </div>
    </div>
        <div class="options">
        <input  type="radio" name="quizcheck[<?php echo $rowsans['ans_id']?>]" value="<?php  echo $rowsans['aid']?>">
   
      
    <?php echo $rowsans['answer']; ?>
    </div>
      
    </div>
    
    <?php
    }
    ?>
    </div>
     
    </div>
    
    <?php
}

?>


    
    <div class="button">
        <input class="button1" name="quizsubmit" type="submit" value="SUBMIT">
    
      </div>
     
  
     
    
      </form>  
</body>
</html>

