<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Fondo3;

class MenuFilterController extends Controller
{
    public function menuFilter(Dispatcher $events)
    {
        $user = auth()->user();
        //Modificamos el menu lateral quitando opciones a las que ciertos usuarios no pueden acceder
        if($user->role == "EDITOR"){
            $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
                $event->menu->remove('usuarios');
                $event->menu->remove('checatulana');
                $event->menu->remove('logos');
                $event->menu->remove('banners');
                $event->menu->remove('categorias');
                $event->menu->remove('subcategorias');
                $event->menu->remove('articulos_review');
                $event->menu->remove('municipios');
                $event->menu->remove('fondo3');
                $event->menu->remove('fondo4');
            });
        }else if($user->role == "MUNICIPIO"){
            $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
                $event->menu->remove('usuarios');
                $event->menu->remove('checatulana');
                $event->menu->remove('logos');
                $event->menu->remove('banners');
                $event->menu->remove('categorias');
                $event->menu->remove('subcategorias');
                $event->menu->remove('articulos_review');
                $event->menu->remove('articulos');

                $yellow = $this->notifications_yellow_fondo3();
                $red = $this->notifications_red_fondo3();
                $blue = $this->notifications_blue_fondo3();
                $event->menu->remove('fondo3');
                //Numero de CFDI emulando un sistema de notificaciones
                $event->menu->addAfter('municipios', [
                    'key' => 'fondo3',
                    'text' => 'Fondo III',
                    'url' => 'fondo-iii',
                    'icon' => 'fab fa-monero',
                    'submenu' => [
                        [
                            'text'  => 'Pendienes:',
                            'url' => 'fondo-iii',
                            'icon' => 'fab fa-monero',
                            'label' => $yellow,
                            'label_color' => 'warning',
                        ],
                        [
                            'text'  => 'Rechazados:',
                            'url' => 'fondo-iii',
                            'icon' => 'fab fa-monero',
                            'label' => $red,
                            'label_color' => 'danger',
                        ],
                        [
                            'text'  => 'Rechazados:',
                            'url' => 'fondo-iii',
                            'icon' => 'fab fa-monero',
                            'label' => $blue,
                            'label_color' => 'info',
                        ],
                    ],
                ]);
            });
        }
    }

    private function notifications_yellow_fondo3()
    {
        return Fondo3::where('m_user_id', auth()->user()->id)
        ->where('status', 'PENDIENTE')->count();
    }

    private function notifications_red_fondo3()
    {
        return Fondo3::where('m_user_id', auth()->user()->id)
        ->where('status', 'RECHAZADO')->count();
    }

    public function notifications_blue_fondo3()
    {
        return Fondo3::where('m_user_id', auth()->user()->id)
        ->where('status', 'EN REVISION')->count();
    }
}
