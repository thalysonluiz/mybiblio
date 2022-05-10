"use strict";
// Class definition

var KTDatatableRemoteAjaxDemo = function() {
	// Private functions

	// basic demo
	var demo = function() {

		var datatable = $('.kt-datatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: BASE_URL+"/livros/ajax_lista_livros",
						// sample custom headers
						// headers: {'x-my-custom-header': 'some value', 'x-test-header': 'the value'},
						map: function(raw) {
							// sample data mapping
							var dataSet = raw;
							if (typeof raw.data !== 'undefined') {
								dataSet = raw.data;
							}
							return dataSet;
						},
					},
				},
				pageSize: 10,
				serverPaging: true,
				serverFiltering: true,
				serverSorting: true,
			},

			// layout definition
			layout: {
				scroll: false,
				footer: false,
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#generalSearch'),
			},

			// columns definition
			columns: [
				{
					field: 'isbn_livro',
					title: 'ISBN',
					width: 100,
				}, {
					field: 'nome_livro',
					title: 'Título',
				}, {
					field: 'autor_livro',
					title: 'Autor',
				}, {
					field: 'ano_livro',
					title: 'Ano',
					width: 30,
					type: 'number',
				}, {
					field: 'nome_categoria',
					title: 'Categoria',
				}, {
					field: 'nome_subcat',
					title: 'SubCategoria',
					// callback function support for column rendering
					/*template: function(row) {
						var status = {
							1: {'title': 'Pending', 'class': 'kt-badge--brand'},
							2: {'title': 'Delivered', 'class': ' kt-badge--danger'},
							3: {'title': 'Canceled', 'class': ' kt-badge--primary'},
							4: {'title': 'Success', 'class': ' kt-badge--success'},
							5: {'title': 'Info', 'class': ' kt-badge--info'},
							6: {'title': 'Danger', 'class': ' kt-badge--danger'},
							7: {'title': 'Warning', 'class': ' kt-badge--warning'},
						};
						return '<span class="kt-badge ' + status[row.Status].class + ' kt-badge--inline kt-badge--pill">' + status[row.Status].title + '</span>';
					},*/

				}, {
					field: 'Actions',
					title: 'Ações',
					sortable: false,
					width: 105,
					overflow: 'visible',
					autoHide: false,
					template: function(row) {
						return '\
						<a href="livro/'+row.id_livro+'" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Abrir">\
							<i class="flaticon2-search"></i>\
						</a>\
						<a href="livro/editar/'+row.id_livro+'" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Editar">\
							<i class="flaticon2-edit"></i>\
						</a>\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Deletar">\
							<i class="flaticon2-delete"></i>\
						</a>\
					';
					},
				}],

		});

		/*$('#kt_form_status').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Status');
		});

		$('#kt_form_type').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Type');
		});

		$('#kt_form_status,#kt_form_type').selectpicker();*/


	};

	return {
		// public functions
		init: function() {
			demo();
		},
	};
}();

jQuery(document).ready(function() {
	KTDatatableRemoteAjaxDemo.init();
});
