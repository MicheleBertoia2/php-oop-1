<?php 

require_once __DIR__ . '/db.php';

// var_dump($movies[0]->getBasicInfo())

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>Movie OOP</title>
</head>
<body>

<div class="container my-5">
  <h1 class="mb-4">Films</h1>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Titolo</th>
      <th scope="col">Data di uscita</th>
      <th scope="col">Generi</th>
      <th scope="col">Voto</th>
      <th scope="col">18+</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($movies as $movie) : ?>
      <tr>
        <th scope="row"><?php echo $movie->title ?></th>
        <td><?php echo $movie->public_date ?></td>
        <td>generi</td>
        <td><?php echo $movie->vote ?></td>
        <td><?php echo ($movie->adults)  ? "SI" :  "NO"; ?></td>
      </tr>
    <?php endforeach ?>


  </tbody>
</table>
</div>

  
</body>
</html>