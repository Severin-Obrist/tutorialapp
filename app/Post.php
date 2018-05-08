<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    //creates a model relationship with the user-model
    public function user(){
        return $this->belongsTo('App\User');
    }
}
