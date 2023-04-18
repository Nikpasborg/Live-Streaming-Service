<?php      
        include('connection.php');  
        $user_Name = $_POST['user'];  
        $user_Pass = $_POST['pass'];  
          
            //to prevent from mysqli injection  
            $user_Name = stripcslashes($user_Name);  
            $user_Pass = stripcslashes($user_Pass);  
            $user_Name = mysqli_real_escape_string($con, $user_Name);  
            $user_Pass = mysqli_real_escape_string($con, $user_Pass);  
          
            $sql = "select *from user where user_Name = '$user_Name' and user_Pass = '$user_Pass'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                
                header("Location: /STREA.ME/account.php") ;
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
    ?>  