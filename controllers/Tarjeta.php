<?php namespace Alberich\Perfil\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Alberich\Perfil\Models\Tarjeta as TarjetaModel;
use Crypt;
use Flash;
class Tarjeta extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('RainLab.User', 'user', 'tarjeta');
    }

    public function create_onSave(){

      $inputs = post('Tarjeta');
      $tarjeta = new TarjetaModel;
      $codigo = Crypt::encrypt($inputs["codigo"]);
      $rest = substr($inputs["codigo"], -4);
      $tarjeta->codigo = $codigo;
      $tarjeta->status = 1;
      $tarjeta->ultimos_digitos = $rest;
      $tarjeta->usuario = $inputs["usuario"];
      $tarjeta->save();

      Flash::success('Correcto');

      if ($redirect = $this->makeRedirect('create', $tarjeta)) {
          return $redirect;
      }
      //echo "$codigo";
      //model::where('id', $recordId)->update(['codigo' => $codigo]);
      //$this->asExtension('FormController')->create_onSave($context=null);
    }
}
