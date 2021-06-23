
currentDay = new Date();
var date = (currentDay.getDate()-1);

//loop thru ul https://www.sitepoint.com/community/t/looping-through-li-elements-in-ul/6049/2
var pDays = document.getElementById("days");
var days = pDays.getElementsByTagName("li");
    //use js time library to determine day to highlight current day
days[date].style.backgroundColor="yellow";
    