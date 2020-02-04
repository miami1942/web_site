<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HTML 일기장</title>
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body id="target" class="test">
    <!--********헤더*********-->
    <header>
      <h1 class="logo">HTML 일기장</h1>
      <a href="../index.php">
        <img id="main_img" src="../images/main_image.png"
             width="300" height="150">
      </a>
    </header>
    <!--******전체 본문******-->
    <div class="container">
      <!--******리스트******-->
      <aside>
        <ul>
          <li>가상의 리스트1</li>
          <menu><a href="../php/001.php">리스트1 메뉴1</a></menu>
          <menu><a href="../php/002.php">리스트1 메뉴2</a></menu>
          <menu><a href="../php/003.php">리스트1 메뉴3</a></menu>
          <li>가상의 리스트2</li>
          <li>가상의 리스트3</li>
        </ul>
      </aside>
      <!--******메인******-->
      <section>
        <!--******검색******-->
        <form id="m_search" action="../php/main.php">
          메인페이지 테스트
          <input type="text" name="page_num">
          <input type="submit" name="submit" value="이동">
        </form>
        <!--******내용******-->
        <article>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
          가상의 리스트 메뉴1<br>
        </article>
      </section>
    </div>
    <!--******풋터******-->
    <footer>
      phone 000-0000-0000
      fax 0000-0000-0000-0000<br>
      home aaaa-bbbb-ccc-000d-000h<br>
      <div id="test_button">
        <input type="button" value="테스트 켜기" id="test_on_btn"/>
        <input type="button" value="테스트 끄기" id="test_off_btn"/>
      </div>
    </footer>
    <!--js파일은 특정한 위치에 있어야 작동함-->
    <script src="js/test_button.js"></script>
    <!--이 위치로 test_button.js의 코드를 넣는다-->
  </body>
</html>
