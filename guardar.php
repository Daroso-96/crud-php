<?php

include('db.php');

if (isset($_POST['guardar'])) {
  $nombre = $_POST['nombre'];
  $director = $_POST['director'];
  
  $query = "INSERT INTO peliculas(nombre, director) VALUES ('$nombre', '$director')";
  $rs = mysqli_query($conn, $query);
  if(!$rs) {
    die("Query Failed.");
  }

  $_SESSION['message'] = '¡Pelicula guarda con exito!';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>