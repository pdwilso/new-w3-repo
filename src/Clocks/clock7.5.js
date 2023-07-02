function curr_time_str() {
    let time = new Date();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();

    am_pm = "";

    hour = hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;

    return( hour + ":" + min + ":" + sec );
}

function curr_dow_str() /* return current day of week */
{
    const abr = [ "mon", "tue", "wed", "thu", "fri", "sat", "sun" ];
    const d = new Date();
    let dow = d.getDay();

    return(abr[dow]);

}
class Month{
    const d = new Date();
    const months = [ "january",	"february", "march", "april",
		     "may", "june", "july", "august",
		     "september", "october","november", "december" ];
    function nym() {
	return( months[d.getDate()] );
    }
    function num() {
	day = d.getDate();
	return( (day < 10 ? "0" + day : day) );
    }
    function abr() {
	return ( months[d.getDate()].substr(1,3) );
    }
}
function curr_month() {
    return curr_dom_str();
}
function curr_dom_str()
/* return curr day of the month as string of two digits */
{
    const d = new Date();
    let dom = d.getDate();
    return( dom < 10 ? "0" + dom : dom );
}
function curr_date()
/* return current date as a string */
{
    const d = new Date;
    return( d.toString() );

    /*    document.getElementById("demo").innerHTML = day; */
} /* function curr_date_str */

/*
 */
function getWeekday(date) {
    const days = [ "mon", "tue", "wed", "thu", "fri", "sat", "sun" ];
    const d = new Date(date);
    return( days[d.getDay()] );
}
function populate_Elements() {
    document.getElementById("clock").innerHTML = currentTime;
}
function showTime() 
{
    const d = new Date;
    let currentTime = curr_time_str();
    document.getElementById("clock").innerHTML = currentTime;
    document.getElementById("day").innerHTML = currentDay;
    

    /* document.getElementById("demo").innerHTML = curr_dow_str() */
}
showTime();
setInterval(showTime, 1000);
