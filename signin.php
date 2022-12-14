<?php
if(isset($_POST['uname'])){
$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }
 

 mysqli_select_db($con,"cinepluz");

$uname=$_POST['uname'];
$mail=$_POST['mail'];
$pword=$_POST['pword'];
 

 $query1="SELECT email from userdetails WHERE email='$mail' ";
 
 $result=mysqli_query($con,$query1);
 
 
 

if((mysqli_num_rows($result))>0)	{
             ?><div style="color:white;">
        <?php
            echo "This email is already registered!!!";
        ?>
            </div>"
            <?php
            //  header("refresh:0;url=signin.php");

            // echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
            // header("refresh:0;url=signin.php");
        }
else{
    $query1="INSERT INTO userdetails (`name`, `email`, `password`) VALUES ('$uname', '$mail', '$pword');" ;
    if(mysqli_query($con,$query1));
     ?>
        echo ("successfully Registered!!")
        <script> window.location.href="login.php"</script>
         <?php
         

}
mysqli_close($con);


}

?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Signup Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <form class="form" id="login" onsubmit="return validateform()";  action="signin.php" method="POST">
            
        <!-- <form class="form form--hidden" id="createAccount"> -->
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" name="uname" id="usn" class="form__input" autofocus placeholder="Username" required>
                <div class="form__input-error-message" id="usnerror"></div>
            </div>
            <div class="form__input-group">
                <input type="email" name="mail" class="form__input" id="mailid" autofocus placeholder="Email Address" required>
                <div class="form__input-error-message" id="emailerror"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="pword" class="form__input" id="password" autofocus placeholder="Password" required>
                <div class="form__input-error-message" id="perror" > </div>
            </div>
            <div class="form__input-group">
                <input type="password" name="cpword" class="form__input" id="cpassword" autofocus placeholder="Confirm password" required>
                <div class="form__input-error-message" id="cperror" ></div>
            </div>
            <input type="submit" name="sumbmission" class="form__button">
             <p class="form__text">
                <a class="form__link" href="login.php" id="linkLogin">Already have an account? Sign in</a>
            </p> 
        <!-- </form> -->
        </form>
    </div>

    <script>


        function validateform(){
            
            var n=document.getElementById("usn");
            var name=n.value;
            var e=document.getElementById("mailid");
            var mail=e.value;
            var p=document.getElementById("password");
            var password=p.value;
            var c=document.getElementById("cpassword");
            var  cpassword=c.value;

            if(password.length<6){
                
                // alert("password length should be atleast 6" );
                //  document.getElementById("perror").innerHTML="password length should be atleast 6";
                 p.select();
                 p.focus();
                 return false;
                
                
            }
            if(password!=cpassword){
                document.getElementById("cperror").innerHTML="password does not match";
                 c.select();
                 c.focus();
                 return false;
                 
                 
                
            }
            
                return true;
                
        }
            // else if()

            

            


        
    </script>
</body>

