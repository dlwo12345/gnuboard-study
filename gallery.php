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
    <style>
        /*isotope 플러그인 사용*/
        .gallery_cont>h2{
            text-align: center;
            margin-top: 30px;
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .gallery_cont { width:80%; margin:30px auto;}
        .gallery_cont > .gallery_sortbox > li { width:23%; float:left; margin:0 1%; margin-top:50px; }
        .gallery_cont > .gallery_sortbox > li img {width:100%;}
        .gallery_menu {text-align:center; font-size:0px;}
        .gallery_menu>li{
            display:inline-block; width:25%; height:50px; text-align:center; font-size:15px;
        }
        .gallery_menu>li.on>a{
            color:#333; font-weight: bold;
            border-bottom: 3px solid #333;
        }
        .gallery_menu>li>a {
            color:#666; display:block; line-height:50px; height:50px;
            border-bottom: 1px solid #aaa;
            position: relative;
        }
        .gallery_menu>li.on>a:after {
            content: ""; display: block;
            position: absolute;
            bottom: -9px; left: 50%;
            transform: translateX(-50%);
            width: 0; height: 0;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-top: 7px solid #000;
        }
        @media screen and (max-width:1280px) {
            .gallery_cont > .gallery_sortbox>li {width:48%; float:left; margin:0 1%; margin-top:30px;}
        }
        @media screen and (max-width:1024px) {
            .gallery_cont>.gallery_sortbox>li { width:48%; float:left; margin:0 1%; margin-top:30px; }
        }
        @media screen and (max-width:768px) {
            .gallery_cont > .gallery_sortbox > li { width:100%; float:none; margin:0; margin-top:20px; }
        }

        /*isotope 플러그인 끝*/  
    </style>
    <!-- 벤더프리픽스 한번에 해결해주는 스크립트 -->
    <script src="js/prefixfree.min.js"></script>
    <!-- jquery -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- 메인 script -->
    <script src="js/main.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script>
        
        /* 이미지 로딩받아오는데 시간차이 해결을 위해서 ready-> load로 변경 */
        $(window).load(function(){
            menu();
            mobile_menu();
            
            /*isotope 시작*/
                $(".gallery_sortbox").isotope({ // 정렬할 박스들 감싸는 부모 클래스 이름
                  // options
                  itemSelector: '.all', // 정렬할 박스들 클래스 이름
                  layoutMode: 'fitRows' // 정렬시 옵션
                });
                            
                $(".gallery_menu li").click(function(e){ // 버튼 클릭 시
                    e.preventDefault(); // a태그 기능 정지
                    $(".gallery_menu li").removeClass("on"); // 활성화되어있는 버튼 클래스on제거
                    $(this).addClass("on"); // 클릭한 버튼 활성화
                    var selector = $(this).attr('data-filter'); 
                    // 정렬시킬 박스들의 클래스 이름 받아오기
                    $(".gallery_sortbox").isotope({ filter: selector });
                    // 정렬시작 구문
	            });
            /*isotope 끝*/
        });
    </script>
  </head>

  <body>
    <!-- 헤더 불러오기 -->
    <?php include "./header.php" ?>
    <section class="section_top">
        <img src="/gnu1/img/gallery/bg2.jpg" alt="">
    </section>
    <!--isotope 시작 -->
    <section class="gallery_cont">
        <h2>갤러리</h2>
        <ul class="gallery_menu">
            <li class="on" data-filter="*"><a href="#">Watch1</a></li>
            <li data-filter=".watch1"><a href="#">Watch2</a></li>
            <li data-filter=".watch2"><a href="#">Watch3</a></li>
            <li data-filter=".watch3"><a href="#">Watch4</a></li>
        </ul>
        <ul class="gallery_sortbox clear">
           
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery28.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery29.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery52.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery53.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery54.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery55.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery56.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery57.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery58.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery6.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery7.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery8.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery9.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery25.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery26.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery27.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery10.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery11.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery12.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery13.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery14.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery19.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery20.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery21.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery22.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery46.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery47.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery48.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery49.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery50.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery51.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery23.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery24.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery30.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery15.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery16.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery17.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery18.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery31.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery32.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery33.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery34.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery35.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery36.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery37.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery38.jpg" alt=""></a></li>
           <li class="all watch2"><a href="#"><img src="img/gallery/gallery39.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery1.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery2.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery3.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery4.jpg" alt=""></a></li>
           <li class="all watch1"><a href="#"><img src="img/gallery/gallery5.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery40.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery41.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery42.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery43.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery44.jpg" alt=""></a></li>
           <li class="all watch3"><a href="#"><img src="img/gallery/gallery45.jpg" alt=""></a></li>
        </ul>
    </section>
    <!--isotope 끝 -->
      <?php include "./footer.php" ?>
  </body>
</html>
