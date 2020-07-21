<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

// 모바일접속시 모바일전용 index.php 파일 연동 

/* if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
} */

include_once(G5_PATH.'/head.php');
?>


<head>
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/mediascreen.css">
  <script src="/js/main.js"></script>
</head>


<!--메인비쥬얼영역시작-->

<section id="visual_wrap">
  <h2 class="hidden">인더문의 플로팅 테라피</h2>
  <ul id="visual_list">
    <li>
      <div>
        <p class="visual_text_01">탱크 문을 열고<br>우주 속으로 들어가는 순간</p>
        <p class="visual_text_02">완전한 어둠, 완전한 침묵 속에서 몸과 마음이 재충전 되는 걸 느껴 보세요</p>
      </div>
    </li>
    <!-- <li>
      <div>
        <p class="visual_text_01">탱크 속에서 무중력에 가까운 상태로 </p>
        <p class="visual_text_02">긴장을 풀고 오로지 자신에게만 집중하는 시간을 가질 수 있습니다</p>
      </div>
    </li> -->
    <li>
      <div>
        <p class="visual_text_01">문을 연 순간, 펼쳐 지는 우주</p>
        <p class="visual_text_02">시끄러운 일상에서 벗어나 완전한 어둠, 완전한 침묵을 느낄 수 있습니다.</p>
      </div>
    </li>
  </ul>
  <div id="visual_nav">
    <span id="visual_num">01 / 02</span>
    <span id="visual_line"></span>
    <span id="visual_line_bold"></span>
    <span id="visual_prev" class="visual_btn"></span>
    <span id="visual_next" class="visual_btn"></span>
  </div>
</section>
<!-- 비쥬얼끝 -->
<!-- 컨텐츠시작 -->
<div id="contents_wrap">
  <div id="about_wrap">
    <section id="about_inner">
      <h2 id="about_title"><a href="#">Floating therapy?</a></h2>
      <p id="about_text_01"><a href="#">물이 차있는 탱크 안에서 일정 시간 휴식을 취하는 힐링 테라피</a></p>
      <p id="about_text_02"><a href="#">탱크 속에 있는 동안 무중력에 가까운 상태로 몸과 마음의 긴장을 풀고 오로지 자신에게만 집중하는 시간을 가질 수 있습니다</a></p>
      <ul id="about_icon_list">
        <li><p></p><a href="#">No sight</a></li>
        <li><p></p><a href="#">No sound</a></li>
        <li><p></p><a href="#">No touch</a></li>
        <li><p></p><a href="#">No gravity</a></li>
      </ul>
      <p class="more"><a href="/floating/floating.php">more</a></p>
    </section>
  </div>
  <div id="with_wrap">
    <section id="with_inner">
      <h2 id="with_title"><a href="#">In the moon <span class="px42">WITH</span></a></h2>
      <ul id="with_list">
        <li>
          <p class="with_list_img"><a href="#"><img src="/images/with_img_01.png" alt="이사배"></a></p>
          <div id="with_text_wrap1">
            <p class="with_list_title"><a href="#">뷰티크리에이터 <span class="px24">이사배</span></a></p>
            <i class="fas fa-quote-left"></i>
            <p class="with_list_text"><a href="#">겨울에 항상 건조했던 피부가 맑고 부드러워졌어요</a></p>
            <i class="fas fa-quote-right"></i>
          </div>
        </li>
        <li>
          <p class="with_list_img"><a href="#"><img src="/images/with_img_02.png" alt="손흥민"></a></p>
          <div id="with_text_wrap2">
            <p class="with_list_title"><a href="#">축구선수 <span class="px24">손흥민</span></a></p>
            <i class="fas fa-quote-left"></i>
          <p class="with_list_text"><a href="#">연습과 시합으로 근육통이 잦은데 통증 완화에 효과가 좋아요!</a></p>
          <i class="fas fa-quote-right"></i>
        </div>
        </li>
        <li>
          <p class="with_list_img"><a href="#"><img src="/images/with_img_03.png" alt="아이유"></a></p>
          <div id="with_text_wrap3">
            <p class="with_list_title"><a href="#">가수 <span class="px24">아이유</span></a></p>
            <i class="fas fa-quote-left"></i>
          <p class="with_list_text"><a href="#">불면증 때문에 밤을 새곤 했는데 플로팅을 한 뒤론 잠을 잘자요</a></p>
          <i class="fas fa-quote-right"></i>
        </div>
        </li>
      </ul>
    </section>
  </div>
  <div id="benefits_wrap">
    <section id="benefits_inner">
      <h2 id="benefits_title"><a href="#">what’s in it <br><span class="px42">For you?</span></a></h2>
      <ul id="benefits_list">
        <li>
          <p class="benefits_list_title"><a href="#">FOR YOUR MIND</a></p>
          <div class="circle">
          <p class="benefits_list_text"><a href="#">우울감 ,불면증 개선<br>창의력, 집중력 상승</a></p>
          </div>
        </li>
        <li>
          <p class="benefits_list_title"><a href="#">FOR YOUR BODY</a></p>
          <div class="circle">
          <p class="benefits_list_text"><a href="#">만성 통증 완화<br>부상 회복을 촉진<br>면역력 증가</a></p>
          </div>
        </li>
        <li>
          <p class="benefits_list_title"><a href="#">FOR YOUR BEAUTY</a></p>
          <div class="circle">
          <p class="benefits_list_text"><a href="#">피부 보습, 미백효과<br>각질제거 효과</a></p>
          </div>
        </li>
      </ul>
    </section>
  </div>
  <div id="insta_wrap">
    <section id="insta_inner">
      <h2 class="hidden">인더문인스타그램</h2>
      <p id="insta_title"><a href="#"># In the moon</a></p>
      <p id="insta_text"><a href="#">share your floating moments!</a></p>
      <div id="insta_list_wrap">
        <ul class="insta_list">
          <li><a href="#"><img src="/insta/images/img_01.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_02.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_03.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_04.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_05.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_06.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_07.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_08.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_09.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_10.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_11.jpg" alt="플로팅"></a></li>
          <li><a href="#"><img src="/insta/images/img_big.jpg" alt="플로팅"></a></li>
        </ul>
      </div>
      <p id="next"><a href="#;"><img src="/images/next.gif" alt="다음사진"></a></p>
      <p id="prv"><a href="#;"><img src="/images/prev.gif" alt="이전사진"></a></p>
      <p class="more_insta"><a href="/insta/insta.php">more</a></p>
    </section>
  </div>
  <div id="review_wrap">
    <section id="review_inner">
      <h2 id="review_title"><a href="#">In the moon <span class="px42">Review</span></a></h2>
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
            <div class="box_text_wrap"><p class="box_text"><a href="#">직원들이 친절하고 내부가 깨끗했어요. <br>다음에 또 이용하고 싶네요.</a></p></div>
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
    </section>
  </div>
  
  <!-- <div id="latest" style="width:500px; height:300px; float:left;">
    <?
          // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
          // 사용방법 : latest(스킨이름, 게시판아이디, 출력라인, 글자수);
          // 주의: 스킨이름은 게시판 스킨이 아닌 최근게시물 스킨이름 ( skin/latest폴더안 ) 지정 
          // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
          //freeboard 는 테이블명, 보일 개수, 글자수
    echo latest("basic", "freeboard", 5, 25);
    ?>	
  </div> -->
</div>


<!--메인비쥬얼영역끝-->





<!--메인컨텐츠영역시작-->








<!--메인컨텐츠영역끝-->



<?php
include_once(G5_PATH.'/tail.php');
?>