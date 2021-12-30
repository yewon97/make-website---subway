<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/login-join.css" type="text/css" />
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
  <title>로그인・회원가입</title>
</head>

<body>
  <!-- header starts - include -->
  <?php include "inc/header.php"; ?>
  <!-- header ends - include -->

  <main class="container">

    <!-- login section starts -->
    <section class="login box show">

      <div class="login-join__tab">
        <ul>
          <li class="login__tab on_login">
            <a href="login.php">로그인</a>
          </li>
          <li class="join__tab">
            <a href="join.php">회원가입</a>
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
  <?php include "inc/footer.php"; ?>
  <!-- footer ends - include  -->

  <!-- javascript starts -->
  <!-- javascript ends -->
</body>

</html>