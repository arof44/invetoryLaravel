<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TelegramNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use PhpParser\Builder\FunctionLike;
use TelegramNotifications\TelegramChannel;
use TelegramNotifications\Messages\TelegramMessage;

class TelegramNotificationController extends Notification
{
    use Queueable;

    public function via(Request $request)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram()
    {
        return (new TelegramMessage())->text('Hello, world!');
    }
}
