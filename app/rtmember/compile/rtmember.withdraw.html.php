<?php /* Template_ 2.2.8 2020/07/31 13:43:36 /home/admin2.co.kr/arim/app/rtmember/template/rtmember.withdraw.html 000003401 */ ?>
<!-- 반응형 회원 시작 -->
<div class="rt-rwd-member-wrap">
	<!-- 폼 시작 -->
	<div class="rt-rwd-join-form-wrap">
		<!-- 폼 필드 시작 -->
		<form name="withdraw_form" action="<?php echo $TPL_VAR["path_user"]?>/update.php" method="post" target="rt_ifrm">
			<input type="hidden" name="mode" value="withdraw">
			<input type="hidden" name="path_user" value="<?php echo $TPL_VAR["path_user"]?>">
			<input type="hidden" name="php_self" value="<?php echo $TPL_VAR["php_self"]?>">
			<div class="rt-rwd-join-form-area">
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>개인정보처리</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box">
							<p><label><input type="radio" value="1" name="withdraw_type_en" checked="checked" /> 동일한 아이디의 재가입 방지 용도로 사용할 아이디만 남기고 모든 정보는 즉시 파기합니다.</label></p>
							<p><label><input type="radio" value="2" name="withdraw_type_en" /> 회원 아이디까지 포함하는 모든 정보를 즉시 파기합니다.(다른 회원이 동일한 아이디 사용가능)</label> </p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>주의사항</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box">
							<p>회원 탈퇴 시 홈페이지에 등록/제공한 자료는 자동으로 삭제되지 않습니다. 탈퇴 전에 회원으로 등록한 자료를 삭제하거나 운영자에게 삭제 요청한 후 탈퇴하셔야 합니다.</p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>보안문자</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-full-box">
							<p><span class="rt-join-form-bold" id="capcha_str"></span><a href="#;" class="rt-join-form-reflash" onclick="rt_get_capcha('draw')">새로고침</a></p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con rt-rwd-non-title">
					<div class="rt-rwd-join-form-title">
						<h1></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-px-box">
							<input type="text" placeholder="※ 보안문자를 입력해 주세요." name="sec_code" class="required" msg="보안문자를 입력해 주세요" />
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- 폼 필드 끝 -->
	</div>
	<!-- 폼 끝 -->
	<!-- 버튼 시작 -->
	<div class="rt-button rt-button-tac">
		<a href="#;" id="btn-form-submit">회원 탈퇴하기</a>
		<a href="<?php echo $TPL_VAR["page_mypage"]?>">돌아가기</a>
	</div>
	<!-- 버튼 끝 -->
</div>
<!-- 반응형 회원 끝 -->

<script src="<?php echo $TPL_VAR["path_assets"]?>/js/rtmember.withdraw.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_member.css" />
<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>