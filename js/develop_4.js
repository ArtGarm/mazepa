function animationBlock(item){

    $(window).scroll(function(){
       item.each(function(){
        console.log($(window).scrollTop());
          if($(window).scrollTop()+$(window).height()>$(this).offset().top){
             $(this).addClass('active');
             var itemSect = $(this);
             var point = 0;

             var timer = setInterval(function(){
                itemSect.find('.animate-delay').eq(point).addClass('animated');
                point++;
                if(itemSect.find('.animate-delay').length == point){
                    clearInterval(timer);
                }
             },500);

             itemSect.find('.animate-it').addClass('animated');
          }
       });
    });
}


$(document).ready(function(){
    animationBlock($('.animate-section'));
});