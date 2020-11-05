<?php if(!defined("__XE__"))exit;
if(!defined("__XE__"))exit;?>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery 최신버전 사용-->
    <script src="/modules/SOSOHAM/SOSOHAMMALL/js/slide.js"></script>
    <script src="/modules/SOSOHAM/SOSOHAMMALL/js/boxContent.js"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            width: 100%;
        }
        a{
            text-decoration: none;
        }
        /* 헤더 */
        header{
            position: fixed;
            width: 100%;
            padding: 8px 0;
            height: 34px;
            border-bottom: 1px solid #e0e0e0;
            background-color: #fff;
            z-index: 98;
        }
        /*상단 메뉴 네비*/
        nav{
            width: 1280px;
            margin: 0 auto;
            font-size: 11px;
            line-height: 3;
            letter-spacing:2px;
        }
        nav a{
            color: #212121;
        }
        nav a:hover{
            color: #9e9e9e;
        }
        nav ul{
            list-style: none;
        }
        .left_nav{
            float: left;
        }
        .left_nav li{
            display: inline-block;
            padding: 0 10px;
        }
        .left_nav li::after{
            content: "";
            width: 1px;
            height: 13px;
            background-color: #c7c7c7;
            position: absolute;
            top: 18px;
            margin-left: 10px;
        }
        .left_nav li:nth-child(5)::after{
            display: none;
        }
        .right_nav{
            float: right;
        }
        .right_nav li{
            display: inline-block;
            padding: 0 10px;
        }
        .right_nav li::after{
            content: "";
            width: 1px;
            height: 13px;
            background-color: #c7c7c7;
            position: absolute;
            top: 18px;
            margin-left: 10px;
        }
        .right_nav li:nth-child(5)::after{
            display: none;
        }
        /*상단 메뉴 네비 끝*/
        #logo{
            width: 100%;
        }
        .inner{
            width: 1280px;
            height: 180px;
            margin: 0 auto;
            padding-top: 80px;
            text-align: center;
        }
        .inner>img:hover{
            opacity: 0.5;
            cursor: pointer;
        }
        .inner>img{
            clear: both;
        }
        .logo_sns{
            text-align: left;
            width: 100%;
        }
        .logo_sns ul{
            margin-top: 30px;
        }
        .logo_sns li{
            display: inline-block;
            cursor: pointer;
        }
        .logo_sns img{
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }
        .search{
            float: right;
            position: relative;
        }
        .search_box{
            width: 200px;
            height: 30px;
            border: 1px solid rgb(128, 128, 128);
            border-radius: 5px;
        }
        .search_box:focus{
            outline: none;
        }
        input{
            vertical-align: middle;
            text-align: center;
        }
        .search_submit{
            background-image: url("/modules/SOSOHAM/SOSOHAMMALL/img/search.png");
            background-size: 100% 100%;
            background-color: #fff;
            cursor: pointer;
            border: none;
            position: relative;
            top: 7px;
            width: 25px;
            height: 25px;
        }
        .logo_nav{
            background-color: #fff;
            min-width: 1280px;
            border-top: 3px solid #212121;
            height: 50px;
            z-index: 99;
        }
        .logo_navInner{
            width: 1280px;
            margin: 0 auto;
            padding: 10px;
            text-align: center;
            position: relative;
        }
        .logo_navInner::after{
            clear: both;
        }
        .logo_navInner ul{
            width: 1250px;
            list-style: none;
            float: left;
        }
        .toggle_menu{
            cursor: pointer;
        }
        .logo_navInner li{
            padding-top: 2px;
            width: 100px;
            height: 30px;
            display: inline-block;
            text-align: center;
            margin: 0 10px;
            font-size: 13px;
            font-weight: bold;
        }
        .logo_navInner a, .logo_navInnera:visited{
            color: black;
        }
        .toggle_nav{
            position: absolute;
            width: 1280px;
            height: 300px;
            background-color: #fff;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 10;
            display: none;
            border: 1px solid #c7c7c7;
            border-radius: 0 0 10px 10px;
        }
        .toggle_navInner ul{
            text-align: center;
            height: 150px;
            width: 315px;
            display: inline-block;
            list-style: none;
            letter-spacing: 3px;
        }
        .toggle_navInner li{
            margin-top: 15px;
        }
        .toggle_navInner ul:nth-child(1)::after{
            content: "";
            width: 1px;
            height: 200px;
            background-color: #d8d8d8;
            position: absolute;
            top: 30px;
            left: 300px;
        }
        .toggle_navInner ul:nth-child(2)::after{
            content: "";
            width: 1px;
            height: 200px;
            background-color: #d8d8d8;
            position: absolute;
            top: 30px;
            left: 650px;
        }
        .toggle_navInner ul:nth-child(3)::after{
            content: "";
            width: 1px;
            height: 200px;
            background-color: #d8d8d8;
            position: absolute;
            top: 30px;
            right: 300px;
        }
        .toggle_navInner hr{
            margin: 5px auto;
            height: 2px;
            width: 100px;
            background-color: black;
        }
        .toggle_navInner a, .toggle_navInner a:visited{
            color: rgb(128, 128, 128);
            font-size: 16px;
        }
        .toggle_navInner a:hover{
            color: #000;
            font-weight: bold;
        }
        #section1{
            min-width: 1280px;
            height: 700px;
            overflow: hidden;
            position: relative;
            z-index: 9;
        }
        .slide{
            width: 100%;
            height: 700px;
            position: relative;
        }
        .slide::after{
            position: relative;
        }
        .slide>li{
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }
        #section1 img{
            width: 100%;
            height: 700px;
        }
        .dot{
            width: 100%;
            position: absolute;
            text-align: center;
            z-index: 30;
            bottom: 30px;
        }
        .dot li{
            cursor: pointer;
            border-radius: 5px;
            display: inline-block;
            margin: 0 10px;
            width: 30px;
            height: 8px;
            text-indent: -999999px;
            background-color: #fff;
        }
        .dot li.on{
            background-color: #414040;
        }
        .left_btn{
            position:absolute;
            z-index: 10;
            top: 0;
            left: 0;
            color: rgba(128,128,128);
            width: 100px;
            height: 100%;
            cursor: pointer;
        }
        .left_btn:hover{
            background: linear-gradient( to left, transparent,  rgba(255,255,255,0.3) );
            color: #fff;
        }
        .left_btn h1{
            z-index: 11;
            position: relative;
            margin-left: 10px;
            font-size: 50px;
            top: 50%;
            font-weight: lighter;
        }
        .right_btn{
            position:absolute;
            z-index: 10;
            top: 0;
            right: 0;
            color: rgba(128,128,128);
            text-align: right;
            width: 100px;
            height: 100%;
            cursor: pointer;
        }
        .right_btn:hover{
            background: linear-gradient( to right, transparent,  rgba(255,255,255,0.3) );
            color: #fff;
        }
        .right_btn h1{
            z-index: 11;
            position: relative;
            margin-right: 10px;
            font-size: 50px;
            top: 50%;
            font-weight: lighter;
        }
        #section2{
            min-width: 1280px;
            height: 700px;
            padding: 100px 0;
            margin: 0 auto;
            text-align: center;
        }
        .se2_main h1{
            font-size: 30px;
        }
        .serveTitle{
            color: #979797;
            font-size: 13px;
        }
        .se2_box{
            width: 1280px;
            height: 350px;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid #979797;
            box-shadow: 1px 1px 3px gray;
        }
        .box_title{
            width: 1280px;
            position: relative;
            list-style: none;
            font-size: 0;
        }
        .box_title li{
            display: inline-block;
            padding: 10px 0;
            width: 319.2px;
            height: 20px;
            background-color: #dadada;
            border-bottom: 2px solid #000;
            border-right: 1px solid #979797;
            color: rgb(99, 99, 99);
            font-size: 15px;
            letter-spacing: 2px;
            cursor: pointer;
        }
        .box_title li:nth-child(4){
            border-right: none;
        }
        .box_title li.on2{
            background-color:#fff;
            border-bottom:none;
            color: #000;
            font-weight: bold;
        }
        .box_content{
            position: absolute;
            width: 1278px;
            height: 300px;
            border-top: 2px solid #fff;
        }
        .box_content ul{
            margin: 35px 0;
            list-style: none;
        }
        .box_content li{
            margin: 0 20px;
            display: inline-block;
            position: relative;
            overflow: hidden;
            width: 200px;
            height:230px;
        }
        .box_content li:hover .caption{
            transform: translateY(-115px);
        }
        .box_content img{
            width: 200px;
            height: 230px;
            border-radius: 5px
        }
        .box_1{
            display: block;
        }
        .box_2{
            display: none;
        }
        .box_3{
            display: none;
        }
        .box_4{
            display: none;
        }
        .caption{
            position: absolute;
            width: 200px;
            height: 230px;
            content: "";
            background-color: rgba(0,0,0,0.4);
            background-size: 100% 100%;
            z-index: 45;
            color: #fff;
            transition: all ease-in-out 0.5s;
        }
        .caption h3{
            font-size: 25px;
        }
        .caption p{
            font-size: 13px;
        }
    </style>
    <!--상당 메뉴바-->
    <header>
        <!--네비게이션 시작-->
        <nav>
            <div class="left_nav">
                <ul>
                    <li>
                        <a href="#">NOTICE</a>
                    </li>
                    <li>
                        <a href="#">Q & N</a>
                    </li>
                    <li>
                        <a href="#">REVIEW</a>
                    </li>
                    <li>
                        <a href="#">EVENT</a>
                    </li>
                    <li>
                        <a href="#">DAILY CHECK</a>
                    </li>
                </ul>
            </div>
            <div class="right_nav">
                <ul>
                    <li>
                        <a href="#">LOGIN</a>
                    </li>
                    <li>
                        <a href="#">JOIN US</a>
                    </li>
                    <li>
                        <a href="#">CART (0)</a>
                    </li>
                    <li>
                        <a href="#">ORDER</a>
                    </li>
                    <li>
                        <a href="#">MY PAGE</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--네비게이션 끝-->
    </header>
    <!-- 상단 메뉴바 끝-->
    <!-- 로고 이미지 및 sns 버튼-->
    <div id="logo">
        <div class="inner">
            <img src="/modules/SOSOHAM/SOSOHAMMALL/img/logo.png" alt="로고" onclick="window.open('index.html', '_self')">
            <div class="logo_sns">
                <ul>
                    <li>
                        <img src="/modules/SOSOHAM/SOSOHAMMALL/img/네이버밴드2.png" alt="네이버 벤드" onmouseover="src='/modules/SOSOHAM/SOSOHAMMALL/img/네이버밴드.png'" onmouseout="src='/modules/SOSOHAM/SOSOHAMMALL/img/네이버밴드2.png'" onclick="window.open('http://band.us/home')">
                    </li>
                    <li>
                        <img src="/modules/SOSOHAM/SOSOHAMMALL/img/인스타그램2.png" alt="인스타그램" onmouseover="src='/modules/SOSOHAM/SOSOHAMMALL/img/인스타그램1.png'" onmouseout="src='/modules/SOSOHAM/SOSOHAMMALL/img/인스타그램2.png'" onclick="window.open('https://www.instagram.com/?hl=ko')">
                    </li>
                    <li>
                        <img src="/modules/SOSOHAM/SOSOHAMMALL/img/카카오스토리2.png" alt="네이버 벤드" onmouseover="src='/modules/SOSOHAM/SOSOHAMMALL/img/카카오스토리1.png'" onmouseout="src='/modules/SOSOHAM/SOSOHAMMALL/img/카카오스토리2.png'" onclick="window.open('https://accounts.kakao.com/login/kakaostory')">
                    </li>
                    <li>
                        <img src="/modules/SOSOHAM/SOSOHAMMALL/img/페이스북2.png" alt="네이버 벤드" onmouseover="src='/modules/SOSOHAM/SOSOHAMMALL/img/페이스북.png'" onmouseout="src='/modules/SOSOHAM/SOSOHAMMALL/img/페이스북2.png'" onclick="window.open('https://www.facebook.com/')">
                    </li>
                    <li class="search">
                        <form action=""><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                            <input type="text" placeholder="검색어를 입력해주세요" class="search_box">
                            <button type="submit" class="search_submit"></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 로고 이미지 및 sns 버튼 끝-->
    <!-- fixed가 될 메뉴창-->
    <div class="logo_nav">
        <div class="logo_navInner">
            <img src="/modules/SOSOHAM/SOSOHAMMALL/img/menu.png" alt="토글메뉴" width="30" height="30" style="float: left;" class="toggle_menu">
            <ul>
                <li>
                    <a href="#">BEST 30</a>
                </li>
                <li>
                    <a href="#">new 5%</a>
                </li>
                <li>
                    <a href="#">EVENT SALE</a>
                </li>
                <li>
                    <a href="#">SEASON</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- fixed가 될 메뉴창 끝-->
    <!-- Toggle네비 메뉴-->
    <div class="toggle_nav">
        <div class="toggle_navInner">
            <ul>
                <li>
                    <h2>가구/수납</h2>
                </li>
                <hr>
                <li>
                    <a href="#">수납/정리</a>
                </li>
                <li>
                    <a href="#">행거/훅</a>
                </li>
                <li>
                    <a href="#">바구니/박스</a>
                </li>
                <li>
                    <a href="#">선반/수납장</a>
                </li>
                <li>
                    <a href="#">데스크/책장수납</a>
                </li>
            </ul>
            <ul>
                <li>
                    <h2>페브릭/생활</h2>
                </li>
                <hr>
                <li>
                    <a href="#">커튼</a>
                </li>
                <li>
                    <a href="#">침구</a>
                </li>
                <li>
                    <a href="#">카페트/러그</a>
                </li>
                <li>
                    <a href="#">페브릭소품</a>
                </li>
                <li>
                    <a href="#">홈케어</a>
                </li>
            </ul>
            <ul>
                <li>
                    <h2>데코/조명</h2>
                </li>
                <hr>
                <li>
                    <a href="#">조명/스탠드</a>
                </li>
                <li>
                    <a href="#">시계/그림</a>
                </li>
                <li>
                    <a href="#">플라워</a>
                </li>
                <li>
                    <a href="#">캔들/디퓨저</a>
                </li>
                <li>
                    <a href="#">DIY/데코소품</a>
                </li>
            </ul>
            <ul>
                <li>
                    <h2>주방</h2>
                </li>
                <hr>
                <li>
                    <a href="#">컵/텀블러/커피잔</a>
                </li>
                <li>
                    <a href="#">식기</a>
                </li>
                <li>
                    <a href="#">주방잡화/커트러리</a>
                </li>
                <li>
                    <a href="#">조리도구</a>
                </li>
                <li>
                    <a href="#">주방수납</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Toggle 고정 메뉴  끝-->
    <!-- fixed가 될 메뉴창 끝-->
    <!-- 슬라이드 시작 -->
    <section id="section1">
        <ul class="slide">
            <li>
                <a href="#">
                    <img src="/modules/SOSOHAM/SOSOHAMMALL/img/slide1.jpg" alt="슬라이드1">
                </a>
            </li>
            <li style="opacity: 0;">
                <a href="#">
                    <img src="/modules/SOSOHAM/SOSOHAMMALL/img/slide2.jpg" alt="슬라이드2">
                </a>
            </li>
            <li style="opacity: 0;">
                <a href="#">
                    <img src="/modules/SOSOHAM/SOSOHAMMALL/img/slide3.jpg" alt="슬라이드3">
                </a>
            </li>
        </ul>
        <ul class="dot">
            <li class="on">1</li>
            <li>2</li>
            <li>3</li>
        </ul>
        <div class="left_btn">
            <h1>&#60;</h1>
        </div>
        <div class="right_btn">
            <h1>&#62;</h1>
        </div>
    </section>
    <!-- 슬라이드 구간 끝 -->
    <!-- section2 구간 시작 -->
    <section id="section2">
        <div class="se2_main">
            <h1>SOSOHAM TOP 5</h1>
            <br>
            <p class="serveTitle">이달의 베스트 상품 5가지를 미리 만나보세요</p>
            <!-- section2 박스 슬라이더 구간 시작-->
            <div class="se2_box">
                <ul class="box_title">
                    <li class="on2">가구 / 수납</li>
                    <li>페브릭 / 생활</li>
                    <li>데코 / 조명</li>
                    <li>주방</li>
                </ul>
                <div class="box_content box_1">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box1.jpg" alt="박스1">
                                <div class="caption">
                                    <br>
                                    <h3>Item1</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box2.jpg" alt="박스2">
                                <div class="caption">
                                    <br>
                                    <h3>Item2</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box3.jpg" alt="박스3">
                                <div class="caption">
                                    <br>
                                    <h3>Item3</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box4.jpg" alt="박스4">
                                <div class="caption">
                                    <br>
                                    <h3>Item4</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box5.jpg" alt="박스4">
                                <div class="caption">
                                    <br>
                                    <h3>Item5</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="box_content box_2">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box6.jpg" alt="박스1">
                                <div class="caption">
                                    <br>
                                    <h3>Item6</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box7.jpg" alt="박스2">
                                <div class="caption">
                                    <br>
                                    <h3>Item7</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box8.jpg" alt="박스3">
                                <div class="caption">
                                    <br>
                                    <h3>Item8</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box9.jpg" alt="박스4">
                                <div class="caption">
                                    <br>
                                    <h3>Item9</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box10.jpg" alt="박스4">
                                <div class="caption">
                                    <br>
                                    <h3>Item10</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="box_content box_3">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box1.jpg" alt="박스1">
                                <div class="caption">
                                    <br>
                                    <h3>Item1</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box2.jpg" alt="박스2">
                                <div class="caption">
                                    <br>
                                    <h3>Item2</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box3.jpg" alt="박스3">
                                <div class="caption">
                                    <br>
                                    <h3>Item3</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box4.jpg" alt="박스4">
                                <div class="caption">
                                    <br>
                                    <h3>Item4</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box5.jpg" alt="박스4">
                                <div class="caption">
                                    <br>
                                    <h3>Item5</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="box_content box_4">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box6.jpg" alt="박스1">
                                <div class="caption">
                                    <br>
                                    <h3>Item6</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box7.jpg" alt="박스2">
                                <div class="caption">
                                    <br>
                                    <h3>Item7</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box8.jpg" alt="박스3">
                                <div class="caption">
                                    <br>
                                    <h3>Item8</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box9.jpg" alt="박스4">
                                <div class="caption">
                                    <br>
                                    <h3>Item9</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/modules/SOSOHAM/SOSOHAMMALL/img/box10.jpg" alt="박스4">
                                <div class="caption">
                                    <br>
                                    <h3>Item10</h3>
                                    <br>
                                    <p>12,345\</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- section2 박스 슬라이더 구간 끝-->
        </div>
    </section>
    <script>
        $(document).ready(function(){
            //.toggle_menu 실행
            $('.toggle_menu').click(function(){
                $('.toggle_nav').fadeToggle();
            });
            
            //스크롤 시 header fixed만들기
            $(window).scroll(function(){
                if($('html').scrollTop() >= 212){
                    $('.logo_nav').css({
                        "position":"fixed",
                        "top":50,
                        "border-top":"none",
                        "width":"100%"
                        });
                    $('.toggle_nav').css({
                        "position":"fixed",
                        "top":100
                    });
                }else{
                    $('.logo_nav').css({
                        "position":"static",
                        "border-top":"3px solid black" 
                    });
                    $('.toggle_nav').css({
                        "position":"absolute",
                        "left":0,
                        "right":0,
                        "margin":"auto",
                        "top":313
                    });
                }
            });
        });
    </script>