<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //The table name gets automatically given but you can also set it
    protected $table = 'posts';
    //Primary Key field can be set, although id is the default
    public $primaryKey = 'id';
    //We can set timestamps, they are true by default
    public $timestamps = true;

    public function user(){
        //a post belong to a user
        return $this->belongsTo('App\User');
    }
}
