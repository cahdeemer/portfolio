//JS to create random color grid
( function( $ ) {
var grid = $('#grid');
var gridPage = $('#grid-page');
var gridIndex = $('#grid-index');
var gridSingle = $('#grid-single');
var gridTag = $('#grid-tag');
var gridProject = $('#grid-project');
var gridArchive = $('#grid-archive');
var s = 50;  //space between blocks
var n = 5;  //shadow range (space between shadow waves)
var l = 40;  //grid length

for (var i = 0; i < l; i++) {
    for (var j = 0; j < l; j++) {
        var style = {
            'top': i * (s + n) + 'px',
            'left': j * (s + n) + 'px',
            'animation-delay': ((i + 1) + (j + 1)) * 110 + 'ms'

        };
        var block = $('<div />').addClass('block').css(style);
        grid.append(block);
        var block2 = $('<div />').addClass('block2').css(style);
        gridPage.append(block2);
        var block3 = $('<div />').addClass('block3').css(style);
        gridIndex.append(block3);
        var block4 = $('<div />').addClass('block4').css(style);
        gridSingle.append(block4);
        var block5 = $('<div />').addClass('block5').css(style);
        gridTag.append(block5);
        var block6 = $('<div />').addClass('block6').css(style);
        gridProject.append(block6);
        var block7 = $('<div />').addClass('block7').css(style);
        gridArchive.append(block7);
    }
}






})( jQuery );

( function( $ ) {

   

    var target = $(".jumbotron");
    var timeout = null;

    $(window).scroll(function () {
        if (!timeout) {
            timeout = setTimeout(function () {
                console.log('scroll');            
                clearTimeout(timeout);
                timeout = null;
                if ($(window).scrollTop() >= target.offset().top) {
                    $("div[class^='block']").css('-webkit-animation-play-state', 'paused');
                   
                } else {
                    $("div[class^='block']").css('-webkit-animation-play-state', 'running');
                }

            }, 250);
        }
    });

})( jQuery );
