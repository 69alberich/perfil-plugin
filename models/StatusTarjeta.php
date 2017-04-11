<?php namespace Alberich\Perfil\Models;

use Model;

/**
 * Model
 */
class StatusTarjeta extends Model
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
    public $table = 'alberich_perfil_status_tarjetas';

    /*RELACIONES*/
    public $HasMany = [
      'tarjetas' => ['alberich\Perfil\Models\tarjetas', 'key' => 'status_id']
    ];
    /*FIN RELACIONES*/
}
