<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $jobData;

    public function __construct($jobData)
    {
        $this->jobData = $jobData; // form से जो data आएगा
    }

    public function build()
    {
        return $this->subject('Job Application Received')
                    ->view('emails.job_apply')
                    ->with([
                        'name' => $this->jobData['name'],
                        'email' => $this->jobData['email'],
                        'job' => $this->jobData['job_title'] ?? '',
                    ]);
    }
}
