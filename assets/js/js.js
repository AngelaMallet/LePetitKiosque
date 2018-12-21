$(document).ready(function () {
				// on initialise toutes les modals
				$('.modal').modal();

				// seul les modals error restent/vont s'ouvrir
				$('.modalError').modal('open');

				$('.fixed-action-btn').floatingActionButton();
				$(".dropdown-trigger").dropdown();
			});

$('.background').background({
    source: "https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
});