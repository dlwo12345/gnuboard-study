<!DOCTYPE html>
<!-- ie8이하에서 접속 했을때 다른페이지로 보내버리기 X-UA-Compatible와 충돌 이슈가 있다고 하여 문서 상단에 삽입하였음-->
<!--[if lte IE 8]>
    <script type="text/javascript">
        window.location="http://naver.com"; 
    </script>
<![endif]-->
<html lang="ko">
  <head>
    <!-- charset 설정 -->
    <meta charset="UTF-8">
    <!-- ie 호환성보기 무시 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 모바일을 위한 viewport설정 -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title>반응형 홈페이지</title>
    <!-- 웹 아이콘 연결 -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- 초기화 코드 연결 -->
    <link rel="stylesheet" href="./css/common.css">
    <!-- 메인css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- 벤더프리픽스 한번에 해결해주는 스크립트 -->
    <script src="js/prefixfree.min.js"></script>
    <!-- jquery -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- 메인 script -->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function(){
            menu();
            slide();
            mobile_menu();
        });  
    </script>
  </head>

  <body>
    <!-- 헤더 불러오기 -->
    <?php include "./header.php" ?>
      <section class="section_slide">
        <ul class="slide_panel clear">
          <li class="fl">
              <img src="img/visual/cm.jpg" alt="슬라이드이미지1">
          </li>
          <li class="fl"><img src="img/visual/new.jpg" alt="슬라이드이미지2"></li>
          <li class="fl"><img src="img/visual/product.jpg" alt="슬라이드이미지3"></li>
        </ul>
        <ul class="slide_dot clear">
          <li class="on fl">슬라이드 버튼1번</li>
          <li class="fl">슬라이드 버튼2번</li>
          <li class="fl">슬라이드 버튼3번</li>
        </ul>
        <div class="slide_prev"><i class="fa fa-angle-left fa-5x" aria-hidden="true"></i></div>
        <div class="slide_next"><i class="fa fa-angle-right fa-5x" aria-hidden="true"></i></div>
      </section>
    

      <section class="content">
        <section class="cont1">
          <h2 class="hide">section1영역입니다</h2>
          <div class="cont1_top clear">
              <span class="fl">
                고객의 불만 하나하나에 귀 기울겠습니다 문의사항은 언제든지 문의 남겨주시면 친절하게 답변 드리겠습니다.
              </span>
              <a class="fr" href="#contact_form">온라인 문의하기</a>
          </div>
          <div class="br_event_wrap">
            <h3 class="hide">페이지 소개 영역</h3>
              <ul class="clear">
                <li class="fl">
                  <a href="/gnu1/tabmenu.php"><img src="img/nav/new.jpg">
                    <div class="bk">
                      <p>brand</p>
                    </div>
                  </a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis consequatur mollitia laboriosam similique optio!</p>
                </li>
                <li class="fl">
                  <a href="/gnu1/gallery.php">
                    <img src="img/nav/custom.jpg">
                    <div class="bk">
                      <p>gallery</p>
                    </div>
                  </a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis consequatur mollitia laboriosam similique optio!</p>
                </li>
                <li class="fl">
                  <a href="/gnu1/intro.php"><img src="img/nav/ad.jpg" alt="페이지1 이동">
                    <div class="bk">
                      <p>Directions</p>
                    </div>
                  </a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis consequatur mollitia laboriosam similique optio!</p>
                </li>
                <li class="fl">
                  <a href="/gnu1/bbs/board.php?bo_table=notice"><img src="img/nav/consumer.jpg">
                    <div class="bk">
                      <p>notice</p>
                    </div>
                  </a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis consequatur mollitia laboriosam similique optio!</p>
                </li>
              </ul>
            </div>
        </section>
      </section>
<!-- 폼태그 -->
  <section class="contact_form" id="contact_form">
     <h3>Contact Form</h3>
      <form action="contact_me.php" method="post">
        <label for="name">이름 (필수)</label>
        <input type="text" id="name" name="name" placeholder="이름" required>
        <label for="email">이메일 (필수)</label>
        <input type="email" id="email" name="email" placeholder="이메일" required>
        <label for="phone">전화번호 (필수)</label>
        <input type="tel" id="phone" name="phone" placeholder="전화번호" required>
        <label for="message">문의내용 (필수)</label>
        <textarea id="message" name="message" placeholder="문의내용" required></textarea>
        <input type="submit" value="보내기">
      </form>
    </section>
      <?php include "./footer.php" ?>
  </body>
</html>
