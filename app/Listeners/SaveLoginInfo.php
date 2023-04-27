<?php

namespace App\Listeners;

use App\Models\UserLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Jenssegers\Agent\Agent;

class SaveLoginInfo
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
    public function handle(Login $event): void
    {
        $agent = new Agent();

        UserLogin::query()->create([
            'ip' =>$_SERVER['REMOTE_ADDR'] ?? '' ,
            'user_id' => $event->user->id,
            'os' => $agent->platform(),
            'browser' => $agent->browser(),
            'is_mobile' => $agent->isPhone(),
        ]);
    }
}
