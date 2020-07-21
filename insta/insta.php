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
  <section id="insta">
    <h2 class="hidden">인더문 인스타</h2>
    <ul class="insta_list">
      <li><a href="#"><img src="/insta/images/img_01.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_02.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_03.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_04.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_05.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_big.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_06.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_07.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_08.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_09.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_10.jpg" alt="user_id"></a></li>
      <li><a href="#"><img src="/insta/images/img_11.jpg" alt="user_id"></a></li>
    </ul>
    <div id="insta_more">
      <p id="insta_morebox"><i class="fas fa-chevron-down"></i></p>
      <p><a href="#">more</a></p>
    </div>
  </section>
  <div id="review_wrap">
    <section id="review_inner">
      <h2 class="hidden">인더문 리뷰</h2>
   <div id="review_list_wrap">
      <ul id="review_list">
        <li>
          <div class="box">
            <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
            <div class="box_text_wrap"><p class="box_text"><a href="#">오늘 처음 가봤는데 로비가 너무 이쁘고 탱크도 넓어서 좋았어요. 플로팅 자체가 처음이라 어떻게 하는 건지 걱정하다 갔는데 직원분이 친절하고 자세하게 설명해 주시더라고요. 친구들과 다시 같이 올게요.</a></p></div>
            <p class="box_more"><a href="#;">Read more</a></p>
            <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
            <p class="box_google"><a href="#">Post on <span>Google</span></a></p>
          </div>
          <div class="user">
            <p class="user_img"><a href="#"><img src="/images/user_img1.png" alt="user img"></a></p>
            <p class="user_name"><a href="#">김성은<span>1일전</span></a></p>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
            <div class="box_text_wrap"><p class="box_text"><a href="#">원래 목이랑 등이 자주 아파서 물리치료도 받고 마사지도 자주 받았는데 금방 다시 아팠어요. 근데 플로팅하고 나선 지금 몇달동안 한번도 아픈적이 없었어요!! 얼른다시 가고싶어요</a></p></div>
            <p class="box_more"><a href="#;">Read more</a></p>
            <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
            <p class="box_google"><a href="#">Post on <span>Google</span></a></p>
          </div>
          <div class="user">
            <p class="user_img"><a href="#"><img src="/images/user_img2.png" alt="user img"></a></p>
            <p class="user_name"><a href="#">김명은<span>3일전</span></a></p>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
            <div class="box_text_wrap"><p class="box_text"><a href="#">직원들이 친절하고 내부가 깨끗했어요<br>다음에 또 이용하고 싶네요.</a></p></div>
            <p class="box_more"><a href="#;">Read more</a></p>
            <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
            <p class="box_google"><a href="#">Post on <span>Google</span></a></p>
          </div>
          <div class="user">
            <p class="user_img"><a href="#"><img src="/images/user_img3.png" alt="user img"></a></p>
            <p class="user_name"><a href="#">최윤호<span>6일전</span></a></p>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
            <div class="box_text_wrap"><p class="box_text"><a href="#">너무 좋은 경험이였어요. 처음 플로팅하고 몇주 뒤에 숨을 평소보다 깊고 규칙적으로 쉬고있더라고요. 가기전에 면도는 안하고 가는게 좋아요. 처음 몇분은 되게 따가웠어요ㅠㅠ</a></p></div>
            <p class="box_more"><a href="#;">Read more</a></p>
            <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
            <p class="box_google"><a href="#">Post on <span>Google</span></a></p>
          </div>
          <div class="user">
            <p class="user_img"><a href="#"><img src="/images/user_img4.png" alt="user img"></a></p>
            <p class="user_name"><a href="#">박현정<span>7일전</span></a></p>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
            <div class="box_text_wrap"><p class="box_text"><a href="#">지하철역에서 바로 가까워서 너무 좋고 친절하세요ㅎㅎ 여름때부터 꾸준히 받아봤는데 피로회복에 제일 좋은것 같아요~ 우선 잠도 정말 잘 옵니다ㅋㅋㅋ운동 끝나고 힘들어도 집가기 전에 들려서 꼭 받고 가는데 컨디션 최고..근육 아픈게 정말이지 훨씬 나아져요~</a></p></div>
            <p class="box_more"><a href="#;">Read more</a></p>
            <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
            <p class="box_google"><a href="#">Post on <span>Google</span></a></p>
          </div>
          <div class="user">
            <p class="user_img"><a href="#"><img src="/images/user_img5.png" alt="user img"></a></p>
            <p class="user_name"><a href="#">허보민<span>8일전</span></a></p>
          </div>
        </li>
        <li>
          <div class="box">
            <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
            <div class="box_text_wrap"><p class="box_text"><a href="#">겨울에 날씨가 추워도 꾸준히 받아보니 제 몸이 스스로 추위에 더 강해지고 면역력이 높아진 것을 실제로 느꼈습니다. 감기를 달고 살던 제가 이번엔 감기에 걸리지 않았고, 혈액 순환에도 좋아서 그런지 하체 부종도 많이 완화가 되더라구요^^. 저희 어머님 아버님도 모시고 다니는데 관절이 안 좋으신 부분이 이젠 많이 안 아프시다고 하니 계속 쭉 받아보려 합니다. 항상 직원분들이 친절하게 해주시고 건강상태도 꼼꼼하게 체크해주셔서 좋더군요 강추입니다^^</a></p></div>
            <p class="box_more"><a href="#;">Read more</a></p>
            <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
            <p class="box_google"><a href="#">Post on <span>Google</span></a></p>
          </div>
          <div class="user">
            <p class="user_img"><a href="#"><img src="/images/user_img6.png" alt="user img"></a></p>
            <p class="user_name"><a href="#">김현지<span>9일전</span></a></p>
          </div>
        </li>
      </ul>
    </div>
      <p id="prv2"><a href="#;"><img src="/images/prv_02.jpg" alt="이전사진"></a></p>
      <p id="next2"><a href="#;"><img src="/images/next_02.jpg" alt="다음사진"></a></p>
  </div>
</div>
<!-- contents영역끝 -->
	
	
	

<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>