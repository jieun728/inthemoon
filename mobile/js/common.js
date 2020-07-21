$(window).load(function(){

  mainNav()

  //floatHeader()

})
function mainNav(){
  var $mobileMenu=$("#mobilemenu")
  var $mobileMenuList=$("#mobilemenu_list").children()
  var currentHeight=60
  var openHeight

  $("#menu_icon").on("click",openMenu)
  $("#close_btn").on("click",closeMenu)
  $(window).on("resize",resizeMenu)

  $mobileMenuList.on("click",showSubMenu)

  $mobileMenuList.each(function(isOpen,data){
    $(this).data("isOpen",false)
  })

  $mobileMenu.css({"height":$(window).innerHeight(),"right":-$mobileMenu.innerWidth()})
  
  function resizeMenu(){
    $mobileMenu.css({"height":$(window).innerHeight()})
  }

  function openMenu(){
    $mobileMenu.show()
    $mobileMenu.animate({"right":0},400,"easeOutCubic")
    $("body").css({"overflow":"hidden"})
  }
  function closeMenu(){
    $mobileMenu.animate({"right":-$mobileMenu.innerWidth()},400,"easeOutCubic",function(){
      $mobileMenu.hide()
      closeAllSub()
    })
    $("body").css({"overflow":"visible"})
  }
  function showSubMenu(){

    if($(this).data("isOpen")==false){
      $mobileMenuList.css({"height":currentHeight})
      $(".more_icon").removeClass("submenu_selected")

      openHeight=currentHeight+($(".mobilesubmenu_list").children().innerHeight()*$(this).find("li").size())
      $(this).animate({"height":openHeight},300,"easeOutCubic")
      $(this).find("span").addClass("submenu_selected")

      $(this).data("isOpen",true)
    }else{
      $(this).animate({"height":currentHeight},300,"easeOutCubic")
      $(this).find("span").removeClass("submenu_selected")

      $(this).data("isOpen",false)
    }
  }
  function closeAllSub(){
    $mobileMenuList.css({"height":currentHeight})
    $(".more_icon").removeClass("submenu_selected")

    $mobileMenuList.each(function(isOpen,data){
      $(this).data("isOpen",false)
    })
  }
}

function floatHeader(){
  var currentScrollHeight=0
  var newScrollHeight

  $(window).on("scroll",windowScroll)
  
  currentScrollHeight=$(document).scrollTop()

  function windowScroll(){
    newScrollHeight=$(document).scrollTop()

    if(newScrollHeight<=0){
      $("#header_wrap:not").css({"top":0})
    }

    if(newScrollHeight-currentScrollHeight>0){
      $("#header_wrap:not(:animated)").animate({"top":-60},300,"easeOutCubic")
    }else{
      $("#header_wrap:not(:animated)").animate({"top":0},300,"easeOutCubic")
    }

    currentScrollHeight=newScrollHeight
  }


}