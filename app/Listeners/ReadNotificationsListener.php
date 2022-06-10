<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Auth;
use App\Events\ReadNotificationsEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReadNotificationsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ReadNotificationsEvent  $event
     * @return void
     */
    public function handle(ReadNotificationsEvent $event)
    {
        $unread_notifs = Auth::user()->unreadNotifications;
        // Remise a zero des notifications lors de la lecture du chat
        foreach($unread_notifs as $unread_notif){
            if($unread_notif->data['discussion_id'] == $event->discussion->id){
                $unread_notif->markAsRead();
            }
        }
        $event->discussion->notifications = 0;
    }
}
