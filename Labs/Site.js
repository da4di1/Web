"use strict";


function list(event){
    if(event.target.closest(".courses_button")){
        menu.classList.toggle("_active");
    }
    if(!event.target.closest(".courses_button")){
        menu.classList.remove("_active");
    }
}


const menu = document.querySelector(".courses_list");
document.addEventListener("click", list);
