<? include_once $_SERVER["DOCUMENT_ROOT"]."/mobile/inc/start.html" ?>

  <link rel="stylesheet" href="/mobile/ourspace/style.css">
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
  <div id="contents_wrap">
    <section id="ourspace">
      <h2 class="hidden">인더문 내부 사진</h2>
      <p id="ourspace_title"><a href="#">Our space</a></p>
      <p id="ourspace_text"><a href="#">인더문에서 오로지 당신만을 위한<br>공간, 시간을 느껴보세요</a></p>
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
            <p class="gallery_list_title"><a href="#">우주 속에 있는 듯한 플로팅 탱크</a></p>
            <p class="gallery_list_text"><a href="#">두 사람이 들어갈 수 있는 넓은 공간<br>탱크 안에서 조절할 수 있는 asmr과 다양한 조명</a></p>
          </li>
          <li>
          <p class="gallery_list_title"><a href="#">혼자만의 플로팅 룸</a></p>
          <p class="gallery_list_text"><a href="#">프라이빗한 샤워공간<br>샤워용품과 귀마개, 스프레이 구비</a></p>
          </li>
      </ul>
    </section>
    <section id="map">
      <h2 class="hidden">구글맵으로 보는 인더문 위치</h2>
      <p id="map_title"><a href="#"><span>In the moon</span><br>on the map</a></p>
    </section>
  </div>
  <!-- footer시작 -->
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.html" ?>
  <!-- footer끝 -->
</body>
</html>