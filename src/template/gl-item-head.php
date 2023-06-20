<?php
/*
  File:  gl-item-head.php
  Date:  2023-04-17
  Auth:  sumkittehz.codes
  Desc:  This module is part of the grid-layout template.
  Desc:  This module outputs HTML to create div.item-header element
 */
$html_output_string = '
<div class="item-header">
  <details id="ga-header">
    <summary>
      <span class="divlabel">#item-header</span>
    </summary>
    <p>
      This is the <code><b>&lt;div class=&quot;#item-header&gt;</b></code>.
      &mdash; this element occupies the grid map  area labelled &quot;head&quot;
      &mdash;- this element area spans the entire grid on the top row.
    </p>
  </details>
  <header>

<!-- logo block start  -->
    <div style="padding-top:5pt;border:1px solid red;">
      <details id="catspaw">
        <summary><span class="divlabel">#cat-paw</span></summary>
        <pre>
 HTML 5 object Element
 id=&quot;cat-paw&quot;
 data=&quot;<a target=&quot;_blank&quot; href="catspaw.svg">catspaw.svg</a>&quot;
        </pre>
      </details>
      <object style="margin:5pt;;padding:5pt;border:1px solid #212121" id="cat-paw" data="catspaw.svg"></object>
   </div>
<!--  logo block end -->

   <h1>Grid Layout Example</h1>
   <p>Local System Time: <span id="localtime">00:00:00</span></p>
   <div id="UTC">00:00:00</div>
 </header>

 <script>
    function showTime() {
      let time = new Date();
      let hour = time.getHours();
      let min  = time.getMinutes();
      let sec  = time.getSeconds();
      am_pm    = "AM";
  
      hour = hour < 10 ? "0" + hour : hour;
      min  = min < 10 ? "0" + min : min;
      sec  = sec < 10 ? "0" + sec : sec;
 
      let currentTime = hour + ":" + min + ":" + sec;
      document.getElementById("clock").innerHTML = time.toTimeString();;
      document.getElementById("UTC").innerHTML = time.toUTCString();
    }
    setInterval(showTime, 1000);
  </script>
 </div><!-- close class item-header -->
';
echo $html_output_string;
?>
