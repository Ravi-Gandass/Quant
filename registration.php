<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="regStyle.css" />
</head>
<body>
    <?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // Removes backslashes
        $username = stripslashes($_REQUEST['username']);
        // Escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $trn_date = date("Y-m-d H:i:s");

        // Generate OTP
        $otp = mt_rand(100000, 999999);

        // Store registration details in the database along with OTP
        $query = "INSERT into `customer` (username, password, email, trn_date, otp)
                  VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date', '$otp')";
        $result = mysqli_query($con, $query);

        if ($result) {
            // Send OTP to user's email
            $to = $email;
            $subject = "OTP Verification";
            $message = "Your OTP is: $otp";
            $headers = "From: ravigandass10434@gmail.com";
            mail($to, $subject, $message, $headers);

            echo "<div class='form'>
                  <h3>OTP sent to your email. Please enter the OTP to complete the registration.</h3>
                  <br/>
                  <form name='otp_verification' action='' method='post'>
                    <input type='hidden' name='username' value='$username' />
                    <input type='hidden' name='email' value='$email' />
                    <input type='hidden' name='password' value='$password' />
                    <input type='text' name='otp' placeholder='OTP' required />
                    <input type='submit' name='submit_otp' value='Verify OTP' />
                  </form>
                  </div>";
        }
    } elseif (isset($_REQUEST['submit_otp'])) {
        // OTP verification after form submission
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $otp = $_REQUEST['otp'];

        // Check if the entered OTP matches the stored OTP
        $query = "SELECT * FROM `customer` WHERE username='$username' AND email='$email' AND otp='$otp'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            // OTP matched, proceed with registration
            $query = "UPDATE `customer` SET otp_verified=1 WHERE username='$username' AND email='$email'";
            $result = mysqli_query($con, $query);

            if ($result) {
                echo "<div class='form'>
                      <h3>Registration successful. You can now <a href='login.php'>Login</a>.</h3>
                      </div>";
            } else {
                echo "<div class='form'>
                      <h3>Error occurred. Please try again.</h3>
                      </div>";
            }
        } else {
            echo "<div class='form'>
                  <h3>Invalid OTP. Please try again.</h3>
                  <br/>
                  <form name='otp_verification' action='' method='post'>
                    <input type='hidden' name='username' value='$username' />
                    <input type='hidden' name='email' value='$email' />
                    <input type='hidden' name='password' value='$password' />
                    <input type='text' name='otp' placeholder='OTP' required />
                    <input type='submit' name='submit_otp' value='Verify OTP' />
                  </form>
                  </div>";
        }
    } else {
        // Display the registration form
        echo "<div class='form'>
              <h1>Registration</h1>
              <form name='registration' action='' method='post'>
                <input type='text' name='username' placeholder='Username' required />
                <input type='email' name='email' placeholder='Email' required />
                <input type='password' name='password' placeholder='Password' required />
                <input type='submit' name='submit' value='Register' />
              </form>
              </div>";
    }
    ?>
</body>
</html>
