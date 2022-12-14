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

if(isset($_POST['submit'])) {
    echo "connected successfully";
    echo "Hello world";
    $mail = $_POST['mail'];  
    $pword = $_POST['pword'];  
      
        //to prevent from mysqli injection  
        $mail = stripcslashes($mail); 
        $password = stripcslashes($pword);  
        $username = mysqli_real_escape_string($con, $mail);  
        $password = mysqli_real_escape_string($con, $pword);  
      
        $query3 = "select * from userdetails where email='$mail' and password='$pword'";  
        $result = mysqli_query($con, $query3);
        if((mysqli_num_rows($result))!=1) 
		{
            ?>
            <div style="color:white;">
           <?php echo "Sorry..Wrong email or password!"; ?>
            </div>
			<?php
			//header("refresh:0;url=signin.php");
		}
		else
		{
            ?>
            <div style="color:white;">
           <?php echo "login successfull;"?>
            </div>
            <?php
			 $_SESSION['logged']=$mail;
			 $row=mysqli_fetch_array($result);
			 $_SESSION['name']=$row[0];
			 $_SESSION['mail']=$row[1];
			// $_SESSION['email']=$row[2];
			// $_SESSION['password']=$row[3];
			 header('location:index.html?'); 					
		}

        
    }       
        
?>  

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/formvalidate.js"></script>
</head>
<body>
    <div class="container">
        <form class="form" id="login" action="login.php"  method="POST" >
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="mail" name="mail" autofocus placeholder="email" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus id="pword" name="pword" placeholder="Password" required>
                <div class="form__input-error-message"></div>
            </div>
            <input class="form__button" type="submit" name="submit">
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>

             <p class="form__text">
                <a class="form__link" href="signin.php" id="linkCreateAccount">Don't have an account? Create account</a>
            </p> 
        </form>
       
        </div>
        <!-- <script>
            function loginvalidate(){

                var m=document.getElementById("mail");
                var mailid=m.value;
                var p=document.getElementById("pword");
                var pass=m.value;

            }
        </script> -->

        </body>
        </html>

