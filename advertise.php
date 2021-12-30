<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/advertise.css" type="text/css">
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
      <li><a href="event.php">이벤트・프로모션</a></li>
      <li><a href="#">뉴스・공지사항</a></li>
      <li><a href="#">광고영상</a></li>
    </ul>
  </div>

  <main>

    <h2 class="advertise__title">광고영상</h2>

    <section class="top-advertise__container">
      <iframe width="1170" height="658" src="https://www.youtube.com/embed/NxHvRyBsXuQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <section class="bottom-advertise-container">
      <h3 class="advertise__list__title">영상 목록</h3>
      <ul>
        <li class="advertise__box">
          <a href="#">
            <img src="images/advertise-list-1.jpg" alt="써브웨이 울트라 치즈 티징 '6" class="advertise__box--img">
            <div class="advertise__box--info">
              <h4>써브웨이 울트라 치즈 티징 '6</h4>
            </div>
          </a>
        </li>
        <li class="advertise__box">
          <a href="#">
            <img src="images/advertise-list-2.jpg" alt="써브웨이 울트라 치즈 티징 '15" class="advertise__box--img">
            <div class="advertise__box--info">
              <h4>써브웨이 울트라 치즈 티징 '15</h4>
            </div>
          </a>
        </li>
        <li class="advertise__box">
          <a href="#">
            <img src="images/advertise-list-3.jpg" alt="" class="advertise__box--img">
            <div class="advertise__box--info">
              <h4>싸운드라마 [고부갈등]편 110'</h4>
            </div>
          </a>
        </li>
        <li class="advertise__box">
          <a href="#">
            <img src="images/advertise-list-4.jpg" alt="" class="advertise__box--img">
            <div class="advertise__box--info">
              <h4>써브웨이에서 만나는 슈니첼은!? full</h4>
            </div>
          </a>
        </li>
        <li class="advertise__box">
          <a href="#">
            <img src="images/advertise-list-5.jpg" alt="" class="advertise__box--img">
            <div class="advertise__box--info">
              <h4>스파이시 쉬림프 바이럴 60'</h4>
            </div>
          </a>
        </li>
        <li class="advertise__box">
          <a href="#">
            <img src="images/advertise-list-6.jpg" alt="" class="advertise__box--img">
            <div class="advertise__box--info">
              <h4>말이 안 나올 땐 손으로 주문하자!</h4>
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