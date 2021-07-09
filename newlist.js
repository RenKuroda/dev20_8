var height = document.getElementById('height-input'); 
var weight = document.getElementById('weight-input'); 
var eight = document.getElementById('takasa-input'); 
var Bunrui = document.getElementById('Bunrui'); 
var check = document.getElementById('check'); 
var button = document.getElementById('button-submit'); 
var output = document.getElementById('bmi-output'); 


var calcBmi = function () {
  var h_value = height.value;
  var w_value = weight.value;
  var e_value = eight.value;

  var kousuu = h_value / w_value;
  var takasa = e_value / w_value;

  output.innerHTML = '1階あたり' + takasa +'m2で、高さは' + takasa +'mです';
}
button.addEventListener('click', calcBmi);




function rsp(playerSelect) {
    let result;
    let playerSelectHand;
    let comSelectHand;
    let resultString;
    let random = Math.random();
    let comSelect = Math.floor(random * 3);
    console.log(comSelect);
    console.log(playerSelect);
    var height = document.getElementById('height-input'); 
    var h_value = height.value;

// もしクリックしたのがゼロなら
        if (playerSelect == 0) {
                result = 15;
            } else if (playerSelect == 1) {
                result = 25;
            } else {
                result = 5;
            }
    console.log(result);

    if (playerSelect == 0) {
        playerSelectHand = '住宅';
    } else if (playerSelect == 1) {
        playerSelectHand = '共同住宅';
    } else {
        playerSelectHand = '店舗';
    }

    if (comSelect == 0) {
        comSelectHand = '雨なので気をつけて';
    } else if (comSelect == 1) {
        comSelectHand = '天気がいいので水分補給をこまめに';
    } else {
        comSelectHand = '風が強いので気をつけて';
    }

    if (result == 15) {
        resultString = 15;
    } else if (result == 25) {
        resultString = 25;
    } else {
        resultString = 5;
    }

    document.getElementById('player').innerHTML = '・使用用途は 『' + playerSelectHand + '』';
    document.getElementById('resultMsg').innerHTML = '・工事日数は 『' + h_value/resultString + '』';
    document.getElementById('computer').innerHTML = '　※' + comSelectHand ;
}
