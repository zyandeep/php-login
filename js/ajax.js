$(document).ready(function() {
	$('[type="text"]').on('input', function() {
		var data = $(this).val();

		if ((data.trim()).length > 0) {

			// make an ajax call
			$.ajax({
				url: "ajax_script.php",
				type: "GET",
				data: {
					query: data,
				},
				success: function(data) {
					if (data.length > 0) {
						$('span#username-error').html(data);
					}
					else {
						$('span#username-error').html("");	
					}
				},
				error: function() {
					alert("Ajax failed!");
				}
			});
		}
	});
});