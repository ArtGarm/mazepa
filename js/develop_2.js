function initFancyBox () {
    $('.fancy-box-foto').fancybox({
            fitToView: true,
            autoSize:false
    });
    $('.fancy-box-video').fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : false,
        width       : '70%',
        height      : '70%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
    });
}

$(document).ready(function() {
initFancyBox() ;
});