<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Unidades Controller
 *
 * @property \App\Model\Table\UnidadesTable $Unidades
 *
 * @method \App\Model\Entity\Unidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnidadesController extends AppController
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
        $unidades = $this->paginate($this->Unidades);

        $this->set(compact('unidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidade = $this->Unidades->get($id, [
            'contain' => ['Empresas', 'Clientes', 'Users']
        ]);

        $this->set('unidade', $unidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidade = $this->Unidades->newEntity();
        if ($this->request->is('post')) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->data);
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('The {0} has been saved.', 'Unidade'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Unidade'));
            }
        }
        $empresas = $this->Unidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'empresas'));
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidade = $this->Unidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->data);
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('The {0} has been saved.', 'Unidade'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Unidade'));
            }
        }
        $empresas = $this->Unidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'empresas'));
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidade = $this->Unidades->get($id);
        if ($this->Unidades->delete($unidade)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Unidade'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Unidade'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
