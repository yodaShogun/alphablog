$(document).ready(() => {
	$('#tbody .publish').on('click', function (e){
		e.preventDefault()
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
					url: 'https://alpha-academy.eksponansyel.com/src/controllers/publish.ctrl.php',
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