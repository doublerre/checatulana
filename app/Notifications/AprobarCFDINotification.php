<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class AprobarCFDINotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($fondo, $id)
    {
		$this->fondo = $fondo;
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
			->subject(Lang::get('Fondo ' . $this->fondo. ': Tu CFDI ha sido aprobado.'))
			->greeting(Lang::get('¡Hola ' . $notifiable->name . '!'))
			->line(Lang::get('Recibes este email porque tu CFDI ha sido aprobado por un administrador.'))
			->action(Lang::get('Ver el estado del CFDI.'), url(route('fondo'. $this->fondo .'.verCFDI', $this->id)))
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
