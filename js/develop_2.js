function initFancyBox () {
    $('.fancy-box-foto').fancybox({
            fitToView: true,
            autoSize:false
    });
    $('.fancy-box-video').fancybox({
        fitToView: true,
        autoSize:false,
        helpers : {
            title : {
                type : 'float'
            }
        }
    });
}

$(document).ready(function() {
initFancyBox() ;
});