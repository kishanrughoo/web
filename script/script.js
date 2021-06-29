/*-----For Search Bar-----------------------------*/
/*When clicked on search icon, go to search-bar and start typing*/
$(document).on('click', '.search', function() {
    $('.search-bar').addClass('search-bar-active')
});

/*When clicked on search-cancel icon (cross), cancel the search-bar*/
$(document).on('click', '.search-cancel', function() {
    $('.search-bar').removeClass('search-bar-active')
});

/*---For Login and Sign-up----------------------------*/
/*When clicked on Account icon which is of class user, log in form will appear 
if clicked on already have account which is of class already-account, sign up form will disappear and log in from will appear*/
$(document).on('click', '.user,.already-account', function() {
    $('.form').addClass('login-active').removeClass('sign-up-active')
});

/*if clicked on already create account which is of class sign-up-btn, log in form will disappear and sign up from will appear*/
$(document).on('click', '.sign-up-btn', function() {
    $('.form').addClass('sign-up-active').removeClass('login-active')
});

/*if clicked on cross (cancel button) which is of class form-cancel, both log in form and sign up form will disappear*/
$(document).on('click', '.form-cancel', function() {
    $('.form').removeClass('login-active').removeClass('sign-up-active')
});