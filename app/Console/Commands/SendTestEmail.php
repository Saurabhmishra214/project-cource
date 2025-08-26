<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log; // ✅ Log facade import करें

class SendTestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-test-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test email via configured SMTP settings.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $toEmail = 'oosaurabh6@gmail.com'; 
        $toName  = 'Saurabh';

        try {
            $this->info("Attempting to send a test email to {$toEmail}...");

            Mail::raw('This is a test email from Laravel console command. If you receive this, your mailer is configured correctly.', function($message) use ($toEmail, $toName) {
                $message->to($toEmail, $toName)
                        ->subject('Test Email from Laravel');
            });

            $this->info("Test email sent successfully to {$toEmail}. Please check your inbox or logs.");

        } catch (\Exception $e) {
            $this->error('Email could not be sent.');
            Log::error("Email Sending Failed: " . $e->getMessage()); // ✅ एरर को log में भी सेव करें
            $this->error('Error Message: ' . $e->getMessage());
        }
    }
}
