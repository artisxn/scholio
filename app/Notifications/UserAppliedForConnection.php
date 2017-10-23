<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserAppliedForConnection extends Notification
{
    protected $user;
    protected $school;

    use Queueable;

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
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('User ' . $this->user->name . ' wants to connect with you!')
            ->action('Confirm Connection', url('connection/' . $this->user->id . '/confirm'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        // return [
        //     'user' => $this->user->toArray(),
        //     'scholarship' => $this->scholarship->id,
        // ];
        $this->user->avatar = $this->user->info->avatar;
        return $this->user->toArray();
    }
}
