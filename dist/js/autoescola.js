$( function($){

    $(".data").mask("99/99/9999");
    $(".tel").mask("(99) 9999-9999");
    $(".cel").mask("(99) 99999-9999");
    $(".cpf").mask("999.999.999-99");
    $(".cnpj").mask("99.999.999/9999-99");
    $(".cep").mask("99999-999");
    $(".placa").mask("aaa-9999");
    $(".hora").mask("99:99")
	
	//Inicio Mascara Telefone para aceitar telefones fixos e celulares com 8 e 9 digitos
	$('.fixo_cel')  
        .mask("(99) 9999-9999?9")  
        .keydown(function() {
            var $elem = $(this);
            var tamanhoAnterior = this.value.replace(/\D/g, '').length;
            setTimeout(function() { 
                var novoTamanho = $elem.val().replace(/\D/g, '').length;
                if (novoTamanho !== tamanhoAnterior) {
                    if (novoTamanho === 11) {  
                        $elem.unmask();  
                        $elem.mask("(99) 99999-9999");  
                    } else if (novoTamanho === 10) {  
                        $elem.unmask();  
                        $elem.mask("(99) 9999-9999?9");  
                    }
                }
            }, 1);
        });
	//Fim Mascara Telefone
	
	$(".cpfCnpj").keydown(function() {
		var el = $(this);
		 
		if (el.val().length > 13) {
			el.unmask();
			//el.cleanVal('000.000.000-00');
			el.mask("99.999.999/9999-99")
		} else {
			el.unmask();
			el.mask("999.999.999-99");
		}
	});
	
	
});

