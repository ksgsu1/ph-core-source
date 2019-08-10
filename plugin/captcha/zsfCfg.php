<?php
/*
아래 코드 한 줄은 스팸차단 이미지의 문제 타입 설정입니다.
1: '1234 와 5678 중 큰 수는?'	2: '1234 와 5678 중 작은 수는?'	3: '83 더하기 5는?'			4: '94 빼기 3은?'
5: '8 곱하기 9는?'				6: '5967' (4자리 난수)			7: 'QJMA' (4자리 알파벳)	8: '6R2A' (4자리 영문자 숫자 조합)
예) 덧셈과 뺄셈만 하고 싶을 때: $zsfCfg['codeForm'] = array( 3, 4 );
예) 4자리 난수만 나오게 하고 싶을 때: $zsfCfg['codeForm'] = array( 6 );
*/
$zsfCfg['codeForm'] = array( 2 );	# 스팸차단 이미지의 문제 타입 설정

/* --------------------------------------------------
위 코드 한 줄만 수정하시면 사용에 지장이 없습니다.
아래부터는 고급 환경설정입니다.
-------------------------------------------------- */

$zsfCfg['distortion'] = 0;	# 문자 왜곡 여부, 0: 안함, 1: 왜곡함 (text distortion, 0: no, 1: yes) 왜곡을 설정할 경우엔 글꼴 크기를 더 크게 적당히 조정하셔야 합니다.

/*  아래는 글꼴 종류 설정입니다.
글꼴 크기를 24px보다 크게 하시려면 아래 [①큰 글꼴] 맨 앞의 주석처리(#)를 지우고 [②작은 글꼴] 맨 앞에 주석처리(#)를 넣어 주세요.
글꼴 크기를 24px보다 작게 하시려면 아래 [①큰 글꼴] 맨 앞의 주석처리(#)를 넣고 [②작은 글꼴] 맨 앞에 주석처리(#)를 지워 주세요.
만일 한 글꼴만 사용하고 싶다면, 해당 글꼴 외 다른 글꼴이름을 지우면 됩니다.
예) MalgunGothic24px 글꼴만 사용하고 싶은 경우 : $zsfCfg['fontName'] = array ( 'MalgunGothic24px' );
*/
# $zsfCfg['fontName'] = array ( 'MalgunGothic40px', 'Gungsuh40px', 'Gulim40px', 'Impact40px', 'PyunjiR40px', 'YDISomaL40px', 'TimesNewRoman40px', 'Arial40px' );	# [①큰 글꼴]
$zsfCfg['fontName'] = array ( 'Tahoma24px', 'TimesNewRoman26px', 'Arial26px', 'YDISomaL26px', 'PyunjiR24px', 'Impact27px', 'Gulim26px', 'Gungsuh27px', 'MalgunGothic24px' );	# [②작은 글꼴]

/*
아래는 스팸차단 이미지 디자인에 관한 설정입니다.
*/
$zsfCfg['font-size'] = 16;		# 이미지 글꼴 크기 (픽셀)
$zsfCfg['width'] = 0;			# 이미지 폭 (픽셀) : 0으로 설정하면 이미지 폭이 가변적이어서, 필요만큼 늘어나고 줄어듭니다.
$zsfCfg['height'] = 25;			# 이미지 높이 (픽셀)
$zsfCfg['padding-left'] = 6;	# 이미지 박스 안 글자의 왼쪽 여백 (픽셀)
$zsfCfg['padding-top'] = 3;		# 이미지 박스 안 글자의 위쪽 여백 (픽셀)
$zsfCfg['letter-spacing'] = 2;	# 이미지 글자의 간격 (픽셀)
$zsfCfg['space-width'] = 10;	# 이미지 스페이스(공백)의 너비 (픽셀)
$zsfCfg['border-color'] = '';	# 이미지 테두리 색상. 예: #0000cc (값이 없으면 자동)

/*
아래는 로그 보관 일수 설정입니다. 스팸차단 입력값이 맞은 것과 틀린 것에 대한 로그를
며칠 전 기록까지 보관할 것인가를 설정합니다.
예를 들어, 1일 경우 지금으로부터 1일(24시간) 전까지의 기록을 담아 둡니다.
7로 하면, 지금으로부터 일주일 전까지의 기록을 담아 둡니다.
숫자가 커지면 커질수록 로그파일의 용량이 늘어나고
프로그램 실행속도가 저하될 수 있으므로, 3 이 적절합니다.
*/
$zsfCfg['logPassed'] = 3;	# 입력값이 맞았던 로그 보관일수
$zsfCfg['logDenied'] = 3;	# 입력값이 틀려서 차단된 로그 보관일수

/*
아래 코드는 문제를 어떤 방식으로 출력할 것인가에 대한 설정입니다.
1: 문제를 부호로 출력 (Print Question code with Symbol.)	예) 88+3=?
2: 문제를 영어로 출력 (Print Question code with English.)	예) 88 PLUS 3?
3: 문제를 한글로 출력 (Print Question code with Korean.)	예) 88 더하기 3은?
*/
$zsfCfg['view'] = 3;

/* 아래 코드는 주석처리(#)되어 있습니다. 적용하시려면 맨 앞의 주석처리(#)를 지워 주세요.
1=>4,	// 문제 종류 1번, '1234 와 5678 중 큰 수는?' 에서 1234 와 5678의 자리수 설정 (기본값: 4자리 수)
2=>4,	// 문제 종류 2번, '1234 와 5678 중 작은 수는?' 에서 1234 와 5678의 자리수 설정 (기본값: 4자리 수)
3=>2,	// 문제 종류 3번, '83 더하기 5는?' 에서 83의 자리수 설정 (기본값: 2자리 수)
4=>2,	// 문제 종류 4번, '94 빼기 3은?' 에서 94의 자리수 설정 (기본값: 2자리 수)
5=>1,	// 문제 종류 5번, '8 곱하기 9는?'에서 8의 자리수 설정 (기본값: 1자리 수)
6=>4,	// 문제 종류 6번, '5967'에서 5967의 자리수 설정 (기본값: 4자리 수)
7=>4	// 문제 종류 7번, 'QJMA'에서 글자 수 설정 (기본값: 4자리 문자)
8=>4	// 문제 종류 8번, '6R2A'에서 글자 수 설정 (기본값: 4자리 문자)
*/
# $zsfCfg['codeCfg'] = array ( 1=>4, 2=>4, 3=>2, 4=>2, 5=>1, 6=>4, 7=>4, 8=>4 );

$zsfCfg['zsfLogo'] = 0;			# SpamFree.kr 라는 로고 출력 여부 (1: 출력, 0: 출력 안함)
?>
