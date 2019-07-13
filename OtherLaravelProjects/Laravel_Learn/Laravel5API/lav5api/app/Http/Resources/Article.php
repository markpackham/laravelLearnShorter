<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

//create from php artisan make:resource Article

class Article extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    /*We can add stuff to the JSON output */
    public function with($request){
        return [
          'version'=>'1.0.0',
          'author_url'=>url('http://markpackham.com')
        ];
    }
}
