function displayRadioValue(){
    var ele = document.getElementsByTagName('input');
    let total = 0
    let res = ''
    let totalNumQuestions = 0
    for (i = 0; i < ele.length; i++) {
  
      if (ele[i].type = "radio") {
  
        if (ele[i].checked) {
          totalNumQuestions++
          total += parseFloat(ele[i].value)
  
          //res += ele[i].name + " Value: " + ele[i].value + "<br>";
        }
      }
   }
   displayresults();

function displayresults(){
    if(total <= 10){
      res += "Normal range or full remission. The score suggests the patient may not need depression treatment"+ "<br>" 
    }else if(total > 10 && total <= 16){
      res += "Mild depression. The score suggests the patient may need mild depression treatment"+ "<br>"
    }else if(total > 16 && total <= 20){
      res += "Moderate depression. The score suggests the patient may need moderate depression treatment"+ "<br>"
    }else if(total > 20 && total <= 30){
      res += "Severe depression. The score suggests the patient may need severe depression treatment"+ "<br>"
    }else if(total > 30 && total <= 40){
      res += "Extreme depression. The score suggests the patient may need extreme depression treatment"+ "<br>"
    }else if(total > 40){
      res += "Extreme depression. The score suggests the patient may need extreme depression treatment"+ "<br>"
    }

    res += "Total: " + total + "<br>"
    res += "Percentage: " + ((total / (totalNumQuestions * 4)) * 100).toFixed(2) + "%"
    
    document.getElementById("result").innerHTML = res
}
   

  }