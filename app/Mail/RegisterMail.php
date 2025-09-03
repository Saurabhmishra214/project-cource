<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $emailData = [
            'name' => $this->user->name,
            'email' => $this->user->email,
            'referral_link' => URL::route('referral.register', ['referral_code' => $this->user->referral_code]),
        ];

        return $this->subject('Welcome to Our Platform!')
                    ->view('emails.register_mail')
                    ->with($emailData);
    }
}
