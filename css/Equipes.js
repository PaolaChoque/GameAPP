$(function(){
	// Parser para configurar a data para o formato do Brasil
	$.tablesorter.addParser({
		id: 'datetime',
		is: function(s) {
			return false; 
		},
		format: function(s,table) {
			s = s.replace(/\-/g,"/");
			s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$2/$1");
			return $.tablesorter.formatFloat(new Date(s).getTime());
		},
		type: 'numeric'
	});

	$('.tablesorter').tablesorter({
        // Envia os cabeÃ§alhos 
        headers: { 
            // A sgunda coluna (comeÃ§a do zero) 
            1: { 
                // Desativa a ordenaÃ§Ã£o para essa coluna 
                sorter: false 
            },
			4: {
                // Ativa o parser de data na coluna 4 (comeÃ§a do 0) 
                sorter: 'datetime' 
			}
        },
		// Formato de data
		dateFormat: 'dd/mm/yyyy'
	});
});