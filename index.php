<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <title> 이대영 포트폴리오 </title>
    <meta name="description" content="영이의 포트폴리오입니다. HTML5, CSS3, ES6, Jquery, PHP에 대응합니다.">
    <meta name="keywords" content="HTML5, CSS3, ES6, Jquery, PHP, Photoshop, XD, Zeplin, 퍼블리셔, 웹퍼블리셔">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=0.25, maximum-scale=4">
    <!-- cdn-->
    <script src="/younge/script/jquery.js"></script>
    <!-- 일반-->
    <script src="/younge/script/nav.js"></script>
    <script src="/younge/script/main.js"></script>
    <link rel="stylesheet" type="text/css" href="/younge/css/main.css">
    <link rel="stylesheet" type="text/css" href="/younge/css/navfoot.css">
    <link rel="stylesheet" type="text/css" href="/younge/css/margin.css">
    <link rel="shortcut icon" href="http://serenity90s.cafe24.com/younge/images/logo20_1.ico" alt="img">
    <!-- 원-->
    <link rel='stylesheet' href='/younge/css/font-awesome.min.css'>
    <!-- 폰트-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900|Noto+Serif+KR:200,300,400,500,600,700,900&display=swap&subset=korean" rel="stylesheet">

    <!-- 글자효과-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script>
        function contact() {
            var UserAgent = navigator.userAgent;
            if (UserAgent.match(
                    /iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i
                ) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null)
            {
                location.href = "tel:010-4343-1354"

            } else {
                window.open("http://serenity90s.cafe24.com/younge/contact_popup.php", "a", "width=460, height=780, scrollbars=1");
            }
        }
    </script>
</head>
<?php
      include $_SERVER['DOCUMENT_ROOT'].'/younge/include/nav.php';
?>

<body>
    <div>
        <div id="layout">
            <!----헤더1 ---->
            <div id="header1">
                <div class="main_txt_box">
                    <img src="images/header2_3.jpg" alt="img" id="headimg1">
                    <img src="images/header2_4.jpg" alt="img" id="headimg2">

                    <h4 id="movetxt">I make this for the <br> <span id="movetxt2"> <br id="brmob">DESIGNS</span><span id="movetxt22"> all you need</span>
                        <br>
                    </h4>
                    <h6 id="movetxt3"> and you can take me now <br>
                        <a href="#!" id="contact" onclick="contact()">
                            <img src="images/contactbutton.jpg" alt="img">
                        </a>
                    </h6>
                    <div id="trig"><img src="images/star.gif" alt="star"> </div>
                </div>
            </div>
            <!----헤더1 끝 ---->

            <main>
                <div>
                    <section id="section1">
                        <div id="sec1wrap">
                            <div id="sec1_1">
                                <div id="sec1photo">
                                    <div><img src="/younge/images/joong.png" alt="11" class="imakesub"></div>
                                </div>
                                <div class="sec1golden">
                                    <div class="sec1sub">
                                        <p> Dae Young, Lee</p>
                                    </div>
                                    <div id="sec1script">
                                        <p style="font-weight: 100" class="imake"> 199X.11.24</p>
                                        <p style="font-weight: 100" class="imake"> 010-4343-1354</p>
                                        <p style="font-weight: 100" class="imake"> serenity90s@naver.com</p>
                                    </div>
                                </div>
                            </div>
                            <div id="sec1_2">
                                <div class="sec1_2_1">
                                    <h6 id="trig">시맨틱 태그
                                        <br>웹표준, 웹접근성
                                        <br>크로스 브라우징까지
                                    </h6>
                                </div>
                                <div class="sec1golden2">
                                    <div class="sec1sub">
                                        <p> Carrer</p>
                                    </div>
                                </div>
                                <div>
                                    <div id="sec1script2">
                                        <p style="font-weight: 100; color: darkgray" class="imake"> 한국임업진흥원(kofpi) 연구보조 인턴 근무 2017.06~2017.08</p>
                                        <p style="font-weight: 100; color: darkgray" class="imake"> 한국 미쓰도요 기술영업 2019.01~2019.07</p>
                                        <p style="font-weight: 100" class="imake"> Contguard Korea 프리랜서 디자이너 2019.09~2020.04</p>
                                        <p style="font-weight: 100" class="imake"> (웹사이트/배너/판촉물/영상 제작) <span style="color: transparent;">2019.09~2020.04</span></p>
                                        <p style="font-weight: 100" class="imake"> 풀무원 상남점 홈페이지 Design / Publish 2020.01~2020.02</p>
                                        <p style="font-weight: 100" class="imake"> 한국수입협회(KOIMA) 배너 / 상세페이지 2020.02~2020.02</p>
                                        <p style="font-weight: 100" class="imake"> 트랜스코스모스코리아 UI디자이너＆퍼블리셔 2020.04~<span style="color: ;">재직중&nbsp;&nbsp;</span></p>
                                        <p style="font-weight: 100" class="imake"> (웹에이전시 웹개발팀) <span style="color: transparent;">2019.09~2020.04</span></p>
                                    </div>
                                </div>
                                <div class="sec1golden2">
                                    <div class="sec1sub">
                                        <p> specialty </p>
                                    </div>
                                </div>
                                <div>
                                    <div id="sec1script2">
                                        <p style="font-weight: 100" class="imake"> 웹사이트 구축</p>
                                        <p style="font-weight: 100" class="imake"> 개발자와 커뮤니케이션</p>
                                        <p style="font-weight: 100" class="imake"> 일본어 자유 의사소통</p>
                                        <p style="font-weight: 100" class="imake"> 영어 메일 의사소통</p>
                                    </div>
                                </div>
                            </div>

                            <div id="sec1_3">
                                <div class="sec1golden2">
                                    <div class="sec1sub">
                                        <p> Education</p>
                                    </div>
                                </div>
                                <div>
                                    <div id="sec1script2">
                                        <p style="font-weight: 100" class="imake"> 국민대학교 임산생명공학과 졸업 2018.08</p>
                                        <p style="font-weight: 100" class="imake"> 이젠컴퓨터학원 UI/UX 과정 수료 2020.02</p>
                                    </div>
                                </div>


                                <div class="sec1golden2">
                                    <div class="sec1sub">
                                        <p> Certifications</p>
                                    </div>
                                </div>
                                <div>
                                    <div id="sec1script2">
                                        <p style="font-weight: 100" class="imake"> 웹디자인 기능사</p>
                                        <p style="font-weight: 100" class="imake"> GTQ Photoshop 1급</p>
                                        <p style="font-weight: 100" class="imake"> JLPT N2</p>
                                        <p style="font-weight: 100" class="imake"> TOEIC 825</p>
                                        <p style="font-weight: 100" class="imake"> TOEIC Speaking Lv6 (140)</p>
                                        <p style="font-weight: 100" class="imake"> ITQ Internet A급</p>
                                    </div>
                                </div>


                                <div class="sec1golden2">
                                    <div class="sec1sub">
                                        <p> Skills</p>
                                    </div>
                                </div>
                                <div>
                                    <div id="sec1script2">
                                        <p style="font-weight: 100" class="imake"> Photoshop / Illustrator</p>
                                        <p style="font-weight: 100" class="imake"> HTML5 / CSS3 / Jquery</p>
                                        <p style="font-weight: 100" class="imake"> Premiere Pro</p>
                                        <p style="font-weight: 100" class="imake"> Photographs - Portrait / Food / Nature</p>
                                    </div>
                                </div>
                                <div class="sec1golden2">
                                    <div class="sec1sub">
                                        <p> Character</p>
                                    </div>
                                </div>
                                <div>
                                    <div id="sec1script2">
                                        <p style="font-weight: 100" class="imake"> 다정다감하고 누구와도 잘 어울립니다.<br>
                                            내가 맡은 임무는 극한의 책임감을 가지고<br>
                                            끝까지 완수하여 팀원으로서 모범이 됩니다.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section id="circleBar">
                        <div>
                            <div class="webskillcon">
                                <div>
                                    <h5>WEB SKILLs</h5>
                                    <h6>I'm a Web Designer</h6>
                                    <div><img src="/younge/images/logo20_3.png" alt="img" class="logo2"></div>
                                    <div>
                                        <p>Making the Design people want to make, Get you Desird Results Since 2019</p>
                                    </div>
                                    <div class="cttBtnWrapper js-fadeIn"><a href="#!" onclick="contact()"><img src="/younge/images/contactbutton.jpg" alt="cttBtn" class="cttBtn"></a></div>
                                </div>
                            </div>
                            <div class="container">

                                <h6 class="mb20">Design</h6>
                                <div class="row">
                                    <div class="skillIcon js-fadeIn">
                                        <p><span><img src="/younge/images/photoshop2.png" alt="ps"></span>Photoshop</p>
                                    </div>
                                    <div class="skillIcon js-fadeIn">
                                        <p><span><img src="/younge/images/Illustrator2.png" alt="ill"></span>Illustrator</p>
                                    </div>
                                    <div class="skillIcon js-fadeIn">
                                        <p><span><img src="/younge/images/xd2.png" alt="xd"></span>Xd</p>
                                    </div>
                                    <div class="skillIcon js-fadeIn">
                                        <p><span><img src="/younge/images/figma.png" alt="xd"></span>Figma</p>
                                    </div>
                                </div>
                                <h6 class="mb15">Publishing</h6>
                                <div class="row">
                                    <div class="skillIcon js-fadeIn">
                                        <p><span><img src="/younge/images/html.png" alt="html"></span>HTML5</p>
                                    </div>
                                    <div class="skillIcon js-fadeIn">
                                        <p><span><img src="/younge/images/css.png" alt="css"></span>CSS3</p>
                                    </div>
                                    <div class="skillIcon js-fadeIn">
                                        <p><span><img src="/younge/images/javascript.png" alt="js"></span>Javascript(ES6)</p>
                                    </div>
                                    <div class="skillIcon js-fadeIn">
                                        <p><span><img src="/younge/images/jquery2.png" alt="jq"></span>Jquery</p>
                                    </div>
                                    <div class="skillIcon js-fadeIn" style="display: none;">
                                        <p><span><img src="/younge/images/php.png" alt="jq"></span>PHP</p>
                                    </div>
                                </div>
                                <h6 class="mb15" id="skillIconWrapper">Collaboration</h6>
                                <div class="row">
                                    <div class="skillIcon" id="skillIcon1">
                                        <p><span><img src="/younge/images/git3.png" alt="ps"></span>Github</p>
                                    </div>
                                    <div class="skillIcon" id="skillIcon2">
                                        <p><span><img src="/younge/images/svn2.png" alt="ill"></span>Tortoise SVN</p>
                                    </div>
                                </div>
                            </div>
                            <script>
                                // section fadeIn
                                (function() {
                                    'use strict'
                                    // section fadeIn
                                    var fadeInSection = function() {
                                        var targetElm = document.getElementsByClassName('js-fadeIn'),
                                            windowH = window.innerHeight
                                        if (targetElm.length == 0) return
                                        var pxY = 200
                                        for (var i = 0; i < targetElm.length; i++) {
                                            var elm = targetElm[i]
                                            if (elm.classList.contains('js-fadeIn')) {
                                                var elmRect = elm.getBoundingClientRect()
                                                var scrollTop = window.pageYOffset || document.documentElement.scrollTop
                                                var elmY = elmRect.top + scrollTop
                                                scrollTop > elmY - windowH + pxY && elm.classList.add('appeared');
                                            }
                                        }
                                    };
                                    // scroll
                                    window.addEventListener('scroll', function(e) {
                                        e.preventDefault();
                                        fadeInSection();
                                    })
                                })();

                            </script>

                            <!--<div class="container">
								<div class="row">
									<div class="col-md-3">
										<div class="round" data-value="0.85" data-size="100" data-thickness="4">
											<strong></strong>
											<span><i class="fa fa-html5" aria-hidden="true"></i> HTML Skill</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="round" data-value="0.75" data-size="100" data-thickness="4">
											<strong></strong>
											<span><i class="fa fa-css3" aria-hidden="true"></i> CSS Skill</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="round" data-value="0.65" data-size="100" data-thickness="4">
											<strong></strong>
											<span><i class="fa fa-jsfiddle" aria-hidden="true"></i> JavaScript Skill</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="round" data-value="0.95" data-size="100" data-thickness="4">
											<strong></strong>
											<span><i class="fa fa-laptop" aria-hidden="true"></i> Photoshop Skill</span>
										</div>
									</div>


								</div>
							</div>-->
                            <button class="btn" onClick="Circlle('.round');">Refresh</button>
                        </div>
                    </section>
                    <script src='/younge/script/circle-progress.min.js'></script>

                    <section id="sectionweb2">
                        <div>
                            <h4> Web design </h4>
                            <h5 class="ani2">Portfolios</h5>
                            <p style="text-align:center;margin-top: 20px;opacity: 0.3; padding: 0 15px;">하기 프로젝트는 대부분 실제 진행 안건입니다. </p>
                        </div>
                        <div>

                            <div id="portfolio-1">
                                <div class="img-area2">
                                    <img src="/younge/images/apple6.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                                <div class="text-Area">
                                    <h3>Mitsubishi Card<span class="renewal">Renewal</span></h3>
                                    <div class="webtext">
                                        <div class="webtext-bold">
                                            <p>프로젝트</p>
                                            <p>참여기간</p>
                                            <p>참여도</p>
                                            <p>컨셉</p>
                                            <p>컨셉설명</p>
                                        </div>
                                        <div class="webtext-normal">
                                            <p>일본 미쓰미시 은행 웹사이트 리뉴얼</p>
                                            <p>4개월: 201215 ~ 210401</p>
                                            <p>
                                                html 페이지 양산(30%), 컴포넌트 제작(10%), 스크립트 분석 및 수정(20%)
                                            </p>
                                            <p>깔끔한, 직관적인</p>
                                            <p class="text-concept">
                                                일본 전체 2위의 재벌그룹 , 미쓰비시 그룹의 카드사 웹사이트 리뉴얼 안건입니다. 에이전시 일본 본사에서 디자인을 제작하여, 한국 지부에서 HTML마크업 코딩을 진행했습니다. 혼자서 약 750페이지를 제작했습니다.
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="">상세 설명 및 웹사이트</button>
                                </div>
                                <div class="img-area">
                                    <img src="/younge/images/apple6.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                            </div>

                            <div id="portfolio-2">
                                <div class="img-area3">
                                    <img src="/younge/images/apple5.png" alt="img">
                                    <img src="/younge/images/category1.png" alt="img">
                                </div>
                                <div class="text-Area">
                                    <h3>Sony bank<span class="renewal">Renewal</span></h3>
                                    <div class="webtext">
                                        <div class="webtext-bold">
                                            <p>프로젝트</p>
                                            <p>참여기간</p>
                                            <p>참여도</p>
                                            <p>컨셉</p>
                                            <p>컨셉설명</p>
                                        </div>
                                        <div class="webtext-normal">
                                            <p>일본 소니은행 웹사이트 리뉴얼</p>
                                            <p>4개월: 200510 ~ 200901 </p>
                                            <p>
                                                XD디자인 제작(40%), 컴포넌트 제작(10%)
                                            </p>
                                            <p>심플함, 간결함</p>
                                            <p class="text-concept">
                                                일본의 대기업, 소니에서 운영하는 은행입니다. 2001년 6월 11일부터 작은 리뉴얼을 거치며 '20년간' 운영된 인터넷 뱅킹 웹사이트에 대해, 2020년 드디어 현대시대의 흐름에 맞는 디자인과 구성으로 리뉴얼 프로젝트를 시작했습니다. 디자이너로서 약 300페이지에 달하는 XD페이지를 양산했습니다.
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="">&nbsp;상세 설명&nbsp;</button>
                                    <script>

                                    </script>
                                    <!--<button type="button" onclick="window.open('http://pikachu33333.cafe24.com/younge/webpages/hoeiso.html')">상세 설명 및 웹사이트</button> -->
                                </div>
                            </div>


                            <div id="portfolio-3">
                                <div class="img-area2">
                                    <img src="/younge/images/apple7.png" alt="img">
                                    <img src="/younge/images/category1.png" alt="img">
                                </div>
                                <div class="text-Area">
                                    <h3>Club Tourism</h3>
                                    <div class="webtext">
                                        <div class="webtext-bold">
                                            <p>프로젝트</p>
                                            <p>참여기간</p>
                                            <p>참여도</p>
                                            <p>컨셉</p>
                                            <p>컨셉설명</p>
                                        </div>
                                        <div class="webtext-normal">
                                            <p>일본 클럽 투어리즘 메일 매거진 제작</p>
                                            <p>7개월: 200901 ~ 210401 </p>
                                            <p>
                                                배너 제작(50%), html 메일 제작(50%)
                                            </p>
                                            <p>컬러풀, 강한 전달성</p>
                                            <p class="text-concept">
                                                일본의 여행사, 클럽투어리즘(CT)은 종업원 2,000명 규모의 중견기업입니다.
                                                메일 매거진으로 매주 3~5통씩 이메일 광고를 일본 전국 회원에게 배포합니다.
                                                이 메일 매거진의 전체 제작을 약 5개월간 제작하여 배포했습니다.<br> 상세설명에서 메일 매거진 샘플을 볼 수 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="">&nbsp;상세 설명 및 샘플&nbsp;</button>
                                    <script>

                                    </script>
                                    <!--<button type="button" onclick="window.open('http://pikachu33333.cafe24.com/younge/webpages/hoeiso.html')">상세 설명 및 웹사이트</button> -->
                                </div>
                                <div class="img-area">
                                    <img src="/younge/images/apple7.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                            </div>


                            <div id="portfolio-4">
                                <div class="img-area3">
                                    <img src="/younge/images/apple1.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                                <div class="text-Area">
                                    <h3>HOEISO<span class="light"></span><span class="renewal">Renewal</span></h3>
                                    <div class="webtext">
                                        <div class="webtext-bold">
                                            <p>프로젝트</p>
                                            <p>제작기간</p>
                                            <p>참여도</p>
                                            <p>컨셉</p>
                                            <p>컨셉설명</p>
                                        </div>
                                        <div class="webtext-normal">
                                            <p>일본 료칸 호에이소 리뉴얼</p>
                                            <p>1개월: 191215 ~ 200108 </p>
                                            <p>
                                                기획(90%), 퍼블리싱(70%), 번역:영어(100%), 일본어(100%)
                                            </p>
                                            <p>고급, 정숙함</p>
                                            <p class="text-concept">
                                                기존 웹사이트는 정보의 구분이 불분명하고
                                                사용자의 시선이 분산되는 문제점이 있었습니다.
                                                때문에 텍스트와 이미지간의 적절한 밸런스를 유지하고,
                                                직관적으로 정보를 파악할 수 있도록 하였습니다.
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="">상세 설명 및 웹사이트</button>
                                    <script>

                                    </script>
                                    <!--<button type="button" onclick="window.open('http://pikachu33333.cafe24.com/younge/webpages/hoeiso.html')">상세 설명 및 웹사이트</button> -->
                                </div>
                            </div>

                            <div id="portfolio-5">
                                <div class="img-area2">
                                    <img src="/younge/images/apple2.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                                <div class="text-Area">
                                    <h3>Pulmuone</h3>
                                    <div class="webtext">
                                        <div class="webtext-bold">
                                            <p>프로젝트</p>
                                            <p>제작기간</p>
                                            <p>참여도</p>
                                            <p>컨셉</p>
                                            <p>컨셉설명</p>
                                        </div>
                                        <div class="webtext-normal">
                                            <p>풀무원 로하스 상남점 - 상품소개 웹사이트 제작</p>
                                            <p>1개월: 190112 ~ 200201</p>
                                            <p>
                                                기획(100%), 퍼블리싱(100%), 호스팅(100%), 도메인(100%)
                                            </p>
                                            <p>깔끔한, 직관적인</p>
                                            <p class="text-concept">
                                                쇼핑몰과 비슷한 형식이지만, 통신판매업이 아닌 방문 판매업이기 때문에 구매버튼이 없는 소개페이지 입니다. 이를 위해 구매하기 대신 연락하기 버튼을 postion:fixed로 삽입했습니다.
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="">상세 설명 및 웹사이트</button>
                                </div>
                                <div class="img-area">
                                    <img src="/younge/images/apple2.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                            </div>

                            <div id="portfolio-6">
                                <div class="img-area3">
                                    <img src="/younge/images/apple4.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                                <div class="text-Area">
                                    <h3>Badagil</h3>
                                    <div class="webtext">
                                        <div class="webtext-bold">
                                            <p>프로젝트</p>
                                            <p>제작기간</p>
                                            <p>제작물</p>
                                            <p>컨셉</p>
                                            <p>컨셉설명</p>
                                        </div>
                                        <div class="webtext-normal">
                                            <p>바다길 회사 소개 웹사이트 제작</p>
                                            <p>1개월: 191101 ~ 191210</p>
                                            <p>
                                                로고제작(100%), 웹사이트 기획 및 디자인(100%), 퍼블리싱(100%)
                                            </p>
                                            <p>깔끔한</p>
                                            <p class="text-concept">
                                                바다길은 국내에 몇 안되는 해삼 양식 전문 업체입니다. 2016년 설립됐으며, 회사 소개 홈페이지 제작을 의뢰받아 A to Z까지 디자인과 HTML 코딩까지 어우르는 모든 작업을 혼자 하게 되었습니다.
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="">상세 설명 및 웹사이트</button>
                                </div>
                            </div>

                            <div id="portfolio-7">
                                <div class="img-area2">
                                    <img src="/younge/images/apple3.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                                <div class="text-Area">
                                    <h3>Contguard</h3>
                                    <div class="webtext">
                                        <div class="webtext-bold">
                                            <p>프로젝트</p>
                                            <p>제작기간</p>
                                            <p>참여도</p>
                                            <p>컨셉</p>
                                            <p>컨셉설명</p>
                                        </div>
                                        <div class="webtext-normal">
                                            <p>Contguard Korea 웹사이트 제작</p>
                                            <p>2개월: 191022 ~ 191220 </p>
                                            <p>
                                                기획(60%), psd디자인제작(100%), 퍼블리싱(30%)
                                            </p>
                                            <p>깔끔한</p>
                                            <p class="text-concept">
                                                한국에 처음으로 진출하는 컨테이너용 장비 대여 및 분석리포트 서비스를 제공하는 이스라엘 기업입니다. 생소한 서비스를 간결하게 소개하기 위해 원색 사용을 최대한 배제했습니다.
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="">상세 설명 및 웹사이트</button>
                                </div>
                                <div class="img-area">
                                    <img src="/younge/images/apple3.png" alt="img">
                                    <img src="/younge/images/category3.png" alt="img">
                                </div>
                            </div>

                            <div id="portfolio-0">
                                <div class="img-area3">
                                    <img src="/younge/images/apple8.png" alt="img">
                                    <img src="/younge/images/category1.png" alt="img">
                                </div>
                                <div class="text-Area">
                                    <h3>Banner, LP</h3>
                                    <div class="webtext">
                                        <div class="webtext-bold">
                                            <p>프로젝트</p>
                                            <p>참여기간</p>
                                            <p>참여도</p>
                                            <p>컨셉</p>
                                            <p>컨셉설명</p>
                                        </div>
                                        <div class="webtext-normal">
                                            <p>배너, 상세페이지 모음집</p>
                                            <p>18개월: 191001 ~ 210301</p>
                                            <p>
                                                psd,XD 제작(100%)
                                            </p>
                                            <p>variation</p>
                                            <p class="text-concept">
                                                상세페이지와 배너 모음집 입니다. <br>
                                                웹에이전시 작업물과 프리랜서 작업물이 포함됩니다.
                                            </p>
                                        </div>
                                    </div>
                                    <button type="button" onclick="">상세 설명</button>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section id="section8">
                        <div>
                            <div id="sec8sub">
                                <h5>Meet my editorial design</h5>
                                <p class="smallp">to learn more about my design products </p>
                            </div>

                            <div id="phowrapper">
                                <div>

                                    <div id="pho">
                                        <h6> Editorial</h6>
                                        <div class="subject">
                                            <p class="smallp2"> designs </p>
                                        </div>
                                        <div class="pp">

                                            <!----남자 19년 ---->
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/businesscard22_3.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/businesscard3.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/businesscard1.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/businesscard22.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/leaf1.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/contleaf1.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/contleaf2.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/leaf.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/shopbag1.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/editorial/images/edit/shopbag2.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/edit/DSC03155%20(2).jpg" alt="img"></a>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pho2">
                                        <h6> Event</h6>
                                        <div class="subject">
                                            <p class="smallp2"> designs </p>
                                        </div>
                                        <div class="pp">
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/edit/contbanner2.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/edit/contbanner3.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/bexco.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/barrel300.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/barrel655.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/samsungpc.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/chris.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/bacant.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/edit/contbanner4.png" alt="img"></a>
                                            </div>

                                            <div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="pho3">
                                        <h6> Detail Pages</h6>
                                        <div class="subject">
                                            <p class="smallp2"> Banners </p>
                                        </div>
                                        <div class="pp">
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/edit/contsang.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/edit/contsang2.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/barreldetail1.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/barreldetail2.jpg" alt="img"></a>
                                            </div>
                                            <div>
                                                <a href="#!">
                                                    <img src="/younge/swiper/images/detail/trip.jpg" alt="img"></a>
                                            </div>

                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div>
                            <a href="#!"> <img src="/younge/images/lightgray.png" alt="img"></a>
                            <a href="#!" id="thebo1">More</a>
                            <a href="#!" id="thebo2">More</a>
                            <a href="#!" id="thebo3">More</a>

                        </div>
                    </section>

                    <script>
                        var sec8height = $("#section8").css("height").replace("px", "");

                        var sec8heighter = sec8height *= 1.3;

                        var sec8heightere = sec8height *= 1.6;

                        var sec8heighterer = sec8height *= 1.7;


                        $(document).ready(function() {

                            $("#section8>div:nth-of-type(2)>a:nth-of-type(2)").click(function() {
                                $("#section8").height(sec8heighterer);
                                $("#section8>div:nth-of-type(2)>a:nth-of-type(2)").fadeOut();
                            });

                            $("#section8>div:nth-of-type(2)>a:nth-of-type(3)").click(function() {
                                $("#section8").height(sec8heightere);
                                $("#section8>div:nth-of-type(2)>a:nth-of-type(3)").fadeOut();
                            });

                            $("#section8>div:nth-of-type(2)>a:nth-of-type(4)").click(function() {
                                $("#section8").height(sec8heighter);
                                $("#section8>div:nth-of-type(2)>a:nth-of-type(4)").fadeOut();

                            });

                        });

                    </script>

                    <!--
        <section id="section3">
                <div> 
            <h2> Photographs </h2>
          <h6>I'm a Portrait Photographer</h6>
        </div>
        <div id="photos">
           <div id="photo1">
           <div>
            <img src="images/frame_1.png" id="photo11">
            <a href="#!"><img src="images/frame1.jpg" alt="img"> </a> </div>
          <div>
            <img src="images/frame_1.png" alt="img">
            <a href="#!"><img src="images/frame2.jpg" alt="img"> </a> </div>
          <div>
            <img src="images/frame_1.png" alt="img">
            <a href="#!"><img src="images/frame3.jpg" alt="img"> </a> </div>
           <div>
            <img src="images/frame_1.png" alt="img">
            <a href="#!"><img src="images/frame4.jpg" alt="img"> </a> </div>
          <div>
            <img src="images/frame_1.png" alt="img">
            <a href="#!"><img src="images/frame5.jpg" alt="img"> </a> </div>                   
            <div>
            <img src="images/frame_1.png" alt="img">
            <a href="#!"><img src="images/frame6.jpg" alt="img"> </a> </div>         
            </div>
            <div><p style="opacity: 0">ㅡ </p> </div>

            </div>
             
             
            <div id="pop">
		<a href="#!"><img src="images/frame1.jpg" alt="팝업" class="big"></a>
	</div>
            
            
            
        </section>        
        
       -->

                    <section id="section4">
                        <div>
                            <img src="images/DSC07122.png" id="flower1">
                            <img src="images/DSC07122.png" id="flower2">
                            <div>
                                <h2 id="imake4"> I take <span> ALL </span> the IMAGES</h2>
                                <div>
                                    <h2 id="imakesub4"> I take <span>ALL </span>the IMAGES<div>
                                            <p> <span>·</span> Portrait</p>
                                            <p><span>·</span> Nature</p>
                                            <p><span>·</span> Food</p>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                            <div><img src="images/pika2.gif" alt="pika"> </div>
                        </div>
                    </section>

                    <section id="section7">
                        <div>
                            <h2> Movies </h2>
                            <h4 class="ani2">I'm Video editer</h4>
                        </div>
                        <div>
                            <div id="whoiam">
                                <div id="whoo">
                                    <h2><span class="yell2">my</span> <span id="yell1">SPEC</span><span class="yell2">s</span></h2>
                                </div>
                                <div id="whowrapper">
                                    <div id="who">
                                        <h4>information</h4>
                                        <div>
                                            <div id="subject3">
                                                <p> name</p>
                                                <p class="smallp"> the final degree<br></p>
                                                <p> <br></p>
                                            </div>
                                            <div class="pp">
                                                <p> 이대영</p>
                                                <p> 국민대학교<br>임산생명공학과</p>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="who3">
                                        <h4>Certificate</h4>
                                        <div>
                                            <div id="subject1">
                                                <p> JLPT <span> (일본어)</span></p>
                                                <p> TOEIC</p>
                                                <p class="smallp"> TOEIC speaking<br></p>
                                                <p> GTQ</p>
                                                <p>ITQ</p>
                                                <p>운전면허</p>
                                                <p>태권도</p>
                                            </div>

                                            <div class="pp">
                                                <p> N2</p>
                                                <p> 825</p>
                                                <p> Lv6 (140)</p>
                                                <p>포토샵 1급</p>
                                                <p>일러스트 2급</p>
                                                <p>1종보통</p>
                                                <p>1단</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="who2">
                                        <h4>Career</h4>
                                        <div>
                                            <div id="subject2">
                                                <p> 트랜스코스모스코리아(웹에이전시) </p>
                                                <p> 한국수입협회(KOIMA) 배너 / 상세페이지 </p>
                                                <p> 풀무원 상남점 홈페이지 Design / Publish </p>
                                                <p>Contguard 홈페이지 Design / 보수 </p>
                                                <p> Contguard BEXCO 전시회 동영상 제작</p>
                                                <p>한국 미쓰도요 기술영업</p>
                                                <p>한국임업진흥원(kofpi) 연구보조 인턴 근무</p>
                                            </div>
                                            <div class="pp2">
                                                <p>2020.04 ~ 재직중&nbsp;&nbsp;</p>
                                                <p>2020.02 ~ 2020.02</p>
                                                <p>2020.01 ~ 2020.02</p>
                                                <p>2019.10 ~ 2020.02</p>
                                                <p>2019.09 ~ 2019.10</p>
                                                <p>2019.01 ~ 2019.07</p>
                                                <p>2017.06 ~ 2017.08</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </section>

                    <section id="section9">
                        <div>
                            <h5>and keep in mind,</h5>

                            <h2>YOU CAN <span>TAKE</span> ME NOW</h2>
                        </div>
                    </section>
                </div>
            </main>

            <!--팝업 모음-->
            <div class="mainPopup1">
                <a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
                <div>
                    <iframe src="/younge/webpages/hoeiso.html">

                    </iframe>
                </div>

            </div>
            <div class="mainPopup2">
                <a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
                <div>
                    <iframe src="/younge/webpages/pulmu.html">

                    </iframe>
                </div>

            </div>
            <div class="mainPopup3">
                <a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
                <div>
                    <iframe src="/younge/webpages/contguard.html">

                    </iframe>
                </div>

            </div>
            <div class="mainPopup4">
                <a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
                <div>
                    <iframe src="/younge/webpages/badagil.html">

                    </iframe>
                </div>

            </div>
            <div class="mainPopup5">
                <a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
                <div>
                    <iframe src="/younge/webpages/sony.html">

                    </iframe>
                </div>

            </div>
            <div class="mainPopup6">
                <a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
                <div>
                    <iframe src="/younge/webpages/mufg.html">

                    </iframe>
                </div>

            </div>
            <div class="mainPopup7">
                <a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
                <div>
                    <iframe src="/younge/webpages/ct.html">

                    </iframe>
                </div>

            </div>
            <div class="mainPopup8">
                <a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
                <div>
                    <iframe src="/younge/webpages/lp.html">
                    </iframe>
                </div>
            </div>
            <script>
                var devideHeight = $(".devide").outerWidth();
                $(function(openPopup) {
                    $(".text-Area").children("button").click(function() {
                        var readH3 = $(this).siblings("h3").text();
                        if (readH3 == "HOEISORenewal") {
                            $("#black").fadeIn();
                            $("body").addClass("hidden");
                            $(".mainPopup1").fadeIn();
                        } else if (readH3 == "Pulmuone") {
                            $("#black").fadeIn();
                            $(".mainPopup2").fadeIn();
                        } else if (readH3 == "Contguard") {
                            $("#black").fadeIn();
                            $(".mainPopup3").fadeIn();
                        } else if (readH3 == "Badagil") {
                            $("#black").fadeIn();
                            $(".mainPopup4").fadeIn();
                        } else if (readH3 == "Sony bankRenewal") {
                            $("#black").fadeIn();
                            $(".mainPopup5").fadeIn();
                        } else if (readH3 == "Mitsubishi CardRenewal") {
                            $("#black").fadeIn();
                            $(".mainPopup6").fadeIn();
                        } else if (readH3 == "Club Tourism") {
                            $("#black").fadeIn();
                            $(".mainPopup7").fadeIn();
                        } else if (readH3 == "Banner, LP") {
                            $("#black").fadeIn();
                            $(".mainPopup8").fadeIn();
                        }
                    });

                });

                $(function(closePopup) {
                    $(".btnClose").click(function() {
                        $(this).parent().fadeOut();
                        $("#black").fadeOut();
                        $("body").removeClass("hidden");
                        $("#scrollDown").fadeIn(1000);
                    });
                });

            </script>
            <div id="black">
                <iframe src="/younge/black.html"></iframe>
            </div>
            <!--footer stage-->
            <div id="foot-placeholder">

            </div>

            <script>
                $(function() {
                    $('#foot-placeholder').load("/younge/footer.html")
                });

            </script>
            <!--end of footer stage-->
        </div>
    </div>
    <!--Navigation bar-->
    <div id="nav-placeholder">

    </div>

    <!--end of Navigation bar-->

    <div id="bigphoto">
        <div>
            <a href="#!"><img src="images/photos/DSC00538.png" alt="bigphoto"></a>
        </div>
    </div>

</body>

</html>
