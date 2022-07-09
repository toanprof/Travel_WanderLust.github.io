<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailKichHoatUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $ho_va_ten;
    public $hash ;
    public $tieu_de ;

    public function __construct($ho_va_ten ,$hash)
    {
        $this->ho_va_ten = $ho_va_ten;
        $this->hash = $hash;
        // $this->tieu_de = $tieu_de;

    }

    public function build()
    {
       return $this->subject("KÍch hoạt tài khoản")->view('mail.mail_kich_hoat_user',[
           'ho_va_ten'  =>$this->ho_va_ten,
           'hash'  =>$this->hash,
       ]);
    }
}
