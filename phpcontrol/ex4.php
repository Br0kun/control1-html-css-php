<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
</head>
<body>
    <form method="post">
  <input type="text" name="nom" placeholder="Nom">
  <input type="email" name="email" placeholder="Email">
  <button type="submit">Envoyer</button>
</form>

<?php
if (isset($_POST["nom"]) && isset($_POST["email"])) {
    

  if (!empty($_POST["nom"]) && !empty($_POST["email"]))
    
 {
    echo "Nom: " . $_POST["nom"] . "<br>";
    echo "Email: " . $_POST["email"];
  } else {
    echo "Champs non remplis";
  }

}
?>
</body>
</html>
