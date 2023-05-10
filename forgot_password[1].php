<!DOCTYPE html>
<html lang="en">
<head>
    <title>CAR RENTAL - Forgot Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    
    
    require('connection.php');

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        
        if(empty($email))
        {
            $error = 'Please enter your email';
        }
        else
        {
            $stmt = $con->prepare("SELECT * FROM users WHERE email=?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows == 1)
            {
                $row = $result->fetch_assoc();
                $password = substr(md5(rand()), 0, 8);
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $update_query = "UPDATE users SET password='$hashed_password' WHERE email='$email'";
                mysqli_query($con, $update_query);
                
                // Send email using mail() function
                $to = $email;
                $subject = 'Password Reset';
                $message = 'Your new password is: ' . $password;
                $headers = 'From: josamprince7@gmail.com' . "\r\n" .
                           'Reply-To: josamprince7@gmail.com' . "\r\n" .
                           'X-Mailer: PHP/' . phpversion();
                           ini_set('SMTP', 'josamprince7@gmail.com');
    ini_set('smtp_port', 25);
                if (mail($to, $subject, $message, $headers)) {
                    $success = 'Your new password has been sent to your email';
                } else {
                    $error = 'Error sending email';
                }
            }
            else
            {
                $error = 'Email not found';
            }
        }
    }
    ?>
    <div class="hai">
        <div class="navbar">
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="aboutus.html">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="contactus.html">CONTACT</a></li>
                    <li><button class="adminbtn"><a href="adminlogin.php">ADMIN LOGIN</a></button></li>
                </ul>
            </div>
        </div>
        <div class="content" style="background-image: url('car-background.jpg');">
            <h1>Forgot Password</h1>
            <div class="form">
                <?php if(isset($error)): ?>
                    <div class="error"><?php echo $error ?></div>
                <?php endif ?>
                <?php if(isset($success)): ?>
                    <div class="success"><?php echo $success ?></div>
                <?php endif ?>
                <form method="POST"> 
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input class="btnn" type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
