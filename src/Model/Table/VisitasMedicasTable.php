<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VisitasMedicas Model
 *
 * @method \App\Model\Entity\VisitasMedica get($primaryKey, $options = [])
 * @method \App\Model\Entity\VisitasMedica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VisitasMedica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VisitasMedica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VisitasMedica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VisitasMedica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VisitasMedica findOrCreate($search, callable $callback = null, $options = [])
 */
class VisitasMedicasTable extends Table
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

        $this->setTable('visitas_medicas');
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
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->scalar('razon')
            ->allowEmpty('razon');

        $validator
            ->integer('num_afiliacion_paciente_fk')
            ->allowEmpty('num_afiliacion_paciente_fk');

        $validator
            ->integer('id_especialidad_fk')
            ->allowEmpty('id_especialidad_fk');

        return $validator;
    }
}
