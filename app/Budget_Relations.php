<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget_Relations extends Model
{
    
    //Table Name
    protected $table = 'budget_relations';
    //Primary Key
    public $primaryKey = 'id';
    //Disable Timestamp
    public $timestamps = false;

    //creates a model relationship with the user-model
    public function user(){
        return $this->belongsTo('App\User');
    }

    //creates a model relationship with the Budget-model
    public function budget_content(){
        return $this->belongsTo('App\Budget_Content');
    }

    public function budget_list(){
        return $this->belongsTo('App\Budget_List');
    }
}
