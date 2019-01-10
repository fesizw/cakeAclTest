<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\EmailsTable|\Cake\ORM\Association\HasMany $Emails
 * @property \App\Model\Table\EnderecosTable|\Cake\ORM\Association\HasMany $Enderecos
 * @property |\Cake\ORM\Association\HasMany $Telefones
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'foto' => [
                'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    // Retorna o nome do arquivo criptografado em MD5 já com extensão
                    return md5($data['name'] . $entity->login) . '.' . pathinfo($data['name'], PATHINFO_EXTENSION);
                    // $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
                    // $fileKey = md5($data['name'] . $entity->email) . $extension;
                    // return $fileKey;
                },
                'transformer' => function ($table, $entity, $data, $field, $settings) {
                    //armazena a extensão do arquivo
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);

                    // Guarda thumbnail em um arquivo temporario
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                    // Usa a lib Imagine para fazer a mágica
                    $size = new \Imagine\Image\Box(60, 60);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;
                    $imagine = new \Imagine\Gd\Imagine();

                    // Savando o arquivo modificado de sua pasta temporaria
                    $imagine->open($data['tmp_name'])
                            ->thumbnail($size, $mode)
                            ->save($tmp);

                    // Retorna o arquivo original e a thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'th-' . $data['name']
                    ];
                },
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // Quando apagar um registro de entidade, ambos, o original e a thumbnail serão removidos
                    // Quando keepFilesOnDelete está configurado para false
                    return [
                        $path . $entity->{$field},
                        $path . 'th-' . $entity->{$field}
                    ];
                },
                'keepFilesOnDelete' => false
            ]
        ]);

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupo_id',
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
        $this->hasMany('Emails', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Enderecos', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Telefones', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->scalar('nome')
                ->maxLength('nome', 250)
                ->requirePresence('nome', TRUE)
                ->notEmpty('nome');

        $validator
                ->scalar('login', FALSE, __('This value is already in use'))
                ->maxLength('login', 60)
                ->requirePresence('login', TRUE)
                ->notEmpty('login');

        $validator
                ->scalar('senha')
                ->maxLength('senha', 60)
                ->allowEmpty([
                    'senha' => [
                        'mode' => 'update',
                        'message' => __('A password is required.')
                    ]
                ])
                ->requirePresence([
                    'senha' => [
                        'mode' => 'create',
                        'message' => __('A password is required.')
                    ]
        ]);

        $validator
                ->allowEmpty('confirm_password', 'update')
                ->add('confirm_password', 'compareWith', [
                    'rule' => ['compareWith', 'senha'],
                    'message' => __('Password not equal.')
                        ]
        );

        $validator
                ->allowEmpty('foto');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->existsIn(['grupo_id'], 'Grupos'));
        $rules->add($rules->existsIn(['unidade_id'], 'Unidades'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }

}
