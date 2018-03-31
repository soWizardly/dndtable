<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $table    = 'conversations';
    protected $visible  = ['conversation_id','name','created_at','updated_at'];
    protected $fillable = ['name','created_at','updated_at'];
    public $timestamps  = true;
    protected $guarded  = [];
    
    
    
}
