<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>codez: PHP Filter Functions</title>
    <style>
      table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      }
      th, td {
      padding: 5px;
      }
    </style>
  </head>
  <body>
    <h1>PHP Filter Functions</h1>
    <p>
      <a href="https://www.w3schools.com/php/php_ref_filter.asp">The Complete PHP Filter Reference</a>
    </p>
                                                                                       
    <table>
      <tr>
	<th>Filter Name</th>
	<th>Filter ID</th>
      </tr>
      <?php
       foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
      }
      ?>
    </table>

    <div>
      <h3>validate url</h3>
      
<?php
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?>
      
    </div>
  </body>
</html>
