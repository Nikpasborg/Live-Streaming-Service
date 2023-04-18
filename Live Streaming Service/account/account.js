let tab1 = document.getElementById("tab1");
let tab2 = document.getElementById("tab2");
let tab3 = document.getElementById("tab3");

let persTab = document.getElementsByClassName("pers__info")[0];
let accTab = document.getElementsByClassName("acc__info")[0];
let proTab = document.getElementsByClassName("pro__acc")[0];


function isActive(){
    tab1.style.backgroundColor = "#1a1a1a";
    tab2.style.backgroundColor = "#1a1a1a";
    tab3.style.backgroundColor = "#1a1a1a";

    this.style.backgroundColor = "#ffffff13";
}

function showPersTab(){
    // persTab.style.display = "block";
    persTab.style.transform = "translate(0px, 0px)"
    persTab.style.transition = "all 0.4s"

    // accTab.style.display = "none";
    accTab.style.transform = "translate(0px, -2500px)"
    accTab.style.transition = "all 0.4s"

    // proTab.style.display = "none";
    proTab.style.transform = "translate(0px, -2500px)"
    proTab.style.transition = "all 0.4s"
}

function showAccTab(){
    // persTab.style.display = "none";
    persTab.style.transform = "translate(0px, -500px)"
    persTab.style.transition = "all 0.4s"

    // accTab.style.display = "block";
    accTab.style.transform = "translate(0px, -370px)"
    accTab.style.transition = "all 0.4s"

    // proTab.style.display = "none";
    proTab.style.transform = "translate(0px, -2500px)"
    proTab.style.transition = "all 0.4s"
}

function showProTab(){
    // persTab.style.display = "none";
    persTab.style.transform = "translate(0px, -500px)"
    persTab.style.transition = "all 0.4s"

    // accTab.style.display = "none";
    accTab.style.transform = "translate(0px, -2500px)"
    accTab.style.transition = "all 0.4s"

    // proTab.style.display = "block";
    proTab.style.transform = "translate(0px, -690px)"
    proTab.style.transition = "all 0.4s"
}

tab1.addEventListener("click", isActive);
tab1.addEventListener("click", showPersTab);

tab2.addEventListener("click", isActive);
tab2.addEventListener("click", showAccTab);

tab3.addEventListener("click", isActive);
tab3.addEventListener("click", showProTab);
