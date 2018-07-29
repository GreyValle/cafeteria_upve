<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection->transform(function($element){
                return [
                    'id'=>$element->id,
                    'title'=>$element->nombre,
                    'description'=>$element->descripcion,
                    'ingredients'=>$element->ingredientes,
                    'price'=>"$".$element->precio,
                    'empleado'=>$element->id_empleado,
                    'imagen'=>$element->imagen,
                   
                ];
            })
        ];
    }
}
