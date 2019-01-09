<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\CapacidadeCivilsTable|\Cake\ORM\Association\HasMany $CapacidadeCivils
 * @property \App\Model\Table\ClientesTable|\Cake\ORM\Association\HasMany $Clientes
 * @property \App\Model\Table\EmailsTable|\Cake\ORM\Association\HasMany $Emails
 * @property \App\Model\Table\EstadoCivilsTable|\Cake\ORM\Association\HasMany $EstadoCivils
 * @property \App\Model\Table\ProfissaosTable|\Cake\ORM\Association\HasMany $Profissaos
 * @property \App\Model\Table\SexosTable|\Cake\ORM\Association\HasMany $Sexos
 * @property \App\Model\Table\TipoClientesTable|\Cake\ORM\Association\HasMany $TipoClientes
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\HasMany $Unidades
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\HasMany $Usuarios
 *
 * @method \App\Model\Entity\Empresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empresa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Empresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresasTable extends Table
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

        $this->setTable('empresas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CapacidadeCivils', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Clientes', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Emails', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('EstadoCivils', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Profissaos', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Sexos', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('TipoClientes', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Unidades', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Usuarios', [
            'foreignKey' => 'empresa_id'
        ]);
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 20)
            ->allowEmpty('cpf');

        $validator
            ->scalar('cnpj')
            ->maxLength('cnpj', 20)
            ->allowEmpty('cnpj');

        return $validator;
    }
}
