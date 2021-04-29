<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

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
            });
        }else if($user->role == "MUNICIPIO"){

        }
    }
}
