<?php
//-----------------------------------------------------------------------------------------
// 프로그램		: RINT-KIT
// 제작			: 린트킷(rintkit.com)
// 버전			: 1.0
// 인코딩		: UTF-8
// 설명			: Product Admin controller
//-----------------------------------------------------------------------------------------

if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }

//-----------------------------------------------------------------------------------------

if( !class_exists("product_admin") )
{
	class product_admin extends board
	{
		var $env, $dbo, $app;

		//----------------------------------------------------------------------------------------------

		function product_admin($ai_page_num=10, $ai_page_block=10) {

			global $env, $dbo;

			$this->env = $env;
			$this->dbo = $dbo;

			$this->board("RT_PRODUCT", $ai_page_num, $ai_page_block);
		}

		//----------------------------------------------------------------------------------------------

	}
}
?>
