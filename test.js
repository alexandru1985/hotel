$(document).ready(function() {
});
$('#continut').load($('#oferta1 li a:first').attr('href'));

$('#oferta1 li a').click(function() {
    var href = $(this).attr('href');
    $('#continut').hide().load(href).fadeIn('normal');

    return false;
});
$(document).ready(function() {
    $('#oferta1 li a:first').css('background-color', '#FFFFE0').css('color', '#008000');
    var targetElement = $('#oferta1 li a');
    targetElement.click(function() {
        targetElement.removeAttr('style');

        $(this).css('background-color', '#FFFFE0');
        $(this).css('color', '#008000');
    });
});


