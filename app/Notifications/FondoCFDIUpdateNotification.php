<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class FondoCFDIUpdateNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($fondo, $nombre, $id)
    {
        $this->fondo = $fondo;
        $this->nombre = $nombre;
        $this->id = $id;
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
            ->subject(Lang::get('Fondo ' . $this->fondo. ': Nuevo CFDI en espera de revisión.'))
            ->greeting(Lang::get('¡Hola ' . $notifiable->name . '!'))
            ->line(Lang::get('Recibes este email porque el municipio de '. $this->nombre .' subio un nuevo CFDI para fondo ' . $this->fondo . '.'))
            ->line(Lang::get('Debes validar que este CFDI sea correcto.'))
            ->action(Lang::get('Historial de CFDIs de ' . $this->nombre . '.'), url(route('fondo'. $this->fondo .'.history', $this->id)))
            ->line(Lang::get('Es necesario validar el CFDI en tiempo y forma.'))
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
