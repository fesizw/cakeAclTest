<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * TelefoneCliente Controller
 *
 * @property \App\Model\Table\TelefoneClienteTable $TelefoneCliente
 *
 * @method \App\Model\Entity\TelefoneCliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TelefoneClienteController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $telefoneCliente = $this->paginate($this->TelefoneCliente);

        $this->set(compact('telefoneCliente'));
    }

    /**
     * View method
     *
     * @param string|null $id Telefone Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $telefoneCliente = $this->TelefoneCliente->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('telefoneCliente', $telefoneCliente);
    }

    public function add() {
        $telefoneCliente = $this->TelefoneCliente->newEntity();
        if ($this->request->is('post')) {
            $telefoneCliente = $this->TelefoneCliente->patchEntity($telefoneCliente, $this->request->data);
            if ($this->TelefoneCliente->save($telefoneCliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Telefone Cliente'));
//                return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Clients', 'action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Telefone Cliente'));
            }
        }
        $clients = $this->TelefoneCliente->Clients->find('list', ['limit' => 200]);
        $this->set(compact('telefoneCliente', 'clients'));
        $this->set('_serialize', ['telefoneCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Telefone Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $telefoneCliente = $this->TelefoneCliente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefoneCliente = $this->TelefoneCliente->patchEntity($telefoneCliente, $this->request->data);
            if ($this->TelefoneCliente->save($telefoneCliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Telefone Cliente'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Telefone Cliente'));
            }
        }
        $clients = $this->TelefoneCliente->Clients->find('list', ['limit' => 200]);
        $this->set(compact('telefoneCliente', 'clients'));
        $this->set('_serialize', ['telefoneCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefone Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $telefoneCliente = $this->TelefoneCliente->get($id);
        if ($this->TelefoneCliente->delete($telefoneCliente)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Telefone Cliente'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Telefone Cliente'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
