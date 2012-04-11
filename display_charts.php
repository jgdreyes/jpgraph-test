<!DOCTYPE html>

<html>
  <head>
    <style type="text/css">
      img {display: block;}
    </style>
  </head>

  <body>
    <?php
    $names = array('abc', '123', 'xyz', '789');
    foreach($names as $name) {
      $t = microtime();
      echo "<img alt='$name' src='/chart_src.php?name=$name&$t'>";
    }
    ?>
  </body>

</html>
