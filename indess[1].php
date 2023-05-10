<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link  rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>



<?php
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select *from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }



                



            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }







?>
    <div class="hai">
        <div class="navbar">
            
            <div class="menu">
                <ul>
                    <li><font face="Verdana" size="5"
                              color="black"><a href="#">HOME</a></font></li>
                    <li><font face="Verdana" size="5"
								color="black"><a href="aboutus.html">ABOUT</a></font></li>
                    <li><font face="Verdana" size="5"
								color="black"><a href="#">SERVICES</a></font></li>
                    
                    <li><font face="Verdana" size="5"
								color="black"><a href="contactus.html">CONTACT</a></font></li>
                  <li><font face="Verdana" size="6"
								color="black"> <button class="adminbtn"><a href="adminlogin.php">ADMIN LOGIN</a></button></font></li>
                </ul>
            </div>
            
          
        </div>
        <div class="content" style="background-image: url('car-background.jpg');">
          <font face="Verdana" size="5"
								color="white">
            <h1><font face="Verdana" size="7"
                      color="black">Rent a Car </font><br></b><span>Own the Journey</span></b></h1>
            <p class="par"><b>Live the life of Luxury.<br>
               Drive your dreams with us!<br>Make your trip unforgettable with our rentals.<br>
              Choose us for a seamless rental experience. </b></p>
          </font>
           
            <div class="form">
                <h2>Login Here</h2>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="pass" placeholder="Enter Password Here">
                <input class="btnn" type="submit" value="Login" name="login"></input>
                </form>
                <p class="link">Don't have an account?<br>
                <a href="register.php">Sign up</a> here</a></p>
                <!-- <p class="liw">or<br>Log in with</p>
                <div class="icon">
                    &emsp;&emsp;&emsp;&ensp;<a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon> </a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon> </a>&ensp;
                    <a href="https://myaccount.google.com/"><ion-icon name="logo-google"></ion-icon> </a>&ensp;
                    
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>