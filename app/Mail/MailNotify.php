<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;
   public function __construct($data)
   {
       $this->data = $data;
   }

   public function build()
   {
       return $this->from('shopbanhkeo@gmail.com')
           ->view('mails.mail-notify')
           ->subject('Email từ Cửa hàng bánh kẹo');
   }
}
