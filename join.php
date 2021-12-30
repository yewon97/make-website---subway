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
          <li class="login__tab">
            <a href="login.php">로그인</a>
          </li>
          <li class="join__tab on_join">
            <a href="join.php">회원가입</a>
          </li>
        </ul>
      </div>

      <form class="join_form" name="join_form" action="insert.php" method="post" onsubmit="return form_check()">
        <fieldset>
          <legend class="hide">회원가입</legend>

          <p class="login-join__comment">
            이 사이트는 포트폴리오용으로 제작된 사이트임을<br>
            다시 한번 알립니다.
          </p>

          <p class="join-id__wrapper">
            <label for="u_id" class="txt">아이디</label>
            <input type="text" name="u_id" id="u_id" class="u_id" readonly placeholder="아이디 입력(4~12글자)">
            <button type="button" class="btn" onclick="id_search()">중복체크</button>
            <br>
            <span class="err_id">* 아이디는 4~12글자만 입력할 수 있습니다.</span>
          </p>

          <p class="join-pwd__wrapper">
            <label for="pwd" class="txt">비밀번호</label>
            <input type="password" name="pwd" id="pwd" class="pwd" placeholder="비밀번호 입력(8자 이상)">
            <br>
            <span class="err_pwd">* 비밀번호는 4~8글자만 입력할 수 있습니다.</span>
          </p>

          <p class="join-repwd__wrapper">
            <label for="repwd" class="txt">비밀번호 확인</label>
            <input type="password" name="repwd" id="repwd" class="repwd" placeholder="비밀번호 확인">
            <br>
            <span class="err_repwd"></span>
          </p>

          <p class="join-agree_wrapper">
            <input type="checkbox" name="agree" id="agree" value="y">
            <label for="agree">약관 동의</label>
          </p>

          <p class="join-submit__wrapper">
            <button type="submit" class="btn">회원가입 하기</button>
          </p>
        </fieldset>
      </form>

    </section>
    <!-- login section ends -->
  </main>

  <!-- footer starts - include  -->
  <?php include "inc/footer.php"; ?>
  <!-- footer ends - include  -->

  <!-- javascript starts -->
  <!-- javascript ends -->
</body>

</html>