$(document).ready(function () {
	/*$('#cpf').inputmask('999.999.999-99');
	$('#cep').inputmask('99999-999');
	$('#dt_nascimento').inputmask('99/99/9999');
	$('#cartao_sus').inputmask('999999999999999');

	$( "#dt_nascimento" ).datepicker({
		format: "dd/mm/yyyy", // mm/dd/yyyy
		language: "pt-BR",
		autoclose: true,
		todayHighlight: true,
		changeMonth: true,
		changeYear: true,
		toggleActive: true
	});*/

	var date = new Date();

	$('#id_livro_cat').change(function(e) {

		$('#selectSubCat').empty();
		var id = $(this).val();
		var dataString = 'id='+id;
		$.ajax({
			type: 'GET',
			data: dataString,
			url: BASE_URL + "/subcat/ajax_select_subcat",  //URL solicitada
			success: function(data) { //O HTML é retornado em 'data'
				$("#selectSubCat").html(data); //Se sucesso um alert com o conteúdo retornado pela URL solicitada será exibido.
			}
		});
	});

	var showErrorMsg = function(type, msg) {

			var content = {};

			content.message = msg;

			var notify = $.notify(content, {
				type: type,
				allow_dismiss: true,
				newest_on_top: false,
				mouse_over:  false,
				showProgressbar:  false,
				spacing: 10,
				timer: 2000,
				placement: {
					from: 'top',
					align: 'center'
				},
				offset: {
					x: 30,
					y: 30
				},
				delay: 1000,
				z_index: 10000,
				animate: {
					enter: 'animated bounce' ,
					exit: 'animated bounceOutUp'
				}
			});

			/*if ($('#kt_notify_progress').prop('checked')) {
				setTimeout(function() {
					notify.update('message', '<strong>Saving</strong> Page Data.');
					notify.update('type', 'primary');
					notify.update('progress', 20);
				}, 1000);

				setTimeout(function() {
					notify.update('message', '<strong>Saving</strong> User Data.');
					notify.update('type', 'warning');
					notify.update('progress', 40);
				}, 2000);

				setTimeout(function() {
					notify.update('message', '<strong>Saving</strong> Profile Data.');
					notify.update('type', 'danger');
					notify.update('progress', 65);
				}, 3000);

				setTimeout(function() {
					notify.update('message', '<strong>Checking</strong> for errors.');
					notify.update('type', 'success');
					notify.update('progress', 100);
				}, 4000);
			}*/
	};

	/* Executa a requisição quando o campo CEP perder o foco */
	$('#isbn_search').click(function(){//alert($('#cep').val());

		var btn = $(this);
		var form = $(this).closest('form');

		if($("#isbn_livro").val() != '') {
			/* Configura a requisição AJAX */
			$.ajax({
				url: BASE_URL + "/livros/consultaISBN", /* URL que será chamada */
				type: 'GET', /* Tipo da requisição */
				data: 'isbn=' + $('#isbn_livro').val(), /* dado que será enviado via POST */
				dataType: 'json', /* Tipo de transmissão */
				beforeSend: function () {
					clearErrors();
					btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
					//$("#btn_login").siblings(".help-block").html(loadingImg("Verificando..."));
				},
				success: function (data) {
					if (data.total > 0) {
						//alert(data.rua);
						$('#nome_livro').val(data.titulo);
						$('#subtitulo_livro').val(data.subtitulo);
						$('#editora_livro').val(data.editora);
						$('#obs').val(data.obs);
						$('#n_paginas').val(data.paginas);
						$('#autor_livro').val(data.autores);
						$('#ano_livro').val(data.dataPublicado);

						$('#ed_livro').focus();
						btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
					} else {
						//alert("Error");
						$('#nome_livro').val("");
						$('#subtitulo_livro').val("");
						$('#editora_livro').val("");
						$('#obs').val("");
						$('#n_paginas').val("");
						$('#autor_livro').val("");
						$('#ano_livro').val("");

						btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
						showErrorMsg('danger', 'ISBN não encontrado!');

					}
				},
				error: function (response) {
					console.log(response);
					btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
					showErrorMsg('danger', 'Erro ao buscar ISBN!');
				}
			});
		}

		return false;
	});

	var ano_atual = date.getFullYear();
	//var ano_ini = ano_atual - 100;
	var form = $("#form_livro");

	$('#btn_submit').click(function () {
		form.validate({
			rules: {
				isbn_livro: {
					required: true,
					minlength: 10,
					maxlength: 13,
					digits: true
				},
				nome_livro: {
					required: true,
					maxlength: 250,
				},
				subtitulo_livro: {
					maxlength: 200
				},
				autor_livro: {
					required: true,
					minlength: 3,
					maxlength: 150
				},
				editora_livro: {
					required: true,
					maxlength: 60
				},
				ano_livro: {
					required: true,
					min: 1950,
					max: ano_atual,
					digits: true
				},
				ed_livro: {
					digits: true,
					min: 1
				},
				n_paginas: {
					digits: true,
					min: 1
				},
				id_livro_cat: {
					required: true
				},
				id_livro_subcat: {
					required: true
				},
				link_livro: {
					url: true
				},
			}
		});

		if (!form.valid()) {
			return;
		}
	});


});
