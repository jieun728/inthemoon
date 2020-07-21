$(window).load(function(){

  reviewMore()

  visualEffect()

  visualHeight()

})

function reviewMore(){
  var $more=$(".box_more")
  var textHeight

  $more.each(function(isOpen,data){
    $(this).data("isOpen",false)
  })

  initEvent()

  function initEvent(){
    $more.on("click",openReview)
    $(".review_btn").on("click",closeReview)
  }

  function openReview(){
    if($(this).data("isOpen")==false){

      textHeight=$(this).prev().children().innerHeight()
      $(this).prev().css({"height":textHeight})
      $(this).parent().animate({"height":textHeight+165},200,"easeOutCubic")
      $(this).parents("#review_list_wrap").css({"height":textHeight+310})
      

      $(this).html("<a href='#;'>Hide</a>")
      $(this).data("isOpen",true)

    }else if($(this).data("isOpen")==true){
      
      $(this).prev().css({"height":62})
     
      $(".box").animate({"height":220},200,"easeOutCubic",function(){
        $("#review_list_wrap").css({"height":360})
      })
      

      $(this).html("<a href='#;'>Read more</a>")
      $(this).data("isOpen",false)
    }
  }
  
  function closeReview(){
      $(".box_text_wrap").css({"height":62})
      
      $(".box").animate({"height":220},200,"easeOutCubic",function(){
        $("#review_list_wrap").css({"height":360})
      })

      $more.html("<a href='#;'>Read more</a>")
      $more.data("isOpen",false)
  }
}

function visualEffect(){
  $("#header_wrap").hide()
  $(window).on("click",clickWindow)
  $("#header_wrap").css({"opacity":0})

  $(window).on("scroll",function(){

    var visualScrollHeight=$(document).scrollTop()

    if(visualScrollHeight>=0){
      clickWindow()
    }
  })

  function clickWindow(){
    $("#visual_text").animate({"top":-120},500,"easeOutCubic",function(){
      $("#header_wrap").show()
      $("#header_wrap").animate({"opacity":1},300,"easeOutCubic")
    })
  }
}


function visualHeight(){
  $("#visual").css({"height":$(window).innerHeight()})
  $(window).on("resize",windowResize)

  function windowResize(){
    $("#visual").css({"height":$(window).innerHeight()})
  }
}




