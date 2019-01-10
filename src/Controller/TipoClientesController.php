<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoClientes Controller
 *
 * @property \App\Model\Table\TipoClientesTable $TipoClientes
 *
 * @method \App\Model\Entity\TipoCliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas']
        ];
        $tipoClientes = $this->paginate($this->TipoClientes);

        $this->set(compact('tipoClientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoCliente = $this->TipoClientes->get($id, [
            'contain' => ['Empresas', 'Clientes']
        ]);

        $this->set('tipoCliente', $tipoCliente);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoCliente = $this->TipoClientes->newEntity();
        if ($this->request->is('post')) {
            $tipoCliente = $this->TipoClientes->patchEntity($tipoCliente, $this->request->data);
            if ($this->TipoClientes->save($tipoCliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tipo Cliente'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tipo Cliente'));
            }
        }
        $empresas = $this->TipoClientes->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('tipoCliente', 'empresas'));
        $this->set('_serialize', ['tipoCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoCliente = $this->TipoClientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoCliente = $this->TipoClientes->patchEntity($tipoCliente, $this->request->data);
            if ($this->TipoClientes->save($tipoCliente)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tipo Cliente'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tipo Cliente'));
            }
        }
        $empresas = $this->TipoClientes->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('tipoCliente', 'empresas'));
        $this->set('_serialize', ['tipoCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoCliente = $this->TipoClientes->get($id);
        if ($this->TipoClientes->delete($tipoCliente)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Tipo Cliente'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Tipo Cliente'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
