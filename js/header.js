$(document).ready(function(){

  floatHeader() //floating header
  mainMenu() //메인메뉴 보이기
})

function mainMenu(){
  var $mainMenu
  var $subMenu;
  var subMenuNum;
  var $line
  var currentLi

  init()
  initEvent()

  function init(){
    $mainMenu=$("#mainmenu_list").children().children("a")
    $subMenu=$(".submenu_list")
    subMenuNum=$subMenu.size()

    $subMenu.hide()
    $subMenu.css({"top":100,"opacity":0})
    $line=$("<div class='mainmenu_line'></div>")
    $line.appendTo($("#mainmenu"))
  }

  function initEvent(){
    $mainMenu.on("mouseenter focus",menuOver)
    $("#header_wrap").on("mouseleave",menuOut)
    $subMenu.find("a").last().on("focusout",menuOut)
    $("#mainmenu_list").children().on("mouseenter",showLine)
  }
  
  function menuOver(){
    $("#header_bg").stop()
    $("#header_bg").animate({"opacity":1,"height":170},400,"easeOutCubic",function(){

      for(var i=0; i<subMenuNum; i++){
        $subMenu.css({"opacity":0,"top":100})
        $subMenu.show()
        $subMenu.eq(i).stop()
        $subMenu.eq(i).animate({"opacity":1,"top":75},350+(i*150),"easeOutCubic")
      }
    })
  }
  
  function menuOut(){
    $subMenu.hide()

    $("#header_bg").stop()
    $("#header_bg").animate({"opacity":0,"height":0},400,"easeOutCubic")
    $line.hide()
  }

  function showLine(){
    $line.show()
    $line.css({"width":$("#mainmenu_list").children().innerWidth()})
    currentLi=$("#mainmenu_list").children().index($(this))
    $line.stop()
    $line.animate({"left":currentLi*$(this).innerWidth()},400,"easeOutCubic")
  }
}

function floatHeader(){
  var currentScrollHeight
  var newScrollHeight

  $(window).on("scroll",windowScroll)
  
  currentScrollHeight=$(document).scrollTop()


  function windowScroll(){
    newScrollHeight=$(document).scrollTop()

    if(newScrollHeight-currentScrollHeight>0){
      $("#header_wrap:not(:animated)").animate({"top":-75},300,"easeOutCubic")
    }else{
      $("#header_wrap:not(:animated)").animate({"top":0},300,"easeOutCubic")
    }
    currentScrollHeight=newScrollHeight
  }
}
