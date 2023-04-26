<?php

namespace App\Listeners;

use App\Events\UpdatePassword;
use App\Mail\UpdatePasswordMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendUpdatePassword
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UpdatePassword $event): void
    {
        Mail::to('vizhuravleva19@gmail.com')->send(new UpdatePasswordMail($event->user));
    }
}
