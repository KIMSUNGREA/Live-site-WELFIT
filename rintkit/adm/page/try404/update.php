<?php
//-------------------------------------------------------------------------------------------------
/*
 * 페이지 관리 - 404페이지매칭 - 업데이트
 * 
 * $env->_post['mode'] 데이터 처리 구분
 */
//-------------------------------------------------------------------------------------------------

require_once "../../engine.php";

//-------------------------------------------------------------------------------------------------

$data = array();//DB 필드데이터

if ($env->_get['mode'] == "delete" && is_numeric($env->_get['seq']))
{
	$result = $dbo->query("DELETE FROM RT_PAGE_404 WHERE seq='".$env->_get['seq']."'");

	if ($result) {
		rt_js_move("", "parent", "reload");
	} else {
		rt_js_msg("시스템문제로 등록되지 않았습니다.");
	}
}
exit;
?>