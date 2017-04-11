<?php namespace Alberich\Perfil\Models;

use Model;

/**
 * Model
 */
class TipoUsuario extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'alberich_perfil_tipo_usuario';

    /*RELACIONES*/
    public $HasMany = [
      'user' => ['Rainlab\User\Models\User']
    ];
}
