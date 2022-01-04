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
  <title>Subway - Morning</title>
</head>

<body>
  <!-- header starts - include -->
  <?php include "inc/header.php"; ?>
  <!-- header ends - include -->
  
  <!-- 본문 중간 부분 작성 -->
  <main class="content" id="content">

    <section class="top_banner_img" style="background-color: #F2B702;">
      <div class="top_img_size" style="background: url(images/introduceMenu/img_visual_morning01.jpeg) 100% 0 no-repeat, url(images/introduceMenu/img_visual_morning02.jpeg) 10% 0 no-repeat;">
        <div class="top_lnb">
          <ul>
            <li class="top_lnb_01"><a href="sub_sandwich.php">샌드위치</a></li>
            <li class="top_lnb_02"><a href="sub_wrap.php">랩 ・ 기타</a></li>
            <li class="top_lnb_03"><a href="sub_chopped.php">찹샐러드</a></li>
            <li class="top_lnb_04"><a href="#">아침메뉴</a></li>
            <li class="top_lnb_05"><a href="sub_smile.php">스마일 썹</a></li>
          </ul>
        </div>
        <h2>Morning Menu</h2>
        <p>아침 메뉴도 Subway와 함께, 취향대로 즐기자!<br>* 그릴드 랩과 파니니는 일부 매장에서만 제공 가능합니다. 매장 리스트는 공지사항을 확인해주세요.</p>
      </div>
      <div class="bottom_lnb">
        <ul>
          <li class="bottom_lnb_01"><a href="#">샌드위치</a></li>
          <li class="bottom_lnb_02"><a href="#">랩</a></li>
          <li class="bottom_lnb_03"><a href="#">그릴드 랩</a></li>
          <li class="bottom_lnb_04"><a href="#">파니니</a></li>
        </ul>
      </div>
    </section>

    <div class="top_lnb_underline"></div>

    <section class="main_menu_intro">
      <div class="classic_sand">
        <h3 class="menu_intro_title">샌드위치</h3>
        <ul>
          <li class="menu_intro_boxes classic_sand_01"><a href="#">
              <img src="images/morning/sandwich/morning_steakEgg.jpg" alt="스테이크, 에그 & 치즈">
              <h4>스테이크, 에그 & 치즈</h4>
              <h5>Steak, Egg & Cheese</h5>
              <p>440 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_02"><a href="#">
              <img src="images/morning/sandwich/morning_hamEgg.jpg" alt="햄, 에그 & 치즈">
              <h4>햄, 에그 & 치즈</h4>
              <h5>Ham, Egg & Cheese</h5>
              <p>400 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_03"><a href="#">
              <img src="images/morning/sandwich/morning_westernEgg.jpg" alt="웨스턴, 에그 & 치즈">
              <h4>웨스턴, 에그 & 치즈</h4>
              <h5>Western, Egg & Cheese</h5>
              <p>370 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_04"><a href="#">
              <img src="images/morning/sandwich/morning_baconCheese.jpg" alt="베이컨, 에그 & 치즈">
              <h4>베이컨, 에그 & 치즈</h4>
              <h5>Bacon, Egg & Cheese</h5>
              <p>450 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="fresh_sand">
        <h3 class="menu_intro_title">랩</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/wrap/morning_steakEggWrap.png" alt="스테이크, 에그 & 치즈 랩">
              <h4>스테이크, 에그 & 치즈 랩</h4>
              <h5>Steak, Egg & Cheese Wrap</h5>
              <p>330 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/wrap/morning_hamEggWrap.png" alt="햄, 에그 & 치즈 랩">
              <h4>햄, 에그 & 치즈 랩</h4>
              <h5>Ham, Egg & Cheese Wrap</h5>
              <p>288 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/wrap/morning_westernEggWrap.png" alt="웨스턴, 에그 & 치즈 랩">
              <h4>웨스턴, 에그 & 치즈 랩</h4>
              <h5>Western, Egg & Cheese Wrap</h5>
              <p>298 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/wrap/morning_baconEggWrap.png" alt="베이컨, 에그 & 치즈 랩">
              <h4>베이컨, 에그 & 치즈 랩</h4>
              <h5>Bacon, Egg & Cheese Wrap</h5>
              <p>321 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="premium_sand">
        <h3 class="menu_intro_title">그릴드 랩</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/grilled/morning_steakEggGrilled.png" alt="스테이크, 에그 & 치즈 그릴드 랩">
              <h4>스테이크, 에그 & 치즈 그릴드 랩</h4>
              <h5>Steak, Egg & Cheese Grilled Wrap</h5>
              <p>309 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/grilled/morning_hamEggGrilled.png" alt="햄, 에그 & 치즈 그릴드 랩">
              <h4>햄, 에그 & 치즈 그릴드 랩</h4>
              <h5>Ham, Egg & Cheese Grilled Wrap</h5>
              <p>280 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/grilled/morning_westernEggGrilled.png" alt="웨스턴, 에그 & 치즈 그릴드 랩">
              <h4>웨스턴, 에그 & 치즈 그릴드 랩</h4>
              <h5>Western, Egg & Cheese Grilled Wrap</h5>
              <p>276 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/grilled/morning_baconEggGrilled.png" alt="베이컨, 에그 & 치즈 그릴드 랩">
              <h4>베이컨, 에그 & 치즈 그릴드 랩</h4>
              <h5>Bacon, Egg & Cheese Grilled Wrap</h5>
              <p>300 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="new_sand">
        <h3 class="menu_intro_title">파니니</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/Panini/morning_baconEggPanini.png" alt="스테이크, 에그 & 치즈 파니니">
              <h4>스테이크, 에그 & 치즈 파니니</h4>
              <h5>Steak, Egg & Cheese Panini</h5>
              <p>372 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/Panini/morning_baconEggPanini.png" alt="햄, 에그 & 치즈 파니니">
              <h4>햄, 에그 & 치즈 파니니</h4>
              <h5>Ham, Egg & Cheese Panini</h5>
              <p>330 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/Panini/morning_baconEggPanini.png" alt="웨스턴, 에그 & 치즈 파니니">
              <h4>웨스턴, 에그 & 치즈 파니니</h4>
              <h5>Western, Egg & Cheese Panini</h5>
              <p>340 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/morning/Panini/morning_baconEggPanini.png" alt="베이컨, 에그 & 치즈 파니니">
              <h4>베이컨, 에그 & 치즈 파니니</h4>
              <h5>Bacon, Egg & Cheese Panini</h5>
              <p>363 kcal</p>
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