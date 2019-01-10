<?php

namespace App\Controller;

use App\Controller\AppController;

class EnderecoClienteController extends AppController {

    public function index() {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $enderecoCliente = $this->paginate($this->EnderecoCliente);

        $this->set(compact('enderecoCliente'));
    }

    public function view($id = null) {
        $enderecoCliente = $this->EnderecoCliente->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('enderecoCliente', $enderecoCliente);
    }

    public function add() {
        $enderecoCliente = $this->EnderecoCliente->newEntity();
        if ($this->request->is('post')) {
            $enderecoCliente = $this->EnderecoCliente->patchEntity($enderecoCliente, $this->request->getData());
            if ($this->EnderecoCliente->save($enderecoCliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Endereco Cliente'));
//                return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'TelefoneCliente', 'action' => 'add']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Endereco Cliente'));
            }
        }
        $clients = $this->EnderecoCliente->Clients->find('list', ['limit' => 200]);
        $this->set(compact('enderecoCliente', 'clients'));
        $this->set('_serialize', ['enderecoCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $enderecoCliente = $this->EnderecoCliente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enderecoCliente = $this->EnderecoCliente->patchEntity($enderecoCliente, $this->request->data);
            if ($this->EnderecoCliente->save($enderecoCliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Endereco Cliente'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Endereco Cliente'));
            }
        }
        $clients = $this->EnderecoCliente->Clients->find('list', ['limit' => 200]);
        $this->set(compact('enderecoCliente', 'clients'));
        $this->set('_serialize', ['enderecoCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $enderecoCliente = $this->EnderecoCliente->get($id);
        if ($this->EnderecoCliente->delete($enderecoCliente)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Endereco Cliente'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Endereco Cliente'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
