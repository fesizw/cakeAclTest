<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoEnderecos Controller
 *
 * @property \App\Model\Table\TipoEnderecosTable $TipoEnderecos
 *
 * @method \App\Model\Entity\TipoEndereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoEnderecosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tipoEnderecos = $this->paginate($this->TipoEnderecos);

        $this->set(compact('tipoEnderecos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Endereco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoEndereco = $this->TipoEnderecos->get($id, [
            'contain' => ['Enderecos']
        ]);

        $this->set('tipoEndereco', $tipoEndereco);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoEndereco = $this->TipoEnderecos->newEntity();
        if ($this->request->is('post')) {
            $tipoEndereco = $this->TipoEnderecos->patchEntity($tipoEndereco, $this->request->data);
            if ($this->TipoEnderecos->save($tipoEndereco)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tipo Endereco'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tipo Endereco'));
            }
        }
        $this->set(compact('tipoEndereco'));
        $this->set('_serialize', ['tipoEndereco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Endereco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoEndereco = $this->TipoEnderecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoEndereco = $this->TipoEnderecos->patchEntity($tipoEndereco, $this->request->data);
            if ($this->TipoEnderecos->save($tipoEndereco)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tipo Endereco'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tipo Endereco'));
            }
        }
        $this->set(compact('tipoEndereco'));
        $this->set('_serialize', ['tipoEndereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Endereco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoEndereco = $this->TipoEnderecos->get($id);
        if ($this->TipoEnderecos->delete($tipoEndereco)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Tipo Endereco'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Tipo Endereco'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
