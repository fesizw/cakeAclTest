<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['TipoClientes', 'CapacidadeCivils', 'EstadoCivils', 'Users', 'Profissaos', 'Sexos', 'Unidades', 'Empresas']
        ];
        $clientes = $this->paginate($this->Clientes);

        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['TipoClientes', 'CapacidadeCivils', 'EstadoCivils', 'Users', 'Profissaos', 'Sexos', 'Unidades', 'Empresas', 'Emails', 'Enderecos', 'Representantes', 'Telefones']
        ]);

        $this->set('cliente', $cliente);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            debug($cliente);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cliente'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cliente'));
            }
        }
        $tipoClientes = $this->Clientes->TipoClientes->find('list', ['limit' => 200]);
        $capacidadeCivils = $this->Clientes->CapacidadeCivils->find('list', ['limit' => 200]);
        $estadoCivils = $this->Clientes->EstadoCivils->find('list', ['limit' => 200]);
        $users = $this->Clientes->Users->find('list', ['limit' => 200]);
        $profissaos = $this->Clientes->Profissaos->find('list', ['limit' => 200]);
        $sexos = $this->Clientes->Sexos->find('list', ['limit' => 200]);
        $unidades = $this->Clientes->Unidades->find('list', ['limit' => 200]);
        $empresas = $this->Clientes->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('cliente', 'tipoClientes', 'capacidadeCivils', 'estadoCivils', 'users', 'profissaos', 'sexos', 'unidades', 'empresas'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Cliente'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Cliente'));
            }
        }
        $tipoClientes = $this->Clientes->TipoClientes->find('list', ['limit' => 200]);
        $capacidadeCivils = $this->Clientes->CapacidadeCivils->find('list', ['limit' => 200]);
        $estadoCivils = $this->Clientes->EstadoCivils->find('list', ['limit' => 200]);
        $users = $this->Clientes->Users->find('list', ['limit' => 200]);
        $profissaos = $this->Clientes->Profissaos->find('list', ['limit' => 200]);
        $sexos = $this->Clientes->Sexos->find('list', ['limit' => 200]);
        $unidades = $this->Clientes->Unidades->find('list', ['limit' => 200]);
        $empresas = $this->Clientes->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('cliente', 'tipoClientes', 'capacidadeCivils', 'estadoCivils', 'users', 'profissaos', 'sexos', 'unidades', 'empresas'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Cliente'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Cliente'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
