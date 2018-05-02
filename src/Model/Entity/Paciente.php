<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $num_afiliacion
 * @property string $nombre
 * @property string $apellidos
 * @property string $id_documento
 * @property string $tipo_documento
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento
 * @property string $sexo
 */
class Paciente extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'apellidos' => true,
        'id_documento' => true,
        'tipo_documento' => true,
        'fecha_nacimiento' => true,
        'sexo' => true
    ];
}
