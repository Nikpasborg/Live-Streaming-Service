<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='styles/testsignup.css'>
    <title>Document</title>
</head>

<body>

    <header id="nav">
        <div class="nav--list">

            <h3 id="logo">

                <img src="./images/logo.png" alt="Site Logo">

                <a href="testpage.php" id="logo">STREA.ME</a>
            </h3>
        </div>
    </header>

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
            
        <form class="modal-content" action="" method="post">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="pass-repeat" required>

                <label for="dob"><b>Date of Birth</b></label>
                <input type="date" placeholder="Repeat Password" name="dob" required>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>


    <?php
    require('connection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['user'])) {
        // removes backslashes
        $user_Name = stripslashes($_REQUEST['user']);
        //escapes special characters in a string
        $user_Name = mysqli_real_escape_string($con, $user_Name);

        $user_Email    = stripslashes($_REQUEST['email']);
        $user_Email   = mysqli_real_escape_string($con, $user_Email);

        $user_Pass = stripslashes($_REQUEST['pass']);
        $user_Pass = mysqli_real_escape_string($con, $user_Pass);
        
        $birth_date = stripslashes($_REQUEST['dob']);
        $birth_date = mysqli_real_escape_string($con, $birth_date);


        $query    = "INSERT into `User` (user_Name, user_Pass, user_Email, birth_date)
                     VALUES ('$user_Name', '" . md5($user_Pass) . "', '$user_Email', '$birth_date')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
?>




</body>

</html>