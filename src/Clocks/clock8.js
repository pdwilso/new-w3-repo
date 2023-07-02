setInterval(showTime, 1000);
function currentTime()
{
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
function currentWeekday()
{
    const days = [ "mon", "tue", "wed", "thu", "fri", "sat", "sun" ];
    const d = new Date(date);
    let day = d.getDay();
    return( days[day] );
}

function currentDate()
{
    const months = [ "january",	"february", "march", "april",
		     "may", "june", "july", "august",
		     "september", "october","november", "december" ];
    const d = new Date;
    let dom = d.getDate();
    dom = dom < 10 ? "0" + dom : dom ;
    let month = months[d.getMonth()].substr(1,3);
    let year  = d.getFullYear();
    return d.getDate();

    return( dom + " " + mon +  " " + year );
}
function showTime() 
{
    const days = [ "mon", "tue", "wed", "thu", "fri", "sat", "sun" ];
    const d = new Date;
    
    document.getElementById("timestr").innerHTML = currentTime();
    document.getElementById("weekday").innerHTML = currentWeekday();
    document.getElementById("datestr").innerHTML = d.toJSON();
    
    /* document.getElementById("demo").innerHTML = curr_dow_str() */
}
showTime();

