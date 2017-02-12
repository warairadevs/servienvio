<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Budgets Model
 *
 * @method \App\Model\Entity\Budget get($primaryKey, $options = [])
 * @method \App\Model\Entity\Budget newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Budget[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Budget|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Budget patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Budget[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Budget findOrCreate($search, callable $callback = null, $options = [])
 */
class BudgetsTable extends Table
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

        $this->table('budgets');
        $this->displayField('id_budget');
        $this->primaryKey('id_budget');
        $this->belongsTo('Users', array(
            'foreignKey' => 'username',
            'joinType' => 'INNER',
        ));
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
            ->integer('id_budget')
            ->allowEmpty('id_budget', 'create');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('source_latitude', 'create')
            ->notEmpty('source_latitude');

        $validator
            ->requirePresence('destination_latitude', 'create')
            ->notEmpty('destination_latitude');

        $validator
            ->numeric('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        $validator
            ->dateTime('delivery_time_estimated')
            ->requirePresence('delivery_time_estimated', 'create')
            ->notEmpty('delivery_time_estimated');

        $validator
            ->requirePresence('source_longitude', 'create')
            ->notEmpty('source_longitude');

        $validator
            ->requirePresence('destination_longitude', 'create')
            ->notEmpty('destination_longitude');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
