<x-app-layout>
        <div class="max-w-7xl mx-20 sm:px-6 lg:px-50">
            <div class="absolute bottom-0 pl-14 m-20 sm:rounded-lg">
                <livewire:libre />
            </div>
            <div class="absolute bottom-0 right-0 m-20 sm:rounded-lg">                
            <div class="md:w-auto">
                <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mt-20">
                    <div class="bg-gray-200 border-l-4 border-purple-600 w-full shadow rounded p-8 sm:p-12 -mt-72">
                        <p class="leading-7 text-center mb-4 text-3xl font-bold text-purple-600 ">Cálculo de la Caída Libre</p>
                        <p class="leading-7 text-center mb-4 text-3xl font-bold text-black-600 uppercase">Pf = Po + Vo*t + 1/2(g*t^2)</p>
                        <p class="leading-7 text-center mt-20 text-xl">Para calcular la Caída Libre se <br>
                         suma la posición inicial <br> mas la velocidad inicial por el tiempo <br>
                        mas un medio por la gravedad por el timepo al cuadrado.</p>                                                            
                    </div>
                </div>
            </div>            
        </div>
        </div>
</x-app-layout>