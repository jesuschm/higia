<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PruebasMedicas Model
 *
 * @method \App\Model\Entity\PruebasMedica get($primaryKey, $options = [])
 * @method \App\Model\Entity\PruebasMedica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PruebasMedica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PruebasMedica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PruebasMedica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PruebasMedica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PruebasMedica findOrCreate($search, callable $callback = null, $options = [])
 */
class PruebasMedicasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pruebas_medicas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 2000)
            ->allowEmpty('descripcion');

        $validator
            ->allowEmpty('imagen');

        $validator
            ->integer('id_visita_medica_fk')
            ->requirePresence('id_visita_medica_fk', 'create')
            ->notEmpty('id_visita_medica_fk');

        return $validator;
    }
}
