<x-app-layout>        
    <div class="max-w-7xl mx-20 sm:px-6 lg:px-50">
        <div class="absolute bottom-0 pl-14 m-20 sm:rounded-lg">
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                @foreach($libros as $book)
                <div class="rounded overflow-hidden shadow-lg" style="background-color:FFFFFF">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{!! $book->titulo !!} </div>
                            <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                    </div>
                @endforeach  
                </div>
            </div>
        </div>
    </div>    
</x-app-layout>
