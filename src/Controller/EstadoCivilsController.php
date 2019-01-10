<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstadoCivils Controller
 *
 * @property \App\Model\Table\EstadoCivilsTable $EstadoCivils
 *
 * @method \App\Model\Entity\EstadoCivil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstadoCivilsController extends AppController
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
        $estadoCivils = $this->paginate($this->EstadoCivils);

        $this->set(compact('estadoCivils'));
    }

    /**
     * View method
     *
     * @param string|null $id Estado Civil id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estadoCivil = $this->EstadoCivils->get($id, [
            'contain' => ['Empresas', 'Clientes']
        ]);

        $this->set('estadoCivil', $estadoCivil);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estadoCivil = $this->EstadoCivils->newEntity();
        if ($this->request->is('post')) {
            $estadoCivil = $this->EstadoCivils->patchEntity($estadoCivil, $this->request->data);
            if ($this->EstadoCivils->save($estadoCivil)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estado Civil'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estado Civil'));
            }
        }
        $empresas = $this->EstadoCivils->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('estadoCivil', 'empresas'));
        $this->set('_serialize', ['estadoCivil']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estado Civil id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estadoCivil = $this->EstadoCivils->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estadoCivil = $this->EstadoCivils->patchEntity($estadoCivil, $this->request->data);
            if ($this->EstadoCivils->save($estadoCivil)) {
                $this->Flash->success(__('The {0} has been saved.', 'Estado Civil'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Estado Civil'));
            }
        }
        $empresas = $this->EstadoCivils->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('estadoCivil', 'empresas'));
        $this->set('_serialize', ['estadoCivil']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estado Civil id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estadoCivil = $this->EstadoCivils->get($id);
        if ($this->EstadoCivils->delete($estadoCivil)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Estado Civil'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Estado Civil'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
