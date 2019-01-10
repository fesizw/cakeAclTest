<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Telefones Controller
 *
 * @property \App\Model\Table\TelefonesTable $Telefones
 *
 * @method \App\Model\Entity\Telefone[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TelefonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Clientes', 'Unidades', 'Empresas']
        ];
        $telefones = $this->paginate($this->Telefones);

        $this->set(compact('telefones'));
    }

    /**
     * View method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telefone = $this->Telefones->get($id, [
            'contain' => ['Users', 'Clientes', 'Unidades', 'Empresas']
        ]);

        $this->set('telefone', $telefone);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telefone = $this->Telefones->newEntity();
        if ($this->request->is('post')) {
            $telefone = $this->Telefones->patchEntity($telefone, $this->request->data);
            if ($this->Telefones->save($telefone)) {
                $this->Flash->success(__('The {0} has been saved.', 'Telefone'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Telefone'));
            }
        }
        $users = $this->Telefones->Users->find('list', ['limit' => 200]);
        $clientes = $this->Telefones->Clientes->find('list', ['limit' => 200]);
        $unidades = $this->Telefones->Unidades->find('list', ['limit' => 200]);
        $empresas = $this->Telefones->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('telefone', 'users', 'clientes', 'unidades', 'empresas'));
        $this->set('_serialize', ['telefone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telefone = $this->Telefones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefone = $this->Telefones->patchEntity($telefone, $this->request->data);
            if ($this->Telefones->save($telefone)) {
                $this->Flash->success(__('The {0} has been saved.', 'Telefone'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Telefone'));
            }
        }
        $users = $this->Telefones->Users->find('list', ['limit' => 200]);
        $clientes = $this->Telefones->Clientes->find('list', ['limit' => 200]);
        $unidades = $this->Telefones->Unidades->find('list', ['limit' => 200]);
        $empresas = $this->Telefones->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('telefone', 'users', 'clientes', 'unidades', 'empresas'));
        $this->set('_serialize', ['telefone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telefone = $this->Telefones->get($id);
        if ($this->Telefones->delete($telefone)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Telefone'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Telefone'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
