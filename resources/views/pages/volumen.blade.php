<x-app-layout>
    <div class="max-w-7xl mx-20 sm:px-6 lg:px-50">
        <div class="absolute bottom-0 pl-14 m-20 sm:rounded-lg">
            <livewire:volumen />
        </div>
        <div class="absolute bottom-0 right-0 m-20 sm:rounded-lg">                
            <div class="md:w-auto">
                <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mt-20">
                    <div class="bg-gray-200 border-l-4 border-purple-600 w-full shadow rounded p-8 sm:p-12 -mt-72">
                        <p class="leading-7 text-center mb-4 text-3xl font-bold text-purple-600 ">Cálculo del volúmen</p>
                        <img class="object-none object-center pl-20 pt-20" src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7ecd383877953416a91d7c37e354485960b8c10e"
                        alt="Densidad">
                        <p class="leading-7 text-center mt-20 text-xl">La presión y el volúmen pueden <br>
                        expresarse en cualquier unidad.<br>La temperatura en la ecuación anterior <br> debe de estar en ºK.<br>
                        La ecuación que utilizaremos<br> es la siguiente:<br>V2 = (P1 · V1 · T2) / ( P2 · T1)</p>                                                            
                    </div>
                </div>
            </div>            
        </div>
    </div>
</x-app-layout>