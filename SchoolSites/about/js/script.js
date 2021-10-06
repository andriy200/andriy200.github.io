$(document).ready(function(){
    $('.btnAside').click(function(e){
        e.preventDefault();

        $('.btnAside').removeClass('active');
        $('.contentItem').removeClass('active');

        $(this).addClass('active');
        $($(this).attr('href')).addClass('active')
    });
});