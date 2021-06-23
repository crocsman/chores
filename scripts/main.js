
var currentDay = new Date();

//loop thru ul https://www.sitepoint.com/community/t/looping-through-li-elements-in-ul/6049/2
var day = document.getElementByClass("days");
var days = day.getElementsByTagName("li");
    //use js time library to determine day to highlight current day
    for (var i = 0; i < days.length; i++)
    {
        if(currentDay.getDate() == currentDay)
        {
            days[i].style.backgroundColor="yellow";
        }
    }   