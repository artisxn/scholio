<?php

namespace App\Notifications;

use App\Models\Request;
use App\Models\Scholarship;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StudentAppliedOnScholarship extends Notification
{
    use Queueable;

    public $user;
    public $school;
    public $scholarship;
    public $request;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, User $school, Scholarship $scholarship, Request $request)
    {
        $this->user = $user;
        $this->school = $school;
        $this->scholarship = $scholarship;
        $this->request = $request;
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
            ->line('New Scholarship')
            ->action('See user here', url('/request/' . $this->request->id))
            ->line('Bla bla bla bla bla bla');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'user' => $this->user->toArray(),
            'scholarship' => $this->scholarship->id,
        ];
    }
}
