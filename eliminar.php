<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM peliculas WHERE id = $id";
  $rs = mysqli_query($conn, $query);
  if(!$rs) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Pelicula elimina con exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>