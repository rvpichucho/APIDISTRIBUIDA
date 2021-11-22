<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold  text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-300 dark:bg-black h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white mt-12 overflow-hidden shadow-xl mx-4 rounded sm:rounded-lg">



               <x-side/>
               <x-carrousel/>
                <x-dark_mode class=""/>

            </div>
        </div>
    </div>
</x-app-layout>

