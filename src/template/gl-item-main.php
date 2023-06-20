<?php
echo <<< 'EOBM'
   <div class="item-main">
      <details id="ga-main">
	<summary><span class="divlabel">#item-main</span></summary>
	<p>This is the item-main grid area block.</p>
	<p>The CSS block shown below is used in the stylesheet
	to create an area map of the grid.</p>
	<pre>
  grid-template-areas:
    'header header header header header header'
    'menu main main main main main'
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
      <p>This is a <i>Responsive CSS Grid Template Example</i> built
      from the examples at w3schools.</p>
    </div><!-- close class item-main -->
EOBM;
?>
