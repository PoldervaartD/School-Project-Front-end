<!DOCTYPE html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">

<title> Project 12 </title>
    <link rel="stylesheet" href="style.css">
    <body>
      <div class="container-fluid g-0">
        <nav class="navbar navbar-dark" style="background-color: #000000;">
          <div class="container-fluid navbarwidth">
            <img src="abarthlogo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill" href="index.html">
            <a class="navbar-brand text-light">Punto hoofdpagina</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="blog.php">Blog</a>
                </li>
              </ul>
              <form class="d-flex">
              </form>
            </div>
          </div>
        </nav>
</head>
<body>
 
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Selecteer een bestand om te uploaden:

    <input type="file" name="file">
    <input id="Tekst" type="textarea" name="Tekst" placeholder="Bericht">
    <input type="submit" name="submit" value="Upload">
</form>

<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $conn->query("SELECT * FROM images ORDER BY uploaded_on DESC");


if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" class="img-fluid" alt="" />
<?php }
}else{ ?>
    <h4>Geen afbeeldingen gevonden...</h4>
<?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>