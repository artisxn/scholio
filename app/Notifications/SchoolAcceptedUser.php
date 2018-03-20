<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SchoolAcceptedUser extends Notification
{
    use Queueable;

    protected $user;
    protected $school;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, User $school)
    {
        $this->user = $user;
        $this->school = $school;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return $this->school->toArray();
    }
}
