<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/event.css" type="text/css">
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      // navbar 만들기
      <?php include "js/menubar.js"; ?>
    });
  </script>
  <title>이벤트・프로모션</title>
</head>

<body>
  <!-- header starts - include -->
  <?php include "inc/header.php"; ?>
  <!-- header ends - include -->

  <div class="lnb__container">
    <ul>
      <li><a href="#">이벤트・프로모션</a></li>
      <li><a href="#">뉴스・공지사항</a></li>
      <li><a href="advertise.php">광고영상</a></li>
    </ul>
  </div>

  <main>

    <h2 class="event__title">이벤트・프로모션</h2>

    <section class="top-event__container">
      <div class="event__container--right">
        <img src="images/event_img_1.jpg" alt="이달의 썹! 프라이즈! 가볍게 즐기는 JOYFUL HOLIDAY WITH SUB!PRISE">
      </div>
      <div class="event__container--left">
        <p class="left__date">2021.11.01~2022.01.02</p>
        <p class="left__title">이달의 썹! 프라이즈!</p>
        <p class="left__content">가볍게 즐기는 JOYFUL HOLIDAY WITH SUB!PRISE</p>
        <div class="event__button--detail"></div>
      </div>

    </section>

    <section class="bottom-event-container">
      <h3 class="event__list__title">이벤트 목록</h3>
      <ul>
        <li class="event__box">
          <a href="#">
            <img src="./images/event_box_1.jpg" alt="" class="event__box--img">
            <div class="event__box--info">
              <h4>겨울밤을 따뜻하게 비춰줄 카도 무드 램프</h4>
              <p>2021.12.09 ~ 소진 시</p>
            </div>
          </a>
        </li>
        <li class="event__box">
          <a href="#">
            <img src="images/event_box_2.jpg" alt="" class="event__box--img">
            <div class="event__box--info">
              <h4>이달의 썹! 프라이즈</h4>
              <p>2021.11.01 ~ 2022.01.02</p>
            </div>
          </a>
        </li>
        <li class="event__box">
          <a href="#">
            <img src="images/event_box_3.jpg" alt="" class="event__box--img">
            <div class="event__box--info">
              <h4>치즈가 3배면, 만족은 몇배?</h4>
              <p>2021.11.01 ~ 2022.01.02</p>
            </div>
          </a>
        </li>
        <li class="event__box">
          <a href="#">
            <img src="images/event_box_4.jpg" alt="" class="event__box--img">
            <div class="event__box--info">
              <h4>SUB DOG! 써브웨이와 쟌슨빌의 썹띵!</h4>
              <p>2021.09.06~한정 판매</p>
            </div>
          </a>
        </li>
        <li class="event__box">
          <a href="#">
            <img src="images/event_box_5.jpg" alt="" class="event__box--img">
            <div class="event__box--info">
              <h4>써브웨이 아침메뉴!</h4>
              <p>2020.11.16 ~</p>
            </div>
          </a>
        </li>
        <li class="event__box">
          <a href="#">
            <img src="images/event_box_6.jpg" alt="" class="event__box--img">
            <div class="event__box--info">
              <h4>말이 안 나올 땐 손으로 주문하자!</h4>
              <p>2020.10.16 ~</p>
            </div>
          </a>
        </li>
      </ul>
    </section>

  </main>

  <!-- footer starts - include  -->
  <?php include "inc/footer.php"; ?>
  <!-- footer ends - include  -->
</body>

</html>