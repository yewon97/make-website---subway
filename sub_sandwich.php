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

      // 맨위로 가기
      $(window).scroll(function() {
          if ( $( this ).scrollTop() > 200 ) {
            $( '.remote--top' ).fadeIn();
          } else {
            $( '.remote--top' ).fadeOut();
          }
        } );
        $( '.remote--top' ).click( function() {
          $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
          return false;
        } );
    });
  </script>
  <title>Subway - Sandwich</title>
</head>

<body>
  <!-- header starts - include -->
  <?php include "inc/header.php"; ?>
  <!-- header ends - include -->
  
  <!-- 본문 중간 부분 작성 -->
  <main class="content" id="content">

    <section class="top_banner_img" style='background-color:#E95B1D;'>
      <div class="top_img_size" style="background: url(images/introduceMenu/img_visual_sandwich.jpeg) 50% 0 no-repeat;">
        <div class="top_lnb">
          <ul>
            <li class="top_lnb_01"><a href="#">샌드위치</a></li>
            <li class="top_lnb_02"><a href="sub_wrap.php">랩 ・ 기타</a></li>
            <li class="top_lnb_03"><a href="sub_chopped.php">찹샐러드</a></li>
            <li class="top_lnb_04"><a href="sub_morning.php">아침메뉴</a></li>
            <li class="top_lnb_05"><a href="sub_smile.php">스마일 썹</a></li>
          </ul>
        </div>
        <h2>Sandwich</h2>
        <p>전세계 넘버원 브랜드 Subway!<br>50년 전통의 세계 최고의 샌드위치를 맛보세요!</p>
      </div>
      <div class="bottom_lnb">
        <ul>
          <li class="bottom_lnb_01"><a href="#classic">클래식</a></li>
          <li class="bottom_lnb_02"><a href="#freshLight">프레쉬&라이트</a></li>
          <li class="bottom_lnb_03"><a href="#premium">프리미엄</a></li>
          <li class="bottom_lnb_04"><a href="#new">신제품</a></li>
        </ul>
      </div>
    </section>

    <div class="top_lnb_underline"></div>

    <section class="main_menu_intro">
      <div class="classic_sand">
        <h3 class="menu_intro_title" id="classic">클래식</h3>
        <ul>
          <li class="menu_intro_boxes classic_sand_01"><a href="#">
              <img src="images/sandwich/classic/sandwich_egg.jpg" alt="에그마요">
              <h4>에그마요</h4>
              <h5>Egg Mayo</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_02"><a href="#">
              <img src="images/sandwich/classic/sandwich_bmt.jpg" alt="이탈리안 비엠티">
              <h4>이탈리안 비엠티</h4>
              <h5>Italian B.M.T.™</h5>
              <p>410 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_03"><a href="#">
              <img src="images/sandwich/classic/sandwich_blt.jpg" alt="비엘티">
              <h4>비엘티</h4>
              <h5>B.L.T.</h5>
              <p>380 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_04"><a href="#">
              <img src="images/sandwich/classic/sandwich_meat.png" alt="미트볼">
              <h4>미트볼</h4>
              <h5>Meatball</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_05"><a href="#">
              <img src="images/sandwich/classic/sandwich_ham.jpg" alt="햄">
              <h4>햄</h4>
              <h5>Ham</h5>
              <p>290 kcal</p>
            </a></li>
          <li class="menu_intro_boxes classic_sand_06"><a href="#">
              <img src="images/sandwich/classic/sandwich_tuna.jpg" alt="참치">
              <h4>참치</h4>
              <h5>Tuna</h5>
              <p>480 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="fresh_sand">
        <h3 class="menu_intro_title" id="freshLight">프레쉬&라이트</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/freshLight/sandwich_roasted.png" alt="로스트 치킨">
              <h4>로스트 치킨</h4>
              <h5>Roasted Chicken</h5>
              <p>320 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/freshLight/sandwich_rotisserie.jpg" alt="로티세리 바비큐 치킨">
              <h4>로티세리 바비큐 치킨</h4>
              <h5>Rotisserie Barbecue Chicken</h5>
              <p>350 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/freshLight/sandwich_club.png" alt="써브웨이 클럽">
              <h4>써브웨이 클럽</h4>
              <h5>Subway Club™</h5>
              <p>293 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/freshLight/sandwich_turkey.jpg" alt="터키">
              <h4>터키</h4>
              <h5>Turkey</h5>
              <p>280 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/freshLight/sandwich_veggie.jpg" alt="베지">
              <h4>베지</h4>
              <h5>Veggie Delite</h5>
              <p>230 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="premium_sand">
        <h3 class="menu_intro_title" id="premium">프리미엄</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/premium/sandwich_shrimp.jpg" alt="쉬림프">
              <h4>쉬림프</h4>
              <h5>Shrimp</h5>
              <p>229 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/premium/sandwich_kbbq.jpg" alt="K-바비큐">
              <h4>K-바비큐</h4>
              <h5>K-BBQ</h5>
              <p>372 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/premium/sandwich_pulled.jpg" alt="풀드 포크 바비큐">
              <h4>풀드 포크 바비큐</h4>
              <h5>Pulled Pork Barbecue</h5>
              <p>327 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/premium/sandwich_steak.jpg" alt="스테이크 & 치즈">
              <h4>스테이크 & 치즈</h4>
              <h5>Steak & Cheese</h5>
              <p>380 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/premium/sandwich_turkeyAvo.jpg" alt="터키 베이컨 아보카도">
              <h4>터키 베이컨 아보카도</h4>
              <h5>Turkey Bacon Avocado</h5>
              <p>420 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/premium/sandwich_spicy.jpg" alt="스파이시 이탈리안">
              <h4>스파이시 이탈리안</h4>
              <h5>Spicy Italian</h5>
              <p>480 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/premium/sandwich_teriyaki.jpg" alt="치킨 데이야끼">
              <h4>치킨 데이야끼</h4>
              <h5>Chicken Teriyaki</h5>
              <p>370 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="new_sand">
        <h3 class="menu_intro_title" id="new">신제품</h3>
        <ul>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/new/sandwich_dog.png" alt="썹도그">
              <h4>썹도그</h4>
              <h5>SUB DOG</h5>
              <p>544 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/new/sandwich_doubleDog.png" alt="더블치즈 썹도그">
              <h4>더블치즈 썹도그</h4>
              <h5>Double Cheese SUB DOG</h5>
              <p>624 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/new/sandwich_avoDog.png" alt="아보카도 썹도그">
              <h4>아보카도 썹도그</h4>
              <h5>Avocado SUB DOG</h5>
              <p>610 kcal</p>
            </a></li>
          <li class="menu_intro_boxes"><a href="#">
              <img src="images/sandwich/new/sandwich_pepper.png" alt="페퍼 치킨 슈니첼">
              <h4>페퍼 치킨 슈니첼</h4>
              <h5>Pepper Chicken Schnitzel</h5>
              <p>472 kcal</p>
            </a></li>
        </ul>
      </div>

      <div class="remote__container">
        <a href="#" class="remote--top">맨 위로 가기</a>
      </div>
    </section>

  </main>

  <!-- footer starts - include  -->
  <?php include "inc/footer.php"; ?>
  <!-- footer ends - include  -->
</body>

</html>