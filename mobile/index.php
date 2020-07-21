<? include_once $_SERVER["DOCUMENT_ROOT"]."/mobile/inc/start.html" ?>

  <link rel="stylesheet" href="/mobile/css/main.css">
  <link rel="stylesheet" href="/mobile/css/swiper.css">
  <script src="/mobile/js/main.js"></script>
  <script src="/mobile/js/swiper.js"></script>


</head>
<body>
  <!-- 바로가기메뉴시작 -->
  <ul class="skipmenu_list">
    <li><a href=#>메뉴바로가기</a></li>
    <li><a href=#>본문바로가기</a></li>
    <li><a href=#>하단바로가기</a></li>
  </ul>
  <!-- 바로가기메뉴끝 -->
  <!-- header 시작 -->
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/mobile/inc/header.html" ?>
  <!-- header 끝 -->
  <!-- visual 시작 -->
  <section id="visual" class="swiper-container">
    <h2 class="hidden">인더문의 플로팅 테라피</h2>
    <!-- <video id=viaual_video width="416" height="662" preload="auto" autoplay muted loop>
      <source src="/images/I Tried Flotation_mobile.mp4" type="video/mp4"> -->
      <!-- <source src="/images/I-Tried-Flotation_mobile.ogv" type="video/ogv"> -->
      <!-- <source src="/images/I-Tried-Flotation_mobile.webm" type="video/webm"> -->
    <!-- </video>
    <div id="visual_movie">
      <embed width="1280" height="720" src="https://www.youtube.com/embed/8sghK7_UqpA?autoplay=1&mute=1&controls=0&rel=0&playlist=8sghK7_UqpA&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></embed>
    </div> -->
    <ul id="visual_list" class="swiper-wrapper">
      <li class="swiper-slide"></li>
      <li class="swiper-slide"></li>
      <li class="swiper-slide"></li>
    </ul>
    <div class="swiper-pagination visual_btn"></div>
    <div id="visual_text_wrap">
      <p id="visual_text">
        <a href="#;">탱크 문을 열고 우주 속으로 들어가는 순간<br>완전한 어둠, 완전한 침묵 속에서 몸과 마음이<br>재충전 되는 걸 느껴 보세요</a>
      </p>
   </div>
  </section>
  <!-- visual 끝-->
  <div id="contents_wrap">
    <section id="floating">
      <h2 id="floating_title"><a href="#">Floating therapy?</a></h2>
      <p id="floating_text"><a href="#">: 물이 차있는 탱크 안에서 일정 시간<br>휴식을 취하는 힐링 테라피</a></p>
      <ul id="floating_list">
        <li>
          <p class="floating_list_title"><a href="#"><span class="hidden">No sound</span></a></p>
        </li>
        <li>
          <p class="floating_list_title"><a href="#"><span class="hidden">No sight</span></a></p>
        </li>
        <li>
          <p class="floating_list_title"><a href="#"><span class="hidden">No touch</span></a></p>
        </li>
        <li>
          <p class="floating_list_title"><a href="#"><span class="hidden">No gravity</span></a></p>
        </li>
      </ul>
      <p id="floating_more"><a href="/mobile/floating/floating.php">자세히 보기</a></p>
      <p id="floating_more_btn"></p>
    </section>
    <section id="benefits">
      <h2 class="hidden">플로팅의 장점</h2>
      <p id="benefits_title"><a href="#">What’s in it<br><span>FOR YOU</span></a></p>
      <ul id="benefits_list">
        <li><p><a href="#">MIND</a></p></li>
        <li><p><a href="#">BODY</a></p></li>
        <li><p><a href="#">BEAUTY</a></p></li>
      </ul>
      <p id="benefits_more"><a href="/mobile/floating/floating.php">자세히 보기</a></p>
      <p id="benefits_more_btn"></p>
    </section>
    <section id="with">
      <h2 class="hidden">인더문과 함께하는 스타</h2>
      <p id="with_title"><a href=#>In the moon<br><span>WITH</span></a></p>
      <div class="with_list_wrap swiper-container">
        <ul class="with_list swiper-wrapper">
          <li class="swiper-slide">
            <p class="with_img"></p>
            <p class="with_name"><a href="#">뷰티크리에이터 <span>이사배</span></a></p>
            <p class="with_text"><a href="#">"겨울에 항상 건조했던 피부가<br>맑고 부드러워졌어요"</a></p>
          </li>
          <li class="swiper-slide">
            <p class="with_img"></p>
            <p class="with_name"><a href="#">축구선수 <span>손흥민</span></a></p>
            <p class="with_text"><a href="#">"연습과 시합으로 근육통이 잦은데 통증 완화에 효과가 좋아요!"</a></p>
          </li>
          <li class="swiper-slide">
            <p class="with_img"></p>
            <p class="with_name"><a href="#">가수 <span>아이유</span></a></p>
            <p class="with_text"><a href="#">"불면증 때문에 밤을 새곤 했는데 플로팅을 한 뒤론 잠을 잘자요"</a></p>
          </li>
        </ul>
        <div class="swiper-pagination with_btn"></div>
      </div>
    </section>
    <section id="insta">
      <h2 class="hidden">인더문인스타그램</h2>
      <p id="insta_title"><a href="#"># In the moon</a></p>
      <p id="insta_text"><a href="#">share your floating moments!</a></p>
      <div class="swiper-container insta_img_wrap">
        <ul id="insta_img" class="swiper-wrapper">
          <li class="swiper-slide"><img src="/insta/images/img_01.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_02.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_03.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_04.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_05.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_06.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_07.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_08.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_09.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_10.jpg" alt="플로팅"></li>
          <li class="swiper-slide"><img src="/insta/images/img_11.jpg" alt="플로팅"></li>
        </ul>
      </div>
      <p class="swiper-button-prev insta_prev"></p>
      <p class="swiper-button-next insta_next"></p>
      <p class="more_insta"><a href="/mobile/insta/insta.php">더보기</a></p>
    </section>
    <section id="review">
      <h2 class="hidden">인더문리뷰</h2>
      <div id="review_list_wrap" class="swiper-container">
        <ul id="review_list" class="swiper-wrapper">
          <li class="swiper-slide">
            <div class="box">
              <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
              <div class="box_text_wrap"><p class="box_text"><a href="#">오늘 처음 가봤는데 로비가 너무 이쁘고 탱크도 넓어서 좋았어요. 플로팅 자체가 처음이라 어떻게 하는 건지 걱정하다 갔는데 직원분이 친절하고 자세하게 설명해 주시더라고요. 친구들과 다시 같이 올게요.</a></p></div>
              <p class="box_more"><a href="#;">Read more</a></p>
              <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
              <p class="box_google"><a href="#">Post on<br><span>Google</span></a></p>
            </div>
            <div class="user">
              <p class="user_img"><a href="#"><img src="/mobile/images/user01.png" alt="user img"></a></p>
              <p class="user_name"><a href="#">김성은<br><span>1일전</span></a></p>
            </div>
          </li>
          <li class="swiper-slide">
            <div class="box">
              <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
              <div class="box_text_wrap"><p class="box_text"><a href="#">원래 목이랑 등이 자주 아파서 물리치료도 받고 마사지도 자주 받았는데 금방 다시 아팠어요. 근데 플로팅하고 나선 지금 몇달동안 한번도 아픈적이 없었어요!! 얼른다시 가고싶어요</a></p></div>
              <p class="box_more"><a href="#;">Read more</a></p>
              <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
              <p class="box_google"><a href="#">Post on<br><span>Google</span></a></p>
            </div>
            <div class="user">
              <p class="user_img"><a href="#"><img src="/mobile/images/user02.png" alt="user img"></a></p>
              <p class="user_name"><a href="#">김명은<br><span>3일전</span></a></p>
            </div>
          </li>
          <li class="swiper-slide">
            <div class="box">
              <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
              <div class="box_text_wrap"><p class="box_text"><a href="#">직원들이 친절하고 내부가 깨끗했어요<br>다음에 또 이용하고 싶네요.</a></p></div>
              <p class="box_more"><a href="#;">Read more</a></p>
              <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
              <p class="box_google"><a href="#">Post on<br><span>Google</span></a></p>
            </div>
            <div class="user">
              <p class="user_img"><a href="#"><img src="/mobile/images/user03.png" alt="user img"></a></p>
              <p class="user_name"><a href="#">최윤호<br><span>6일전</span></a></p>
            </div>
          </li>
          <li class="swiper-slide">
            <div class="box">
              <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
              <div class="box_text_wrap"><p class="box_text"><a href="#">너무 좋은 경험이였어요. 처음 플로팅하고 몇주 뒤에 숨을 평소보다 깊고 규칙적으로 쉬고있더라고요. 가기전에 면도는 안하고 가는게 좋아요. 처음 몇분은 되게 따가웠어요ㅠㅠ</a></p></div>
              <p class="box_more"><a href="#;">Read more</a></p>
              <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
              <p class="box_google"><a href="#">Post on<br><span>Google</span></a></p>
            </div>
            <div class="user">
              <p class="user_img"><a href="#"><img src="/mobile/images/user04.png" alt="user img"></a></p>
              <p class="user_name"><a href="#">박현정<br><span>7일전</span></a></p>
            </div>
          </li>
          <li class="swiper-slide">
            <div class="box">
              <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
              <div class="box_text_wrap"><p class="box_text"><a href="#">지하철역에서 바로 가까워서 너무 좋고 친절하세요ㅎㅎ 여름때부터 꾸준히 받아봤는데 피로회복에 제일 좋은것 같아요~ 우선 잠도 정말 잘 옵니다ㅋㅋㅋ운동 끝나고 힘들어도 집가기 전에 들려서 꼭 받고 가는데 컨디션 최고..근육 아픈게 정말이지 훨씬 나아져요~</a></p></div>
              <p class="box_more"><a href="#;">Read more</a></p>
              <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
              <p class="box_google"><a href="#">Post on<br><span>Google</span></a></p>
            </div>
            <div class="user">
              <p class="user_img"><a href="#"><img src="/mobile/images/user03.png" alt="user img"></a></p>
              <p class="user_name"><a href="#">허보민<br><span>8일전</span></a></p>
            </div>
          </li>
          <li class="swiper-slide">
            <div class="box">
              <p class="box_star"><a href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p>
              <div class="box_text_wrap"><p class="box_text"><a href="#">겨울에 날씨가 추워도 꾸준히 받아보니 제 몸이 스스로 추위에 더 강해지고 면역력이 높아진 것을 실제로 느꼈습니다. 감기를 달고 살던 제가 이번엔 감기에 걸리지 않았고, 혈액 순환에도 좋아서 그런지 하체 부종도 많이 완화가 되더라구요^^. 저희 어머님 아버님도 모시고 다니는데 관절이 안 좋으신 부분이 이젠 많이 안 아프시다고 하니 계속 쭉 받아보려 합니다. 항상 직원분들이 친절하게 해주시고 건강상태도 꼼꼼하게 체크해주셔서 좋더군요 강추입니다^^</a></p></div>
              <p class="box_more"><a href="#;">Read more</a></p>
              <p class="box_google_img"><a href="#"><img src="/images/google.gif" alt="google"></a></p>
              <p class="box_google"><a href="#">Post on<br><span>Google</span></a></p>
            </div>
            <div class="user">
              <p class="user_img"><a href="#"><img src="/mobile/images/user04.png" alt="user img"></a></p>
              <p class="user_name"><a href="#">김현지<br><span>9일전</span></a></p>
            </div>
          </li>
        </ul>
      </div>
      <p class="swiper-button-next review_next review_btn"></p>
      <p class="swiper-button-prev review_prev review_btn"></p>
    </section>
</div>
  <!-- footer시작 -->
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.html" ?>
  <!-- footer끝 -->
</body>
</html>