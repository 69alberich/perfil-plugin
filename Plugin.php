<?php namespace Alberich\Perfil;

use System\Classes\PluginBase;
use Illuminate\Support\Str;
use RainLab\User\Controllers\Users as UserController;
use RainLab\User\Models\User as UserModel;
use Event;
use Backend;


class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot(){
      UserModel::extend(function($model){
        $model->belongsTo["tipo"] = ["alberich\Perfil\Models\TipoUsuario", 'key' => 'tipo_id'];
        //$model->HasMany["tarjetas"] = ["alberich\Perfil\Models\Tarjeta", 'key' => 'usuario_id'];
      });
      UserController::extendFormFields(function($form, $model, $context){

        $form->addTabFields([
          'tipo' => [
            'label' => 'Tipo Usuario',
            'type' => 'relation',
            'tab' => 'Perfil',
            'nameFrom' => 'titulo',
            'descriptionFrom' => 'titulo'
          ]
        ]);
        //UserController::fireViewEvent("alberich.tipousuario.solicitudes");
      });

      Event::listen('backend.menu.extendItems', function($manager) {
        $manager->addSideMenuItems('Rainlab.user', 'user', [
          'TipoUsuario' => [
          'label' => 'Tipos de Usuarios',
          'url' => Backend::url('alberich/perfil/tipousuario'),
          'icon' => 'icon-user-plus',
          'code' => 'side-menu-item'],

          'StatusTarjeta' => [
          'label' => 'Status Tarjetas',
          'url' => Backend::url('alberich/perfil/statustarjeta'),
          'icon' => 'icon-ban',
          'code' => 'side-menu-item1'],

          'Tarjeta' => [
          'label' => 'Tarjetas',
          'url' => Backend::url('alberich/perfil/tarjeta'),
          'icon' => 'icon-credit-card',
          'code' => 'side-menu-item2'],
        ]);
      });

      //Event::listen
    }
}
