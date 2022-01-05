<div class="md:w-auto">
    
    <div class="mt-20">
        <div class="bg-gray-200 border-l-4 border-purple-600 w-full shadow rounded p-8 sm:p-12 -mt-72">
            <p class="text-3xl text-purple-600 font-bold leading-7 text-center">Cálculo de Frencuencia Pendular</p>
            <p class="text-3xl font-bold leading-7 text-center"></p>
            <form action="" method="post">
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none">Longitud</label>
                        <div class="flex mt-4">
                            <div class="bg-blue-400 hover:bg-purple-300 rounded-l-lg border-2 bg-blue-400 w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="text-gray-50 text-lg">L</i></div>
                            <input type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 bg-gray-100 border-gray-200 outline-none focus:border-indigo-500" wire:model="longitud">
                        </div> 
                    </div>                                      
                </div>
              
                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label class="font-semibold leading-none">Resultado</label>
                        {{-- $res = is_array($res) ? $res : array($res); --}}
                    @if(isset($res))
                    
                    
                        <textarea type="text" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" readonly>{{$res}}</textarea>                                     
                    @endif
                   
                    </div>
                </div>
               
            </form>                                                             
        </div>
    </div>
</div>