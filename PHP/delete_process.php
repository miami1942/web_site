<?php
  $conn = mysqli_connect("localhost", "root", "wkdgmd7093");
  mysqli_select_db($conn,"website");
  $order_id = $_POST['id'];

  $sql = "DELETE FROM web_info WHERE id = ".$order_id;
  $result = mysqli_query($conn, $sql);

  header('location:../index.php');
?>
