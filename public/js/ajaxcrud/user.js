$(window).load(function() {
	var route = '/profile';
	var token = $("#token").val();
 	$.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token}, 
        type: 'POST',
        dataType: 'json', 
    })
    .done(function(data) {
		$("#SEXO").val(data[0]['per_mea_sex']);
    	$("#ESTA").val(data[0]['per_mea_country']);
		$("#ESCI").val(data[0]['per_mea_statecivil']);
		$("#HIJO").val(data[0]['per_mea_sons']);
      	$("#GEPE").val(data[0]['kin_mea_id']);
    })
}); 