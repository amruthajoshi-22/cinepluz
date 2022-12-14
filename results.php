<?php
session_start();
$quizcat=$_SESSION['quizcat'];
$tempcat=$quizcat."_qns";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <title>result</title>
    <style>
    .result{
        width:50rem;
        height:30rem;
        background-color:white;
        color:black;
        margin:auto;
        border-radius:8px;
        box-shadow:8px 8px 8px #e095d988;

    }

    .score{
        width:40rem;
        font-size:60px;
        font-family:Roboto Slab;
        font-style:italic;
        margin:11rem 5rem 5rem 5rem;
        padding-top:8rem;
        padding-left:4rem;
    }
    .rank-button{
        margin:5rem 5rem 5rem 7rem;
        height:3.5rem;
        width:15rem;
        border-radius:4px;
        background-color:hotpink;
        color:black;
        font-size:1.5rem;
    }
    </style>
</head>
<body style="background-image: linear-gradient(to right,rgb(113, 11, 239),rgb(187, 36, 126));">
    


<?php
// session_start();

$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }

mysqli_select_db($con,"cinepluz");

if(isset($_POST['quizsubmit'])){
    
    if(!empty($_POST['quizcheck'])){
        $attempt=count($_POST['quizcheck']); 
        if($attempt < 10) {
        ?>
            <script> alert("You Didn't attempt all questions. Score will be 0")</script>
        <?php
        }
        $result=0;
        $k=0;
         $selected =$_POST['quizcheck'];
         //print_r($selected);
        $sel=array_values($selected);
        $q="select * from $tempcat";
        $query=mysqli_query($con,$q);
       while( $rows=mysqli_fetch_array($query)){
         if(array_key_exists($k,$sel)) {
            $checked= $rows['aid']== $sel[$k];
                if($checked){
                    $result++;
                }
            }
            $k++;
        }
        if($attempt < 10) {
            $result = 0;
        } 
        $mail=$_SESSION['mail'];
         $name=$_SESSION['name'];
        $q2="SELECT * from rank where mailid='$mail'";
        $query2=mysqli_query($con,$q2);
        $rows=mysqli_fetch_assoc($query2);

        if((mysqli_num_rows($query2))!=0) {
        
            $fresult=$rows['score']+$result;
            $query= "UPDATE rank set score=$fresult where mailid='$mail'";
            $query3=mysqli_query($con,$query);
            
        }
        else
        {
            
            $q3="INSERT INTO rank (`uname`, `mailid`, `score`) VALUES ('$name', '$mail', '$result')";
            $query3=mysqli_query($con,$q3);
        }
         
        ?>
        <div class="result">
            <div class="score">
         <div>Total Questions:</span> <span>10</span>
         <!-- <span>Attempted questions:</span> <span><?php echo $attempt ?></span> -->
         <div> Your score:<?php echo $result ?> </div>
         <button type="button" class="btn btn-primary btn-lg rank-button" onclick="window.location.href='rank.php' ">Know Your Rank</button>

           </div>
        </div>
        <a href="rank.php">
        
<?php
    }
}
else{
    echo "not connected";
}
?>


</body>
</html>