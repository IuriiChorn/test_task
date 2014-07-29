$(document).ready(function() {
	$('form').submit(function(event) {
		var formData = {
			'name'	: $('input[name=name]').val(),
			'pass'	: $('input[name=pass]').val()
		};

		var resultTable = "";
		
		$('.alert').remove();
		$('.table').remove();
		

	$.ajax({
		type: 'POST',
		url	: 'check.php',
		data: formData,
		dataType: 'json',
		encode : true
	})

		.done(function(data){

			console.log(data);


			if ( ! data.result) {

				if (data.errors.name) {
					
					$('form').append('<div class="alert alert-danger col-md-8">' + data.errors.name + '</div>');
				}

				if (data.errors.pass) {
					
					$('form').append('<div class="alert alert-danger col-md-8">' + data.errors.pass + '</div>');
				}

			}
			else {
				$('form').append('<div class="alert alert-success col-md-8">' + data.message + '</div>');
				
				resultTable = "<table id='table1' class='table'>";
				for (var i=0; i<data.user_data.length; i += 1) {
					resultTable += "<tr><td>" + data.user_data[i] + "</td></tr>";  
	            }
				resultTable += "</table>";
        		
				
				$('form').append('<div class="col-md-8">' + resultTable + '</div>');
			}

		});

		event.preventDefault();
	});
});