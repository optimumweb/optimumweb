$(document).ready(function() {

    $('a.toggle').click(function(e) {
        e.preventDefault();
        $( $(this).attr('href') ).slideToggle();
        if ( $(this).text() == '+' ) $(this).text('-');
        else $(this).text('+');
    });

    $('#main-menu').tinyNav({ active: 'current-menu-item' });

});