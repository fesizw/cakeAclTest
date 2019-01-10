<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CapacidadeCivils Controller
 *
 * @property \App\Model\Table\CapacidadeCivilsTable $CapacidadeCivils
 *
 * @method \App\Model\Entity\CapacidadeCivil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CapacidadeCivilsController extends AppController
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
        $capacidadeCivils = $this->paginate($this->CapacidadeCivils);

        $this->set(compact('capacidadeCivils'));
    }

    /**
     * View method
     *
     * @param string|null $id Capacidade Civil id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $capacidadeCivil = $this->CapacidadeCivils->get($id, [
            'contain' => ['Empresas', 'Clientes']
        ]);

        $this->set('capacidadeCivil', $capacidadeCivil);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $capacidadeCivil = $this->CapacidadeCivils->newEntity();
        if ($this->request->is('post')) {
            $capacidadeCivil = $this->CapacidadeCivils->patchEntity($capacidadeCivil, $this->request->data);
            if ($this->CapacidadeCivils->save($capacidadeCivil)) {
                $this->Flash->success(__('The {0} has been saved.', 'Capacidade Civil'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Capacidade Civil'));
            }
        }
        $empresas = $this->CapacidadeCivils->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('capacidadeCivil', 'empresas'));
        $this->set('_serialize', ['capacidadeCivil']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Capacidade Civil id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $capacidadeCivil = $this->CapacidadeCivils->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $capacidadeCivil = $this->CapacidadeCivils->patchEntity($capacidadeCivil, $this->request->data);
            if ($this->CapacidadeCivils->save($capacidadeCivil)) {
                $this->Flash->success(__('The {0} has been saved.', 'Capacidade Civil'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Capacidade Civil'));
            }
        }
        $empresas = $this->CapacidadeCivils->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('capacidadeCivil', 'empresas'));
        $this->set('_serialize', ['capacidadeCivil']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Capacidade Civil id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $capacidadeCivil = $this->CapacidadeCivils->get($id);
        if ($this->CapacidadeCivils->delete($capacidadeCivil)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Capacidade Civil'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Capacidade Civil'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
