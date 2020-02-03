<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HTML 일기장</title>
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body id="target" class="test">
    <header>
      <!--       로고 및 제목       -->
      <a href="../index.php">
        <img class="main_img" src="../images/main_image.png"
             width="300" height="150">
      </a>
    </header>
<!--######################################################-->
    <aside>
      <!--       목록       -->
      <ul>
        <li id="M_list">가상의 리스트1</li>
        <menu id="S_list"><a href="../php/001.php">리스트1 메뉴1</a></menu>
        <menu id="S_list"><a href="../php/002.php">리스트1 메뉴2</a></menu>
        <menu id="S_list"><a href="../php/003.php">리스트1 메뉴3</a></menu>
        <li id="M_list">가상의 리스트2</li>
        <li id="M_list">가상의 리스트3</li>
      </ul>
    </aside>
<!--######################################################-->
    <section id="main_side">
      <article>
        <!--       본문내용      -->
        가상의 리스트1 메뉴2 가상의 리스트1 메뉴2 가상의 리스트1 메뉴2
        가상의 리스트1 메뉴2 가상의 리스트1 메뉴2 가상의 리스트1 메뉴2
        가상의 리스트1 메뉴2 가상의 리스트1 메뉴2 가상의 리스트1 메뉴2
        가상의 리스트1 메뉴2 가상의 리스트1 메뉴2 가상의 리스트1 메뉴2
        가상의 리스트1 메뉴2 가상의 리스트1 메뉴2 가상의 리스트1 메뉴2
        가상의 리스트1 메뉴2 가상의 리스트1 메뉴2 가상의 리스트1 메뉴2
      </article>
    </section>
    <!--######################################################-->
    <footer>
      <!--       전화번호등 참고사항      -->
      phone 000-0000-0000
      fax 0000-0000-0000-0000<br>
      home aaaa-bbbb-ccc-000d-000h<br>
      <div id="test_button">
        <input type="button" value="테스트 켜기" id="test_on_btn"/>
        <input type="button" value="테스트 끄기" id="test_off_btn"/>
      </div>
    </footer>
    <!--js파일은 특정한 위치에 있어야 작동함-->
    <script src="../js/test_button.js"></script>
    <!--이 위치로 test_button.js의 코드를 넣는다-->
  </body>
</html>
