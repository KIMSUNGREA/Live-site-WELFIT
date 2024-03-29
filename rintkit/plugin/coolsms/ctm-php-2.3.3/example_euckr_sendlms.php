<?php
/**
 * vi:set ts=4 sw=4 expandtab fileencoding=cp949:
 * Copyright(C) 2008-2010 D&SOFT
 * http://open.coolsms.co.kr
 */
header("Cache-Control: no-cache");
?>
<html lang="ko" xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=EUC-KR" />
</head>
<body>
<?php
require_once("coolsms.php");

/**
 * 아래의 절차로 문자메시지를 보낼 수 있습니다.
 *
 * 1) $sms = new coolsms();                   // 객체생성
 * 2) $sms->appversion("프로그램명/버젼");    // 프로그램명/버젼 설정(생략가능).
 * 3) $sms->charset("euckr 혹은 utf8");       // 한글 인코딩 설정.
 * 4) $sms->setuser("아이디", "비밀번호");    // 계정정보 세팅
 * 5) $sms->addlms("받는번호", "회신번호", "제목", "메시지내용");   // 보낼 메시지목록에 추가
 * 6) $sms->connect();      // 서버에 연결
 * 7) $sms->send();         // 메시지 전송
 * 8) $sms->disconnect();   // 연결 해제
 **/

/**
 * coolsms 객체를 생성합니다.
 **/
$sms = new coolsms();

/**
 * 테스트 / 실전송 모드 선택
 * 테스트 문자 확인 : http://open.coolsms.co.kr/?mid=test_report
 * 실전송 문자 확인 : http://www.coolsms.co.kr/?mid=report
 **/
$sms->setRealMode();
//$sms->setTestMode();

/**
 * 프로그램명과 버젼을 입력합니다. (생략가능합니다.)
 * 형식: 프로그램명/버젼 (프로그램명: 반드시 영어로, 버젼: x.x.x 와 같은 형식)
 * 입력예: TEST/1.0
 **/
$sms->appversion("TEST/1.0");

/**
 * 한글 인코딩 방식을 설정합니다. (생략시 기본으로 euckr로 설정됨)
 **/
$sms->charset("euckr");

/**
 * 아이디/비밀번호를 설정합니다. (쿨에스엠에스(www.coolsms.co.kr)에서 가입하신 아이디, 비밀번호를 넣어줍니다.)
 * 테스트 모드일 경우 아이디 앞에 XX를 붙여줍니다. 아이디가 test라면 XXtest
 **/
$sms->setuser("coolsms-user-id", "coolsms-user-password");

/**
 * 보낼 문자 추가하기
 *
 * -- 유의사항 --
 * 1) 제목의 길이는 20바이트이며 초과시 20바이트 이내의 제목만 전송됩니다.
 * 2) 최대 보낼 수 있는 문자의 길이는 2,000바이트이며 초과시 2,000바이트 이내의 문자만 전송됩니다.
 * 3) 예약일시가 현재일시보다 작을 경우 바로 전송됩니다.
 * 4) 갯수 제한없이 addlms 호출로 보낼 문자목록에 계속 추가할 수 있습니다.(send 호출시 모두 전송됩니다.)
 *
 * @param $rcvno  받는번호 ; 받는 사람의 핸드폰 번호
 * @param $callback  회신번호 ; 보내는 사람의 연락처 (핸드폰 및 일반전화번호)
 * @param $subject LMS제목
 * @param $message  LMS내용
 * @param $callname  참조용 이름 ; www.coolsms.co.kr [전송결과] 에서 조회 가능. (생략가능)
 * @param $reservdate  예약일시 ; YYYYMMDDHHMISS 형식의 예약일시, 현재시각보다 작을 경우 바로 전송 (생략가능)
 *
 * Examples)
 * // 일반적인 발송
 * $sms->addlms($rcvno, $callback, $subject, $message);
 * // 아무개에게 발송 (참조용; 쿨에스엠에스 전송결과 페이지에서 이름으로 확인 가능)
 * $sms->addlms($rcvno, $callback, $subject, $message, "아무개");
 * // 아무개에게 2008년 05월 20일 13시 20분 01초에 발송예약
 * $sms->addlms($rcvno, $callback, $subject, $message, "아무개", "20080520132001");
 **/
if (!$sms->addlms("01012341234", "021231234", "LMS제목", "2,000바이트 이내로 문자내용을 입력하세요.")) {
    // 오류처리
    echo $sms->lasterror();
}

/**
 * 서버에 연결합니다.
 **/
$nsent = 0;
if (!$sms->connect()) {
    // 오류처리
    echo "서버에 접속할 수 없습니다.";
    exit(1);
}

/**
 * 추가된 문자를 모두 발송합니다.
 *
 * @return  전송건수
 **/
$nsent = $sms->send();
// 오류검사
if ($sms->errordetected()) {
    echo "오류가 발생했습니다 : " . $sms->lasterror();
}

/**
 * 연결을 끊습니다.
 **/
$sms->disconnect();

/**
 * 결과를 출력합니다.
 **/
echo "{$nsent} 건에 대한 전송내용을 출력합니다.<br />";
$sms->printr();

/**
 * 메시지목록을 비워줍니다.
 **/
$sms->emptyall();
?>
</body>
</html>
