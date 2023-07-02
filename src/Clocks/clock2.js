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
/*
 */
function getWeekday(date) {
    const d = new Date(date);
    return( days[d.getDay()] );
}

