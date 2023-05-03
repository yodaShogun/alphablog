$(document).ready(() => {
	$('#postTable tbody').on('click', '.publish', function (e)
	{
		e.preventDefault();
		let data = $(this).attr('href');
		swal(
		{
			title: "Confirmation",
			text: "Etes vous sur de vouloir publier ce produit?",
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