<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-2xl text-white leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="mx-2 flex flex-wrap justify-between gap-3">
        <div class="overflow-hidden shadow-sm rounded-lg flex-1 min-h-[200px] p-6 bg-white border-b border-gray-200">
          You're logged in!
        </div>
        <div class="overflow-hidden shadow-sm rounded-lg flex-1 min-h-[200px] p-6 bg-white border-b border-gray-200">
          You're logged in!
        </div>
      </div>
    </div>
    <div class="mt-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="mx-2 flex justify-between gap-3">
        <div class="overflow-hidden shadow-sm rounded-lg flex-2 min-h-[200px] p-6 bg-white border-b border-gray-200">
          You're logged in!
        </div>
        <div class="overflow-hidden shadow-sm rounded-lg flex-1 min-h-[200px] p-6 bg-white border-b border-gray-200">
          You're logged in!
        </div>
      </div>
    </div>
  </div>


</x-app-layout>
