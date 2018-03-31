<?php
namespace App;

use Aloha\Twilio\Twilio;

class Messaging extends Twilio {
    
    public function __construct(array $attributes) {
        parent::__construct(
            $attributes["sid"],
            $attributes["token"],
            $attributes["from"],
            $attributes["ssl_verify"]
        );
    }
}
