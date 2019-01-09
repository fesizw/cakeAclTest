<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \App\Model\Table\TipoClientesTable|\Cake\ORM\Association\BelongsTo $TipoClientes
 * @property \App\Model\Table\CapacidadeCivilsTable|\Cake\ORM\Association\BelongsTo $CapacidadeCivils
 * @property \App\Model\Table\EstadoCivilsTable|\Cake\ORM\Association\BelongsTo $EstadoCivils
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\ProfissãosTable|\Cake\ORM\Association\BelongsTo $Profissãos
 * @property \App\Model\Table\SexosTable|\Cake\ORM\Association\BelongsTo $Sexos
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientesTable extends Table
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

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('TipoClientes', [
            'foreignKey' => 'tipo_cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CapacidadeCivils', [
            'foreignKey' => 'capacidade_civil_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EstadoCivils', [
            'foreignKey' => 'estado_civil_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Profissãos', [
            'foreignKey' => 'profissão_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sexos', [
            'foreignKey' => 'sexo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Unidades', [
            'foreignKey' => 'unidade_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
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
            ->scalar('nome_cliente')
            ->maxLength('nome_cliente', 255)
            ->allowEmpty('nome_cliente');

        $validator
            ->scalar('filiacao_materna')
            ->maxLength('filiacao_materna', 255)
            ->allowEmpty('filiacao_materna');

        $validator
            ->scalar('nacionalidade')
            ->maxLength('nacionalidade', 50)
            ->allowEmpty('nacionalidade');

        $validator
            ->scalar('naturalidade')
            ->maxLength('naturalidade', 80)
            ->allowEmpty('naturalidade');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 50)
            ->allowEmpty('rg');

        $validator
            ->scalar('orgao_exp_rg')
            ->maxLength('orgao_exp_rg', 50)
            ->allowEmpty('orgao_exp_rg');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 20)
            ->allowEmpty('cpf');

        $validator
            ->scalar('cnpj')
            ->maxLength('cnpj', 20)
            ->allowEmpty('cnpj');

        $validator
            ->scalar('ctps')
            ->maxLength('ctps', 50)
            ->allowEmpty('ctps');

        $validator
            ->scalar('pis_pasep')
            ->maxLength('pis_pasep', 50)
            ->allowEmpty('pis_pasep');

        $validator
            ->dateTime('data_nascimento')
            ->allowEmpty('data_nascimento');

        $validator
            ->scalar('origem')
            ->maxLength('origem', 50)
            ->allowEmpty('origem');

        $validator
            ->scalar('observacao')
            ->allowEmpty('observacao');

        $validator
            ->scalar('cad_senha')
            ->maxLength('cad_senha', 255)
            ->allowEmpty('cad_senha');

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
        $rules->add($rules->existsIn(['tipo_cliente_id'], 'TipoClientes'));
        $rules->add($rules->existsIn(['capacidade_civil_id'], 'CapacidadeCivils'));
        $rules->add($rules->existsIn(['estado_civil_id'], 'EstadoCivils'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['profissão_id'], 'Profissãos'));
        $rules->add($rules->existsIn(['sexo_id'], 'Sexos'));
        $rules->add($rules->existsIn(['unidade_id'], 'Unidades'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }
}
