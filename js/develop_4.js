function animationBlock(item){

    $(window).scroll(function(){
        checkForAnimate();
    });
    function checkForAnimate(){
        var bottomCheck = $(window).height()+$(window).scrollTop();
        var windowTop = $(window).scrollTop()+($(window).height()/1.5);
        item.each(function(){
           if(windowTop>$(this).offset().top || bottomCheck > $('body').height()*0.8){
              $(this).addClass('active');
              var itemSect = $(this);
              var point = 0;

              var timer = setInterval(function(){
                 itemSect.find('.animate-delay').eq(point).addClass('animated');
                 point++;
                 if(itemSect.find('.animate-delay').length == point){
                     clearInterval(timer);
                 }
              },200);

              itemSect.find('.animate-it').addClass('animated');
           }
        });
    }
    checkForAnimate();
}


$(document).ready(function(){
    //animationBlock($('.animate-section'));
});
$(window).load(function(){
    animationBlock($('.animate-section'));
});