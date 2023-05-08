$(document).ready(() => {
	$('#tbody a').on('click', function (e){
		e.preventDefault();
		alert('Inserted')
		let data = $(this).attr('href');
		swal({
			title: "Confirmation",
			text: "Publier Ce Article?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((willDelete) => {
			if (willDelete)
			{
				$.ajax(
				{
					url: 'http://localhost/alphablog/src/controllers/publish.ctrl.php',
					type: "POST",
					dataType: 'json',
					data: { data:data },
					success: function (data)
					{
						console.log(data)
						window.location.reload()										
					}
				})
			}
			else
			{
				swal("Operation Annuler!");
			}
		});
	});
});