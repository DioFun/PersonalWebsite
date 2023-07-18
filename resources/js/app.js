require('./bootstrap');

$('#mobile-menu').on('click', () => {
    $('#menu').toggleClass('hidden');
    $('#mobile-menu').toggleClass('fa-close');
});