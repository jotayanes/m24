
$("#registro").click(function(){
	var route = "/createtable";
	var hegemonic = $("#hegemonic").val();
	var name = $("#name").val();
	var description = $("#description").val();
	var status = $("#status").val();
	var token = $("#token").val();
	var mea_id = $("#mea_id").val();

	$.ajax({
		url:route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType:'json',
		data:{hegemonic:hegemonic, name:name, description:description, status:status, mea_id, mea_id}
	});
	location.reload(true);
});

