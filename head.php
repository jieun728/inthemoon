<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

// 모바일 접속시 모바일전용 head.php 파일연동 

/* if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
} */

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단영역시작 -->
<ul class="skipmenu_list">
  <li><a href="#mainmenu">메뉴바로가기</a></li>
  <li><a href="#contents_wrap">본문바로가기</a></li>
  <li><a href="#footer_wrap">하단바로가기</a></li>
</ul>
      <!-- 상단영역시작 -->
<div id="header_wrap">
  <header id="header_inner">
    <h1 id="logo"><a href="/index.php" title="인더문 메인페이지 바로가기">In the moon</a></h1>
    <nav id="mainmenu">
      <h2 class="hidden">메인메뉴</h2>
      <ul id="mainmenu_list">
        <li>
          <a href="/floating/floating.php" title="플로팅페이지 바로가기">FLOATING</a>
          <ul class="submenu_list">
            <li><a href="/floating/floating.php">FLOATING?</a></li>
            <li><a href="/floating/floating.php">BENEFITS</a></li>
          </ul>     
        </li>
        <li>
          <a href="/ourspace/ourspace.php" title="페이지 바로가기">OURSPACE</a>
          <ul class="submenu_list">
            <li><a href="/ourspace/ourspace.php">GALLERY</a></li>
            <li><a href="/ourspace/ourspace.php">LOCATION</a></li>
          </ul>     
        </li>
        <li>
          <a href="/faqs/faqs.php">FAQs</a>  
          <ul class="submenu_list">
            <li><a href="/faqs/faqs.php">FAQs</a></li>
          </ul> 
        </li>
        <li>
          <a href="/pricing/pricing.php">PRICING</a>
          <ul class="submenu_list">
            <li><a href="/pricing/pricing.php">PRICING</a></li>
            <li><a href="/pricing/pricing.php">EVENT</a></li>
          </ul>     
        </li>
        <li>
          <a href="/insta/insta.php">COMMUNITY</a>
          <ul class="submenu_list">
            <li><a href="/insta/insta.php">INSTAGRAM</a></li>
            <li><a href="http://inthemoon.dothome.co.kr/bbs/board.php?bo_table=freeboard">BOARD</a></li>
          </ul>     
        </li>
      </ul>
    </nav>
    <nav id="mobilemenu">
      <h2 id="mobilemenu_icon"><a href="#"><i class="fas fa-bars"><span class="hidden">모바일메뉴</span></i></a></h2>
    </nav>
    <ul id="topmenu_list">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
              <li><a href="/contact/contact.php">CONTACT</a><li>
              <li><a href="/booking/booking.php">BOOK</a><li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">LOGIN</a></li>

            <?php }  ?>

    </ul>
    
  </header>
  
  <div id="header_bg"></div>
</div>

<!-- 상단영역끝 -->
      
      

    <!--로그인영역시작-->
         


    <!--로그인영역끝-->
           

<!--상단영역끝 -->


<?

		/*
			서브 컨텐츠 페이지를 제외한  게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결
		    ( 각 서브 컨텐츠 페이지 상단은 각 메인메뉴별 카테고리폴더 (해당테마폴더 > html폴더 > sub폴더 복사해서 생성 ) 안에 header.php 에서 각각 설정 수정가능 )			

		*/

		if(!defined('_INDEX_') && $title_view != "no"){ // if문을 수정하지 마십시오.			

			// 게시판 타이틀 정비
			if($bo_table){
				$g5['title'] = $board['bo_subject'];
			}
			
			//faq 타이틀 정비
			if($fm_id){
				$g5['title'] = "자주하시는 질문";
			}
			
			
	?>

		<section id="board_visual">
			<!--회원가입및게시판 상단 비쥬얼 -->
					
		
		</section>


		
		<div id="board_wrapper">
			<section id="board_contents">
			<!-- 회원가입및게시판 컨텐츠 레이아웃시작 -->




	<?}?>
