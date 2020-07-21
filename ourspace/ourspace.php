<?	
	include "../common.php"; // 루트 공통파일 연결 
	
	$g5['title'] = "서브페이지제목"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once('../head.php'); //루트 공통 상단을 연결합니다.
	include_once('header.php'); //각 메인메뉴 카테고리별 상단을 따로 연결합니다. ( 카테고리별 상단을 다르게 제작가능 )

	echo '<link href="style.css" rel="stylesheet" type="text/css">'; //각 메인메뉴 카테고리별 css를 따로 연결합니다. 레이아웃은 한단계 위 css_js/common.css 에서 제어합니다.
	echo '<link href="mediascreen.css" rel="stylesheet" type="text/css">'; //각 메인메뉴 카테고리별 css를 따로 연결합니다. 레이아웃은 한단계 위 css_js/common.css 에서 제어합니다.
	echo '<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=b43711157d27c7449d64bf40bf8ebcda"></script>'; //각 메인메뉴 카테고리별 css를 따로 연결합니다. 레이아웃은 한단계 위 css_js/common.css 에서 제어합니다.
?>
	
  <!-- 서브페이지 컨텐츠 내용 추가 -->
  
  <script>
    $(document).ready(function(){

      var container = document.getElementById('location_map'); //지도를 담을 영역의 DOM 레퍼런스
    var options = { //지도를 생성할 때 필요한 기본 옵션
      center: new kakao.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
      level: 3 //지도의 레벨(확대, 축소 정도)
    };

    var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴


    })
  </script>
	
	
	

<!-- contents영역시작 -->
<div id="contents_wrap">
  <div id="gallery_wrap">
    <section id="gallery_inner">
      <h2 class="hidden">인더문 갤러리</h2>
      <p id="gallery_text"><a href="#">문을 연 순간, 펼쳐 지는 우주<br>복잡하고 시끄러운 일상에서 벗어나 완전한 어둠, 완전한 침묵을 느낄 수 있습니다.<br><span>인더문에서 오로지 당신만을 위한 공간, 시간을 느껴보세요</span></a></p>
      <ul id="gallery_list">
        <li>
        <p class="gallery_list_title"><a href="#">아늑한 힐링 로비</a></p>
        <p class="gallery_list_text"><a href="#">플로팅이 시작하기 전과 후에 차를<br>마시고 편안하게 쉴 수 있는 로비</a></p>
        </li>
        <li>
        <p class="gallery_list_title"><a href="#">메이크업 룸</a></p>
        <p class="gallery_list_text"><a href="#">헤어드라이기, 스킨케어 용품 준비<br>커튼으로 가려져 편안한 공간</a></p>
        </li>
        <li>
          <p class="gallery_list_title"><a href="#">아늑한 힐링 로비</a></p>
          <p class="gallery_list_text"><a href="#">플로팅이 시작하기 전과 후에 차를<br>마시고 편안하게 쉴 수 있는 로비</a></p>
        </li>
        <li>
        <p class="gallery_list_title"><a href="#">혼자만의 플로팅 룸</a></p>
        <p class="gallery_list_text"><a href="#">프라이빗한 샤워공간<br>샤워용품과 이어플러그, 눈이 따가울때 사용할 수<br>있는 스프레이 준비</a></p>
        </li>
      </ul>
    </section>
  </div>
  <div id="location_wrap">
    <section id="location_inner">
      <h2 id="location_title"><a href="#">In the moon on the map</a></h2>
      <div id="location_info">
      <p><a href="#"><i class="fas fa-map-marker-alt"></i> 서울시 양천구 목동서로70</a></p>
      <p><a href="#"><i class="far fa-clock"></i> 09:00am - 21:00pm</a></p>
      <p><a href="#"><i class="fas fa-phone-alt"></i> 010-5185-5379</a></p>
      <p><a href="#"><i class="far fa-envelope"></i> qkekto1111@gmail.com</a></p>
    </div>
    <div id="location_map">

    </div>
    </section>
  </div>
  
</div>
<!-- contents영역끝 -->
	
	
	

<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>