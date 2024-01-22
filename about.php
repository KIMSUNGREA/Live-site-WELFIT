<?php
require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />
	<meta name="naver-site-verification" content="3b9e4a24e99cdda67b17ed7e14b710fa7a7f462e" />
    <title>건강 큐레이션 플랫폼, 웰핏</title>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/reset.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/m_style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="slick/slick.css">


      <meta name="description" content="웰핏은 건강에 대한 심도 깊은 분석/기존과는 다른 새로운 방법으로 건강 솔루션을 발견하여 세상에 선보이는 기업입니다. 끊임없는 R&D 및 품질개선의 선순환 구조를 확립해 나가고 있습니다.">
      <meta name="keyword" content="멜팅온, 스웻온, 탄단지, 맞춤분해, 맞춤효소, 애슬레저부스터, 홍익인건, 건강식품">

      <!-- sns og tag-->
      <meta property="og:type" content="website">
      <meta property="og:title" content="건강 큐레이션 플랫폼, 웰핏">
      <meta property="og:description" content="웰핏은 건강에 대한 심도 깊은 분석/기존과는 다른 새로운 방법으로 건강 솔루션을 발견하여 세상에 선보이는 기업입니다. 끊임없는 R&D 및 품질개선의 선순환 구조를 확립해 나가고 있습니다.">
      <meta property="og:image" content="//welfit.co.kr/ogsns.png">
      <meta property="og:url" content="//welfit.co.kr/">

	<link rel='icon' href='/favicon.ico' type='image/vnd.microsoft.icon' />
</head>
<body>
    <div id="wrap">
        <header>
            <div class="main_wrap">
                <div class="header_box">
                    <h1>
                        <a href="index.php"><img src="images/main_logo.png" alt="웰핏 로고"></a>
                    </h1>
                    <nav class="pc">
                        <ul>
                            <li>
                                <a href="about.php" class="on"><b>A</b>bout</a>
                            </li>
                            <li>
                                <a href="business.php"><b>B</b>usiness</a>
                            </li>
                            <li>
                                <a href="contact.php"><b>C</b>ontact</a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="mob_menu_list mob">
                        <ul>
                            <li>
                                <a href="about.php"><b>A</b>bout</a>
                            </li>
                            <li>
                                <a href="business.php"><b>B</b>usiness</a>
                            </li>
                            <li>
                                <a href="contact.php"><b>C</b>ontact</a>
                            </li>
                        </ul>
                    </nav>
                    </nav>
                    <div class="mob_menu mob">
                        <input type="checkbox" id="menuicon">
                        <label for="menuicon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>
        </header>
        <section class="sub_top sub1"></section>
        <section class="content">
            <div class="main_wrap">
                <h3 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Why we do?</h3>
                <p class="mb pl" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-offset="0">
                    弘益人建, 널리 인간을 건강하게!<br>
                    <b>생명과학으로 펼쳐가는 </b>弘益人建<b> 정신</b>
                </p>
                <div class="height pc"></div>
                <span class="text_r poa" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    모든 사람들이 자신에게 적합한 Healthcare lifestyle을 통하여<br class="pc">
                    건강하고 행복한 삶을 누릴 수 있도록 돕는 것이 주식회사 웰핏의 이념이자 꿈입니다.<br class="pc">
                    ‘널리 인간을 건강하게 만든다’는 홍익인건의 사명으로 출범한 종합 건강솔루션 기업, 웰핏!<br class="pc"> 
                    Well-being, Fitness, Happiness를 아우르는 신체적, 정신적, 사회적 건강의<br class="pc"> 
                    조화를 지향하며 생명과학과 바이오 기술의 융합, 혁신으로 새로운 웰니스 라이프스타일을 펼쳐갑니다.
                </span>
            </div>
        </section>
        <section class="content bg_g">
            <div class="main_wrap">
                <h3 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">How we do?</h3>
                <p class="mb pl" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <b>아르키메데스의 탐구정신으로 유레카의 순간을 향해</b><br>
                    웰핏의 모두가 아르키메데스입니다.
                </p>
                <ul class="about_box">
                    <li data-aos="fade-up" data-aos-duration="3000">
                        <h4>Archimedesism!</h4>
                        <span>
                            아르키메데스의 탐구정신으로 끊임없이 질문하고<br> 
                            분석하며 건강에 대한 새로운 인사이트를 발견 합니다. 
                        </span>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
                        <h4>Eureka Moment!</h4>
                        <span>
                            풀리지 않았던 문제들에 새롭고도 다양한 방식으로<br> 
                            접근하여 유레카!라고 외칠 수 있는<br> 
                            위대한 발견의 순간에 도달합니다.
                        </span>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000">
                        <h4>The best is yet to come!</h4>
                        <span>
                            그러나 여기서 멈추지 않습니다. 아직 오지 않은<br> 
                            최고의 순간을 향해 끊임없이 나아갑니다.<br> 
                            연구개발과 품질개선의 선순환을 통해<br> 
                            최고의 솔루션을 찾아가는 여정은<br> 
                            이 순간에도 계속되고 있습니다 .
                        </span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="content">
            <div class="main_wrap">
                <h3 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Mission & Value</h3>
                <div class="font-poa" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
			<p class="text_r">
                    		“Find ways to boost your trinity health”
                	</p>
                	<strong class="text_r font-poa">
                    		건강한 삶을 영위하려면 “3 character in one Health”(Physical / Mental / Spiritual)가<br class="pc">
                    		관리(Boosting)되어야 하며, 모든 영역은 상호 간 연계 보완된다는 명제 기반, 솔루션 개발
                	</strong>
		</div>
            </div>
            <div class="health_box">
                <div class="slider-tit">
        		<div class="cont">
            		      <h4>Physical Health</h4>
        		</div>
        		<div class="cont">
            		      <h4>Mental Health</h4>
        		</div>
        		<div class="cont">
            		      <h4>Spiritual Health</h4>
        		</div>
        		<div class="cont">
            		      <h4>Physical Health</h4>
        		</div>
        		<div class="cont">
            		      <h4>Mental Health</h4>
        		</div>
        		<div class="cont">
            		      <h4>Spiritual Health</h4>
        		</div>
    		</div>
		<div class="slider">
    			<div class="slide">
            			<img src="images/physicalhealth.png" alt="">
        		</div>
        		<div class="slide">
            			<img src="images/mentalhealth.png" alt="">
        		</div>
        		<div class="slide">
            			<img src="images/spiritualhealth.png" alt="">
        		</div>
			<div class="slide">
            			<img src="images/physicalhealth.png" alt="">
        		</div>
        		<div class="slide">
            			<img src="images/mentalhealth.png" alt="">
        		</div>
        		<div class="slide">
            			<img src="images/spiritualhealth.png" alt="">
        		</div>
       		</div>
            </div>
        </section>
        <section class="content">
            <div class="main_wrap">
                <h3 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Our Plan</h3>
                <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    “Welfit's challenge for everyone's health”
                </p>
                <strong class="lihe ib" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    웰핏은 Trinity Boosting을 위한 더 나은 방법을 탐색하고 실현합니다.<br class="pc">
                    2023년 새로운 건강기능식품 출시를 시작으로 모두의 건강을 위한 새로운 도전을 시작합니다.
                </strong>
                <ul class="arrow_box">
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="0">
                        <figure>
                            <img src="images/arrow1.jpg" alt="">
                        </figure>
                        <figcaption>
                            <h5>2023</h5>
                            <p>
                                Physical Health<br>
                                Boost Physical Health
                            </p>
                            <strong>소화-흡수-배출</strong>
                        </figcaption>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="500">
                        <figure>
                            <img src="images/arrow2.jpg" alt="">
                        </figure>
                        <figcaption>
                            <h5>2025</h5>
                            <p>
                                Mental Health<br>
                                Boost Mental Health
                            </p>
                            <strong>수면-스트레스-이완</strong>
                        </figcaption>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="1000">
                        <figure>
                            <img src="images/arrow3.jpg" alt="">
                        </figure>
                        <figcaption>
                            <h5>2027</h5>
                            <p>
                                Spiritual Health<br>
                                Boost Spiritual Health
                            </p>
                            <strong>독립공간, 휴식, 명상, 식이</strong>
                        </figcaption>
                    </li>
                </ul>
            </div>
        </section>
        <section class="content">
            <div class="main_wrap">
                <h3 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">WELFIT History</h3>
                <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <b>DNA와 Microbiome 기반,</b>
                    첨단 Bio기업의 기술 Insight로 태어난 기업 웰핏<br>
                </p>
                <ul class="history_box">
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="0">
                        <h4>2015</h4>
                        <span>
                            질병 원인과 예방 목적으로 사람 몸속이 궁금한 전문가들이
                            모인 <b class="bu">정밀진단 플랫폼 기업 ‘엔젠바이오’ 설립</b>
                        </span>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="0">
                        <h4>2016</h4>
                        <span>
                            의료기기 제조 및 품질관리 기준 적합 인정 취득
                        </span>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="0">
                        <h4>2017</h4>
                        <span>
                            유방암/난소암 정밀진단 제품 국내 최초 CE-IVD 취득
                        </span>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="500">
                        <h4>2018</h4>
                        <span>
                            고형암 정밀진단 제품 국내 최초 CE-IVD 취득
                        </span>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="500">
                        <h4>2019</h4>
                        <span>
                            임상시험검체분석기관 지정
                        </span>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="500">
                        <h4>2020</h4>
                        <span>
			    혈액암 정밀진단 제품 국내 최초 CE-IVD 취득
                                      </span>
                        <span>
                            코로나 19 진단시약 CE-IVD 취득<br>
                        </span>
                        <span> 
			      <b class="bu">코스닥 상장</b><br>
                        </span>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="1000">
                        <h4>2021</h4>
                        <span>
                            코로나19 및 인플루엔자 진단시약 CE-IVD 취득
                                       </span>
                        <span>
			    소비자 대상 직접 시행(DTC) 유전자 검사 서비스 인증제 도입을 위한
			      3차 시범사업 통과(70개항목)
                        </span>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="1000">
                        <h4>2022</h4>
                        <span>
                            결핵 정밀진단 제품 아시아 최초 CE-IVD 취득 
                        </span>
                        <span>
                            더 많은 사람들의 Well-life 영위를 위한 꿈으로 <b class="bu">자회사 웰핏 설립</b>
                        </span>
                    </li>
                    <li data-aos="fade-right" data-aos-duration="3000" data-aos-delay="1000">
                        <h4>2023</h4>
                        <span>
			    건강관리앱 '나에' 런칭<br>
                        </span>
                        <!-- <span>
                            <b class="bu">
                                바른 분해 & 흡수를 돕는 “멜팅온(Melting on)” 런칭
                                운동과 일상의새로운 패러다임  “스웻온(Sweat on)” 런칭
                            </b>
                        </span> -->
							<span>
								<b class="bu">
                                바른 분해 & 흡수를 돕는 “멜팅온(Melting on)” 런칭
								</b>
							</span>
							<span>
								<b class="bu">
                                운동과 일상의새로운 패러다임  “스웻온(Sweat on)” 런칭
								</b>
							</span>
                    </li>
                </ul>
            </div>
        </section>
        <footer>
            <div class="ft_top">
                <div class="main_wrap hei">
                    <div class="ft_text">
                        <h2>웰핏은 <b>다양한 협업을</b> 기다리고 있습니다.</h2>
                        <a href="mailto:cs@welfit.co.kr">cs@welfit.co.kr</a>
                    </div>
                </div>
            </div>
            <div class="ft_bt">
                <div class="main_wrap">
                    <address>
                        주식회사 웰핏<br>
                        서울특별시 구로구 디지털로26길 111, 1707호(구로동, 제이앤케이디지털타워)
                    </address>
		    <div class="fm_site">Family site
			<img src="images/f_arrow.png" alt="">			
			<div class="fm_site_list">
				<a href="https://www.ngenebio.com" target="_blank">엔젠바이오</a>
			</div>
		     </div>

                </div>
            </div>
        </footer>
    </div>












    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/common.js"></script>
    <script>
  	AOS.init();

	$('.slider').slick({
  centerMode: true,
  asNavFor: '.slider-tit',
   infinite : true,
   autoplay:true,
   autoplaySpeed:3000,
  slidesToShow: 3,
   prevArrow: false,
    nextArrow: false,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

 $('.slider-tit').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider'
});

    </script>
</body>
</html>