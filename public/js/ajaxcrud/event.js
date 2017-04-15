$(window).load(function() {
	$("#ESTT").change(function(){
    var value =  $('#ESTT').val();
    var token = $("#token").val();
    var tabla = $('#datos');
    var route = '/salas/'+value;
    $(tabla).empty();//elimina todo lo que esta dentro de un objeto
      $.get(route, function(res){
        $(res).each(function(key, value){
          tabla.append("<tr role='row' ><td><input type='radio' name='"+value.roo_id+"sala' value='"+value.roo_armchair+"'class='minimal-red'  OnClick='Sala(this)'><input type='radio' name='"+value.roo_id+"sala' value='-"+value.roo_armchair+"'class='minimal-red'  OnClick='Sala(this)' checked></td><td>"+value.roo_name+"</td><td>"+value.mea_name+"</td><td>"+value.roo_armchair+"</td></tr>")
        });
      });
  });

});       

  function Sala(btn){ 
    var sal = Number(btn.value), salas = Number($("#salas").val()), suma;
    var  numsalas = Number($("#numsalas").val()), numsuma;
    suma = sal+salas;
    if (sal >= 0) {
      numsuma = numsalas+1;
    }else{
      numsuma =numsalas-1;
    };
    $("#salass").val(suma);
    $("#salas").val(suma);
    $("#numsalas").val(numsuma);
  }

  function Rest(btn){ 
    var sal = Number(btn.value), salass = Number($("#salass").val()), aforo = Number($("#aforo").val()) , suma;
    if (salass >= 0) {
      if (sal >= 0) {
        suma = salass-2;
      }else{
        suma =salass+2;
      };
      $("#salass").val(suma);
    }else{
      if (sal >= 0) {
        suma = aforo+2;
      }else{
        suma =aforo-2;
      };
      $("#aforo").val(suma);
    }; 
  }