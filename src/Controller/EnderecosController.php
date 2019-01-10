<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enderecos Controller
 *
 * @property \App\Model\Table\EnderecosTable $Enderecos
 *
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnderecosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TipoEnderecos', 'Clientes', 'Users', 'Empresas']
        ];
        $enderecos = $this->paginate($this->Enderecos);

        $this->set(compact('enderecos'));
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => ['TipoEnderecos', 'Clientes', 'Users', 'Empresas']
        ]);

        $this->set('endereco', $endereco);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Enderecos->newEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->data);
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The {0} has been saved.', 'Endereco'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Endereco'));
            }
        }
        $tipoEnderecos = $this->Enderecos->TipoEnderecos->find('list', ['limit' => 200]);
        $clientes = $this->Enderecos->Clientes->find('list', ['limit' => 200]);
        $users = $this->Enderecos->Users->find('list', ['limit' => 200]);
        $empresas = $this->Enderecos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'tipoEnderecos', 'clientes', 'users', 'empresas'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->data);
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The {0} has been saved.', 'Endereco'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Endereco'));
            }
        }
        $tipoEnderecos = $this->Enderecos->TipoEnderecos->find('list', ['limit' => 200]);
        $clientes = $this->Enderecos->Clientes->find('list', ['limit' => 200]);
        $users = $this->Enderecos->Users->find('list', ['limit' => 200]);
        $empresas = $this->Enderecos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'tipoEnderecos', 'clientes', 'users', 'empresas'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Enderecos->get($id);
        if ($this->Enderecos->delete($endereco)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Endereco'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Endereco'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
