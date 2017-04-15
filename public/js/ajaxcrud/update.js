function Mostrar(btn){
	var route = "/listingtable/"+btn.value+"";
	$.get(route, function(res){
		$(res).each(function(key,value){
			$("#mea_name").val(value.mea_name);
			$("#mea_description").val(value.mea_description);
			$("#mea_id").val(value.mea_id);	
			$("#mea_status").val(value.mea_status);	
		});
	});
}

$("#actualizar").click(function(){
	var id = $("#mea_id").val();
	var name = $("#mea_name").val();
	var description = $("#mea_description").val();
	var status = $("#mea_status").val();
	var route = "/updatetable/"+id+"";
	var token = $("#token").val();
	$.ajax({
		url:route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType:'json',
		data:{ name:name, description:description, status:status}
	});
	location.reload(true);
});


	








