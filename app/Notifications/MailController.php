<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Client;

class MailController extends Notification
{
    use Queueable;
    protected $client;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct(Client $client)
    {
        $this->client = $client;
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
        return (new MailMessage)
                    ->from($this->client['email'], $this->client['name'])
                    ->subject('Solicitud de información')
                    ->greeting($this->client['name'])
                    ->line('Correo electrónico: ' . $this->client['email'])
                    ->line($this->client['message'])
                    ->salutation('Quedo a la espera de su respuesta.');
                    
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
