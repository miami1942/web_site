<?php
  $conn = mysqli_connect("localhost", "root", "wkdgmd7093");
  mysqli_select_db($conn,"skyrim");
  $sql = "SELECT * FROM user WHERE name='".$_POST['author']."'";
  $result = mysqli_query($conn, $sql);
  $order_id = $_POST['id'];

  if($result->num_rows ==0){//신규유저일경우 값이 없어서 row의 갯수가 0이 된다.
    $sql = "INSERT INTO user (name,password)
     VALUES ('".$_POST['author']."','0000')";
     mysqli_query($conn, $sql);
     $user_id = mysqli_insert_id($conn);
  }
  else{
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
  }

  $sql = "UPDATE chronological_order SET
  author = '".$user_id."',
  title = '".$_POST['title']."',
  description = '".$_POST['description']."',
  created = now()
  WHERE id= ".$order_id;
  $result = mysqli_query($conn, $sql);

  header('location:../index.php');
?>
