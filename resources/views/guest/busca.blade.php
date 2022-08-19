@extends('layouts.appguest')

@section('title', 'Page Title')


@section('header')

    <div class="font-semibold text-2xl text-white leading-tight m-2">
        <form action="{{ route('processSearch') }}">
            @csrf
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Buscar</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="search" name="search"
                    class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Buscar" value="{{ $busca }}" required>
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    {{-- @parent --}}
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-2 flex flex-wrap justify-between gap-3 mt-1">
                <div
                    class="overflow-hidden shadow-sm rounded-lg flex-1 min-h-[200px] p-6 bg-white border-b border-gray-200">
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="flex justify-between items-center p-2">

                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Total: </span>
                                <span class="text-gray-400 mt-1 fw-bold fs-6">{{ count($summaries) }} Resultado(s)</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->

                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body ">
                            <!--begin::Table-->

                            <!-- dark:bg-gray-800 dark:border-gray-700 odd:dark:bg-gray-800 even:dark:bg-gray-700-->
                            @foreach ($summaries as $summary)
                                <div class="flex items-center mb-2 shadow rounded-md border border-gray-400">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-24 w-20 rounded-md bg-gray-100 ">
                                            <img src="{{ !empty($summary->book->capa) ? $summary->book->capa : asset('assets/media/book_cover.png') }}"
                                                alt="Imagem capa livro" class="h-20" srcset="">
                                        </div>
                                    </div>
                                    <div class="ml-4 flex flex-col justify-between h-20">
                                        <div class="text-sm leading-5 font-medium text-blue-600 dark:text-blue-800">
                                            <a href="#">{{ $summary->n_capitulo . ' - ' . $summary->titulo }}</a>
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500 dark:text-gray-700">
                                            {{ ' Livro: ' . $summary->book->titulo }}
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500 dark:text-gray-700">
                                            {{ $summary->objetivos }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="row">
                                <div class="col-12">

                                </div>
                            </div>


                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
