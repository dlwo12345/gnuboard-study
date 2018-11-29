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
        #section_gmap {
            width:100%; height: 450px;
            border:solid 1px #ccc;
          }
        .company_section{
            max-width: 1024px; margin: 30px auto;
        }
        .company_section>h3{
            text-align: center;
            margin-bottom: 20px;
        }

        @media screen and (max-width:1024px) {
            .company_section{
                max-width: 640px;
            }
        }
        @media screen and (max-width:640px) {
            .company_section{
                max-width: 368px;
            }
        }
        
    </style>
    <!-- 벤더프리픽스 한번에 해결해주는 스크립트 -->
    <script src="js/prefixfree.min.js"></script>
    <!-- jquery -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- 메인 script -->
    <script src="js/main.js"></script>
    <script>
        
        /* 이미지 로딩받아오는데 시간차이 해결을 위해서 ready-> load로 변경 */
        $(document).ready(function(){
            menu();
            mobile_menu();
        });
    </script>
  </head>

  <body>
    <!-- 헤더 불러오기 -->
    <?php include "./header.php" ?>
    <section class="section_top">
        <img src="/gnu1/img/gallery/bg2.jpg" alt="">
    </section>
    <section class="company_section">
        <h3>찾아 오시는길</h3>
        <div id="section_gmap"></div>
    </section>
    
    
    
    <!-- 푸터 불러오기 -->
    <?php include "./footer.php" ?>
    <!-- 구글지도 -->
    <script src="./js/gmap.js"></script>
    <!-- 구글지도 키값 받아오기 -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBWpV2qGQfGOwGNQkillXD3-H3OfHjikQ&callback=initMap"></script>
  </body>
</html>
