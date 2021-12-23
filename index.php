<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      // navbar 만들기
      <?php include "js/menubar.js"; ?>

      // quick menu
      $(".subway-quick-menu-top li").click(function () {
        var idx = $(this).index();
        $(".subway-quick-menu-cont li").hide();

        $(".subway-quick-menu-cont li").eq(idx).show();
      });
    });
  </script>
  <title>SUBWAY</title>
</head>

<body>
  <!-- header starts - include -->
  <?php include "inc/header.php"; ?>
  <!-- header ends - include -->

  <!-- main 영역 -->
  <main>
    <!-- Event Banner 영역 -->
    <section class="event-banner">
      <div class="event-banner-wrapper">
        <img src="images/eventBanner_pepperChicken.png" alt="새로운 페퍼 치킨 슈니첼을 출시했습니다. 페퍼치킨 슈니첼을 자세히 보시겠습니까?" />
      </div>
      <div class="banner-arrows">
        <a href="#" class="banner_prevArrow">이전</a>
        <a href="#" class="banner_nextArrow">다음</a>
      </div>
    </section>

    <!-- Quick 영역 -->
    <section class="quick-section">
      <!-- Subway Quick Menu -->
      <article class="subway-quick-menu">
        <h2 class="menu-title">Subway's Menu</h2>
        <ul class="subway-quick-menu-top">
          <li><a href="#">클래식</a></li>
          <li><a href="#">프레쉬&라이트</a></li>
          <li><a href="#">프리미엄</a></li>
          <li><a href="#">아침메뉴</a></li>
        </ul>

        <ul class="subway-quick-menu-cont">
          <li class="classic-menu">
            <dl class="classic-cont1">
              <img class="img_size" src="images/sandwich_egg.jpg" alt="에그마요" />
              <dt>에그마요</dt>
              <dd>
                부드러운 달걀과 고소한 마요네즈가 만나<br />
                더 부드러운 스테디셀러
              </dd>
            </dl>
            <dl class="classic-cont2">
              <img class="img_size" src="images/sandwich_bmt.jpg" alt="이탈리안 비엠티" />
              <dt>이탈리안 비엠티</dt>
              <dd>페퍼로니, 살라미 그리고 햄이 만들어내는 최상의 조화!<br />전세계가 사랑하는 써브웨이의 베스트셀러!<br />Biggest Meatiest Tastiest, its’ B.M.T!
              </dd>
            </dl>
            <dl class="classic-cont3">
              <img class="img_size" src="images/sandwich_blt.jpg" alt="비엘티" />
              <dt>비엘티</dt>
              <dd>오리지널 아메리칸 스타일 베이컨의<br />풍미와 바삭함 그대로~</dd>
            </dl>
            <dl class="classic-cont4">
              <img class="img_size" src="images/sandwich_meat.png" alt="미트볼" />
              <dt>미트볼</dt>
              <dd>이탈리안 스타일 비프 미트볼에<br />써브웨이만의 풍부한 토마토 향이 살아있는<br />마리나라소스를 듬뿍</dd>
            </dl>
          </li>
          <li class="fresh-menu">
            <dl class="fresh-cont">
              <img class="img_size" src="images/sandwich_rotisserie.jpg" alt="로티세리 바비큐 치킨" />
              <dt>로티세리 바비큐 치킨</dt>
              <dd>촉촉한 바비큐 치킨의 풍미가득. 손으로 찢어 더욱 부드러운 치킨의 혁명</dd>
            </dl>
            <dl class="fresh-cont">
              <img class="img_size" src="images/sandwich_roasted.png" alt="로스트 치킨" />
              <dt>로스트 치킨</dt>
              <dd>오븐에 구워 담백한 저칼로리 닭가슴살의 건강한 풍미</dd>
            </dl>
            <dl class="fresh-cont">
              <img class="img_size" src="images/sandwich_club.png" alt="써브웨이 클럽" />
              <dt>써브웨이 클럽</dt>
              <dd>명실공히 시그니처 써브! 터키, 햄, 베이컨의 완벽한 앙상블</dd>
            </dl>
            <dl class="fresh-cont">
              <img class="img_size" src="images/sandwich_turkey.jpg" alt="터키" />
              <dt>터키</dt>
              <dd>280kcal로 슬림하게 즐기는 오리지날 터키 샌드위치</dd>
            </dl>
          </li>
          <li class="premium-menu">
            <dl class="premium-cont">
              <img class="img_size" src="images/sandwich_shrimp.jpg" alt="쉬림프" />
              <dt>쉬림프</dt>
              <dd>탱글한 식감이 그대로 살아있는 통새우가 5마리 들어가 한 입 베어 먹을 때 마다 진짜 새우의 풍미가 가득</dd>
            </dl>
            <dl class="premium-cont">
              <img class="img_size" src="images/sandwich_pulled.jpg" alt="풀드 포크 바비큐" />
              <dt>풀드 포크 바비큐</dt>
              <dd>훈연한 미국 스타일의 풀드 포크 바비큐가 가득 들어간 샌드위치</dd>
            </dl>
            <dl class="premium-cont">
              <img class="img_size" src="images/sandwich_steak.jpg" alt="스테이크&치즈" />
              <dt>스테이크&치즈</dt>
              <dd>육즙이 쫙~풍부한 비프 스테이크의 풍미가 입안 한가득</dd>
            </dl>
            <dl class="premium-cont">
              <img class="img_size" src="images/sandwich_turkeyAvo.jpg" alt="터키 베이컨 아보카도" />
              <dt>터키 베이컨 아보카도</dt>
              <dd>담백한 터키와 바삭한 베이컨 환상조합에 부드러운 아보카도는 신의 한수</dd>
            </dl>
          </li>
          <li class="morning-menu">
            <dl class="morning-cont">
              <img class="img_size" src="images/morning_hamEgg.jpg" alt="햄, 에그 & 치즈" />
              <dt>햄, 에그 & 치즈</dt>
              <dd>푹신한 오믈렛과 햄의 가장 클래식한 조화</dd>
            </dl>
            <dl class="morning-cont">
              <img class="img_size" src="images/morning_westernEgg.jpg" alt="웨스턴, 에그 & 치즈" />
              <dt>웨스턴, 에그 & 치즈</dt>
              <dd>토마토, 피망, 양파 세가지 야채가 더해져 더욱 신선한 하루 시작</dd>
            </dl>
            <dl class="morning-cont">
              <img class="img_size" src="images/morning_baconCheese.jpg" alt="베이컨, 에그 & 치즈" />
              <dt>베이컨, 에그 & 치즈</dt>
              <dd>오리지널 아메리칸 스타일 베이컨으로 더욱 풍성한 아침 식사</dd>
            </dl>
            <dl class="morning-cont">
              <img class="img_size" src="images/morning_steakEgg.jpg" alt="스테이크, 에그 & 치즈" />
              <dt>스테이크, 에그 & 치즈</dt>
              <dd>육즙 가득 비프 스테이크로 든든한 아침 식사</dd>
            </dl>
          </li>
        </ul>
      </article>

      <!-- Subway Quick Link -->
      <article class="subway-quick-link">
        <div class="orange-box">
          <h2>샌드위치 아티스트 지원</h2>
          <a href="#">더보기</a>
        </div>
        <div class="yellow-box">
          <h2>고객문의</h2>
          <a href="#">고객 문의하러 가기</a> 
        </div>
        <div class="blue-box">
          <h2>
            써브웨이를<br />제대로<br />
            즐기는 방법
          </h2>
          <a href="#">이용방법</a>
        </div>
        <div class="green_box">
          <img src="images/QRCodeImg.jpg" alt="써브웨이 어플 다운 QR코드" />
          <a href="#">어플 다운받기</a>
          <p class="hide">QR코드를 찍으면 해당 앱스토어로 이동합니다.</p>
        </div>
      </article>
    </section>

    <!-- Announce 영역 -->
    <div class="announce">

      <div class="announce__section">

        <!-- New News -->
        <article class="announce__news">

          <h2>What's New</h2>
          <p>써브웨이의 다양한 소식을 빠르게 전달해드립니다.
            <br>
            써브웨이의 새로운 소식을 확인해보세요!
          </p>
          <ul>
            <li><a href="#">써브웨이와 함께하는 tvN '간떨어지는 동거'</a></li>
            <li><a href="#">써브웨이 2015년 5월 가격 인상 안내</a></li>
            <li><a href="#">써브웨이 고객센터 2021년 설 연휴 휴무 안내</a></li>
          </ul>
          <a href="#" class="new_more">more</a>

        </article>

        <!-- Advertise -->
        <article class="announce__advertise">

          <iframe width="660" height="365" src="https://www.youtube.com/embed/8nQs9XXm5BM" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
          <p class="hide">누가 1분짜리 영상을 끝까지 다보았는가? 풀 버전도 다 보고오란 말이다! 써브웨이 페퍼 치킨 슈니첼</p>
          <p class="hide">영상을 재상하시겠습니까?</p>

        </article>

      </div>

    </div>
  </main>

  <!-- footer starts - include  -->
  <?php include "inc/footer.php"; ?>
  <!-- footer ends - include  -->
</body>

</html>