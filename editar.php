<?php
include("db.php");
$nombre = '';
$director= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM peliculas WHERE id=$id";
  $rs = mysqli_query($conn, $query);
  if (mysqli_num_rows($rs) == 1) {
    $row = mysqli_fetch_array($rs);
    $nombre = $row['nombre'];
    $director = $row['director'];
    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $director = $_POST['director'];
 

  $query = "UPDATE peliculas set nombre = '$nombre', director = '$director' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Pelicula actualizada.';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre actualizado">
        </div>
        <div class="form-group">
        <input name="director" type="text" class="form-control" value="<?php echo $director; ?>" placeholder="Director  actualizado">
        </div> 

       
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
