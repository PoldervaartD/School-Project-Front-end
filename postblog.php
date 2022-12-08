<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

    $Titel =         $_POST['titel'];
    $Tijd =          $_POST['tijd'];
    $Datum =         $_POST['datum'];
    $Bericht =       $_POST['bericht'];

mysqli_query($conn, "INSERT INTO blog (titel, datum, tijd, bericht) 
VALUES ('$Titel', '$Datum', '$Tijd', '$Bericht')");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vis Wedstrijd</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="login">
        <h1>Uw bericht is succesvol geplaatst.</h1>
        <a href="blog.html">Terug naar de blog pagina</a>
      </body>
</html>