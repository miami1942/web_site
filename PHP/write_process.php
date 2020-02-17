<?php
  $conn = mysqli_connect("localhost", "root", "wkdgmd7093");
  mysqli_select_db($conn,"website");
  $sql = "SELECT * FROM user WHERE name='".$_POST['author']."'";
  $result = mysqli_query($conn, $sql);

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

  $sql = "INSERT INTO web_info (author, title, description)
  VALUES('".$user_id."','".$_POST['title']."','".$_POST['description']."')";
  $result = mysqli_query($conn, $sql);

  header('location:../index.php');
?>
