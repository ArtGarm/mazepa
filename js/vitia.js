function whatImgLoad(){

    var deviceWidth = $(window).width();
    var param = 0;
    if(deviceWidth>1920){
        param = 1;
    }

    $.ajax({
        url:'vitia.php',
        data:param,
        method:'POST',
        success : function(data){
            console.log('gg');
        }
    });
};

$(window).load(function(){

    whatImgLoad();

});