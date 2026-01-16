<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nom = "Ali";
$age = 22;
$langages = ["PHP", "JavaScript", "Python"];

¡
echo "Bonjour $nom, vous avez $age ans.<br>";

¡
foreach ($langages as $l) {
  echo $l . "<br>";
}


for ($i = 0; $i < count($langages); $i++) {
  echo $langages[$i] . "<br>";
}
?>

    
</body>
</html>
