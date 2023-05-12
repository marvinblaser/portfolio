let btnToTop = document.querySelector(".back-to-top");

btnToTop.addEventListener("click", function(){
    window.scrollTo({
        top: 0,
        left: 0,
    });
});
window.addEventListener("scroll", function(){
    if(window.pageYOffset>50){
        btnToTop.style="transform: translateX(0vw);";
    }
    else{
        btnToTop.style="transform: translateX(20vw);";
    }
});
