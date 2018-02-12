<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;
use App\Models\Scholarship;

class ScholarshipWinner extends Notification
{
    use Queueable;

    protected $user;
    protected $scholarship;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, Scholarship $scholarship)
    {
        $this->user = $user;
        $this->scholarship = $scholarship;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $study = null;

        if($this->scholarship->study){
            $study = $this->scholarship->study->name;
        }else{
            $study = 'Multiple Studies';
        }

        return (new MailMessage)
                    ->line($this->user->name . ' Conratz! You are the winner of the scholarship '
                     . $study . '! Contact with ' . $this->scholarship->school->admin->name 
                     . ' to find out information about your registration!');
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
            //
        ];
    }
}
