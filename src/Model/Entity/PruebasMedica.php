<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PruebasMedica Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string|resource $imagen
 * @property int $id_visita_medica_fk
 */
class PruebasMedica extends Entity
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
        'descripcion' => true,
        'imagen' => true,
        'id_visita_medica_fk' => true
    ];
}
