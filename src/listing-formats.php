/*
 *   Define some field widths for the directory output listing
 */
$fldwid = array
        (
            'bytes' => "12", /* 12 digits for file size in bytes */
            'perms' => "4",  /*  4 digits for permissions */
            'times' => "16", /* 16 characters for date & time */
            'names' => "",   /*    filename width is not defined */
        );

/*  Create printf() style format string for dir fld output
 */
$fmtstr =
        "%".$fldwid['bytes']."s ".
        "%".$fldwid['times']."s ".
        "%".$fldwid['names']."s\n";

