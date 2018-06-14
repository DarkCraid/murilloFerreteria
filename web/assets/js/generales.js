var idiomaPaginado;
var botonesModal = [];

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
     "language"     : {  "url": ruta_base_files+"/assets/files/SpanishT.json"  }
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
        startLoader('body');
        window.location.replace(ruta_base+ruta);
      }
    });
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