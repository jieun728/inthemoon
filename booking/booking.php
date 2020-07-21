<?	
	include "../common.php"; // 루트 공통파일 연결 
	
	$g5['title'] = "서브페이지제목"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once('../head.php'); //루트 공통 상단을 연결합니다.
	include_once('header.php'); //각 메인메뉴 카테고리별 상단을 따로 연결합니다. ( 카테고리별 상단을 다르게 제작가능 )

	echo '<link href="style.css" rel="stylesheet" type="text/css">'; //각 메인메뉴 카테고리별 css를 따로 연결합니다. 레이아웃은 한단계 위 css_js/common.css 에서 제어합니다.
	echo '<link href="mediascreen.css" rel="stylesheet" type="text/css">'; //각 메인메뉴 카테고리별 css를 따로 연결합니다. 레이아웃은 한단계 위 css_js/common.css 에서 제어합니다.
?>
	
	<!-- 서브페이지 컨텐츠 내용 추가 -->
	
	
	

<!-- contents영역시작 -->
<div id="contents_wrap">
<section id="booking">
  <h2 class="hidden">예약하기</h2>
  <section id="booking_date">
    <h2 class="hidden">날짜선택</h2>
  </section>
  <section id="booking_time">
    <h2 class="hidden">시간선택</h2>
    <p id="time_title">select time</p>
    <p id="time">2020.05.08 금</p>
    <ul id="time_list">
      <li>08:00 am<input type="radio" name="time"></li>
      <li>09:00 am<input type="radio" name="time"></li>
      <li>10:00 am<input type="radio" name="time"></li>
      <li>11:00 am<input type="radio" name="time"></li>
      <li>12:00 pm<input type="radio" name="time"></li>
      <li>01:00 pm<input type="radio" name="time"></li>
      <li>02:00 pm<input type="radio" name="time"></li>
      <li>03:00 pm<input type="radio" name="time"></li>
      <li>04:00 pm<input type="radio" name="time"></li>
      <li>05:00 pm<input type="radio" name="time"></li>
      <li>06:00 pm<input type="radio" name="time"></li>
      <li>07:00 pm<input type="radio" name="time"></li>
      <li>08:00 pm<input type="radio" name="time"></li>
    </ul>
  </section>
  <div id="booking_img">
  인더문에서 오로지 당신만을 위한 공간, 시간을 느껴보세요
  </div>
  <section id="booking_final">
    <h2 class="hidden">예약하기</h2>
    2020.05.08 금 12:00 pm
    <div id="booknow">
    BOOK NOW
   </div>
  </section>
</section>
</div>
<!-- contents영역끝 -->
	
	
	

<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>