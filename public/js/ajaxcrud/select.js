$(document).ready(function(){

  /////////////////////////////////**** SELECTS*******//////////////////////////////
  var route = '/select';
    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
        type: 'PUT',
        dataType: 'json', 
    })
    .done(function(data) {
      for (var i = 0, t =0; i < data.length; i++) {
        if (data[i]['rec_nemonico'] == 'ADM') {     
          for (var j = t, p=0; j < data.length; j++) {
            if (data[i]['rec_id'] == data[j]['rec_padre']) {
              if (p == 0) {
                $('#'+data[j]['rec_nemonico']).append('<option >Seleccione..</option>');
                p= 1;
              };
              $('#'+data[j]['rec_nemonico']).append('<option value='+data[j]['rec_id']+'>'+data[j]['rec_detalle']+'</option>');
              t+=1;
            };
          }
          alert
        };
      }
    })
   //////////////////////***************************//////////////////////////////////////////////// 

  //////////////////////***************************////////////////////////////////////////////////
  function get(value,heg){
    $.ajax({
      url: route,
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}, 
      type: 'PUT',
      dataType: 'json', 
    })
    .done(function(data) {
      $('#'+heg).append('<option >Seleccione..</option>');
      for (var i = 0; i < data.length; i++) {
          if (data[i]['rec_padre'] == value) {
            $('#'+heg).append('<option value='+data[i]['rec_id']+'>'+data[i]['rec_detalle']+'</option>');
          };      
      }
    })
  } 

  function dele(heg){
    var x = document.getElementById(heg);
    while (x.length > 0) {
      x.remove(x); 
    }
  } 

  $("#PAI").change(function(){
    var heg =  'EDO';
    var value =  $('#PAI').val();
    get(value, heg);
    dele(heg);  
  });

    $("#EDO").change(function(){
    var heg =  'MUN';
    var value =  $('#EDO').val();
    get(value, heg);
    dele(heg);    
    });

    $("#MUN").change(function(){
    var heg =  'PAR';
    var value =  $('#MUN').val();
    get(value, heg);  
    dele(heg);  
    });
});       
