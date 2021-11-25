<div class="py-12">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-blue-200 rounded dark:bg-green-700 shadow-xl bg- sm:rounded-lg">
            <figure class="text-center pt-5">
                <blockquote class="blockquote blockq">
                    <p>Resolver Ecuaciones</p>
                </blockquote>
                <figcaption class="blockquote-footer fig">
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
                                <label for="inputPassword2" class="visually">Ingrese el valor de A</label>
                                <input type="number" class="form-control" id="" placeholder="A" wire:model="a">
                            </div>
                            <div class="col">
                                <label for="inputPassword2" class="visually">Ingrese el valor de B</label>
                                <input type="number" class="form-control" id="" placeholder="B" wire:model="b">

                            </div>
                            <div class="col order-last">
                                <label for="inputPassword2" class="visually">Ingrese el valor de C</label>
                                <input type="number" class="form-control" id="" placeholder="C" wire:model="c">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pb-2 mx-auto mb-4 text-center">
                    <h1>RESULTADOS</h1>
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
                    <div class="col order-last">
                        <input class="form-control" disabled type="text" name="" id="" value="{{$r['x1']}}">

                    </div>
                    <div class="col order-last">
                        <input class="form-control" disabled type="text" name="" id="" value="{{$r['x2']}}">

                    </div>
                    @endforeach
                    @endif
                   
                    @if(isset($res))
                    @foreach ($res as $t) {
                        
                    <tr>
                        
                        <input class="form-control" disabled type="text" name="" id="" value="{{$t['x']}}">
                        
                    </tr>
                    
                    }
                    @endforeach
                    @endif

                </div>
                {{-- <h1 class="text-xl">Respuesta</h1>
                    
                {{$a.$b.$c}} --}}








                {{-- <label class="block p-1 m-2 mb-2" for="">
                    <input class="px-4 py-2 text-white bg-purple-600" type="button" value="Enviar">
                </label> --}}
                {{-- <div class="mx-auto my-auto text-center">
                    <h1 class="h-16 text-xl font-semibold tracking-wide text-gray-700 uppercase">Forma de la Ecuación</h1>
                    <img src="{{ asset('images/forma.jpg') }}" class="h-24 mx-auto md:h-32 md:-mt-5" alt="">
            </div> --}}

            {{-- <input wire:model="name" type="" placeholder="Ingrese el nombre " class="w-1/2 rounded form-input"
                    required> --}}
            {{-- {!! Form::label($for, $text, [$options]) !!} --}}
        </div>
    </div>
</div>

</div
