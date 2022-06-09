<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TelegramNotification;

class TelegramNotificationController extends Controller
{
    public function send(Request $request)
    {
        $user = auth()->user();
        $user->notify(new TelegramNotification($request->notification));

        return back();
    }
}
