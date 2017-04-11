<?php namespace Alberich\Perfil\Models;

use Model;

/**
 * Model
 */
class Tarjeta extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'alberich_perfil_usuario_tarjetas';

    public $belongsTo = [
      'status' => ['Alberich\Perfil\Models\StatusTarjeta', 'key' => 'status_id'],
      'usuario' => ['Rainlab\User\Models\User'],
    ];
}
