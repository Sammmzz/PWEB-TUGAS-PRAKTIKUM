

let backToTop = document.getElementById("toTop");

window.addEventListener("scroll", function(){
    if(scrollY > 500){
        backToTop.style.display = "block";
    }else {
        backToTop.style.display = "none";

    }
});

backToTop.addEventListener("click", function(){
    window.scrollTo ({
        top: 0
    })
})