<?php

namespace App\Controller;

use App\Controller\AppController;

class CadastroClienteController extends AppController {

    public function index() {
        $_query = (int) $this->request->getQuery('page');
        $limit = 1000;
        $offset = 0;

//        debug($_query);

        $offset = $limit * ($_query - 1);
        $offset < 0 ? $offset = 0 : $offset = $offset;

//        $limit = $limit * $_query;
//        debug($limit);
//        debug($offset);

        $clientes = $this->CadastroCliente
                ->find()
                ->select(['CÓDIGO', 'NomeCliente', 'Nacionalidade', 'Estadocivil', 'Profissão', 'RG'])
                ->limit($limit)
                ->offset($offset)
                ->orderDesc('CÓDIGO');

//        $this->paginate = [
//            'fields' => [
//                'CadastroCliente.CÓDIGO',
//                'CadastroCliente.NomeCliente',
//                'CadastroCliente.Nacionalidade',
//                'CadastroCliente.Estadocivil',
//                'CadastroCliente.Profissão',
//                'CadastroCliente.RG'
//        ]];
//        $clientes = $this->paginate($this->CadastroCliente);
//        $this->set(compact('clientes'));
        $this->set('clientes', $clientes);
    }

    public function view($id) {
        $this->loadModel("EnderecoCliente");
        $cliente = $this->CadastroCliente
                ->find()
                ->select(['CÓDIGO', 'NomeCliente', 'Nacionalidade', 'Estadocivil', 'Profissão', 'RG', 'EnderecoTCliente.idEndereco'])
                ->where(['AND' => ['CÓDIGO' => $id, 'codcli' => $id]])
                ->limit(1000)
                ->offset(0)
                ->innerJoin('EnderecoTCliente')
                ->orderDesc('CÓDIGO');
//        $endereco = $this->EnderecoCliente
//                ->find()
//                ->select(['bairro', 'cep', 'cidade', 'complemento', 'comprecli', 'datacadastro', 'endereco', 'estado', 'exibir', 'numero', 'obs'])
//                ->where(['codcli' => $id])
//
//        ;
//        $this->set('EnderecoTCliente', $endereco);
        $this->set('cliente', $cliente);
    }

}
