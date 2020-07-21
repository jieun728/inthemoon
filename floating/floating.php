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
  <div id="about_wrap">
    <div id="about_inner">
      <section id="movie">
        <h2 class="hidden">플로팅 설명 영상</h2>
        <embed width="1280" height="720" src="https://www.youtube.com/embed/zc1ZpDSIk-s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </section>
      <section id="about">
        <h2 id="about_title"><a href="#">What is floating?</a></h2>
        <p id="about_text">
          <a href="#">플로팅테라피는 소금물이 차있는 탱크 안에서 일정 시간 휴식을 취하는 힐링테라피입니다.<br>처음에는 빛과 소리가 차단된 공간이 낯설고, 잡생각이 몰려들지만,<br>곧 잡념이 사라지고 시간 감각을 잃어버릴 정도로 평안함이 감싸는걸 경험하실 수 있습니다.</a>
        </p>
        <p id="about_more"><a href="#"><i class="fas fa-arrow-left"></i>  동영상을 시작해 인더문에서 체험할 수 있는 플로팅에 대해 알아보세요!</a></p>
      </section>
    </div>
  </div>
<div id="sense_wrap">
  <section id="sense_inner">
    <h2 class="hidden">감각을 차단하는 플로팅탱크</h2>
    <p id="sense_title"><a href="#">Four things not in Floating</a></p>
    <p id="sense_title_sub"><a href="#">우리가 플로팅 탱크 속에서 편안함을 느끼는 이유</a></p>
    <ul id="sense_list">
      <li>
        <p class="sense_list_title"><a href="#">01 No sound</a></p>
        <p class="sense_list_text"><a href="#">탱크는 완전한 침묵 속에 있도록 설계되었습니다.<br>처음 적응할 동안 원하시는 ASMR을 재생하며 안정을 찾을 수 있습니다.</a></p>
      </li>
      <li>
        <p class="sense_list_title"><a href="#">02 No sight</a></p>
        <p class="sense_list_text"><a href="#">탱크 안은 완벽한 어둠입니다. 머리속에 검정색 캔버스를 떠올려 보세요.<br>달빛아래 있는 듯한 은은한 조명으로 바꿀 수 있습니다.</a></p>
      </li>
      <li>
        <p class="sense_list_title"><a href="#">03 No touch</a></p>
        <p class="sense_list_text"><a href="#">탱크 속의 물과 공기는 사람의 피부 온도와 같게 유지 되어,<br>피부가 물과 공기에 닿고 있는 것을 느낄 수 없게 됩니다.</a></p>
      </li>
      <li>
        <p class="sense_list_title"><a href="#">04 No gravity</a></p>
        <p class="sense_list_text"><a href="#">아무런 노력을 하지 않아도 물에 떠 있을 수 있습니다.<br>몸을 누르던 중력 이 사라지면서 전에 경험하지 못했던 편안함이 찾아옵니다. </a></p>
      </li>
    </ul>
    <p id="floating_book"><a href="/booking/booking.php">BOOK NOW</a></p>
  </section>
</div>
<div id="how_wrap">
  <section id="how_inner">
    <h2 id="how_title"><a href="#">How to float</a></h2>
    <ul id="how_list">
      <li><div class="how_box"><a href="#">01</a></div><div class="how_text"><a href="#">간단하게 샤워를 하고 준비되어있는<br>이어플러그를 끼우세요</a></div></li>
      <li><div class="how_box"><a href="#">02</a></div><div class="how_text"><a href="#">조심히 탱크안에 들어가서 문을 닫고,<br>준비가 되면 음악과 조명을 끄세요</a></div></li>
      <li><div class="how_box"><a href="#">03</a></div><div class="how_text"><a href="#">물에 누워서 몸과 마음이<br>편안해 지는걸 느껴보세요</a></div></li>
      <li><div class="how_box"><a href="#">04</a></div><div class="how_text"><a href="#">끝나는 시간이 되면<br>음악이 조용히 시작됩니다</a></div></li>
      <li><div class="how_box"><a href="#">05</a></div><div class="how_text"><a href="#">샤워를 하고 나와 뷰티룸에서<br>로션을 바르고 머리를 말리세요</a></div></li>
      <li><div class="how_box"><a href="#">06</a></div><div class="how_text"><a href="#">라운지에서 차를 마시고<br>쉬다 가세요.</a></div></li>
    </ul>
  </section>
</div>
<div id="benefits_wrap">
  <section id="benefits_inner">
    <h2 id="benefits_title"><a href="#">The benefits</a></h2>
    <ul id="benefits_list">
      <li>
        <div class="picto_wrap">
          <div class="picto"></div>
          <a href="#">Mind</a>
        </div>
        <div class="benefits_box">
        <p class="benefits_list_title"><a href="#">스트레스, 불안감 감소<br>창의력, 집중력 상승</a></p>
        <p class="benefits_list_text"><a href="#">안정된 상태에 접어들면, 세타파로 뇌 활동이 증진되면서 스트레스와 불안감이 감소하고, 창의력과 집중력을 상승 시켜준다.</a></p>
        </div>
      </li>
      <li>
        <div class="picto_wrap">
          <div class="picto"></div>
          <a href="#">Sleep</a>
        </div>
        <div class="benefits_box">
        <p class="benefits_list_title"><a href="#">불면증, 시차적응 개선<br>수면의 질 상승</a></p>
        <p class="benefits_list_text"><a href="#">탱크 속에서 보내는 1시간동안의<br>좋은 휴식은 8시간의 깊은 잠과<br> 같은 효과를 준다.</a></p>
        </div>
      </li>
      <li>
        <div class="picto_wrap">
          <div class="picto"></div>
          <a href="#">Beauty</a>
        </div>
        <div class="benefits_box">
        <p class="benefits_list_title"><a href="#">피부 보습, 미백효과<br>각질제거 효과</a></p>
        <p class="benefits_list_text"><a href="#">엡솜 솔트가 피부로 링거를 흡수하는 것과 같은 피부개선 효과를  주고 노화된 각질이 자연스럽게 벗겨진다.</a></p>
        </div>
      </li>
      <li>
        <div class="picto_wrap">
          <div class="picto"></div>
          <a href="#">Body</a>
        </div>
        <div class="benefits_box">
        <p class="benefits_list_title"><a href="#">만성 통증 완화<br>부상 회복 촉진</a></p>
        <p class="benefits_list_text"><a href="#">등과 척추가 중력으로 부터 벗어나면서 근육의 긴장을 이완시켜 통증이 완화 되고 몸이 회복된다.</a></p>
        </div>
      </li>
    </ul>
  </section>
</div>
</div>
<!-- contents영역끝 -->
	
	
	

<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>