var n = 1;
var picNumber = 1;
var cycling = false;
var changingSpeed = 1000;
var size = 0;

function changePic(){
    var button = document.getElementById('StartButton');
    button.disabled = true;
    cycling = true;
    n = 1;
    for(let i = 0; i <=1000; i++){
        setTimeout(function(){
            cycle();
        }, changingSpeed*n);
        n++;
        if(!cycling)
            break;
    }
}

function cycle(){
    pictures = new Array(5);
    pictures[0] = "/WEB lab04/pictures/slide1.png";
    pictures[1] = "/WEB lab04/pictures/slide2.png";
    pictures[2] = "/WEB lab04/pictures/slide3.png";
    pictures[3] = "/WEB lab04/pictures/slide4.png";
    pictures[4] = "/WEB lab04/pictures/slide5.png";
    let image = document.getElementById('pictures');
    switch(picNumber){
        case 1:
            image.src = pictures[0];
            picNumber++;
            break;
        case 2: 
            image.src = pictures[1];
            picNumber++;
            break;
        case 3:
            image.src = pictures[2];
            picNumber++;
            break;
        case 4:
            image.src = pictures[3];
            picNumber++;
            break;
        case 5:
            image.src = pictures[4];
            picNumber = 1;
            break;
    }
}

function stopChange(){
    let button = document.getElementById('StartButton');
    button.disabled = false;
    cycling = false;
    var highestTimeoutId = setTimeout(";");
    for (var i = 0 ; i < highestTimeoutId ; i++) {
        clearTimeout(i); 
    }
}

function loaded(){
    let button = document.getElementById('StartButton');
    button.disabled = false;
}

function changeSpeed(){
    if(cycling){
        stopChange();
        changingSpeed = 1000 * document.form1.Speed.value;
        changePic();
    }
    else{
        changingSpeed = document.form1.Speed.value;
    }
}

function sizePlus(){
    let buttonPlus = document.getElementById('Plus');
    let buttonMinus = document.getElementById('Minus');
    let image = document.getElementById('pictures');
    switch (size){
        case -1:
            image.style.width = '400px';
            image.style.height = '550px';
            buttonMinus.disabled = false;
            size++;
            break;
        case 0:
            image.style.width = '500px';
            image.style.height = '700px';
            buttonPlus.disabled = true;
            size++;
            break;
    }
}

function sizeMinus(){
    let buttonMinus = document.getElementById('Minus');
    let buttonPlus = document.getElementById('Plus');
    let image = document.getElementById('pictures');
    switch (size){
        case 0:
            image.style.width = '300px';
            image.style.height = '400px';
            buttonMinus.disabled = true;
            size--;
            break;
        case 1:
            image.style.width = '400px';
            image.style.height = '550px';
            buttonPlus.disabled = false;
            size--;
            break;
    }
}