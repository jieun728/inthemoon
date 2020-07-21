$(window).load(function(){

  goMobile() //모바일로 전환하는 함수

  //visualHeight() //비쥬얼 동영상일때 높이 조정함수

  visualSlide() //메인 비쥬얼 슬라이드

  withEffect() //parallax scroll

  benefitEffect() //for 구문으로 원이 순서대로 올라옴

  instaMore() // insta hover했을때 

  instaSlide() // insta 슬라이드

  reviewMore() // 리뷰 더보기,닫기

  reviewSlide() //리뷰 슬라이드

})

function goMobile(){
  var windowSize=$(window).innerWidth()

  if(windowSize<=480){
    window.location.replace("http://inthemoon.dothome.co.kr/mobile/index.php")
  }
}

function visualHeight(){
  $("#visual_wrap").css({"height":$("#visual_wrap embed").innerHeight()-80})
  $(window).on("resize",visualresize);
  function visualresize(){
    $("#visual_wrap").css({"height":$("#visual_wrap embed").innerHeight()-80})
  }
}

function visualSlide(){
  var $visualWrap
  var $visualList
  var $visualLi
  var $btn
  var visualNum
  var visualWidth
  var timer
  var $num
  var currentIndex
  var nextIndex

  init()
  reset()
  visualSlideStart()
  initEvent()

  function visualSlideStart(){
    timer=setInterval(slideNext,3800)
  }
  function visualSlideStop(){
    clearInterval(timer)
  }

  function init(){
    $visualWrap=$("#visual_wrap")
    $visualList=$("#visual_list")
    $visualLi=$visualList.children()
    $btn=$(".visual_btn")
    visualNum=$visualLi.size()
    currentIndex=0
    $num=$("#visual_num")

    $visualLi.css({"left":visualWidth,"opacity":0})
    $visualLi.eq(0).css({"left":0,"opacity":1})
    $visualLi.eq(0).children().stop()
    $visualLi.eq(0).children().animate({"opacity":1,"bottom":200},500,"easeInSine")
    lineEffect()
  }

  function reset(){
    visualWidth=$(window).innerWidth()
    $visualLi.css({"width":visualWidth})
    $visualWrap.css({"height":$(window).innerHeight()})
  }

  function initEvent(){
    $(window).on("resize",reset)
    $("#visual_next").on("click",slideNext)
    $("#visual_prev").on("click",slidePrev)

    $btn.on("mouseenter",visualSlideStop)
    $btn.on("mouseleave",visualSlideStart)
  }

  function numActive(selectNum){
    $num.html($("<span>0"+(selectNum+1)+" / 02<span>"))
  }
  
  function lineEffect(){
    $("#visual_line_bold").css({"width":0})
    $("#visual_line_bold").stop()
    $("#visual_line_bold").animate({"width":170},3800,"linear")
  }

  function slideNext(){
    lineEffect()
    nextIndex=currentIndex+1
    if(nextIndex>=visualNum){
      nextIndex=0 
    }
    
    $visualLi.children().css({"opacity":0,"bottom":150})

    $visualLi.eq(currentIndex).stop()
    $visualLi.eq(currentIndex).animate({"left":-visualWidth,"opacity":0},600,"swing",function(){
      $visualLi.removeClass("selected")
    })
    
    $visualLi.eq(nextIndex).css({"left":visualWidth,"opacity":0})

    $visualLi.eq(nextIndex).stop()
    $visualLi.eq(nextIndex).animate({"left":0,"opacity":1},600,"swing",function(){
      $(this).children().stop()
      $(this).children().animate({"opacity":1,"bottom":200},500,"easeInSine")
    })

    numActive(nextIndex)

    currentIndex=nextIndex
  }

  function slidePrev(){
    lineEffect()
    nextIndex=currentIndex-1
    if(nextIndex<0){
      nextIndex=visualNum-1
    }
    
    $visualLi.children().css({"opacity":0,"bottom":150})

    $visualLi.eq(currentIndex).stop()
    $visualLi.eq(currentIndex).animate({"left":visualWidth,"opacity":0},600,"swing",function(){
      $visualLi.removeClass("selected")
    })

    $visualLi.eq(nextIndex).css({"left":-visualWidth,"opacity":0})

    $visualLi.eq(nextIndex).stop()
    $visualLi.eq(nextIndex).animate({"left":0,"opacity":1},600,"swing",function(){
      $(this).children().stop()
      $(this).children().animate({"opacity":1,"bottom":200},500,"easeInSine")
    })
    numActive(nextIndex)

    currentIndex=nextIndex
  }

}


function withEffect(){
  var $img=$("#with_list").children()
  var scrollHeight

  $(window).on("scroll",windowScroll)

  function windowScroll(){

    scrollHeight=$(document).scrollTop()

    // if(scrollHeight>=$("#with_wrap").offset().top-$(window).innerHeight()/2){
    //   for(var i=0; i< $img.length; i++){
    //     $img.stop();
    //     $img.eq(i).animate({"opacity":1,"top":0},500+(i*500),"easeOutCubic")
    //   }
    // }else{
    //   $img.stop();
    //   $img.animate({"opacity":0,"top":50},300,"easeOutCubic")
    // }
    if(scrollHeight<1650){
      $img.eq(0).css({"top":520-scrollHeight/3,"opacity":-0.6+scrollHeight/1000})
      //$img.eq(1).css({"top":-569+scrollHeight/3})
      $img.eq(1).css({"top":520-scrollHeight/3,"opacity":-0.6+scrollHeight/1000})
      $img.eq(2).css({"top":520-scrollHeight/3,"opacity":-0.6+scrollHeight/1000})
    }
  }
}

function benefitEffect(){
  var $more=$("<div class='benefits_more'>View more</div>")
  var $circle=$("#benefits_list").find("div")
  var scrollHeight

  $circle.on("mouseenter",mouseOver)
  $circle.on("mouseleave",mouseOut)

  $(window).on("scroll",windowScroll)


  function windowScroll(){
    scrollHeight=$(document).scrollTop()
    
    // if(scrollHeight>=$("#benefits_wrap").offset().top-$(window).innerHeight()/2){
      
    //   $circle.stop()
    //   $circle.eq(0).animate({"top":50,"opacity":1},200,"easeOutBounce",function(){
    //     $circle.eq(1).animate({"top":50,"opacity":1},200,"easeOutBounce",function(){
    //       $circle.eq(2).animate({"top":50,"opacity":1},200,"easeOutBounce")
    //     })
    //   })
    // }else{
    //   $circle.css({"top":90,"opacity":0})
    // }

    if(scrollHeight>=$("#benefits_wrap").offset().top-$(window).innerHeight()/2){
      for(var i=0; i< $circle.length; i++){
        $circle.eq(i).animate({"top":50,"opacity":1},600+(i*700),"easeOutBounce")
      }
    }

  }
  function mouseOver(){
    $more.css({"opacity":0})
    $more.appendTo($(this))
    $(this).children("div").animate({"opacity":1},500,"easeOutCubic")
  }
  function mouseOut(){
    $more.remove()
  }
}

function instaSlide(){
  var $wrap
  var $list
  var $img
  var imgWidth
  var currentX
  var imgNum
  var timer
  var ismoving
  
  init()
  initEvent()
  

  function init(){
    $wrap=$("#insta_list_wrap")
    $list=$(".insta_list")
    $img=$list.children()
    imgWidth=$img.outerWidth()+parseInt($img.css("margin-right"))
    imgNum=$img.size()
    
    timer=setInterval(clickNext,1500)
    ismoving=true

    $list.css({"width":imgWidth*imgNum})
    $img.last().prependTo($list)
    $list.css({"left":-imgWidth})
  }
  function initEvent(){
    $("#next").on("click",clickNext)
    $("#prv").on("click",clickPrev)
    
    $wrap.on("mouseenter",mouseOver)
    $("#next,#prv").on("mouseenter",mouseOver)
    $wrap.on("mouseleave",mouseOut)
    $("#next,#prv").on("mouseleave",mouseOut)
  }
  function clickNext(){
    currentX=$list.position().left
    $(".insta_list:not(:animated)").animate({"left":currentX-imgWidth},400,"easeOutCubic",function(){
      $(this).children().first().appendTo($list)
      $list.css({"left":-imgWidth})
    })
  }
  function clickPrev(){
    currentX=$list.position().left
    $(".insta_list:not(:animated)").animate({"left":currentX+imgWidth},400,"easeOutCubic",function(){
      $(this).children().last().prependTo($list)
      $list.css({"left":-imgWidth})

      
    })
  }
  function mouseOver(){
    if(ismoving==true){
      clearInterval(timer)
      ismoving=false
    }
  }
  function mouseOut(){
    if(ismoving==false){
      timer=setInterval(clickNext,1300)
      ismoving=true
    }
  }
}

function instaMore(){
  var heartArray=["10","4","23","17","25","11","9","15","3","20","31","19"]
  var talkArray=["8","32","12","18","23","17","5","10","9","25","35","15"]
  
  var overNum

  var $info

  var $instaList=$(".insta_list")
  var $instaLi=$instaList.children()

  $instaLi.on("mouseenter",mouseOver)
  $instaLi.on("mouseleave",mouseOut)

  function mouseOver(){
    overNum=$instaLi.index($(this))
    $info=$("<div class='insta_info'><a href='#'><i class='fas fa-heart'></i>"+heartArray[overNum]+"<i class='fas fa-comment'></i>"+talkArray[overNum]+"</a></div>")
    $info.appendTo($(this))
  }
  function mouseOut(){
    $info.remove()
  }

}


function reviewMore(){
  var $more=$(".box_more")
  var textHeight

  $more.each(function(isOpen,data){
    $(this).data("isOpen",false)
  })

  initEvent()

  function initEvent(){
    $more.on("click",openReview)
    $("#review_list").children().on("mouseleave",closeReview)
  }

  function openReview(){
    if($(this).data("isOpen")==false){

      textHeight=$(this).prev().children().innerHeight()
      $(this).prev().css({"height":textHeight})
      $(this).parent().animate({"height":textHeight+165},300,"easeOutCubic")
      $(this).parents("#review_list_wrap").css({"height":textHeight+250})
      

      $(this).html("<a href='#;'>Hide</a>")
      $(this).data("isOpen",true)

    }else if($(this).data("isOpen")==true){
      
      $(this).prev().css({"height":62})
     
      $(".box").animate({"height":215},300,"easeOutCubic",function(){
        $("#review_list_wrap").css({"height":300})
      })
      

      $(this).html("<a href='#;'>Read more</a>")
      $(this).data("isOpen",false)
    }
  }
  function closeReview(){
      $(".box_text_wrap").css({"height":62})
      
      $(".box").animate({"height":215},300,"easeOutCubic",function(){
        $("#review_list_wrap").css({"height":300})
      })

      $more.html("<a href='#;'>Read more</a>")
      $more.data("isOpen",false)
  }
}

function reviewSlide(){
  var $wrap
  var $list
  var $img
  var imgWidth
  var currentX
  var imgNum
  var timer
  var ismoving
  
  init()
  initEvent()
  

  function init(){
    $wrap=$("#review_list_wrap")
    $list=$("#review_list")
    $img=$list.children()
    imgWidth=$img.outerWidth()+parseInt($img.css("margin-right"))
    imgNum=$img.size()
    
    //timer=setInterval(clickNext,1300)
    ismoving=true

    $list.css({"width":imgWidth*imgNum})
    $img.last().prependTo($list)
    $list.css({"left":-imgWidth})
  }
  function initEvent(){
    $("#next2").on("click",clickNext)
    $("#prv2").on("click",clickPrev)
    //$wrap.on("mouseenter",slideStop)
    //$wrap.on("mouseleave",slidePlay)
  }
  function clickNext(){
    currentX=$list.position().left
    $("#review_list:not(:animated)").animate({"left":currentX-imgWidth},400,"easeOutCubic",function(){
      $(this).children().first().appendTo($list)
      $list.css({"left":-imgWidth})
    })
  }
  function clickPrev(){
    currentX=$list.position().left
    $("#review_list:not(:animated)").animate({"left":currentX+imgWidth},400,"easeOutCubic",function(){
      $(this).children().last().prependTo($list)
      $list.css({"left":-imgWidth})
    })
  }
  function slideStop(){
    if(ismoving==true){
      clearInterval(timer)
      ismoving=false
    }
  }
  function slidePlay(){
    if(ismoving==false){
      timer=setInterval(clickNext,1300)
      ismoving=true
    }
  }
}