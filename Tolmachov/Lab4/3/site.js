"use strict";


function showTip(event){
    const target = event.target;
    const tipText = target.getAttribute("data-tooltip");
    if(!tipText) return;

    newTip = document.createElement("div");
    newTip.classList.add("tip");
    newTip.innerHTML = tipText;
    document.body.append(newTip);
    
    let coords = target.getBoundingClientRect();
    
    let left = coords.left + (target.offsetWidth - newTip.offsetWidth) / 2;
    if (left < 0) left = 0;
    
    let top = coords.top - newTip.offsetHeight;
    if (top < 0) {
        top = coords.top + target.offsetHeight;
    }
    
    newTip.style.left = left + 'px';
    newTip.style.top = top + 'px';
}


function delTip(event){
    newTip.remove();
}


let newTip;
document.addEventListener("mouseover", showTip);
document.addEventListener("mouseout", delTip);


