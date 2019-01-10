<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ClientsTable extends Table {

    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('clients');
        $this->setDisplayField('client_name');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');

        $this->belongsTo('Filials', [
            'foreignKey' => 'filial_id',
            'joinType' => 'INNER'
        ])->setDisplayField('filial_name');
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ])->setDisplayField('user_name');
    }

    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->scalar('client_name')
                ->maxLength('client_name', 255)
                ->requirePresence('client_name', 'create')
                ->notEmpty('client_name');

        $validator
                ->scalar('razao_social')
                ->maxLength('razao_social', 255)
                ->allowEmpty('razao_social');


        $validator
                ->scalar('cnpj')
                ->maxLength('cnpj', 14)
                ->allowEmpty('cnpj')
                ->add(
                        'cnpj', 'custom', [
                    'rule' =>
                    function ($cnpj) {
                        // Verifica se um número foi informado
                        if (empty($cnpj)) {
                            return true;
                        } else {
                            // Elimina possível mascara
                            $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);

                            // Para evitar erro no calculo, vamos preencher o valor com 0
                            $cnpj = str_pad($cnpj, 14, '0', STR_PAD_LEFT);

                            // Verifica se o numero de digitos informados é igual a 14
                            if (strlen($cnpj) != 14) {
                                return false;
                            }
                            // Calcula os digitos verificadores para verificar se o cnpj é valido
                            else {
                                // Valida primeiro dígito verificador
                                for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
                                    $soma += $cnpj {$i} * $j;
                                    $j = ($j == 2) ? 9 : $j - 1;
                                }
                                $resto = $soma % 11;
                                if ($cnpj {12} != ($resto < 2 ? 0 : 11 - $resto)) {
                                    return false;
                                }
                                // Valida segundo dígito verificador
                                for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
                                    $soma += $cnpj {$i} * $j;
                                    $j = ($j == 2) ? 9 : $j - 1;
                                }
                                $resto = $soma % 11;
                                $result = $cnpj {13} == ($resto < 2 ? 0 : 11 - $resto);
                                return $result;
                            }
                        }
                    },
                    // Caso retorne falso ele vai retornar uma mensagem falando que é inválido
                    'message' => __('Invalid CNPJ')
                        ]
        );

        $validator
                ->scalar('cpf')
                ->maxLength('cpf', 11)
                ->allowEmpty('cpf')
                ->add(
                        'cpf', 'custom', [
                    'rule' =>
                    function ($cpf) {
                        // Verifica se um número foi informado
                        if (empty($cpf)) {
                            return true;
                        } else {
                            // Elimina possível mascara
                            $cpf = preg_replace('/[^0-9]/', '', (string) $cpf);

                            // Para evitar erro no calculo, vamos preencher o valor com 0
                            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

                            // Verifica se o numero de digitos informados é igual a 11
                            if (strlen($cpf) != 11) {
                                return false;
                            }
                            // Verifica se nenhuma das sequências invalidas abaixo foi digitada
                            else if ($cpf == '00000000000' ||
                                    $cpf == '11111111111' ||
                                    $cpf == '22222222222' ||
                                    $cpf == '33333333333' ||
                                    $cpf == '44444444444' ||
                                    $cpf == '55555555555' ||
                                    $cpf == '66666666666' ||
                                    $cpf == '77777777777' ||
                                    $cpf == '88888888888' ||
                                    $cpf == '99999999999') {
                                return false;
                            }
                            // Calcula os digitos verificadores para verificar se o cpf é valido
                            else {
                                for ($t = 9; $t < 11; $t++) {
                                    for ($d = 0, $c = 0; $c < $t; $c++) {
                                        $d += $cpf {$c} * (($t + 1) - $c);
                                    }
                                    $d = ((10 * $d) % 11) % 10;
                                    if ($cpf {$c} != $d) {
                                        return false;
                                    }
                                }
                                return true;
                            }
                        }
                    },
                    // Caso retorne falso ele vai retornar uma mensagem falando que é inválido
                    'message' => __('Invalid CPF')
                        ]
        );

        return $validator;
    }

    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['filial_id'], 'Filials'));
    }

}
