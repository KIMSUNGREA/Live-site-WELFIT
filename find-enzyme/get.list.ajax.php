<?php
//-----------------------------------------------------------------------------------------
// 설명 : 일반업무 상태변경
// 페이지 : /gwork/view.php
//-----------------------------------------------------------------------------------------

require_once $_SERVER['DOCUMENT_ROOT']."/_x_signpost.php";
require_once RT_ROOT."/engine.php";

//-------------------------------------------------------------------------------------------------

if ($env->_post['mode'] == "get_list") {

	$cont = "";

	$arr = array();
	$arr['Q5'] = $env->_post['Q5'];
	$arr['Q8'] = $env->_post['Q8'];
	$arr['Q9'] = $env->_post['Q9'];

	$tmp_arr = array();
	$tmp_arr[] = $env->_post['Q5'];
	$tmp_arr[] = $env->_post['Q8'];
	$tmp_arr[] = $env->_post['Q9'];

	//같은 점수는 포테이토만 출력
	if (($arr['Q5'] == "10" && $arr['Q8'] == "10" && $arr['Q9'] == "10") || ($arr['Q5'] == "5" && $arr['Q8'] == "5" && $arr['Q9'] == "5")) {
		$cont.= get_li_cont("QQ", 1);
		?>
		var ret = "00";
		var cont = "<?php echo $cont;?>";
		<?php
		exit;
	}

	//개별 설정
	aksort($arr,true);
	aksort($tmp_arr,true);

	if ($tmp_arr[0] == "10" && $tmp_arr[1] == "10" && $tmp_arr[2] == "5") {

		$n = 1;
		foreach ($arr as $k => $v) {
			if ($n < 3) {$cont.= get_li_cont($k, $n);}
			$n++;
		}
		?>
		var ret = "00";
		var cont = "<?php echo $cont;?>";
		<?php
		exit;
	}

	if ($tmp_arr[0] == "10" && $tmp_arr[1] == "5" && $tmp_arr[2] == "5") {

		foreach ($arr as $k => $v) {
			$cont.= get_li_cont($k, 1);
			break;
		}
		$cont.= get_li_cont("QQ", 2);
		?>
		var ret = "00";
		var cont = "<?php echo $cont;?>";
		<?php
		exit;
	}

	if ($tmp_arr[0] == "5" && $tmp_arr[1] == "5" && $tmp_arr[2] == "3") {

		$n = 1;
		foreach ($arr as $k => $v) {
			if ($n < 3) {$cont.= get_li_cont($k, $n);}
			$n++;
		}
		?>
		var ret = "00";
		var cont = "<?php echo $cont;?>";
		<?php
		exit;
	}

	//위 모든 조건에 맞지 않으면 가장 높은 점수순 2개
	foreach ($arr as $k => $v) {

		$n = 1;
		foreach ($arr as $k => $v) {
			if ($n < 3) {$cont.= get_li_cont($k, $n);}
			$n++;
		}
		?>
		var ret = "00";
		var cont = "<?php echo $cont;?>";
		<?php
		exit;
	}


} else {
	?>var ret = "99";<?php
}

//$pnum 제품번호 : Q5.다크초코	Q8.트로피컬	Q9.얼그레이	QQ.스윗포테이토맛
//$rnum 추천순번
function get_li_cont($pnum, $recom) {

	$html = "";

	if ($pnum == "Q5") {
		$html.= "<li>";
		$html.= " <a href='https://melting-on.com/product/%EC%97%94%EC%9E%90%EC%9E%844-%ED%83%84%EB%8B%A8%EC%A7%80%EB%8B%A4-%EB%8B%A4%ED%81%AC%EC%B4%88%EC%BD%94%EB%A7%9B/11/category/1/display/2/' target='_blank'>";
		$html.= "  <p>추천 ".$recom."순위</p>";
		$html.= "  <div class='cont'>";
		$html.= "   <img src='images/popup_img1.png' alt=''>";
		$html.= "   <div class='text'>";
		$html.= "    <h2>엔자임 4 탄단지다<br><em>다크초코맛</em></h2>";
		$html.= "    <span>탄수화물 맞춤 분해효소<br class='pc'> α-아밀라아제 150만Unit</span>";
        $html.= "    <strong class='atag'>자세히보기</strong>";
		$html.= "   </div>";
		$html.= "  </div>";
		$html.= " </a>";
		$html.= "</li>";
	}

	if ($pnum == "Q8") {
		$html.= "<li>";
		$html.= " <a href='https://melting-on.com/product/%EC%97%94%EC%9E%90%EC%9E%844-%ED%83%84%EB%8B%A8%EC%A7%80%EB%8B%A4-%ED%8A%B8%EB%A1%9C%ED%94%BC%EC%BB%AC%EB%A7%9B/14/category/24/display/1/' target='_blank'>";
		$html.= "  <p>추천 ".$recom."순위</p>";
		$html.= "  <div class='cont'>";
		$html.= "   <img src='images/popup_img3.png' alt=''>";
		$html.= "   <div class='text'>";
		$html.= "    <h2>엔자임 4 탄단지다<br><em>트로피컬맛</em></h2>";
		$html.= "    <span>단백질 맞춤분해 효소<br class='pc'>프로테아제 7,000Unit</span>";
                $html.= "    <strong class='atag'>자세히보기</strong>";
		$html.= "   </div>";
		$html.= "  </div>";
		$html.= " </a>";
		$html.= "</li>";
	}

	if ($pnum == "Q9") {
		$html.= "<li>";
		$html.= " <a href='https://melting-on.com/product/%EC%97%94%EC%9E%90%EC%9E%844-%ED%83%84%EB%8B%A8%EC%A7%80%EB%8B%A4-%EC%96%BC%EA%B7%B8%EB%A0%88%EC%9D%B4%EB%A7%9B/12/category/24/display/1/' target='_blank'>";
		$html.= "  <p>추천 ".$recom."순위</p>";
		$html.= "  <div class='cont'>";
		$html.= "   <img src='images/popup_img4.png' alt=''>";
		$html.= "   <div class='text'>";
		$html.= "    <h2>엔자임 4 탄단지다<br><em>얼그레이맛</em></h2>";
		$html.= "    <span>지방 분해효소 활성화 특화효소<br class='pc'>EMIQ 50g</span>";
                $html.= "    <strong class='atag'>자세히보기</strong>";
		$html.= "   </div>";
		$html.= "  </div>";
		$html.= " </a>";
		$html.= "</li>";
	}

	if ($pnum == "QQ") {
		$html.= "<li>";
		$html.= " <a href='https://melting-on.com/product/%EC%97%94%EC%9E%90%EC%9E%844-%ED%83%84%EB%8B%A8%EC%A7%80%EB%8B%A4-%EC%8A%A4%EC%9C%97%ED%8F%AC%ED%85%8C%EC%9D%B4%ED%86%A0%EB%A7%9B/15/category/24/display/1/' target='_blank'>";
		$html.= "  <p>추천 ".$recom."순위</p>";
		$html.= "  <div class='cont'>";
		$html.= "   <img src='images/popup_img2.png' alt=''>";
		$html.= "   <div class='text'>";
		$html.= "    <h2>엔자임 4 탄단지다<br><em>스윗포테이토맛</em></h2>";
		$html.= "    <span>밸런스 효소<br class='pc'> α-아밀라아제 50만Unit<br class='pc'>프로테아제 1,500Unit<br class='pc'>EMIQ 10g</span>";
                $html.= "    <strong class='atag'>자세히보기</strong>";
		$html.= "   </div>";
		$html.= "  </div>";
		$html.= " </a>";
		$html.= "</li>";
	}

	return $html;
}

//https://www.php.net/manual/en/function.asort
//위 페이지 내의 댓글 예제 소스
function aksort(&$array,$valrev=false,$keyrev=false) {
  if ($valrev) { arsort($array); } else { asort($array); }
    $vals = array_count_values($array);
    $i = 0;
    foreach ($vals AS $val=>$num) {
        $first = array_splice($array,0,$i);
        $tmp = array_splice($array,0,$num);
        if ($keyrev) { krsort($tmp); } else { ksort($tmp); }
        $array = array_merge($first,$tmp,$array);
        unset($tmp);
        $i = $num;
    }
}
?>