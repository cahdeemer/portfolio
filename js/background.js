//JS to create random color grid
( function( $ ) {
var grid = $('#grid');
var gridPage = $('#grid-page');
var gridIndex = $('#grid-index');
var gridSingle = $('#grid-single');
var gridTag = $('#grid-tag');
var gridProject = $('#grid-project');
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
    }
}




})( jQuery );
