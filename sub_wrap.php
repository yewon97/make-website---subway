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
      $("nav > ul > li").mouseenter(function () {
        $("nav ul ul, .nav_bg").stop().slideDown("fast");
      });
      $("nav > ul > li").mouseleave(function () {
        $("nav ul ul, .nav_bg").stop().slideUp("fast");
      });
    });
  </script>
  <title>샌드위치</title>
</head>

<body>
  <!-- header starts - include -->
  <?php include "inc/header.php"; ?>
  <!-- header ends - include -->
  
  <!-- 본문 중간 부분 작성 -->
  <main class="content" id="content">

    <section class="top_banner_img">
      <div class="top_img_size">
        <div class="top_lnb">
          <ul>
            <li class="top_lnb_01"><a href="#">샌드위치</a></li>
            <li class="top_lnb_02"><a href="#">랩 ・ 기타</a></li>
            <li class="top_lnb_03"><a href="#">찹샐러드</a></li>
            <li class="top_lnb_04"><a href="#">아침메뉴</a></li>
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
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>에그마요</h4>
              <h5>Egg Mayo</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_02"><a href="#">
              <img src="images/menu/italianbmt.jpeg" alt="">
              <h4>이탈리안 비엠티</h4>
              <h5>Italian B.M.T.™</h5>
              <p>410 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_03"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>비엘티</h4>
              <h5>B.L.T.</h5>
              <p>380 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_04"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>미트볼</h4>
              <h5>Meatball</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_05"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>햄</h4>
              <h5>Ham</h5>
              <p>290 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_06"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>참치</h4>
              <h5>Tuna</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_01"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>에그마요</h4>
              <h5>Egg Mayo</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_02"><a href="#">
              <img src="images/menu/italianbmt.jpeg" alt="">
              <h4>이탈리안 비엠티</h4>
              <h5>Italian B.M.T.™</h5>
              <p>410 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_03"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>비엘티</h4>
              <h5>B.L.T.</h5>
              <p>380 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_04"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>미트볼</h4>
              <h5>Meatball</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_05"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>햄</h4>
              <h5>Ham</h5>
              <p>290 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_06"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>참치</h4>
              <h5>Tuna</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_01"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>에그마요</h4>
              <h5>Egg Mayo</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_02"><a href="#">
              <img src="images/menu/italianbmt.jpeg" alt="">
              <h4>이탈리안 비엠티</h4>
              <h5>Italian B.M.T.™</h5>
              <p>410 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_03"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>비엘티</h4>
              <h5>B.L.T.</h5>
              <p>380 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_04"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>미트볼</h4>
              <h5>Meatball</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_05"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>햄</h4>
              <h5>Ham</h5>
              <p>290 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_06"><a href="#">
              <img src="images/menu/eggmayo.jpeg" alt="">
              <h4>참치</h4>
              <h5>Tuna</h5>
              <p>480 kcal</p>
            </a></li>
        </ul>
      </div>

      <a href="#" class="main_go_up">맨 위로 가기</a>
      <a href="#" class="main_go_down">맨 아래로 가기</a>
    </section>

  </main>
  <!-- // 본문 중간 부분 작성 -->

  <!-- footer starts - include  -->
  <?php include "inc/footer.php"; ?>
  <!-- footer ends - include  -->
</body>

</html>