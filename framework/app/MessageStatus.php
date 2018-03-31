<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageStatus extends Model
{
    protected $table    = 'message_statuses';
    protected $visible  = ['message_status_id', 'message_id', 'content', 'created_at', 'updated_at'];
    protected $fillable = ['message_id', 'content', 'created_at', 'updated_at'];
    public $timestamps  = true;
    protected $guarded  = [];
}
