<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $demo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('andr.evich11@gmail.com')
            ->view('mails.mail')
//            ->text('mails.demo_plain')
            ->with(
                [
                    'name' => 'Иван',
                    'sender' => 'Степан',
                    'testVarOne' => '1',
                    'testVarTwo' => '2',
                ]);
//            ->attach(public_path('/images').'/demo.jpg', [
//                'as' => 'demo.jpg',
//                'mime' => 'image/jpeg',
//            ]);
    }
}