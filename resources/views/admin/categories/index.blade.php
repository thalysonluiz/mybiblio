<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            Categorias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" flex justify-between gap-3">
                <div
                    class="overflow-hidden shadow-sm sm:rounded-lg flex-1 min-h-[200px] p-6 bg-white border-b border-gray-200">

                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="flex justify-between items-center p-2">
                            <a href="{{ route('admin.categories.create') }}"
                                class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Criar
                                Categoria</a>
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Stock Report</span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the Stock</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->

                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body ">
                            <!--begin::Table-->

                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8 text-center">
                                <table class="w-full text-sm text-black text-center">
                                    <thead
                                        class="text-xs text-gray-50 uppercase bg-gray-50 dark:bg-mybiblio-blue-800 dark:text-gray-400">
                                        <!--begin::Table row-->
                                        <tr>
                                            <th class="px-5 py-3">#</th>
                                            <th class="px-5 py-3">Nome</th>
                                            <th class="px-5 py-3">Ações</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <!-- dark:bg-gray-800 dark:border-gray-700 odd:dark:bg-gray-800 even:dark:bg-gray-700-->
                                        @foreach ($categories as $category)
                                            <tr
                                                class=" border-b odd:bg-gray-50 even:bg-gray-200   hover:bg-gray-50 dark:hover:bg-gray-300">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="/metronic8/demo2/../demo2/apps/ecommerce/catalog/edit-product.html"
                                                        class="py-3 text-dark text-hover-primary">{{ $category->id }}</a>
                                                </td>
                                                <!--end::Item-->


                                                <!--begin::Product ID-->




                                                <td class="py-3 text-left">{{ $category->nome_categoria }}</td>
                                                <!--end::Product ID-->
                                                <!--begin::Date added-->
                                                <td class="py-3 flex items-center justify-center gap-2"
                                                    data-order="Data inválida">
                                                    <a
                                                        href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                                <!--end::Date added-->

                                            </tr>
                                        @endforeach


                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <div class="row">
                                {{ $categories->links() }}
                                <div
                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                </div>
                                <div
                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
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
