$(document).ready(function(){

    $("#catlist").DataTable({
		"ajax":{
			"url": "http://localhost/alphablog/src/controllers/listCategory.ctrl.php",
			"dataSrc": '',
		},	
		"columns":[
			{"data":"category"},
			{"data":"title"},
		]
	});
})