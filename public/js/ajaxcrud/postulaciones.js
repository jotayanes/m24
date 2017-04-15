function Postu(btn){
	var route = "/lista/"+btn.value+"";
	$.get(route, function(res){
		$(res).each(function(key,value){
			$("#id,#serv,#tip,#detalle,#descrip,#informacion,#pais,#estado,#municipio,#parroquia,#direc").empty();
			$("#id").val(value.ser_id);
			$("#serv").append(value.ser_service);
			$("#tip").append(value.ser_tipo);
			$("#detalle").append(value.ser_detalle);
			$("#descrip").append(value.ser_descripcion);
			$("#informacion").append(value.ser_info_adicional);
			$("#pais").append(value.ser_pais);
			$("#estado").append(value.ser_estado);
			$("#municipio").append(value.ser_municipio);
			$("#parroquia").append(value.ser_parroquia);
			$("#direc").append(value.ser_direccion);
		});
	});
}