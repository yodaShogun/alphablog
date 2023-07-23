$(document).ready(function(){

    $("#catlist").DataTable({
		"ajax":{
			"url": "https://alpha-academy.eksponansyel.com/src/controllers/listCategory.ctrl.php",
			"dataSrc": '',
		},	
		"columns":[
			{"data":"category"},
			{"data":"title"},
		]
	});
})