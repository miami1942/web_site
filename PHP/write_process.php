<?php
  $conn = mysqli_connect("localhost", "root", "wkdgmd7093");
  mysqli_select_db($conn,"skyrim");

  $sql = "INSERT INTO chronological_order (author, title, description)
  VALUES('".$_POST['author']."','".$_POST['title']."','".$_POST['description']."')";

  $result = mysqli_query($conn, $sql);
  header('location:../index.php');
?>
