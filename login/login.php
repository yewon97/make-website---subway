<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/login-join.css" type="text/css" />
  <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      // navbar 만들기
      <?php include "../js/menubar.js"; ?>
    })
  </script>
  <title>로그인・회원가입</title>
</head>

<body>
  <!-- header starts-->
  <header>
    <div class="header-wrapper">
      <h1 class="logo"><a href="../index.php">Subway</a></h1>
      <nav>
        <h2 class="hide">주요 메뉴</h2>
        <ul>
          <li class="first-depth1">
            <a href="#">메뉴소개</a>
            <ul class="second-depth second-depth1">
              <li><a href="../sub_sandwich.php">샌드위치</a></li>
              <li><a href="../sub_wrap.php">랩 ・ 기타</a></li>
              <li><a href="../sub_chopped.php">찹샐러드</a></li>
              <li><a href="../sub_morning.php">아침메뉴</a></li>
              <li><a href="../sub_smile.php">스마일 썹</a></li>
            </ul>
          </li>
          <li class="first-depth2">
            <a href="#">새소식</a>
            <ul class="second-depth second-depth2">
              <li><a href="../event.php">이벤트 ・ 프로모션</a></li>
              <li><a href="#">뉴스 ・ 공지사항</a></li>
              <li><a href="../advertise.php">광고영상</a></li>
            </ul>
          </li>
          <li>
            <a href="../index.php"><img src="../images/logo.png" alt="Subway 홈으로 가기"></a>
          </li>
          <li class="first-depth3">
            <a href="#">이용방법</a>
            <ul class="second-depth second-depth3">
              <li><a href="#">써브웨이 이용방법</a></li>
              <li><a href="#">써브웨이 칼로리 계산기</a></li>
              <li><a href="#">신선한 재료소개</a></li>
            </ul>
          </li>
          <li class="first-depth4">
            <a href="#">써브웨이</a>
            <ul class="second-depth second-depth4">
              <li><a href="#">샌드위치 아티스트 지원</a></li>
              <li><a href="#">써브웨이 약속</a></li>
              <li><a href="#">고객문의</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <div class="util-menu">
        <h2 class="hide">사용자 메뉴</h2>
        <ul>
          <li class="util-cont1"><a href="#">로그인</a></li>
          <li class="util-cont2"><a href="../members/join.php">회원가입</a></li>
          <li class="util-cont3"><a href="#">글로벌 사이트로 이동</a></li>
        </ul>
      </div>
    </div>
    <div class="nav_bg"></div>
  </header>
  <!-- header ends-->

  <main class="container">

    <!-- login section starts -->
    <section class="login box show">

      <div class="login-join__tab">
        <ul>
          <li class="login__tab on_login">
            <a href="#">로그인</a>
          </li>
          <li class="join__tab">
            <a href="../members/join.php">회원가입</a>
          </li>
        </ul>
      </div>

      <form class="login_form" name="login_form" action="login_ok.php" method="post" onsubmit="return login_check()">
        <fieldset>
          
          <legend class="hide">로그인</legend>

          <p class="login-join__comment">
            써브웨이 회원으로 로그인하시면 제공하는<br>
            다양한 서비스를 이용할 수 있습니다.
          </p>
          <p>
            <label for="u_id" class="txt">아이디</label>
            <input type="text" name="u_id" id="u_id" class="u_id" autofocus placeholder="아이디 입력">
            <br>
            <span class="err_id"></span>
          </p>

          <p>
            <label for="pwd" class="txt">비밀번호</label>
            <input type="password" name="pwd" id="pwd" class="pwd" placeholder="비밀번호 입력(영문, 숫자, 특수문자 조합)">
            <br>
            <span class="err_pwd"></span>
          </p>

          <div class="save__checkboxs">

            <ul>
              <li>
                <input type="checkbox" class="save_id" name="save_id" id="save_id">
                <label for="save_id" class="txt">아이디 저장</label>
              </li>
              <li>
                <input type="checkbox" class="save_state" name="save_state" id="save_state">
                <label for="save_state" class="txt">로그인 상태 저장</label>
              </li>
            </ul>

          </div>

          <p class="btn_wrap">
            <button type="submit" class="btn">로그인</button>
          </p>
          <div class="find-link">
            <ul>
              <li><a href="#">아이디 찾기</a></li>
              <li><a href="#">비밀번호 찾기</a></li>
            </ul>
          </div>
        </fieldset>
      </form>

    </section>

  </main>

  <!-- footer starts - include  -->
  <?php include "../inc/footer.php"; ?>
  <!-- footer ends - include  -->

  <!-- javascript starts -->
  <!-- javascript ends -->
</body>

</html>