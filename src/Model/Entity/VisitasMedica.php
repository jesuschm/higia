<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VisitasMedica Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property string $razon
 * @property int $num_afiliacion_paciente_fk
 * @property int $id_especialidad_fk
 */
class VisitasMedica extends Entity
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
        'fecha' => true,
        'razon' => true,
        'num_afiliacion_paciente_fk' => true,
        'id_especialidad_fk' => true
    ];
}
