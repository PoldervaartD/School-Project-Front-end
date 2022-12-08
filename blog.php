<?php
	    // verbinden met database
		$conn = mysqli_connect('localhost', 'root', '', 'blog');

		//check connectie
		if(!$conn){
			echo 'Connection error: ' . mysqli_connect_error();
		}
		$sql = 'SELECT titel, datum, tijd, bericht FROM blog ORDER BY datum';
		$result = mysqli_query($conn, $sql);
		$wedstrijden = mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		mysqli_close($conn)

?>

<!doctype html>
<html>
  <body>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <div class="container-fluid g-0">
            <nav class="navbar navbar-dark" style="background-color: #000000;">
              <div class="container-fluid navbarwidth">
                <img src="abarthlogo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill" href="index.html">
                <a class="navbar-brand text-light">Punto blog</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active text-light" aria-current="page" href="index.html">Homepagina</a>
                    </li>
                    <li class="nav-item dropdown">
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active text-light" aria-current="page" href="fotogalerij.php">Fotogalerij</a>
                    </li>
                  </ul>
                  <form class="d-flex">
                  </form>
                </div>
              </div>
            </nav>
    <link rel="stylesheet" href="style.css">
        <form action="postblog.php" method="post">
          <br>
            <input type="text" name="titel" placeholder="Titel" required>
            <br>
            <input type="date" name="datum" placeholder="Datum" required>
            <br>
            <input type="text" name="tijd" placeholder="Tijd UU:MM:SS" required>
            <br>
            <br>
            <textarea id="bericht" name="bericht" rows="4" cols="40" placeholder="Typ hier uw bericht" required></textarea>
            <br>
            <button type="submit" class="btn btn-primary" style="background-color: #000000">Plaats Bericht</button>
        </form>
        </div>
        <br>
        <br>
        <div class="container">
          <div class="row">
          <?php foreach($wedstrijden as $wedstrijd){ ?>
            <article class="card">
            <header class="card-header">
              <h3 id="WitteTekst"><?php echo htmlspecialchars($wedstrijd['titel']); ?></h3>
              <div id='datum'><?php echo htmlspecialchars($wedstrijd['datum']);?></div>
              <p><?php echo htmlspecialchars($wedstrijd['tijd']); ?></p>
              <div id="EndTime"><?php echo htmlspecialchars($wedstrijd['bericht']); ?></div>
              
            </header>
        </article>
      <?php } ?>
      </div>
			</div>

            <!-- Optional JavaScript; choose one of the two! -->
            <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>