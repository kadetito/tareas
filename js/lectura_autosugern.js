
$( document ).ready(function() {
	$('input.typeahead').typeahead({
		source:  function (query, process) {
		return $.get('http://www.webentorn.com/tareas/ca/obtencion', { query: query }, function (data) {				
				data = $.parseJSON(data);
				return process(data);
			});
		},
		showHintOnFocus:'all'
	});
});