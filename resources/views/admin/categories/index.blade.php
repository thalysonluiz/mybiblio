<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-2xl text-white leading-tight">
      Categorias
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class=" flex justify-between gap-3">
        <div class="overflow-hidden shadow-sm sm:rounded-lg flex-1 min-h-[200px] p-6 bg-white border-b border-gray-200">

          <div class="card card-flush h-xl-100">
            <!--begin::Card header-->
            <div class="card-header pt-7">
              <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary">Criar Categoria</a>
              <!--begin::Title-->
              <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder text-dark">Stock Report</span>
                <span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the Stock</span>
              </h3>
              <!--end::Title-->
              <!--begin::Actions-->
              <div class="card-toolbar">
                <!--begin::Filters-->
                <div class="d-flex flex-stack flex-wrap gap-4">
                  <!--begin::Destination-->
                  <div class="d-flex align-items-center fw-bolder">
                    <!--begin::Label-->
                    <div class="text-muted fs-7 me-2">Cateogry</div>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <select
                      class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                      data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                      data-placeholder="Select an option" data-select2-id="select2-data-16-qv59" tabindex="-1"
                      aria-hidden="true">
                      <option></option>
                      <option value="Show All" selected="selected" data-select2-id="select2-data-18-49t7">Show All
                      </option>
                      <option value="a">Category A</option>
                      <option value="b">Category B</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                      data-select2-id="select2-data-17-ejz6" style="width: 100%;"><span class="selection"><span
                          class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                          role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                          aria-labelledby="select2-gjf6-container" aria-controls="select2-gjf6-container"><span
                            class="select2-selection__rendered" id="select2-gjf6-container" role="textbox"
                            aria-readonly="true" title="Show All">Show All</span><span class="select2-selection__arrow"
                            role="presentation"><b role="presentation"></b></span></span></span><span
                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::Select-->
                  </div>
                  <!--end::Destination-->
                  <!--begin::Status-->
                  <div class="d-flex align-items-center fw-bolder">
                    <!--begin::Label-->
                    <div class="text-muted fs-7 me-2">Status</div>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <select
                      class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                      data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                      data-placeholder="Select an option" data-kt-table-widget-5="filter_status"
                      data-select2-id="select2-data-19-buaw" tabindex="-1" aria-hidden="true">
                      <option></option>
                      <option value="Show All" selected="selected" data-select2-id="select2-data-21-bssc">Show All
                      </option>
                      <option value="In Stock">In Stock</option>
                      <option value="Out of Stock">Out of Stock</option>
                      <option value="Low Stock">Low Stock</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                      data-select2-id="select2-data-20-l8ao" style="width: 100%;"><span class="selection"><span
                          class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                          role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                          aria-labelledby="select2-qtos-container" aria-controls="select2-qtos-container"><span
                            class="select2-selection__rendered" id="select2-qtos-container" role="textbox"
                            aria-readonly="true" title="Show All">Show All</span><span class="select2-selection__arrow"
                            role="presentation"><b role="presentation"></b></span></span></span><span
                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::Select-->
                  </div>
                  <!--end::Status-->
                  <!--begin::Search-->
                  <a href="/metronic8/demo2/../demo2/apps/ecommerce/catalog/products.html"
                    class="btn btn-light btn-sm">View Stock</a>
                  <!--end::Search-->
                </div>
                <!--begin::Filters-->
              </div>
              <!--end::Actions-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
              <!--begin::Table-->
              <div id="kt_table_widget_5_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                  <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                    id="kt_table_widget_5_table">
                    <!--begin::Table head-->
                    <thead>
                      <!--begin::Table row-->
                      <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_widget_5_table" rowspan="1"
                          colspan="1" aria-label="Item: activate to sort column ascending" style="width: 195.516px;">
                          #</th>
                        <th class="text-end pe-3 min-w-100px sorting_disabled" rowspan="1" colspan="1"
                          aria-label="Product ID" style="width: 152.688px;">Nome</th>

                        <th class="text-end pe-0 min-w-25px sorting" tabindex="0"
                          aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                          aria-label="Qty: activate to sort column ascending" style="width: 86.25px;">Ações</th>
                      </tr>
                      <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bolder text-gray-600">
                      @foreach($categories as $category)
                      <tr class="odd">
                        <!--begin::Item-->
                        <td>
                          <a href="/metronic8/demo2/../demo2/apps/ecommerce/catalog/edit-product.html"
                            class="text-dark text-hover-primary">{{$category->id}}</a>
                        </td>
                        <!--end::Item-->


                        <!--begin::Product ID-->



               
         <td class="text-end">{{$category->nome_categoria}}</td>
                        <!--end::Product ID-->
                        <!--begin::Date added-->
                        <td class="text-end" data-order="Data inválida">Editar</td>
                        <!--end::Date added-->

                      </tr>
                      @endforeach


                    </tbody>
                    <!--end::Table body-->
                  </table>
                </div>
                <div class="row">
                  {{$categories->links()}}
                  <div
                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                  </div>
                  <div
                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                  </div>
                </div>
              </div>
              <!--end::Table-->
            </div>
            <!--end::Card body-->
          </div>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>