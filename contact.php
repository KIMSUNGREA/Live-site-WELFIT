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
                                <a href="contact.php" class="on"><b>C</b>ontact</a>
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
        <section class="sub_top sub3"></section>
        <section class="content">
            <div class="main_wrap">
                <h3 class="mb" data-aos="fade-right" data-aos-offset="0" data-aos-easing="ease-in-sine">Contact Us</h3>
                <img src="images/welfit_big_logo.png" alt="" class="img-pl" data-aos="fade-right" ata-aos-offset="300" data-aos-easing="ease-in-sine">
                <span class="map pl" data-aos="fade-right" ata-aos-offset="300" data-aos-easing="ease-in-sine">
                    웰핏은 건강에 대한 심도 깊은 분석/기존과는 다른 새로운 방법으로 건강 솔루션을 발견하여 세상에 선보이는 기업입니다.<br class="pc"> 
                    끊임없는 R&D 및 품질개선의 선순환 구조를 확립해 나가고 있습니다.
                </span>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.0805022561544!2d126.89445507717637!3d37.482426628944594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9e2456bdbf11%3A0xc574a841879a0ecf!2z7ISc7Jq47Yq567OE7IucIOq1rOuhnOq1rCDrlJTsp4DthLjroZwyNuq4uCAxMTE!5e0!3m2!1sko!2skr!4v1698066792869!5m2!1sko!2skr" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="map_tit">
			<img src="images/point.png" alt="">
                	<strong class="map_text">서울 구로구 디지털로26길 111,1707호</strong>
		</div>
            </div>
        </section>
        <section class="content">
            <div class="main_wrap">
                <div class="send_box">
			<img src="images/contact_img.jpg" alt="" data-aos="fade-right" data-aos-duration="1000">
                <div class="contact_box" data-aos="fade-left" data-aos-duration="1000">
<form name="dataform" action="/send_mail.php" method="post" target="rt_ifrm">
<input type="hidden" name="mode" value="inquiry">
                    <div class="name">
                        <p>Your Name(*)</p>
                        <input type="text" name="name">
                    </div>
                    <div class="email">
                        <p>Your Email(*)</p>
                        <input type="text" name="email">
                    </div>
                    <div class="subject">
                        <p>Subject</p>
                        <input type="text" name="subject">
                    </div>
                    <div class="message">
                        <p>Message</p>
                        <textarea name="contents"></textarea>
                    </div>
</form>
		    <a href="javascript:gomail();">SEND</a>
                </div>
		</div>

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
    <script src="js/common.js"></script>
    <script>
	function gomail() {
		var f = document.dataform;
		if (f.name.value == "") {
			alert("성함을 입력해 주세요.");
			f.name.focus();
		} else if (f.email.value == "") {
			alert("이메일을 입력해 주세요.");
			f.email.focus();
		} else if (f.subject.value == "") {
			alert("제목을 입력해 주세요.");
			f.subject.focus();
		} else if (f.contents.value == "") {
			alert("문의내용을 입력해 주세요.");
			f.contents.focus();
		} else {
			f.submit();
		}
	}

  	AOS.init();
    </script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>
</body>
</html>