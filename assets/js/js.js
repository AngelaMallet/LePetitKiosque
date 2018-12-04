$(document).ready(function () {
    //effet paralallax
    $('.parallax').parallax();

    // on initialise toutes les modals
    $('.modal').modal();

    // seul les modals error restent/vont s'ouvrir
    $('.modalError').modal('open');
});