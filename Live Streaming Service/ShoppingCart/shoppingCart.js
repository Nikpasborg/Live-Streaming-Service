let tab1 = document.getElementById("tab1");
let tab2 = document.getElementById("tab2");
let temp = ""
let elementIsClicked = false;

let item1 = document.getElementsByClassName("item1")[0];
let item2 = document.getElementsByClassName("item2")[0];
let item3 = document.getElementsByClassName("item3")[0];
let item4 = document.getElementsByClassName("item4")[0];

let item5 = document.getElementsByClassName("item5")[0];
let item6 = document.getElementsByClassName("item6")[0];
let item7 = document.getElementsByClassName("item7")[0];
let item8 = document.getElementsByClassName("item8")[0];

let dropDownBtn = document.getElementsByClassName("dropDownBtn")[0]
let dropDownBtn2 = document.getElementsByClassName("dropDownBtn")[1]

let addCart = document.getElementsByClassName("addToCart")[0]
let addCart2 = document.getElementsByClassName("addToCart")[1]

let cart = document.getElementsByClassName("cart")[0]

// for (let i = 0; items.length > i; i++){
//     items[i].addEventListener('click', itemClicked());

//     if (elementIsClicked == true){
//         dropDownBtn.innerHTML = temp;
//     }
// }

item1.addEventListener('click', item1Clicked)
item2.addEventListener('click', item2Clicked)
item3.addEventListener('click', item3Clicked)
item4.addEventListener('click', item4Clicked)

item5.addEventListener('click', item5Clicked)
item6.addEventListener('click', item6Clicked)
item7.addEventListener('click', item7Clicked)
item8.addEventListener('click', item8Clicked)

addCart.addEventListener('click', addToCart1)
addCart2.addEventListener('click', addToCart2)


function updateDropDownBtn() {
    let temp = this.innerHTML;
    dropDownBtn.innerHTML = temp;
}

function item1Clicked() {
    dropDownBtn.innerHTML = item1.innerHTML;
}

function item2Clicked() {
    dropDownBtn.innerHTML = item2.innerHTML;
}

function item3Clicked() {
    dropDownBtn.innerHTML = item3.innerHTML;
}

function item4Clicked() {
    dropDownBtn.innerHTML = item4.innerHTML;
}

function item5Clicked() {
    dropDownBtn2.innerHTML = item5.innerHTML;
}

function item6Clicked() {
    dropDownBtn2.innerHTML = item6.innerHTML;
}

function item7Clicked() {
    dropDownBtn2.innerHTML = item7.innerHTML;
}

function item8Clicked() {
    dropDownBtn2.innerHTML = item8.innerHTML;
}

function addToCart1() { 
    dropDownBtn.innerHTML = "Select Subscription"
    var originalContent = "Add To Cart"
    addCart.innerHTML = "Added!"
    addCart.style.backgroundColor = "lightgreen"
    setTimeout(function(){
        addCart.innerHTML = originalContent
        addCart.style.backgroundColor = "white"
        addCart.style.transition = 0.5
        

    }, 2500)

    let cartItem = `<div class="cartItem">
                        <div class="row">
                            <div class="column">
                                Cart Item
                            </div>
                            <div class="column">
                                Price
                            </div>
                        </div>
                    </div>`
    cart.insertAdjacentElement('beforeend', cartItem)
}

function addToCart2() { 
    dropDownBtn2.innerHTML = "Purchase Coins"
    var originalContent = "Add To Cart"
    addCart2.innerHTML = "Added!"
    addCart2.style.backgroundColor = "lightgreen"
    setTimeout(function(){
        addCart2.innerHTML = originalContent
        addCart2.style.backgroundColor = "white"
        addCart.style.transition = 0.5
    }, 2500)
}


function isActive(){
    tab1.style.backgroundColor = "#1a1a1a";
    tab2.style.backgroundColor = "#1a1a1a";

    this.style.backgroundColor = "#ffffff13";
}

function showStoreTab(){
    persTab.style.display = "block";
    accTab.style.display = "none";
    proTab.style.display = "none";
}

function showCartTab(){
    persTab.style.display = "none";
    accTab.style.display = "block";
    proTab.style.display = "none";
}


tab1.addEventListener("click", isActive);
tab1.addEventListener("click", showStoreTab);

tab2.addEventListener("click", isActive);
tab2.addEventListener("click", showCartTab);

