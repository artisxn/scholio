<?php

namespace App\Notifications;

use App\Models\Study;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserAppliedForConnection extends Notification
{
    protected $user;
    protected $school;
    protected $study;
    protected $status;

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, User $school, $study, $status)
    {
        $this->user = $user;
        $this->school = $school;
        $this->study = $study;
        $this->status = $status;
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
        $this->user->avatar = $this->user->info->avatar;
        $this->user->study = $this->study;
        $this->user->status = $this->status;
        return $this->user->toArray();
    }
}
