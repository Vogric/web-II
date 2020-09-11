<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visor de $_GET,  $_POST y $_REQUEST</title>
</head>

<body>
  <h1>Visor de $_GET,  $_POST y $_REQUEST</h1>  
  <?php
      echo "<pre>\$_POST = \n";
      var_dump( $_POST );
      
      echo "\n\n\n\$_GET = \n";
      var_dump( $_GET );
      
      echo "\n\n\n\$_REQUEST = \n";
      var_dump( $_REQUEST );
      echo "</pre>";

?>
</body>

</html>