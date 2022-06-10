<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            Criar SubCategoria
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" flex justify-between gap-3">
                <div
                    class="overflow-hidden shadow-sm sm:rounded-lg flex-1 min-h-[200px] p-6 bg-white border-b border-gray-200">
                    <div class="m-3">
                        <h2 class="text-2xl mb-4">Nova SubCategoria</h2>
                        <form method="POST"
                            action="{{ route('admin.subcategories.update', ['subcategory' => $subcategory->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="nome_subcategoria"
                                    value="{{ $subcategory->nome_subcategoria }}"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="nome_subcategoria"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    Nome da SubCategoria
                                </label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <label for="underline_select" class="sr-only">Categoria</label>
                                <select id="underline_select" name="category_id"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                    <option selected>Escolha a Categoria</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($subcategory->category->id == $category->id) selected @endif>
                                            {{ $category->nome_categoria }}</option>
                                    @endforeach;
                                </select>
                            </div>
                            <div class="flex justify-between">
                                <a href="{{ route('admin.subcategories.index') }}"
                                    class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Voltar</a>
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
