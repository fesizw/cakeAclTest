<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class LoginTab extends Entity {

    protected $_accessible = [
        'nome_autorizador' => true,
        'senha_autorizador' => true,
        'online' => true,
        'Usuários' => true,
        'backup' => false,
        'formulario' => true,
        'Alterar' => true,
        'Relatorio' => true,
        'Setor' => true,
        'Apagar' => true,
        'Funcionario' => true,
        'Honorario' => true,
        'ContatoInicial' => true,
        'Supervisao' => true,
        'ContaCorrente' => true,
        'Situacao' => true,
        'unidade' => true,
        'ConfCOnt' => true,
        'Unid' => true,
        'Distrib' => true,
        'GestJur' => true,
        'Recep' => true,
        'GerencFinanc' => true,
        'GerenciaJur' => true,
        'GerencAdm' => true,
        'GerencRecep' => true,
        'GT' => true,
        'Autoriza' => true,
        'PedirValor' => true,
        'Profissao' => true,
        'SupervSetor' => true,
        'Prazos' => true,
        'JPA' => true,
        'ADV' => true,
        'DCC' => true,
        'JPJEstag' => true,
        'codquadpessoal' => true,
        'homolog' => true,
        'isAtSimultaneo' => true
    ];

}
