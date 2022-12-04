<?php
session_start();
echo "hello world";
$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }

mysqli_select_db($con,"cinepluz");

if(isset($_POST['quizsubmit'])){
    
    if(!empty($_POST['quizcheck'])){
        $count=count($_POST['quizcheck']);

        echo "Out of 10, you have selected  ".$count."  options";
        $selected =$_POST['quizcheck'];
        print_r($selected);
    }
}
else{
    echo "not connected";
}
?>