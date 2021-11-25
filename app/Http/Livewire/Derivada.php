<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Derivada extends Component
{
    
    public $base1 =0 , $base0 =0 , $base2 =0 ,$base3 =0 ,$base4 =0 ,$grado =1 , $message;
    public function render()
    {
        $respuesta = HTTP::get('http://192.168.0.110:8000/api/derivada1G/'.$this->base2.'/'.$this->base1.'/'.$this->base0);
        $res = $respuesta->json();

        $respuesta2 = HTTP::get('http://192.168.0.110:8000/api/derivada2G/'.$this->base2.'/'.$this->base1.'/'.$this->base0);
        $res2 = $respuesta->json();

        $respuesta3 = HTTP::get('http://192.168.0.110:8000/api/derivada3G/'.$this->base3.'/'.$this->base2.'/'.$this->base1.'/'.$this->base0);
        $res3 = $respuesta->json();

        $respuesta4 = HTTP::get('http://192.168.0.110:8000/api/derivada4G/'.$this->base4.'/'.$this->base3.'/'.$this->base2.'/'.$this->base1.'/'.$this->base0);
        $res4 = $respuesta->json();


        return view('livewire.derivada',compact('res','res2','res3','res4'));
    }
}
