<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='ShoppingCart/shoppingCart.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/main.css'>

</head>
<body>
    <header id="nav">
        <div class="nav--list">
             <a href="testpage.php">
                 <h3 id="logo">
                     <img src="/images/logo.png" alt="Site Logo">
                     <span>STREA.ME</span>
                 </h3>
             </a>
        </div>
 
         <div id="nav__links">
             <a class="nav__link" href="lobby.html">
                 Lobby
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ede0e0" viewBox="0 0 24 24"><path d="M20 7.093v-5.093h-3v2.093l3 3zm4 5.907l-12-12-12 12h3v10h7v-5h4v5h7v-10h3zm-5 8h-3v-5h-8v5h-3v-10.26l7-6.912 7 6.99v10.182z"/></svg>
             </a>
             <!-- <a class="nav__link" id="create__room__btn" href="lobby.html">
                 Create Room
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ede0e0" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg>
             </a> -->
         </div>
     </header>

     <div class="shoppingCart__header">
        <p><a href="account.php">ACCOUNT</a> </p>  <p  id="cart">Shopping Cart</a> </p>
     </div>
     <div class="shoppingCart__tabs">
        <ul>
            <li><a class="active" id="tab1">STORE</a></li>
            <li><a id="tab2">CART</a></li>
        </ul>
     </div>
     <div class="line"></div>

    <div class="store">
        <div class="row">
            <div class="column"><p>STREA.ME PRO</p> </div>
            <div class="column">
                <p id="detail">PRO membership for $9.99 per month, which allows users ad-free viewing of STREA.ME content and other enhanced features.</p> 
            </div>
            <div class="column" id="column3">
                <div class="dropDownMenu">
                    <button class="dropDownBtn">Select Subscription</button>
                    <div class="dropDownContent">
                        <p class="item1">1 Month - $9.99</p>
                        <p class="item2">3 Months - $24.99</p>
                        <p class="item3">6 Months - $49.99</p>
                        <p class="item4">12 Months - $89.99</p>
                    </div>
                </div>
                <div>
                    
                </div>    
            </div>
            <div>
                <button class="addToCart">
                    Add To Cart
                </button> 
            </div>
        </div>

        <div class="row">
            <div class="column"><p>ME.Coins </p><img src="images/imageedit_2_2085370152.png" alt="ME.Coin" id="meCoin"> </div>
            <div class="column">
                <p id="detail">ME.Coins are virtual products that subscribers can buy and use to support their preferred STREA.MErs</p> 
            </div>
            <div class="column" id="column3">
                <div class="dropDownMenu">
                    <button class="dropDownBtn">Purchase Coins</button>
                    <div class="dropDownContent2">
                        <p class="item5">10 ME.Coins - $8.99</p>
                        <p class="item6">25 ME.Coins - $19.99</p>
                        <p class="item7">50 ME.Coins - $35.99</p>
                        <p class="item8">100 ME.Coins - $69.99</p>
                    </div>
                </div>
                <div>
                    
                </div>    
            </div>
            <div>
                <button class="addToCart">
                    Add To Cart
                </button> 
            </div>
        </div>
        </div>
    </div>

    <div class="cart">
    </div>

    <div class="acc__info">
        <div class="row">
            <div class="column"><p>Account ID</p> </div>
            <div class="column"><p>00015132</p> </div>
        </div>
        <div class="row">
            <div class="column"><p>Email</p> </div>
            <div class="column"><p>email@domain.ca</p> </div>
        </div>
        <div class="row">
            <div class="column"><p>Account</br>created on</p> </div>
            <div class="column"><p>01/24/2023</p> </div>
        </div>
    </div>

    <div class="pro__acc">
        <div class="row">
            <div class="column"><p>Pro Status</p> </div>
            <div class="column"><p>PRO</p> </div>
        </div>
        <div class="row">
            <div class="column"><p>Pro ID</p> </div>
            <div class="column"><p>PA0015232</p> </div>
        </div>
        <div class="row">
            <div class="column"><p>Activation Date</p> </div>
            <div class="column"><p>01/25/2023</p> </div>
        </div>
        <div class="row">
            <div class="column"><p>Next Payment</p> </div>
            <div class="column"><p>02/25/2023</p> </div>
        </div>

    </div>

</body>
<script src="ShoppingCart/shoppingCart.js"></script>
</html>

