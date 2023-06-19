const days = ["Sunday","Monday","Tuesday","Wednesday",
	      "Thursday","Friday","Saturday"];

setInterval(showTime, 1000);
function showTime() {
    let time = new Date();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
    am_pm = "AM";
    
    hour = hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;
    
    let currentTime = hour + ":"
	+ min + ":" + sec;
    
    document.getElementById("clock").innerHTML = currentTime;
}
showTime();

setInterval(refreshUTC, 1000);
function refreshUTC() {
    var utcDisplay = document.getElementById("UTC");
    utcDisplay.innerHTML = new Date().toUTCString();
}
refreshUTC();
function getWeekday(date) {
    const d = new Date(date);
    return( days[d.getDay()] );
}
function setWeekday(elemid) {
    var displayElem = document.getElementById(elemid);
    displayElem.innerHTML = getWeekday(new Date());
}
function refreshDayOfWeek() {
    setWeekday('dow');
}
refreshDayOfWeek();
/* 
getDayName();
const d = new Date();
let day = days[d.getDay()];
document.getElementById("demo").innerHTML = day;
*/
setInterval(showTime, 1000);
function showTime() {
    let time = new Date();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
    am_pm = "AM";
    
    hour = hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;
    
    let currentTime = hour + ":"
	+ min + ":" + sec;
    
    document.getElementById("clock").innerHTML = currentTime;
}
showTime();

setInterval(refreshUTC, 1000);
function refreshUTC() {
    var utcDisplay = document.getElementById("UTC");
    utcDisplay.innerHTML = new Date().toUTCString();
}
refreshUTC();

setInterval(refreshLocalTime, 1000);
function refreshLocalTime() {
    var timeDisplay = document.getElementById("localtime");
    timeDisplay.innerHTML = new Date().toString();
}
refreshLocalTime();


