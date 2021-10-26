function operateArray() {
    const size = document.form1.Size.value;
    array = new Array(size);
    let printArr = "";
    for (let i = 0; i < size; i++){
      array[i] = Math.round(Math.random() * 10);
      printArr += array[i];
      printArr += " ";
    }
    document.getElementById("OriginalArray").innerHTML = printArr;
    let maxOdd = array[0];
    let minOdd = array[0];
    let maxEven = array[1];
    let minEven = array[1];
    for(let i = 0; i < size; i+=2){
      if(maxOdd < array[i]){
        maxOdd = array[i];
      }
      if(minOdd > array[i]){
        minOdd = array[i];
      }
    }
    for(let i = 1; i < size; i+=2){
      if(maxEven < array[i]){
        maxEven = array[i];
      }
      if(minEven > array[i]){
        minEven = array[i];
      }
    }
    let strMaxOdd = "Найбільше число з не парним номером: " + maxOdd;
    let strMinOdd = "Найменше число з не парним номером: " + minOdd;
    let strMaxEven = "Найбільше число з парним номером: " + maxEven;
    let strMinEven = "Найменше число з парним номером: " + minEven;
    document.getElementById("MaxOdd").innerHTML = strMaxOdd;
    document.getElementById("MinOdd").innerHTML = strMinOdd;
    document.getElementById("MaxEven").innerHTML = strMaxEven;
    document.getElementById("MinEven").innerHTML = strMinEven;
    array = selectionSort(array);
    printArr = "";
    for (let i = 0; i < size; i++){
      printArr += array[i];
      printArr += " ";
    }
    document.getElementById("SortedArray").innerHTML = printArr;
}

function selectionSort(mas){
	var n = mas.length;
	for(var i=0;i<n-1;i++){
		var max = i;
		for(var j=i+1;j<n;j++){
			if(mas[j]>mas[max])max=j;
		}
	var t=mas[max];
	mas[max]=mas[i];
	mas[i]=t;
	}
	return mas;
}