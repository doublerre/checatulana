<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class RechazarCFDINotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($num, $fondo, $id, $message)
    {
        $this->num = $num;
        $this->fondo = $fondo;
        $this->id = $id;
        $this->message = $message;
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
			->subject(Lang::get($this->fondo. ': Tu CFDI ha sido rechazado.'))
			->greeting(Lang::get('¡Hola ' . $notifiable->name . '!'))
			->line(Lang::get('Recibes este email porque tu CFDI ha sido rechazado.'))
            ->line(Lang::get('Un usuario ha dejado el siguiente comentario: ' . $this->message))
            ->line(Lang::get('Debes de corregir tu CFDI y volverlo a subir a la plataforma.'))
			->action(Lang::get('Ver el estado del CFDI.'), url(route('fondo'. $this->num .'.verCFDI', $this->id)))
			->salutation(Lang::get('¡Saludos!'));
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
