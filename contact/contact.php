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
   <section id="info">
    <h2 class="hidden">인더문 정보</h2>
    <p id="info_text"><a href="#">인더문에서 오로지 당신만을 위한 공간, 시간을 느껴보세요</a></p>
    <ul id="info_list">
      <li>
        <p class="info_list_title"><a href="#"><i class="fas fa-phone-alt"></i><br>Phone</a></p>
        <p class="info_list_text"><a href="#">010 5185 5379</a></p>
      </li>
      <li>
        <p class="info_list_title"><a href="#"><i class="far fa-envelope"></i><br>Email</a></p>
        <p class="info_list_text"><a href="#">qkekto1111@gmail.com</a></p>
      </li>
      <li>
        <p class="info_list_title"><a href="#"><i class="fas fa-map-marker-alt"></i><br>Location</a></p>
        <p class="info_list_text"><a href="#">서울시 양천구 목동서로<br><span>view on google map</span></a></p>
      </li>
    </ul>
   </section>
   <section id="contact_wrap">
    <h2 class="hidden">인더문 연락하기</h2>
    <form>
      <p>
        <input class="text short" type="text" placeholder="이름" autocomplete="off">
        <input class="text short2" type="text" placeholder="이메일" autocomplete="off">
      </p>
      <p>
        <input class="text long" type="text" placeholder="제목" autocomplete="off">
      </p>
      <p>
        <textarea placeholder="내용"></textarea>
      </p>
      <p><button type="submit">문의하기</button></p>
    </form>
   </section>
 </div>
</div>
<!-- contents영역끝 -->
	
	
	

<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>