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
  <title>Subway - Smile</title>
</head>

<body>
  <!-- header starts - include -->
  <?php include "inc/header.php"; ?>
  <!-- header ends - include -->
  
  <!-- 본문 중간 부분 작성 -->
  <main class="content" id="content">

    <section class="top_banner_img" style="background-color: #00A5DD;">
      <div class="top_img_size" style="background: url(images/introduceMenu/img_visual_sides_drink01.png) 100% 130px no-repeat, url(images/introduceMenu/img_visual_sides_drink02.png) 5% 0 no-repeat;">
        <div class="top_lnb">
          <ul>
            <li class="top_lnb_01"><a href="sub_sandwich.php">샌드위치</a></li>
            <li class="top_lnb_02"><a href="sub_wrap.php">랩 ・ 기타</a></li>
            <li class="top_lnb_03"><a href="sub_chopped.php">찹샐러드</a></li>
            <li class="top_lnb_04"><a href="sub_morning.php">아침메뉴</a></li>
            <li class="top_lnb_05"><a href="#">스마일 썹</a></li>
          </ul>
        </div>
        <!-- <div class="top_lnb_underline">
        </div> -->
        <h2>Smile Sub</h2>
        <p>웃음이 번지는 착한 가격, 착한 맛!<br>스마일 썹과 함께 하루 종일 스마일 하세요~</p>
      </div>
      <div class="bottom_lnb">
        <ul>
          <li class="bottom_lnb_01"><a href="#">스마일 썹</a></li>
        </ul>
      </div>
    </section>

    <div class="top_lnb_underline"></div>

    <section class="main_menu_intro">
      <div class="classic_sand">
        <h3 class="menu_intro_title">스마일 썹</h3>
        <ul>
          <li class="menu_intro_boxes classic_sand_01"><a href="#">
              <img src="images/smileSub/smilesub_pineChip.png" alt="파인애플 쿠키">
              <h4>파인애플 쿠키</h4>
              <h5>Pineapple Cookies</h5>
              <p>200 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_02"><a href="#">
              <img src="images/smileSub/smilesub_doubleChocoChip.jpg" alt="더블 초코칩">
              <h4>더블 초코칩</h4>
              <h5>Double Chocolate Chip</h5>
              <p>210 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_03"><a href="#">
              <img src="images/smileSub/smilesub_chocoChip.jpg" alt="초코칩">
              <h4>초코칩</h4>
              <h5>B.L.T.</h5>
              <p>200 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_04"><a href="#">
              <img src="images/smileSub/smilesub_oatmealChip.jpg" alt="오트밀 레이즌">
              <h4>오트밀 레이즌</h4>
              <h5>Oatmeal Raisin</h5>
              <p>200 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_05"><a href="#">
              <img src="images/smileSub/smilesub_berryChip.jpg" alt="라즈베리 치즈케익">
              <h4>라즈베리 치즈케익</h4>
              <h5>Raspberry Cheese Cake</h5>
              <p>200 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_06"><a href="#">
              <img src="images/smileSub/smilesub_whiteChocoChip.jpg" alt="화이트 초코 마카다미아">
              <h4>화이트 초코 마카다미아</h4>
              <h5>White Choco Macadamia</h5>
              <p>220 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_01"><a href="#">
              <img src="images/smileSub/smilesub_ovenbakedPotatoes.jpg" alt="웨지 포테이토">
              <h4>웨지 포테이토</h4>
              <h5>Ovenbaked Wedge Potatoes</h5>
              <p>143 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_06"><a href="#">
            <img src="images/smileSub/smilesub_cheesyPotatoes.jpg" alt="Cheesy 웨지 포테이토">
            <h4>Cheesy 웨지 포테이토</h4>
            <h5>Cheesy Ovenbaked Wedge Potatoes</h5>
            <p>187 kcal</p>
          </a></li>
          <li class="menu_intro_boxes classic_sand_02"><a href="#">
              <img src="images/smileSub/smilesub_baconPotatoes.jpg" alt="Bacon Cheesy 웨지 포테이토">
              <h4>Bacon Cheesy 웨지 포테이토</h4>
              <h5>Bacon Cheesy Ovenbaked Wedge Potatoes</h5>
              <p>238 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_03"><a href="#">
              <img src="images/smileSub/smilesub_mushSoup.png" alt="머쉬룸 수프">
              <h4>머쉬룸 수프</h4>
              <h5>Mushroom Soup</h5>
              <p>150 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_04"><a href="#">
              <img src="images/smileSub/smilesub_broccoliSoup.jpg" alt="브로콜리 체다 수프">
              <h4>브로콜리 체다 수프</h4>
              <h5>Broccoli Cheddar Soup</h5>
              <p>170 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_05"><a href="#">
              <img src="images/smileSub/smilesub_potatoSoup.jpg" alt="베이크 포테이토 수프">
              <h4>베이크 포테이토 수프</h4>
              <h5>Baked Potatoe Soup</h5>
              <p>210 kcal</p>
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