$(document).ready(function () {
    // on initialise toutes les modals
    $('.modal').modal({
        dismissible: false
    });

    // seul les modals error restent/vont s'ouvrir
    $('.modalError').modal('open');

    $('.fixed-action-btn').floatingActionButton();
    $(".dropdown-trigger").dropdown();
    $('.timepicker').timepicker();
    $('select').formSelect();   

    $('#subscribe').on('click', function() {
          window.location.href = 'index.php';
      $('#modal1').modal('open');
      });
      
      $('#subscribe').on('click', function() {
        window.location.href = 'index.php';
    $('#modal2').modal('open');
    });
  });