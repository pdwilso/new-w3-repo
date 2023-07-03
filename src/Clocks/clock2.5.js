const d = new Date;
let offset = d.getTimezoneOffset() / 60 ;
let zonestr = "UTC" + ( ( offset  < 10 ) ? ( "0" + offset + "00" ) : ( offset() + "00" ) ;
setDocumentElement("TZ",zonestr);
