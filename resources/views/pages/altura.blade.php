<x-app-layout>
    <div class="max-w-7xl mx-20 sm:px-6 lg:px-50">
        <!--<div class="m-20 sm:rounded-lg">-->
        <div class="absolute bottom-0 pl-14 m-20 sm:rounded-lg">
            <livewire:altura />
        </div>
        <div class="absolute bottom-0 right-0 m-20 sm:rounded-lg">                
            <div class="md:w-auto">
                <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mt-20">
                    <div class="bg-gray-200 border-l-4 border-purple-600 w-full shadow rounded p-8 sm:p-12 -mt-72">
                        <p class="leading-7 text-center mb-4 text-3xl font-bold text-purple-600 ">Cálculo diferencia de la Altura</p>
                        <p class="leading-7 text-center mb-4 text-3xl font-bold text-black-600 uppercase">h = L(1 - Cos(θ))</p>
                        <p class="leading-7 text-center mt-20 text-xl">Para calcular la diferencia de la Altura se <br>
                         multiplica la longitud por <br>la resta 1 menos el coseno del ángulo.<br></p>                                                            
                    </div>
                </div>
            </div>            
        </div>
    </div>
</x-app-layout>