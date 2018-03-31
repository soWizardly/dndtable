<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Message;
use App\Conversation;

class DefaultData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            [
                'name'     => 'Lawrence Shea',
                'email'    => 'webwizardma@gmail.com',
                'password' => 'password',
            ],
            [
                'name'     => 'Test Customer',
                'email'    => 'greatperson@test.com',
                'password' => 'password',
            ],
            [
                'name'     => 'Test Admin',
                'email'    => 'admin@test.com',
                'password' => 'password',
            ]
        ]);
    
        DB::table('conversations')->insert([
            ['name' => 'Test Conversation #1'],
            ['name' => 'Test Conversation #2'],
            ['name' => 'Test Conversation #3'],
        ]);
        
        $conversation = Conversation::where('name', 'Test Conversation #1')->first();
        $sender       = User::where('name','Test Admin')->first();
        $recipient    = User::where('name', 'Test Customer')->first();
    
        DB::table('messages')->insert([
            [
                'content'         => 'Your fb pic makes you look like a piece of shit.',
                'conversation_id' => $conversation->conversation_id ?? null,
                'sender_id'       => $sender->id ?? null,
                'receiver_id'     => $recipient->id ?? null,
            ],
            [
                'content'         => 'who the fuck are you?!!',
                'conversation_id' => $conversation->conversation_id ?? null,
                'sender_id'       => $recipient->id ?? null,
                'receiver_id'     => $sender->id ?? null,
            ]
        ]);
    
        $senderMessage    = Message::where('sender_id', $sender->id)->first();
        $recipientMessage = Message::where('receiver_id', $recipient->id)->first();
        
        DB::table('message_statuses')->insert([
            [
                'message_id' => $senderMessage->message_id ?? null,
                'content' => 'pending'
            ],
            [
                'message_id' => $senderMessage->message_id ?? null,
                'content' => 'sent'
            ],
            [
                'message_id' => $senderMessage->message_id ?? null,
                'content' => 'read'
            ],
            [
                'message_id' => $recipientMessage->message_id ?? null,
                'content' => 'received'
            ],
            [
                'message_id' => $recipientMessage->message_id ?? null,
                'content' => 'read'
            ],
        ]);
    }
}
