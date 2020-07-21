<? include_once $_SERVER["DOCUMENT_ROOT"]."/mobile/inc/start.html" ?>

  <link rel="stylesheet" href="/mobile/contact/style.css">
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
<!-- contents영역시작 -->
<div id="contents_wrap">
    <section id="info">
     <h2 class="hidden">인더문 정보</h2>
     <p id="info_title"><a href="#">Contact us</a></p>
     <p id="info_text"><a href="#">인더문에서 오로지 당신만을 위한<br>공간, 시간을 느껴보세요</a></p>
     <ul id="info_list">
       <li>
         <p><i class="fas fa-phone-alt"></i><a href="#">010 5185 5379</a></p>
       </li>
       <li>
         <p><i class="far fa-envelope"></i><a href="#">qkekto1111@gmail.com</a></p>
       </li>
       <li>
         <p><i class="fas fa-map-marker-alt"></i><a href="#">서울시 양천구 목동서로<br><span>view on google map</span></a></p>
       </li>
     </ul>
    </section>
    <section id="contact">
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
 <!-- contents영역끝 -->
  <!-- footer시작 -->
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/mobile/inc/footer.html" ?>
  <!-- footer끝 -->
</body>
</html>