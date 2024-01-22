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
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/m_style.css?v=<?php echo time();?>">

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
        <section class="main_video">
            <div class="video_container">
                <div class="bg">
                    <video autoplay muted playsinline loop>
                        <source type="video/mp4" src="video/ClipartKorea_51257915.mp4">
                    </video>
                </div>
            </div>
            <div class="video_text" data-aos="fade-left" data-aos-offset="0" data-aos-easing="ease-in-sine" data-aos-duration="1000">
            <h2>
                널리 인간을 건강하게<br>
                홍익인건(弘益人建)
            </h2>
            <span>Welfit Story</span>
            </div>
        </section>
        <section class="content">
            <div class="main_wrap">
                <h3 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">OUR COMPANY</h3>
                <div class="padding_box">
                    <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        We wish you a happy, merry, and healthy life.                    </p>
                    <span data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-delay="500">
                        ‘널리 인간을 건강하게 만든다’는 홍익인건의 사명으로 출범한 종합 건강솔루션 기업, 웰핏!<br class="pc"> 
			웰핏은 코스닥 상장 글로벌 바이오 기업인 엔젠바이오의 자회사로서,<br class="pc">
                        Well-being, Fitness, Happiness를 아우르는 신체적, 정신적, 사회적 건강의<br class="pc"> 
                        조화를 지향하며 생명과학과 바이오 기술의 융합, 혁신으로 새로운 웰니스 라이프스타일을 펼쳐갑니다.
                    </span>
                    <div class="view_btn_box" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-delay="500">
                        <a href="/about.php">VIEW OUR STORY</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content bg_g">
            <div class="main_wrap">
                <h3 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">OUR STORY</h3>
                <p class="mb" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <b>아르키메데스의 탐구정신으로</b><br>
                    유레카의 순간을 향해
                </p>
                <div class="padding_box">
                    <ul class="story_box">
                        <li data-aos="fade-up" data-aos-duration="3000">
                            <h4>Archimedesism!</h4>
                            <span>
                                모든 것을 관찰하고 증명하고자 했던<br> 
                                아르키메데스의 탐구정신으로<br> 
                                끊임없이 질문하고 분석하며<br> 
                                건강에 대한 새로운 인사이트를 발견합니다. 
                            </span>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
                            <h4>Eureka Moment</h4>
                            <span>
                                기존과는 다른 새로운 접근으로 세상을 이롭게 하는<br> 
                                새로운 발견을 추구합니다.<br>
                                풀리지 않았던 문제들에 새롭고 다양한 방식으로<br> 
                                접근하여  유레카!라고 외칠 수 있는 위대한<br> 
                                발견의 순간에 도달합니다.
                            </span>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="3000" data-aos-delay="1000">
                            <h4>The best is yet to come</h4>
                            <span>
                                그러나 여기서 멈추지 않습니다.<br> 
                                기술의 발전에  따라 더 나은 방법은<br>
                                계속해서 발견되고 발굴될 것이라는 신념으로<br>
                                아직 오지 않은 최고의 순간을 향해 끊임없이 나아갑니다.<br> 
                                최고의 솔루션을 찾아가는 여정은 이 순간에도 계속되고 있습니다 .
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
	<section class="content bg_g">
            <div class="main_wrap">
                <h3 class="mb" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">OUR BRAND</h3>                
            </div>
            <div class="bnr_box">
                <dl data-aos="fade-right" data-aos-duration="1000" onclick="window.open('https://www.wadiz.kr/web/wcomingsoon/rwd/240179?_refer_section_st=COMING_SOON_7')" style="cursor:pointer;">
                    <dt><b>탄단지 맞춤 소화 <strong>멜팅온</strong></b></dt>
                    <dt><img src="images/our_bd_1.jpg" alt=""></dt>
                    <dd>빠른 분해&흡수를 돕는 맞춤 효소 <br class="mob">멜팅온(Melting on)</dd>
                </dl>
                <dl data-aos="fade-left" data-aos-duration="1000" onclick="location.href='/business.php'" style="cursor:pointer;">
                    <dt>에슬레저 부스터 <strong>스웻온</strong></dt>
                    <dt><img src="images/our_bd_2.jpg" alt=""></dt>
                    <dd>운동과 일상의 새로운 패러다임<br class="mob"> 스웻온(Sweat on)</dd>
                </dl>
            </div>
        </section>
        <footer>
            <div class="ft_top">
                <div class="main_wrap hei">
                    <div class="ft_text">
                        <h2>웰핏은<br class="mob"> <b>다양한 협업을</b><br class="mob"> 기다리고 있습니다.</h2>
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
			<p class="arrow"></p>			
			<div class="fm_site_list">
				<a href="https://www.ngenebio.com" target="_blank">엔젠바이오</a>
			</div>
		     </div>
                </div>
            </div>
        </footer>
    </div>



    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/common.js"></script>
    <script>
  	AOS.init();
    </script>
</body>
</html>