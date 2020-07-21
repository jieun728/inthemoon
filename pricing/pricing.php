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
  <div id="contents_inner">
    <p id="contents_text"><a href="#">플로팅을 즐길 수 있는 다양한 옵션과 멤버십 혜택, 이벤트까지 확인해 보세요!</a></P>
    <section id="price">
      <h2 id="price_title"><a href="#">REGULAR PRICE</a></h2>
      <ul id="price_list">
        <li><p class="type">LITE</p>FREE<br><span>60min float<br>90min float</span><p class="book"><a href="/booking/booking.php">Book now</a></p></li>
        <li><p class="type">BASIC</p>1 PACK<br><span>60min float 13만원<br>90min float 13만원</span><p class="book"><a href="/booking/booking.php">Book now</a></p></li>
        <li><p class="type">ADVANCED</p>3 PACK<br><span>60min float 13만원<br>90min float 13만원</span><p class="book"><a href="/booking/booking.php">Book now</a></p></li>
      </ul>
    </section>
    <section id="member">
      <h2 id="member_title"><a href="#">MEMBER BENEFITS</a></h2>
      <ul id="member_list">
        <li><p class="picto"></p><a href="#">60분에서 90분으로 항상<br>업그레이드 해드립니다</a></li>
        <li><p class="picto"></p><a href="#">생일인 달에 무료 플로팅을<br>1번 제공해 드립니다</a></li>
        <li><p class="picto"></p><a href="#">멤버분들에게만 예약<br>우선순위를 드립니다.</a></li>
      </ul>
    </section>
    <section id="event">
      <h2 id="event_title"><a href="#">EVENTS</a></h2>
      <ul id="event_list">
        <li><a href="#">당신의 첫 플로팅을 위해<br>3만원으로 플로팅을 시작해보세요!</a></li>
        <li><a href="#">3월이 길게 느껴지시는 당신에게<br>인더문에서 재충전 할 수 있는 선착순 할인혜택</a></li>
        <li><a href="#">인스타에 플로팅 자랑하고<br>만원 할인 쿠폰 받고!</a></li>
      </ul>
    </section>
  </div>
</div>
<!-- contents영역끝 -->
	
	
	

<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>