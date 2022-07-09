<?php

namespace App\Jobs;

use App\Mail\MailKichHoatUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendMailActiveJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $ho_va_ten;
    private $hash;
    private $mail_to;
    // private $tieu_de;

    public function __construct($mail_to, $ho_va_ten, $hash )
    {
        $this->ho_va_ten = $ho_va_ten;
        $this->hash      = $hash;
        $this->mail_to   = $mail_to;
        // $this->tieu_de   = $tieu_de;
    }

    public function handle()
    {
        Mail::to($this->mail_to)->send(new MailKichHoatUser($this->ho_va_ten, $this->hash));
    }
}
