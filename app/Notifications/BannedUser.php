<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class BannedUser extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        if($notifiable->activated==1){
          return (new MailMessage)
			->subject(Lang::get('Cuenta desactivada.'))
			->greeting(Lang::get('¡Hola ' . $notifiable->name . '!'))
			->line(Lang::get('Recibes este email porque tu cuenta ha sido desactivada.'))
			->line(Lang::get('Si crees que esto es un error puedes contactar al administrador para más información.'))
			->salutation(Lang::get('¡Saludos!'));
        }else{
		return (new MailMessage)
			->subject(Lang::get('Cuenta activada.'))
			->greeting(Lang::get('¡Hola ' . $notifiable->name . '!'))
			->line(Lang::get('Recibes este email porque tu cuenta ha sido activada exitosamente.'))
			->action(Lang::get('Iniciar sesión'), url(route('login')))
			->line(Lang::get('Ahora tienes acceso al sistema de checa tu lana.'))
			->salutation(Lang::get('¡Saludos!'));
	   }
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
