$(document).ready(function(){

    $("#list").DataTable({
		"ajax":{
			"url": "http://localhost/alphablog/src/controllers/listSuscriber.ctrl.php",
			"dataSrc": '',
		},	
		"columns":[
			{"data":"suscriber"},
			{"data":"mail"},
			{"data":"joinOn"}
		]
	});

})
