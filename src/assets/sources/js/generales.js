var idiomaPaginado;
var botonesModal = [];
var ruta_base = window.location.origin+'/murilloFerreteria/src/index.php/';

$(document).ready(function(){
  cleanBotonesModal(false);
});

// -------------------------------------------------------------------------------------------------- destrir tabla
function dropDataTable(tableId){ 
  $('#'+tableId).dataTable().fnDestroy();
  $('#'+tableId).children('tbody').children('tr').remove();
}

// -------------------------------------------------------------------------------------------------- destruir combo
function dropDataCombo(comboId){
  var x = document.getElementById(comboId);
  while (x.length > 0){
      x.remove(x.selectedIndex);
  }
}

// -------------------------------------------------------------------------------------------------- destruir combo
function insertarPaginado(tableId){
  $('#'+tableId).DataTable({
     'paging'       : true,
     'lengthChange' : false,
     'searching'    : true,
     'ordering'     : false,
     'info'         : false,
     'autoWidth'    : false,
     'destroy'      : true,
     "iDisplayLength": 7,
     "language"     : {  "url": window.location.origin+"/assets/files/SpanishT.json"  }
  });
  $('.dataTables_info').parent().parent().css('padding','0px 30px');
  $('.dataTables_info').parent().css('text-align','right');
  $('.dataTables_info').parent().removeClass('col-sm-5').addClass('row');

}

// -------------------------------------------------------------------------------------------------- crear modal
function modal(tipe,size,titleMod,msg,close){
  switch(tipe){
    case "danger":  tipe = BootstrapDialog.TYPE_DANGER;   break;
    case "info":    tipe = BootstrapDialog.TYPE_INFO;     break;
    case "success": tipe = BootstrapDialog.TYPE_SUCCESS;  break;
    case "primary": tipe = BootstrapDialog.TYPE_PRIMARY;  break;
    default:        tipe = BootstrapDialog.TYPE_DEFAULT;  break;
  }

  switch(size){
    case "large":  size = BootstrapDialog.SIZE_LARGE;   break;
    case "wide":    size = BootstrapDialog.SIZE_WIDE;   break;
  }
  
  BootstrapDialog.show({
    type: tipe,
    title: titleMod,
    size: size,
    message: function(dialogRef){
        var $message = $(msg);
        return $message;
    },
    closable: close,
    buttons: botonesModal
  });
}
//--------------------------------------------------------------------------------------------------- close all modals
function closeAllModals(){
  try {
      BootstrapDialog.closeAll();
  }catch (err) {}
}
// -------------------------------------------------------------------------------------------------- limpia los botones
function cleanBotonesModal(type){
  if(type){
    botonesModal=[{ 
    label: 'Cerrar',
        cssClass: 'btn-default',
        action: function(dialogItself){ dialogItself.close(); }
    }];
  }
  else{
    botonesModal=[];
  }
}

function timeFormat(n) {
    return n < 10 ? '0' + n : n;
}

// -------------------------------------------------------------------------------------------------- peticiones ajax
function getAjax(type,ruta,atrib,from){
  $.ajax({ 
        type: type,   
        url: ruta_base + ruta,   
        data: atrib
    }).done(function(response){
       if(from)
        result(from,response);
      else{
        //startLoader('body');
        window.location.replace(ruta_base+ruta);
      }
    });
}

// -------------------------------------------------------------------------------------------------- validaciones inputs
function validCaracteres(e,tipo){
    key=e.keyCode || e.which;
    teclado=String.fromCharCode(key).toLowerCase();
    var caracteres;
    especiales = "8-09";
    switch(tipo){
        case 'text-number': caracteres = " abcdefghijklmnopqrstuvwxyz1234567890";  break;
        case 'text':        caracteres = " abcdefghijklmnopqrstuvwxyzáéíóúü";     break;
        case 'number':      caracteres = "1234567890";                            break;
        default: caracteres = " abcdefghijklmnopqrstuvwxyz.,;:áéíóúü1234567890";  break;
    }
    teclado_especial=false;
    for(var i in especiales){
        if(key==especiales[i]){
            teclado_especial=true;
            break;
        }
    }
    if(caracteres.indexOf(teclado)==-1 && !teclado_especial)
        return false;
}

// -------------------------------------------------------------------------------------------------- Graficas (requieren sus respectivos scripts cargados antes que generales.js)
function Gpastel(type,data,title,id){
  $('#'+id).children('#g').remove();
  $('#'+id).append('<div id="g'+id+'" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto; margin-top:30px;"></div>');
  var chart = new Highcharts.chart('g'+id, {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: title
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: type,
            colorByPoint: true,
            data: data
        }]
    });
}

function GbarrasH(config,dataG){
  var chart = new Highcharts.Chart({
        chart: {
            renderTo: config[0].id,
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 0,
                beta: 0,
                depth: 20,
                viewDistance: 25
            }
        },
        title: {
            text: config[0].title
        },
        subtitle: {
            text: config[0].subtitle
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: dataG[0].categories
        },
        series: [{
          name: 'Cantidad de usuarios',
            data: [{
              name: dataG[0].categories[0],
              y:dataG[0].data[0],
              color:config[0].color
            },{
              name: dataG[0].categories[1],
              y:dataG[0].data[1],
              color:config[0].color
            },{
              name: dataG[0].categories[2],
              y:dataG[0].data[2],
              color:config[0].color
            },{
              name: dataG[0].categories[3],
              y:dataG[0].data[3],
              color:config[0].color
            }],
            color:config[0].color
        }]
    });
}