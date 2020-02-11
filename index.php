<?php
  $conn = mysqli_connect("localhost", "root", "wkdgmd7093");
  mysqli_select_db($conn,"skyrim");
  $result = mysqli_query($conn, "SELECT * FROM chronological_order");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HTML 일기장</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_skyrim.css">
  </head>
  <body id="target" class="">
    <div class="body_class">
    <!--********헤더*********-->
    <header>
      <h1 class="logo">HTML 일기장</h1>
      <a href="index.php">
        <img id="main_img" src="images/main_image.png"
             width="300" height="150">
      </a>
    </header>
    <!--******전체 본문******-->
    <div class="container">
      <!--******리스트******-->
      <aside>
        <ul>
        <?php
          //echo file_get_contents('txt/list.txt');
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<li><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
          }
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br>
      </ul>
      </aside>
      <!--******메인******-->
      <section>
        <!--******검색******-->
      <div>
        <div class="write_button">
          <a href="write.php">
            <input type="button" value="새 글쓰기" id="write"/>
          </a>
        </div>
        <form id="m_search" action="php/main.php">
          메인페이지 테스트
          <input type="text" name="page_num">
          <input type="submit" name="submit" value="이동">
        </form>
      </div>
        <!--******내용******-->
        <article>
          <?php
          //  if(empty($val)==false){
          //    echo file_get_contents("txt_info/".$_GET['id'].".txt");
          //  }
          //  if (empty($_GET['id'])==false) {
          //    echo file_get_contents("game_txt/".$_GET['id'].".txt");
          //  }
          if(empty($_GET['id'])===false){
            //$sql = 'SELECT * FROM chronological_order WHERE id='.$_GET['id'];
            $order_id = $_GET['id'];
            $sql = "SELECT *
            FROM chronological_order LEFT JOIN user
            ON chronological_order.author = user.id
            WHERE chronological_order.id=".$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            echo '<h2>'.$row['title'].'</h2>';
            echo $row['description'].'<br/><br/>';
            echo '작성자 : '.$row['name'].'<br/>';
            echo '작성 날짜 : '.$row['created'].'<br />';
            echo '<h6>페이지번호 : '.$order_id.'</h6>';
          }
          else {
            echo "환영합니다".'<br/>';
            echo "이곳은 스카이림의 순서를 위한 게시판 입니다.";
          }
          ?>
        </article>
      </section>
    </div>
    <!--******풋터******-->
    <footer>
      <?php
        echo file_get_contents('txt/footer.txt');
      ?>
      <div id="test_button">
        <input type="button" value="테스트 켜기" id="test_on_btn"/>
        <input type="button" value="테스트 끄기" id="test_off_btn"/>
      </div>
    </footer>
    <!--js파일은 특정한 위치에 있어야 작동함-->
    <script src="js/test_button.js"></script>
    <!--이 위치로 test_button.js의 코드를 넣는다-->
  </div>
  </body>
</html>
