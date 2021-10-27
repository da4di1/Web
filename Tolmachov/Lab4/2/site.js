"use strict";


function randomNumber(min, max){
    const r = Math.random()*(max-min) + min
    return Math.floor(r)
}

function minArr(arr){
    let min = arr[0];
    for (let i = 1; i < arr.length; i++){
        if (arr[i] < min) min = arr[i];
    }
    return min;
}

function createRandomArr(arrLength){
    let arr = new Array(arrLength);
    for (let i = 0; i < arrLength; i++){
        arr[i] = randomNumber(0, 20);
    } 
    return arr;
}

function selectionSort(inputArr) { 
    let n = inputArr.length;
        
    for(let i = 0; i < n; i++) {
        let max = i;
        for(let j = i; j < n; j++) {
            if(inputArr[j] > inputArr[max]) {
                max=j; 
            }
         }
         if (max != i) {
             let tmp = inputArr[i]; 
             inputArr[i] = inputArr[max];
             inputArr[max] = tmp;      
        }
    }
    return inputArr;
}


const arrLength = prompt("Введіть довжину масиву");
if ((arrLength > 0) && (arrLength % 1 == 0)){
    let arr = createRandomArr(arrLength);
    document.write("Початковий масив: " + arr + "<br>");
    let minElement = minArr(arr);
    document.write("min = " + minElement + "<br>");
    arr.splice(arr.indexOf(minElement), 1);
    arr.unshift(minElement);
    document.write("Масив з мінімальним елементом на початку: " + arr + "<br>");
    arr = selectionSort(arr);
    document.write("Відсортований масив: " + arr);
}
else{
    alert("Вказане число не відповідає формату.");
}

