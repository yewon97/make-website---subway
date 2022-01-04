<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/subway_sadwich_style.css" type="text/css" />
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      // navbar 만들기
      <?php include "js/menubar.js"; ?>

      // 맨위로 가기
      <?php include "js/go_top.js"; ?>
    });
  </script>
  <title>Subway - Wrap</title>
</head>

<body>
  <!-- header starts - include -->
  <?php include "inc/header.php"; ?>
  <!-- header ends - include -->
  
  <!-- 본문 중간 부분 작성 -->
  <main class="content" id="content">

    <section class="top_banner_img" style='background-color:#85c441;'>
      <div class="top_img_size" style="background: url(images/introduceMenu/img_visual_wrap01.jpeg) 100% 72px no-repeat, url(images/introduceMenu/img_visual_wrap02.jpeg) -10% 0 no-repeat;">
      <div class="top_lnb">
          <ul>
            <li class="top_lnb_01"><a href="sub_sandwich.php">샌드위치</a></li>
            <li class="top_lnb_02"><a href="#">랩 ・ 기타</a></li>
            <li class="top_lnb_03"><a href="sub_chopped.php">찹샐러드</a></li>
            <li class="top_lnb_04"><a href="sub_morning.php">아침메뉴</a></li>
            <li class="top_lnb_05"><a href="sub_smile.php">스마일 썹</a></li>
          </ul>
        </div>
        <h2>Wrap</h2>
        <p>Subway를 더 맛있고 간편하게 즐기는 방법<br>최상의 레시피로 만들어진 써브웨이 랩 시리즈, 이젠 고민하지 마세요!<br>* 그릴드 랩과 파니니는 일부 매장에서만 제공 가능합니다. 매장 리스트는 공지사항을 확인해주세요.</p>
      </div>
      <div class="bottom_lnb">
        <ul>
          <li class="bottom_lnb_01"><a href="#">시그니처 랩</a></li>
          <li class="bottom_lnb_02"><a href="#">미니 랩</a></li>
          <li class="bottom_lnb_03"><a href="#">그릴드 랩</a></li>
          <li class="bottom_lnb_04"><a href="#">파니니</a></li>
        </ul>
      </div>
    </section>

    <div class="top_lnb_underline"></div> 

    <section class="main_menu_intro">
      <div class="classic_sand">
        <h3 class="menu_intro_title">시그니처 랩</h3>
        <ul>
          <li class="menu_intro_boxes classic_sand_01"><a href="#">
              <img src="images/wrap/signature/wrap_shrimpMayo.jpg" alt="스테이크 & 치즈 아보카도 랩">
              <h4>스테이크 & 치즈 아보카도 랩</h4>
              <h5>Steak & Cheese Avocado Wrap</h5>
              <p>451 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_02"><a href="#">
              <img src="images/wrap/signature/wrap_steak.jpg" alt="쉬림프 에그마요 랩">
              <h4>쉬림프 에그마요 랩</h4>
              <h5>Shrimp Egg Mayo Wrap</h5>
              <p>459 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="fresh_sand">
        <h3 class="menu_intro_title">미니 랩</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/wrap/mini/wrap_chickenMini.jpg" alt="이탈리안 미니 랩">
              <h4>이탈리안 미니 랩</h4>
              <h5>Italian Mini Wrap</h5>
              <p>405 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/wrap/mini/wrap_italianMini.jpg" alt="치킨 베이컨 미니 랩">
              <h4>치킨 베이컨 미니 랩</h4>
              <h5>Chicken Bacon Mini Wrap</h5>
              <p>376 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="premium_sand">
        <h3 class="menu_intro_title">그릴드 랩</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/wrap/grilled/wrap_shrimpGrilled.png" alt="쉬림프 에그 그릴드 랩">
              <h4>쉬림프 에그 그릴드 랩</h4>
              <h5>Shrimp Egg Grilled Wrap</h5>
              <p>427 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/wrap/grilled/wrap_steakGrilled.png" alt="스테이크 & 치즈 아보카도 그릴드 랩">
              <h4>스테이크 & 치즈 아보카도 그릴드 랩</h4>
              <h5>Steak & Cheese Avocado Grilled Wrap</h5>
              <p>451 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/wrap/grilled/wrap_chickenGrilled.png" alt="치킨 베이컨 미니 그릴드 랩">
              <h4>치킨 베이컨 미니 그릴드 랩</h4>
              <h5>Chicken Bacon Mini Grilled Wrap</h5>
              <p>376 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/wrap/grilled/wrap_italianGrilled.png" alt="이탈리안 미니 그릴드 랩">
              <h4>이탈리안 미니 그릴드 랩</h4>
              <h5>Italian Mini Grilled Wrap</h5>
              <p>405 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="new_sand">
        <h3 class="menu_intro_title">파니니</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/wrap/panini/wrap_steakPanini.png" alt="스테이크 & 치즈 파니니">
              <h4>스테이크 & 치즈 파니니</h4>
              <h5>Steak & Cheese Panini</h5>
              <p>453 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/wrap/panini/wrap_rotisseriePanini.png" alt="로티세리 바비큐 치킨 파니니">
              <h4>로티세리 바비큐 치킨 파니니</h4>
              <h5>Rotisserie Barbecue Chicken Panini</h5>
              <p>450 kcal</p>
            </a></li>
        </ul>
      </div>
    </section>

    <div class="remote__container">
      <a href="#" class="remote--top">맨 위로 가기</a>
    </div>

  </main>
  <!-- // 본문 중간 부분 작성 -->

  <!-- footer starts - include  -->
  <?php include "inc/footer.php"; ?>
  <!-- footer ends - include  -->
</body>

</html>