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
      if(total <= 4){
        res += "Normal range or full remission. The score suggests the patient may not need depression treatment"+ "<br>" 
      }else if(total > 4 && total <= 9){
        res += "Mild depression. The score suggests the patient may need mild depression treatment"+ "<br>"
      }else if(total > 9 && total <= 14){
        res += "Moderate depression. The score suggests the patient may need moderate depression treatment"+ "<br>"
      }else if(total > 14 && total <= 19){
        res += "Severe depression. The score suggests the patient may need severe depression treatment"+ "<br>"
      }else if(total > 19 ){
        res += "Extreme depression. The score suggests the patient may need extreme depression treatment"+ "<br>"
      }
      res += "Total: " + total + "<br>"
      res += "Percentage: " + ((total / (totalNumQuestions * 4)) * 100).toFixed(2) + "%"
      
      document.getElementById("result").innerHTML = res
  }

  }