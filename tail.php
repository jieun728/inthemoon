<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

//모바일 접속시 모바일전용 tail.php 파일연동 

/* if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
} */

?>

  </section>
</div>
<!-- 회원가입및게시판 컨텐츠 레이아웃끝 -->


<!--하단영역시작 -->


<div id="footer_wrap">
  <footer id="footer_inner">
      <a href="#"><i class="fab fa-instagram"></i> <i class="fab fa-youtube"></i> <i class="far fa-envelope"></i></a>
      <a href="#">010-5185-5379</a>
      <a href="#">qkekto1111@gmail.com</a>
      <a href="#">서울시 양천구 목동서로70</a>
      <a href="#">In the moon copyright 2020</a>
  </footer>
</div>


<!--하단영역끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>