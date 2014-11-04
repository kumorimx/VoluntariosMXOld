


$(".eventoCategoria").on("change", function() {

	if($.isArray($(this).val()))
	{
		var cuantos = $(this).val();
			cuantos = cuantos.length;
	}
	else
	{
		var cuantos = 0;
	}
	console.log(cuantos);

	$(this).removeClass("input-small");
	$(this).removeClass("input-medium");
	$(this).removeClass("input-large");
	$(this).removeClass("input-xlarge");

	switch(cuantos)
	{
		case 0:
			$(this).addClass("input-small");
		break;
		case 1:
			$(this).addClass("input-medium");
		break;
		case 2:
			$(this).addClass("input-large");
		break;
		case 3:
			$(this).addClass("input-xlarge");
		break;
	}
});

$("#solicitar_constancia").on('click', function(){
	$(this).addClass("btn-success");
	$(this).removeClass("btn-default");
	$(this).text("Peticion en proceso");
});

$("[data-func='hideAccordion']").live('click', function(){

	console.log("hideAccordion");
	$("#"+$(this).attr('data-accordion')).addClass("no-display");

	$(this).addClass('btn-info');
	$(this).removeClass('btn-default');

	$(this).text('Mostrar Actividades');

	$(this).attr('data-func','showAccordion')
});

$("[data-func='showAccordion']").live('click', function(){

	console.log("showAccordion");
	$("#"+$(this).attr('data-accordion')).removeClass("no-display");

	$(this).addClass('btn-default');
	$(this).removeClass('btn-info');

	$(this).text('Ocultar Actividades');

	$(this).attr('data-func','hideAccordion')
});

var asInitVals = new Array();

$(document).ready(function() {
	$(".select2me").select2();

	oTable =  $('#basicTable_vol').dataTable( {
		"sDom":  '<"toolbar"<"mostrar-resultados"l><"paginacion"p>><"clear"><"procesando"r><"clear"><"busqueda"><"clear">t<"clear"><"info_bottom"i>',
		"language": {
		"sProcessing": "Espere un momento...",
		"sLengthMenu": "Mostrando _MENU_ registros",
		"sZeroRecords": "No hay resultados, intente con otra busqueda.",
		"sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registro(s)",
		"sInfoEmpty": "No hay registros para mostrar.",
		"sInfoFiltered": "(Filtrando de un total de _MAX_  registros)",
		"sInfoPostFix": "",
		"sSearch": "Buscar",
		"sUrl": "",
		"oPaginate": {
		"sFirst":    "Primero",
		"sPrevious": "Anterior",
		"sNext":     "Siguiente",
		"sLast":     "Ultimo"
		},
			"aoColumnDefs": [
				{ "sWidth": "25%", "bSearchable": true,  "bVisible": true,  "aTargets":  [0] },
				{ "sWidth": "10%", "bSearchable": true,  "bVisible": true,  "aTargets":  [1] },
				{ "sWidth": "10%", "bSearchable": true,  "bVisible": true,  "aTargets":  [2] },
				{ "sWidth": "10%", "bSearchable": false,  "bVisible": true,  "aTargets":  [3] },
				{ "sWidth": "10%", "bSearchable": false,  "bVisible": true,  "aTargets":  [4] },
			],
		}
	} );

	oTable2 =  $('#basicTable_vol2').dataTable( {
		"sDom":  '<"toolbar"<"mostrar-resultados"l><"paginacion"p>><"clear"><"procesando"r><"clear"><"busqueda"><"clear">t<"clear"><"info_bottom"i>',
		"language": {
		"sProcessing": "Espere un momento...",
		"sLengthMenu": "Mostrando _MENU_ registros",
		"sZeroRecords": "No hay resultados, intente con otra busqueda.",
		"sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registro(s)",
		"sInfoEmpty": "No hay registros para mostrar.",
		"sInfoFiltered": "(Filtrando de un total de _MAX_  registros)",
		"sInfoPostFix": "",
		"sSearch": "Buscar",
		"sUrl": "",
		"oPaginate": {
		"sFirst":    "Primero",
		"sPrevious": "Anterior",
		"sNext":     "Siguiente",
		"sLast":     "Ultimo"
		},
			"aoColumnDefs": [
				{ "sWidth": "25%", "bSearchable": true,  "bVisible": true,  "aTargets":  [0] },
				{ "sWidth": "10%", "bSearchable": true,  "bVisible": true,  "aTargets":  [1] },
				{ "sWidth": "10%", "bSearchable": true,  "bVisible": true,  "aTargets":  [2] },
				{ "sWidth": "10%", "bSearchable": false,  "bVisible": true,  "aTargets":  [3] },
				{ "sWidth": "10%", "bSearchable": false,  "bVisible": true,  "aTargets":  [4] },
			],
		}
	} );

	$("#filtros input").keyup( function () {
		oTable.fnFilter( this.value.toUpperCase(), $("#filtros input").index(this) );
	} );

	$("#filtros input").each( function (i) {
		asInitVals[i] = this.value;
	} );

	$("#filtros input").focus( function () {
		if ( this.className == "search_init" )
		{
			this.className = "";
			this.value = "";
		}
	} );

	$("#filtros2 input").blur( function (i) {
		if ( this.value == "" )
		{
			this.className = "search_init";
			this.value = asInitVals[$("#filtros2 input").index(this)];
		}
	} );

	$("#filtros2 input").keyup( function () {
		oTable.fnFilter( this.value.toUpperCase(), $("#filtros2 input").index(this) );
	} );

	$("#filtros2 input").each( function (i) {
		asInitVals[i] = this.value;
	} );

	$("#filtros2 input").focus( function () {
		if ( this.className == "search_init" )
		{
			this.className = "";
			this.value = "";
		}
	} );

	$("#filtros2 input").blur( function (i) {
		if ( this.value == "" )
		{
			this.className = "search_init";
			this.value = asInitVals[$("#filtros2 input").index(this)];
		}
	} );
});

function format(item) {
    return '<i class="fa ' + ((item.element[0].getAttribute('rel') === undefined)?"":item.element[0].getAttribute('rel') ) + ' mr10"></i>' + item.text;
}

jQuery("#select-templating").select2({
    formatResult: format,
    formatSelection: format,
    escapeMarkup: function(m) { return m; }
});

$('#addInteres').on('click', function() {
	valorInteres = $('#optionAddInteres option:selected').val();
	if (valorInteres != 'default') {
		$('#listaIntereses').append('<input type="hidden" name="intereses" value="' + valorInteres + '" /><li><a href="#"><i class="fa fa-tags"></i>'+ $('#optionAddInteres option:selected').text() +'</a></li>');
		$("#optionAddInteres option:selected").remove();
	}

});