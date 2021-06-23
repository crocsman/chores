
//date highlight management
currentTime = new Date();
var date = (currentTime.getDate()-1);

var idDay = document.getElementById("days");
var days = idDay.getElementsByTagName("li");

//use js time library to determine day to highlight current day
days[date].style.backgroundColor="yellow";
 
//month name management
let monthArr = ["January","February","March","April","May","June","July","August","September","October","November","December"]
let monthNum = currentTime.getMonth();


var idMonth = document.getElementById("month");
// html node ? https://stackoverflow.com/questions/43221594/change-a-href-innerhtml-without-id
var month = idMonth.getElementsByTagName("p")[0].innerHTML = monthArr[monthNum];
   
