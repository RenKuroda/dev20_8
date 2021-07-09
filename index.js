var button = document.querySelector('.button')
var inputValue = document.querySelector('.inputValue')
var name = document.querySelector('.name')
var desc = document.querySelector('.desc')
var temp = document.querySelector('.temp')

button.addEventListener('click',function(){

fetch('https://api.openweathermap.org/data/2.5/weather?q='+inputValue.value+'')
 .then(response => response.json())
 .then(date => {
     var nameValue = date['name'];
     var tempValue = date['main']['temp'];
     var descValue = date['weather'][0]['description'];

  

     name.innerHTML =nameValue;
     temp.innerHTML =( Math.round(tempValue-273.15));
     desc.innerHTML =descValue;
 })
 .catch(err => alert("wrong city name!"))
})