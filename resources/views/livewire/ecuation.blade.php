<div class="py-12">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-800 via-blue-500 to-blue-300">
            <figure class="text-center pt-5">
                <blockquote  class="text-xl text-white">
                    <p>Resolver Ecuaciones</p>
                </blockquote>
                <figcaption  class="text-xl text-white">
                    de segundo grado
                </figcaption>
            </figure>

            <br>
            <figure class="text-center pt-2 pb-2">
                <blockquote class="blockquote">
                    <p> <strong>a</strong>x<sup>2</sup>+ <strong>b</strong>x+ <strong>c</strong>=0</p>
                </blockquote>
            </figure>
            </span>
            <div class="max-w-xl m-4 mx-auto shadow-md ">
                <div class="py-3 my-2 text-center ">
                    <div class="flex flex-shrink py-2 mx-auto my-auto align-middle border">
                        <div class="row ">
                            <div class="col order-first pol">
                                <label for="inputPassword2" class="visually text-xl">Ingrese el valor de A</label>
                                <input type="number" class="form-control hover:text-white text-xl" id="" placeholder="A" wire:model="a">
                            </div>
                            <div class="col">
                                <label for="inputPassword2" class="visually text-xl">Ingrese el valor de B</label>
                                <input type="number" class="form-control hover:text-white text-xl" id="" placeholder="B" wire:model="b">

                            </div>
                            <div class="col order-last">
                                <label for="inputPassword2" class="visually text-xl">Ingrese el valor de C</label>
                                <input type="number" class="form-control hover:text-white text-xl" id="" placeholder="C" wire:model="c">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pb-2 mx-auto mb-4 text-center">
                    <h1  class="text-3xl text-white">RESULTADOS</h1>

                    <figure class="text-center pt-2 pb-2 form-control">

                        <blockquote class="blockquote">
                            @if ($b>0 && $c>0)
                            <p> <strong> {{$a}}</strong>x<sup>2</sup>+ <strong> {{$b}}</strong>x+ <strong> {{$c}}</strong></p>

                            @endif
                            @if ($b< 0 && $c < 0) <p> <strong> {{$a}}</strong>x<sup>2</sup> <strong> {{$b}}</strong>x <strong> {{$c}}</strong></p>

                                @endif
                                @if ($b< 0 && $c> 0)
                                    <p> <strong> {{$a}}</strong>x<sup>2</sup> <strong> {{$b}}</strong>x +<strong> {{$c}}</strong></p>

                                    @endif
                                    @if ($b> 0 && $c< 0) <p> <strong> {{$a}}</strong>x<sup>2</sup> +<strong> {{$b}}</strong>x <strong> {{$c}}</strong></p>

                                        @endif


                        </blockquote>
                    </figure>
                    {{-- $res = is_array($res) ? $res : array($res); --}}
                    @if(isset($res))
                    
                    @foreach ($res as $r )
                    @if (isset($r['x1']))
                    <div class="col order-last">
                        <label for="" class="text-xl text-white">x1:</label>
                        <input class="form-control" disabled type="text" name="" id="" value="{{$r['x1']}}">

                    </div>
                    <div class="col order-last">
                    <label for=""  class="text-xl text-white">x2:</label>
                        <input class="form-control" disabled type="text" name="" id="" value="{{$r['x2']}}">

                    </div>
                    @else
                    <div class="col order-last">
                        <label for="" class="text-xl text-white">mensaje:</label>
                        <input class="form-control" disabled type="text" name="" id="" value="{{$r['mensaje']}}">
                    </div>
                    @endif

                   
                    @endforeach
                    @endif
                   
                    {{-- $tabla = is_array($tabla) ? $res : array($tabla); --}}
                    @if(isset($tabla))
                    @foreach ($tabla as $r) 
                        
                    
                        
                        
                    <input class="form-control" disabled type="text" name="" id="" value="{{$r['x']}}">

                        
                    
                    
                    
                    @endforeach
                    @endif

                </div>
                
        </div>
    </div>
</div>

</div