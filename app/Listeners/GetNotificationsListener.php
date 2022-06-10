<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Auth;
use App\Events\GetNotificationsEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GetNotificationsListener
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
     * @param  \App\Events\GetNotificationsEvent  $event
     * @return void
     */
    public function handle(GetNotificationsEvent $event)
    {
        // recuperation des notifications non lues -> ajout a la variable notifications de discussion
        $unread_notifs = Auth::user()->unreadNotifications;

        foreach($event->discussions as $discussion){
            $notif_number = 0;
            foreach($unread_notifs as $unread_notif){
                if($unread_notif->data['discussion_id'] == $discussion->id){
                    $notif_number++;
                }
            }
            $discussion->notifications = $notif_number;
        }
    }
}
