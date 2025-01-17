<x-app-layout>
    @section('Dashboard')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
       

    </x-slot>
  
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="flex flex-col bg-yellow-200 border shadow-md rounded-xl dark:bg-yellow-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            <div class="p-4 md:p-5">
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Total Tables
              </h3>
              <p class="mt-2 text-green-400 font-bold dark:text-green-400 text-2xl">
                {{ $tables }}
              </p>
             
            </div>
            <div class="bg-gray-100 border-t rounded-b-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
              <p class="mt-1 text-sm text-gray-500 dark:text-gray-500">
                <a class=" inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" 
                href="{{ route('admin.tables.index') }}">
                    View Details
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                  </a>
              </p>
            </div>
          </div>

          <div class="flex flex-col bg-red-200 border shadow-md rounded-xl dark:bg-red-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            <div class="p-4 md:p-5">
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Total Table Reservations
              </h3>
              <p class="mt-2 text-green-400 font-bold dark:text-green-400 text-2xl">
                {{ $reservations }}
              </p>
             
            </div>
            <div class="bg-gray-100 border-t rounded-b-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
              <p class="mt-1 text-sm text-gray-500 dark:text-gray-500">
                <a class=" inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" 
                href="{{ route('admin.reservation.index') }}">
                    View Details
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                  </a>
              </p>
            </div>
          </div>

          <div class="flex flex-col bg-green-200 border shadow-md rounded-xl dark:bg-green-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            <div class="p-4 md:p-5">
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Total Event Reservations
              </h3>
              <p class="mt-2 text-green-400 font-bold dark:text-green-400 text-2xl">
                 {{ $events }}
              </p>
             
            </div>
            <div class="bg-gray-100 border-t rounded-b-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
              <p class="mt-1 text-sm text-gray-500 dark:text-gray-500">
                <a class=" inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" 
                href="{{ route('admin.events.index') }}">
                    View Details
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                  </a>
              </p>
            </div>
          </div>
    
      

    </div>

    

    
</x-app-layout>
