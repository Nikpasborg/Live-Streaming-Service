


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel='stylesheet' type='text/css' media='screen' href='projecttest/test.css'>
    <script src="test.js"></script>



</head>

<body>


    <header id="nav">
        <div class="nav--list">

            <h3 id="logo">

                <img src="projecttest/logo.png" alt="Site Logo">

                <span id="logo">STREA.ME</span>


                <button onclick="document.getElementById('id01').style.display='block'" id="rightbuttons" href="">Log In
                    / Sign Up</button>

                <form>
                    <input id="navsearch" type="text" placeholder=" Search...                          ⌕ ">

                </form>
                </a>
        </div>


        <div id="id01" class="modal">
            


            <form class="modal-content animate" action="/STREA.ME/authentication.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                        title="Close Modal">&times;</span>
                </div>


               
           
                <div class="container">
                    
                    <form name="f1" action = "/STREA.ME/authentication.php" onsubmit = "return validation()" method = "POST">

                    <label for="uname"><b>Username</b></label>
                    <input id="user" type="text" placeholder="Enter Username" name="user" required>

                    <label for="psw"><b>Password</b></label>
                    <input id="pass" type="password" placeholder="Enter Password" name="pass" required>

                    <button type="submit">Login</button>

                    <label for="signupbutton">No account?
                        <a id="signup" href="/STREA.ME/testpagesignup.php" type="submit"> Sign Up!</a>
                    </label>



                </form>




                </div>
        </div>
    </header>

 <div class="center">

     <div id="streambox">
        <iframe width="600" height="415" src="https://www.youtube.com/embed/CHdWBuffCDM" title="YouTube video player"
            frameborder=""
            allow="accelerometer; autoplay: clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

            
            <div id="streamboxtext">
                <div class="displaypic">
                    <span id="streamername">veryNiceBoy</span>
                <span id="streamtext">Streaming Youtube</span>
                <span id="viewerstext">95k viewers</span> 
        
            </div>
             
    

            </div>

            <div class="displaypic">

            </div>




        </div>
    </div>
</div>






    <div id="categoriesbox">
        <button id="categories" type="submit">Games &#9876;</button>
        <button id="categories" type="submit">IRL &#9787;</button>
        <button id="categories" type="submit">Creative &#9835;</button>
    </div>

    <div class="gamerow">
        <div class="column">
          <img src="projecttest/justchatting.png" alt="justchatting" style="width:100%">
       <p>Just Chatting</p>
       <span id="viewers">104k viewers</span>
        </div>

        <div class="column">
          <img src="projecttest/valorant.jpeg" alt="Forest" style="width:100%">
          <p>Valorant</p>
          <span id="viewers">140k viewers</span>
        </div>

        <div class="column">
          <img src="projecttest/LOL.webp" alt="Mountains" style="width:100%">
          <p>League of legends</p>
          <span id="viewers">348k viewers</span>
        </div>

        <div class="column">
            <img src="projecttest/deadspace.jpeg" alt="Mountains" style="width:100%">
            <p>Deadspace</p>
            <span id="viewers">95k viewers</span>
          </div>

          <div class="column">
            <img src="projecttest/minecraft.jpeg" alt="Mountains" style="width:100%">
            <p>Minecraft</p>
            <span id="viewers">105k viewers</span>
          </div>

          <div class="column">
            <img src="projecttest/Escape-from-Tarkov-header.jpg" alt="Mountains" style="width:100%">
            <p>Escape from Tarkov </p>
            <span id="viewers">58k viewers</span>
          </div>

      </div>


</body>

</html>