<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $table    = 'messages';
    protected $visible  = [
        "message_id", "content", "conversation_id", "sender_id",
        "receiver_id", "created_at", "updated_at"
    ];
    protected $fillable = [
        "content", "conversation_id", "sender_id",
        "receiver_id", "created_at", "updated_at"
    ];
    public $timestamps  = true;
    protected $guarded  = [];
}
