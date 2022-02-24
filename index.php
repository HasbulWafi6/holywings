
Result Size: 753 x 576

<!DOCTYPE html>

<html>

<body>
<?php  

for ($x = 0; $x <= 30; $x++) {

  if ($x%3 == 0 AND $x%5 == 0)

  {

    echo "TigaLima <br>";

  }

  elseif ($x%3 == 0)

  {

    echo "Tiga <br>";

  }

  elseif ($x%5 == 0)

  {

    echo "Lima <br>";

  }

  else

  {

    echo "$x <br>";

  }
}

?>  
</body>

</html>