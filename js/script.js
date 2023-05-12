let btnToTop = document.querySelector(".back-to-top");
let header = document.querySelector("header");
let headerAboutMe = document.getElementById("header-aboutme");
let headerAboutMeButton = document.querySelector("#header-aboutme span");
let headerHomeButton = document.querySelector("#header-home span");
let headerContactButton = document.querySelector("#header-contact span");
let iconScrollDown = document.querySelector(".scroll-down");
let feedbackButton = document.getElementById("feedback-button");
let contactForm = document.getElementById("form");
let textArea = document.getElementById("message");
let contactPage = document.querySelector("#contact-categorie");
let aboutmePage = document.querySelector("#aboutme-categorie");

btnToTop.addEventListener("click", function(){
    window.scrollTo({
        top: 0,
        left: 0,
    });
});
headerHomeButton.addEventListener("click", function(){
    window.scrollTo({
        top: 0,
        left: 0,
    });
});
headerAboutMe.addEventListener("click", function(){
    aboutmePage.scrollIntoView();
});
iconScrollDown.addEventListener("click", function(){
    aboutmePage.scrollIntoView();
});
headerContactButton.addEventListener("click", function(){
    contactPage.scrollIntoView();
});
feedbackButton.addEventListener("click", function(){
    contactPage.scrollIntoView();
});
window.addEventListener("scroll", function(){
    if(window.pageYOffset>50){
        btnToTop.style="transform: translateX(0vw);";
    }
    else{
        btnToTop.style="transform: translateX(20vw);";
    }
});
window.addEventListener("scroll", function(){
    if(window.pageYOffset>720){
        headerAboutMeButton.classList.add("actif");
        headerHomeButton.classList.remove("actif");
    }
    else{
        headerAboutMeButton.classList.remove("actif");
        headerHomeButton.classList.add("actif");
    }
});
window.addEventListener("scroll", function(){
    if(window.pageYOffset>2290){
        headerAboutMeButton.classList.remove("actif");
        headerHomeButton.classList.remove("actif");
        headerContactButton.classList.add("actif");
    }
    else{
        headerContactButton.classList.remove("actif");
    }
});
window.addEventListener("scroll", function(){
    if(window.pageYOffset>300){
        iconScrollDown.style="opacity:0;";
    }
    else{
        iconScrollDown.style="opacity:1;";
    }
});
