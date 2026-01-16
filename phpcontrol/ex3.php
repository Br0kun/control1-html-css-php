<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>
<body>
    <?php
    function calculMoyenne($notes) {
  $sum = 0;
  $count = 0;

  foreach ($notes as $n) { 
    $sum += $n; 
    $count++; 
  }

  return $sum / $count; 
}

$notes = [12, 15, 9, 14];
echo calculMoyenne($notes); 
    ?>
</body>
</html>
