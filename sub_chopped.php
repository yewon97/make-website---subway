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
  <title>Subway - Chopped</title>
</head>

<body>
<!-- header starts - include -->
<?php include "inc/header.php"; ?>
<!-- header ends - include -->
  
<!-- 본문 중간 부분 작성 -->
<main class="content" id="content">

  <section class="top_banner_img" style="background-color: #099031;"> 
    <div class="top_img_size" style="background: url(images/introduceMenu/img_visual_salad01.jpeg) 105% 0 no-repeat, url(images/introduceMenu/img_visual_salad02.jpeg) -10% 0 no-repeat;">
      <div class="top_lnb">
        <ul>
          <li class="top_lnb_01"><a href="sub_sandwich.php">샌드위치</a></li>
          <li class="top_lnb_02"><a href="sub_wrap.php">랩 ・ 기타</a></li>
          <li class="top_lnb_03"><a href="#">찹샐러드</a></li>
          <li class="top_lnb_04"><a href="sub_morning.php">아침메뉴</a></li>
          <li class="top_lnb_05"><a href="sub_smile.php">스마일 썹</a></li>
        </ul>
      </div>
      <h2>Chopped Salad</h2>
      <p>양은 더 많이! 칼로리는 더 적게!<br>신선한 야채와 다양한 소스로 가볍게 찹샐러드를 즐겨보세요!</p>
    </div>
    <div class="bottom_lnb">
      <ul>
        <li class="bottom_lnb_01"><a href="#">클래식</a></li>
        <li class="bottom_lnb_02"><a href="#">프레쉬&라이트</a></li>
        <li class="bottom_lnb_03"><a href="#">프리미엄</a></li>
        <li class="bottom_lnb_04"><a href="#">신제품</a></li>
      </ul>
    </div>
  </section>

  <div class="top_lnb_underline"></div> 

  <section class="main_menu_intro">
    <div class="classic_sand">
      <h3 class="menu_intro_title">클래식</h3>
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
      </ul>
    </div>

    <div class="fresh_sand">
      <h3 class="menu_intro_title">프레쉬&라이트</h3>
      <ul>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>로스트 치킨</h4>
            <h5>Roasted Chicken</h5>
            <p>320 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>로티세리 바비큐 치킨</h4>
            <h5>Rotisserie Barbecue Chicken</h5>
            <p>350 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>써브웨이 클럽</h4>
            <h5>Subway Club™</h5>
            <p>293 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>터키</h4>
            <h5>Turkey</h5>
            <p>280 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>베지</h4>
            <h5>Veggie Delite</h5>
            <p>230 kcal</p>
          </a></li>
      </ul>
    </div>

    <div class="premium_sand">
      <h3 class="menu_intro_title">프리미엄</h3>
      <ul>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>쉬림프</h4>
            <h5>Shrimp</h5>
            <p>229 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>K-바비큐</h4>
            <h5>K-BBQ</h5>
            <p>372 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>풀드 포크 바비큐</h4>
            <h5>Pulled Pork Barbecue</h5>
            <p>327 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>스테이크 & 치즈</h4>
            <h5>Steak & Cheese</h5>
            <p>380 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>터키 베이컨 아보카도</h4>
            <h5>Turkey Bacon Avocado</h5>
            <p>420 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>스파이시 이탈리안</h4>
            <h5>Spicy Italian</h5>
            <p>480 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>치킨 데이야끼</h4>
            <h5>Chicken Teriyaki</h5>
            <p>370 kcal</p>
          </a></li>
      </ul>
    </div>

    <div class="new_sand">
      <h3 class="menu_intro_title">신제품</h3>
      <ul>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>썹도그</h4>
            <h5>SUB DOG</h5>
            <p>544 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>더블치즈 썹도그</h4>
            <h5>Double Cheese SUB DOG</h5>
            <p>624 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>아보카도 썹도그</h4>
            <h5>Avocado SUB DOG</h5>
            <p>610 kcal</p>
          </a></li>
        <li class="menu_intro_boxes"><a href="#">
            <img src="images/menu/eggmayo.jpeg" alt="">
            <h4>페퍼 치킨 슈니첼</h4>
            <h5>Pepper Chicken Schnitzel</h5>
            <p>472 kcal</p>
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