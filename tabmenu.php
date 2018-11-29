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
        .company_section{
            max-width: 1024px; margin: 30px auto;
        }
        .company_section>h3{
            text-align: center;
            margin-bottom: 20px;
        }
        .tab_btn{width:80%; margin: 0 auto;}
        .tab_btn:after{content: ""; display: block; clear: both;}
        .tab_btn>li{
          float : left;
          display: block;
          width: 25%;
          height: 50px;
          text-align: center;
          line-height: 20px;
          color: white;
        }
        .tab_btn>li>a{
            width: 100%; height: 100%; display: block;
            line-height: 50px;
            position: relative;
            color:#666; border-bottom: 1px solid #aaa;
        }
        .tab_btn>li.on>a{
            color:#333; font-weight: bold;
            border-bottom: 3px solid #333;
        }
        
        
        .tab_btn>li.on>a:after {
            content: ""; display: block;
            position: absolute;
            bottom: -9px; left: 50%;
            transform: translateX(-50%);
            width: 0; height: 0;
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-top: 7px solid #000;
        }
        
        .tab_cont {
          width: 100%;
          margin-top: 50px;
          height: 300px;
          position: relative;
          border: 1px solid #ddd;
        }
        
        .tab_cont > li {
          width: 100%;
          height: 300px;
          position: absolute;
          top: 0px;
          left: 0px;
          display: none;
        }
        
        .tab_cont > li:nth-child(1) {
          display: block;
        }
        
        .tab_cont>li:after{content: ""; display: block; clear: both;}
        
        .tab_cont>li>img{
            width:50%; height: 100%;
        }
        .tab_cont>li>div{
            width: 50%; height: 100%;
            float: right;
            padding: 50px;
        }
        .tab_cont>li>div>h4{
            font-size: 25px;
        }
        .tab_cont>li>div>p{
            padding-top: 30px;
            font-size: 16px;
            color: #727272;
        }
        @media screen and (max-width:1024px) {
            .company_section{
                max-width: 640px;
            }
            .section_top{
                height: 200px;
            }
            .tab_cont {
              height: 550px;
              position: relative;
            }
            .tab_cont>li>img{
                width:100%; height: auto;
            }
            .tab_cont>li>div{
                width: 100%; height: 100%;
                padding: 30px;
            }
        }
        @media screen and (max-width:640px) {
            .tab_btn{width: 100%;}
            .company_section{
                max-width: 368px;
            }
            .section_top{
                height: 70px;
            }
            .tab_cont {
                height: 450px;
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
            
            $(".tab_btn li").click(function(e) {
             e.preventDefault();
             var list = $(this).index();
             $(".tab_btn li").removeClass("on");
             $(this).addClass("on");
             $(".tab_cont > li").hide();
             $(".tab_cont > li").eq(list).show();
           });
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
        <h3>브랜드 소개</h3>
        <div class="tab_wrap">
          <ul class="tab_btn">
            <li class="on"><a href="#">HISTORY</a></li>
            <li><a href="#">Concept</a></li>
            <li><a href="#">Technology</a></li>
            <li><a href="#">Global</a></li>
          </ul>
          <ul class="tab_cont">
            <li>
                <img src="/gnu1/img/gallery/gallery1-1.jpg" alt="">
                <div>
                    <h4>브랜드 이야기</h4>
                    <p>
                        최고의 기술과 완벽한 품질 그리고 합리적인 가격 시계의 정밀도를 최고 300배까지 높여 놓은 전지가 필요없는 키네틱 오토릴레이까지 시계의 기술혁명을 주도하여 온 역사적인 브랜드
                    </p>
                </div>
            </li>
            <li>
                <img src="/gnu1/img/gallery/gallery2-1.jpg" alt="">
                <div>
                    <h4>브랜드 컨셉</h4>
                    <p>
                        타 브랜드와 비교 불가의 깔끔함과 독특한 디자인 세련되고 모던한 느낌을 주는 문자판을 사용하였습니다.
                    </p>
                </div>
            </li>
            <li>
                <img src="/gnu1/img/gallery/gallery3-1.jpg" alt="">
                <div>
                    <h4>독점 기술</h4>
                    <p>더이상, 전세계 어디서든 정확한 시각을 찾으려 할 필요가 없습니다. 독자적인 기술력으로 개발한 저전력 GPS수신기를 이용해 GPS 위성으로부터 타임존과 시간, 날짜, 요일 정보를 자동 수신하는 시계를 개발하였습니다.</p>
                </div>
            </li>
            <li>
                <img src="/gnu1/img/gallery/gallery4-1.jpg" alt="">
                <div>
                    <h4>글로벌 기업</h4>
                    <p>200개국 이상에서 판매되는 저희 브랜드는 특별한 재료, 고급 기능 및 세심한 디자인을 사용해서 전세계의 수많은 나라에서 인정받고 있습니다.</p>
                </div>
            </li>
          </ul>
        </div>
    </section>
    
    
    
    <!-- 푸터 불러오기 -->
    <?php include "./footer.php" ?>
  </body>
</html>
