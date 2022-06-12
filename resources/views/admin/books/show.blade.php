<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            Detalhar Livro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-2 flex flex-wrap justify-between gap-3">
                <div class="overflow-hidden shadow-sm rounded-lg flex-1 p-6 bg-white border-b border-gray-200">

                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $book->titulo }}</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $book->subtitulo }}</p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-white px-4 py-5 sm:gap-4 sm:px-6 m-auto flex justify-center items-center">
                                {{-- <dt class="text-sm font-medium text-gray-500">Capa</dt> --}}
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><img
                                        src="{{ !empty($book->capa) ? $book->capa : asset('assets/media/book_cover.png') }}"
                                        alt="Imagem capa livro" class="w-32" srcset=""></dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">ISBN</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $book->isbn }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Autor</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $book->autor }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Editora</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $book->editora }}</dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Edição/Ano</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $book->edicao . '/' . $book->ano }}</dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Editora</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $book->category->nome_categoria . '->' . $book->subcategory->nome_subcategoria }}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Descrição</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $book->descricao }}
                                </dd>
                            </div>
                            {{-- <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                <!-- Heroicon name: solid/paper-clip -->
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-2 flex-1 w-0 truncate">
                                                    resume_back_end_developer.pdf </span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                    Download </a>
                                            </div>
                                        </li>
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                <!-- Heroicon name: solid/paper-clip -->
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-2 flex-1 w-0 truncate">
                                                    coverletter_back_end_developer.pdf </span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                    Download </a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div> --}}
                        </dl>
                    </div>

                </div>
                <div class="overflow-hidden shadow-sm rounded-lg flex-1 p-6 bg-white border-b border-gray-200">
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="flex justify-between items-center p-2">
                            <a href="{{ route('admin.summaries.new', ['book_id' => $book->id]) }}"
                                class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Criar
                                Capítulo</a>
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
                                            <th class="px-5 py-3">Capítulo</th>
                                            <th class="px-5 py-3">Título</th>
                                            <th class="px-5 py-3">Ações</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <!-- dark:bg-gray-800 dark:border-gray-700 odd:dark:bg-gray-800 even:dark:bg-gray-700-->
                                        @foreach ($summaries as $summary)
                                            <tr
                                                class=" border-b odd:bg-gray-50 even:bg-gray-200   hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <!--begin::Item-->
                                                <td>
                                                    <a href="#"
                                                        class="py-3 text-dark text-hover-primary">{{ $summary->n_capitulo }}</a>
                                                </td>
                                                <!--end::Item-->


                                                <!--begin::Product ID-->
                                                <td class="py-3 text-left">{{ $summary->titulo }}</td>
                                                <!--begin::Date added-->
                                                <td class="py-3 text-end" data-order="Data inválida">

                                                    <a
                                                        href="{{ route('admin.summaries.edit', ['summary' => $summary->id]) }}">
                                                        Editar
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
                                {{ $summaries->links() }}
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
