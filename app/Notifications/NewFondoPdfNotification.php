<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class NewFondoPdfNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($fondo)
    {
        $this->fondo = $fondo;
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
            ->subject(Lang::get('Fondo ' . $this->fondo. ': Nuevo comprobante de pago disponible.'))
            ->greeting(Lang::get('¡Hola ' . $notifiable->name . '!'))
            ->line(Lang::get('Recibes este email porque existe un nuevo comprobante de pago para fondo ' . $this->fondo . '.'))
            ->line(Lang::get('Debes subir tu CFDI acorde a este comprobante de pago.'))
            ->action(Lang::get('Lista de comprobantes de pago.'), url(route('fondo'. $this->fondo .'.index')))
            ->line(Lang::get('Es necesario subir tu CFDI en tiempo y forma.'))
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
