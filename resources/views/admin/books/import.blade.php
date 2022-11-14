<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            Importar Livros
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

                            <!--begin::Title-->
                            <h2 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark text-2xl font-bold mb-7 dark:text-white">
                                    Importar Planilha de Livros
                                </span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the Stock</span>
                            </h2>
                            <!--end::Title-->
                            <!--begin::Actions-->

                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body ">

                            <form method="post" action="{{ route('admin.importarExcel') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="my-4">
                                    <label @class([
                                        'block',
                                        'mb-2',
                                        'text-sm',
                                        'font-medium',
                                        'dark:text-gray-300' => !$errors->has('file'),
                                        'text-gray-900' => !$errors->has('file'),
                                        'text-red-700' => $errors->has('file'),
                                        'dark:text-red-500' => $errors->has('file'),
                                    ]) for="user_avatar">Upload
                                        file</label>
                                    <input @class([
                                        'block',
                                        'w-full',
                                        'text-sm',
                                        'bg-gray-50',
                                        'rounded-lg',
                                        'border',
                                        'text-sm',
                                        'bg-gray-50' => !$errors->has('file'),
                                        'border-gray-300' => !$errors->has('file'),
                                        'cursor-pointer',
                                        'dark:text-gray-400' => !$errors->has('file'),
                                        'focus:outline-none',
                                        'dark:bg-gray-700',
                                        'dark:border-gray-600' => !$errors->has('file'),
                                        'dark:placeholder-gray-400' => !$errors->has('file'),
                                        'bg-red-50' => $errors->has('file'),
                                        'border-red-500' => $errors->has('file'),
                                        'text-red-900' => $errors->has('file'),
                                        'placeholder-red-700' => $errors->has('file'),
                                        'focus:ring-red-500' => $errors->has('file'),
                                        'dark:text-red-500' => $errors->has('file'),
                                        'dark:placeholder-red-500' => $errors->has('file'),
                                        'dark:border-red-5000' => $errors->has('file'),
                                    ]) aria-describedby="xlsx_arquive"
                                        id="xlsx_arquive" name="arquivo_dados" type="file"
                                        value="{{ old('file') }}">
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">
                                        XLSX (Max.
                                        20MB).</p>
                                    @if ($errors->has('file'))
                                        <span class="invalid-feedback">
                                            <strong
                                                class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('file') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <button type="submit"
                                    class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Enviar
                                </button>
                            </form>

                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
            </div>

        </div>

    </div>
    @isset($notification)
        <div id="toast-success"
            class="flex absolute bottom-5 left-5 items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">
                <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Dados importados com
                    Sucesso</span>
                <div class="mb-2 text-sm font-normal">
                    Novos: {{ $notification['created'] }} <br>
                    Atualizado: {{ $notification['updated'] }}
                </div>
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endisset
</x-app-layout>
