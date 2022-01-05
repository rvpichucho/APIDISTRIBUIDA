<div class="py-12">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-800 via-blue-500 to-blue-300">
            <figure class="text-center pt-5">
                <blockquote class="text-8xl text-white">
                    <p>DERIVADA</p>
                </blockquote>
                <figcaption class="text-xl text-white">
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
                                <input type="number"class="form-control hover:text-white text-xl" id="" placeholder="A" wire:model="base2">
                            </div>
                            <div class="col">
                                <label for="inputPassword2" class="visually">Ingrese el valor de B</label>
                                <input type="number"class="form-control hover:text-white text-xl" id="" placeholder="B" wire:model="base1">

                            </div>
                            <div class="col order-last">
                                <label for="inputPassword2" class="visually">Ingrese el valor de C</label>
                                <input type="number"class="form-control hover:text-white text-xl" id="" placeholder="C" wire:model="base0">
                            </div>
                           
                        </div>

                    </div>
                </div>
                <div class="pb-2 mx-auto mb-4 text-center">
                    <h1 class="text-3xl text-white">RESULTADOS</h1>
                    {{-- $res = is_array($res) ? $res : array($res); --}}
                    @if(isset($res))
                    @foreach ($res as $r )
                    <div class="text-xl font-bold">
                        <figure class="text-center pt-2 pb-2 form-control">

                            <blockquote class="blockquote">
                                @if ($base1>0 && $base0>0)
                                <p> <strong> {{$base2}}</strong>x<sup>2</sup>+ <strong> {{$base1}}</strong>x+ <strong> {{$base0}}</strong></p>

                                @endif
                                @if ($base1< 0 && $base0 < 0) <p> <strong> {{$base2}}</strong>x<sup>2</sup> <strong> {{$base1}}</strong>x <strong> {{$base0}}</strong></p>

                                    @endif
                                    @if ($base1< 0 && $base0> 0)
                                        <p> <strong> {{$base2}}</strong>x<sup>2</sup> <strong> {{$base1}}</strong>x +<strong> {{$base0}}</strong></p>

                                        @endif
                                        @if ($base1> 0 && $base0< 0) <p> <strong> {{$base2}}</strong>x<sup>2</sup> +<strong> {{$base1}}</strong>x <strong> {{$base0}}</strong></p>

                                            @endif


                            </blockquote>
                        </figure>
                        @if (isset($r['x']))
                        <input class="form-control" disabled type="text" name="" id="" value="{{$r['x']}}">
                        @else
                        <p>samiel</p>
                        @endif
                    </div>
                    @endforeach
                    @endif
                </div>

        </div>
    </div>
</div>

</div>