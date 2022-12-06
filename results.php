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

        echo "Out of 10, you have selected  ".$count."options";
        $result=0;
        $i=0;
        $k=1;
        $selected[$i++] =$_POST['quizcheck'];
        print_r($selected);

        $q="select * from strangerthings_qns";
        $query=mysqli_query($con,$q);

        while( $rows=mysqli_fetch_array($query)){
            print_r($rows['ans_id']);
            echo " ";

            $checked= $rows['ans_id']== $selected[$k];
            if($checked){
                $result++;
            }
            $k++;
            
        }
        ?>
          <br>
        <?php
        echo "$result";
    }
}
else{
    echo "not connected";
}
?>