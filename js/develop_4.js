function AnimationBlock(item){
    console.log(item.length);
    $(window).scroll(function(){
       item.each(function(){
          if($(window).scrollTop()>$(this).scrollTop()){
             $(this).addClass('active');
          }
       });
    });
}


$(document).ready(function(){
    AnimationBlock($('.index-page section'));
});