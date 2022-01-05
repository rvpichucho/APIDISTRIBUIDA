<div class="md:w-auto">
    <div class="mt-20">
        <div class="bg-gray-200 border-l-4 border-purple-600 w-full shadow rounded p-8 sm:p-12 -mt-72">
            <p class="text-3xl text-purple-600 font-bold leading-7 text-center">Cálculo del volumen</p>
            <p class="text-3xl font-bold leading-7 text-center"></p>
            
            <form action="" method="post">
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none">PRESIÓN 1 ATM</label>
                        <div class="flex mt-4">
                            <div class="bg-blue-400 hover:bg-purple-300 rounded-l-lg border-2 border-blue-400 w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="text-gray-50 text-lg">p</i></div>
                            <input type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 bg-gray-100 border-gray-200 outline-none focus:border-indigo-500" wire:model="presion1"/>
                        </div> 
                        <!-- <input type="number" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" wire:model="presion1" /> -->
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none">Temperatura 1 °K</label>
                        <div class="flex mt-4">
                            <div class="bg-blue-400 hover:bg-purple-300 rounded-l-lg border-2 border-blue-400 w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="text-gray-50 text-lg">°K</i></div>
                            <input type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 bg-gray-100 border-gray-200 outline-none focus:border-indigo-500" wire:model="temperatura1"/>
                        </div> 
                        <!-- <input type="number" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" wire:model="temperatura1"/> -->
                    </div>
                    
                </div>
                <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none">PRESION 2 ATM</label>
                        <div class="flex mt-4">
                            <div class="bg-blue-400 hover:bg-purple-300 rounded-l-lg border-2 border-blue-400 w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="text-gray-50 text-lg">p</i></div>
                            <input type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 bg-gray-100 border-gray-200 outline-none focus:border-indigo-500" wire:model="presion2"/>
                        </div> 
                        <!-- <input type="number" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" wire:model="presion2" /> -->
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none">Temperatura 2 °K</label>
                        <div class="flex mt-4">
                            <div class="bg-blue-400 hover:bg-purple-300 rounded-l-lg border-2 border-blue-400 w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="text-gray-50 text-lg">°K</i></div>
                            <input type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 bg-gray-100 border-gray-200 outline-none focus:border-indigo-500" wire:model="temperatura2"/>
                        </div> 
                        <!-- <input type="number" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" wire:model="temperatura2"/>  -->
                    </div>                    
                </div>
                <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none">Volumen 1</label>
                        <div class="flex mt-4">
                            <div class="bg-blue-400 hover:bg-purple-300 rounded-l-lg border-2 border-blue-400 w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="text-gray-50 text-lg">Vo</i></div>
                            <input type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 bg-gray-100 border-gray-200 outline-none focus:border-indigo-500" wire:model="volumen1"/>
                        </div> 
                        <!-- <input type="number" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" wire:model="volumen1" /> -->
                    </div>                                        
                </div>
                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label class="font-semibold leading-none">Resultado</label>
                        {{-- $res = is_array($res) ? $res : array($res); --}}
                    @if(isset($res))
                    
                    @foreach ($res as $r )
                        <textarea type="text" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" readonly>{{$r['resultado']}}</textarea>
                          
                    @endforeach
                    @endif
                   
                    </div>
                </div>
               
            </form>

          
                    
          
                   

                 
        </div>
    </div>
</div>