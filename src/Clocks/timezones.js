function localTimezone() /* return the local time-zone setting */
{
    // https://www.timetemperature.com/time-zone-maps/world-time-zone-map.shtml
    /*
      0 => {-0, UTC/GMT  }
      1 => {-1, Atlantic }
      2 => {-2,  }
      3 => {-3,  }
      4 => {-4,  }
      5 => {-5, "Eastern" }
      6 => {-6, "Central" }
      7 => {-7, "Mountain"}
      8 => {-8, "Pacific" }
      9 => {-9, "Alaskan", "AKST" }
      10 => {-10, "Hawii-Aleutian", "HST" }
      11 => {-11, "Samoa" }
      12 => {+10, "Chamorro"}

      UTC+10 CHST Chamorro Standard
      UTC-00 GMT
      UTC-01 
      UTC-02
      UTC-03 
      UTC-04 AST  Puerto Rico / Atlantic Standard
      UTC-04 EDT  Eastern Daylight
      UTC-05 EDT  Eastern Standard
      UTC-05 CDT  Central Daylight
      UTC-06 CST  Central Standard
      UTC-06 MDT  Mountain Daylight
      UTC-07 MST  Mountain Standard
      UTC-07 PDT  Pacific Daylight
      UTC-08 AKDT Alaska Daylight
      UTC-09 HADT Aleutian Daylight
      UTC-10 HST  Hawaii Standard
      UTC-11 SST  Samoa Standard

     */
    const zones = [ "UTC", "EST", "CST", "MST", "PST" ]
    const d = new Date();
    let diff = d.getTimezoneOffset();
    /* getTimezoneOffset() returns the timezone offset in minutes */
    diff = diff / 60;
    //    https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_gettimezoneoffset
}
