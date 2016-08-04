$(document).ready(function() {
    // Keep button on top of screen when scrolling
    $(window).scroll(function() {
        if ($(window).width() < 646)
            $('#gplay').removeClass('gplay_cont_fixed');
        else {
            if ($(this).scrollTop() > $('#gplay_container').offset().top)
                $('#gplay').addClass('gplay_cont_fixed');
            else
                $('#gplay').removeClass('gplay_cont_fixed');
        }
    });

    $('#gplay').css('width', $('#gplay_container').width());
    $(window).resize(function() {
        $('#gplay').css('width', $('#gplay_container').width());
    });
});
