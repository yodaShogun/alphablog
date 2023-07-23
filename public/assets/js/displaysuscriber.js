$(document).ready(function(){

    $("#list").DataTable({
		"ajax":{
			"url": "https://alpha-academy.eksponansyel.com/src/controllers/listSuscriber.ctrl.php",
			"dataSrc": '',
		},	
		"columns":[
			{"data":"suscriber"},
			{"data":"mail"},
			{"data":"joinOn"}
		]
	});

})
