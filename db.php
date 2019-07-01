<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'crud_php'
) or die(mysqli_erro($mysqli));

?>