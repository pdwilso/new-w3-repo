 <!DOCTYPE html>
<html lang="en">
<!-- 
  File: css-grid-layout-template-ex.00.php
  Vers: 01
  Desc: Create responsive layout in HTML using CSS grid
  From:
    <https://www.w3schools.com/css/tryit.asp?filename=trycss_grid_layout_named>
Change log:
2023-04-02 06:00 by sumkittehz.codes
 + changed CSS classnames to match grid area names (was itemN is item-GRIDAREA)
-->
<head>
  <title>codez: Grid Layout Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="grid-layout.11.css"/>
  <style>
</head>
<body>
  <details>
    <summary><span class="info">#file-info</span></summary>
    <pre id="file-info">
      File: grid-layout-template-ex.00.php
      Vers: 1.0
      Desc: Responsive Grid Layout Template Example
      Date: [2023-04-04]
      Auth: <a href="https://sumkittehz.codes/">sumkittehz.codes</a>
    </pre>
  </details>
  <?php
  /*   grid-template-areas: */
  $gridmapstr = array( 
    "'header header header header header header'",
    "'menu main main main main main'",
    "'footer footer footer footer footer footer'"
  );
  ?>
  <div class="grid-container">
      <div class="item-header">
        <details id="ga-header">
          <summary>
            <span class="divlabel">#item-header</span>
          </summary>
          <p>
            This is the <code>&lt;div&gt;</code> element with <code>id=#item-header</code>.
            This element occupys the grid area labeled <code>'header'</code> in the area 
            text map template shown below 
          </p>
          <pre>
            <mark>'header header header header header header'</mark>
            'menu   main   main   main   main   main'
            'footer footer footer footer footer footer'
          </pre>
        </details>
        <h1>Grid Layout Example</h1>
      </div><!-- close class item-header -->

    <div class="item-menu">
      <details id="ga-menu">
    <summary>
      <span class="divlabel">#item-menu</span>
    </summary>                       
    <p>This is the item-menu grid area.</p>
      </details>
      <h2>Menu</h2>
      <ul>
    <?php
      $menuitems = array(
        array( 
          'url'=>"https://sumkittehz.codes",
          'lbl'=>"sumkittehz.codes"
        ),
        array(
          'url'=>"https://spaces.w3schools.com/",
          'lbl'=>"Spaces at W3 Schools"
        )
      );

     foreach( $menuitems as $lnk ) {
         echo '<li><a target="_blank" href="'.$lnk['url'].'">'.$lnk['lbl'].'</a></li>';
     }

     ?>
      </ul>
    </div><!-- close class item-menu -->

    <div class="item-main">
      <details id="ga-main">
    <summary><span class="divlabel">#item-main</span></summary>
    <p>This is the <code>#item-main</code> grid area block.</p>
    <p>The CSS block shown below is used in the stylesheet
    to create an area map of the grid.</p>
    <p>This area map is a text-defined template map.</p>
    <pre>
  grid-template-areas:
    'header header header header header header'
    'menu   <mark>main   main   main   main   main</mark>'
    'footer footer footer footer footer footer';
    </pre>
    <p>
      Each of the grid area blocks is identified
      by <code>id=&quot;item-[NAME]&quot;</code>,
      where <code>[NAME]</code> is replaced by one of the grid
      area names from the <code>grid-template-areas</code> value
      assigned in the <code>.grid-container</code>, above.
    </p>
      </details>
      <h2>Main Content</h2>

      <p>This grid layout contains six columns and three rows.</p>
      <p>This is a <i>Responsive CSS Grid Template Example</i> built from the examples at w3schools.</p>

    </div><!-- close class item-main -->
 
    <div class="item-footer">
      <details id="ga-footer">
    <summary>
      <span class="divlabel">#item-footer</span>
    </summary>

    <p>This is the item-footer grid area block.</p>
      </details>
      <p style="margin:0 4em;">made by <cite>sumkittehz.codes</cite></p>
    </div><!-- close class item-footer -->

  </div>
  <?php
   /*  Create source file listings */
   $srcfilelst = array( "grid-layout.10.css","grid-layout.10.html" );
   foreach (array( "grid-layout.11.css","grid-layout-template-ex.00.php" ) as $fn) {
     echo '<details><summary><span class="info">'.$fn.'</summary>';
     echo '<pre class="filelisting">Filename:  <a target="_blank" href="'.$fn.'">'.$fn.'</a>'."\n<hr/>\n";
     highlight_file($fn);
     echo "<hr>";
     echo '<span>end of file '.$fn."</span></pre>\n";
     echo "</details>";
   }
   ?>
  </body>
</html>

