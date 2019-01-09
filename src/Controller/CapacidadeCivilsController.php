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
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $capacidadeCivil = $this->CapacidadeCivils->newEntity();
        if ($this->request->is('post')) {
            $capacidadeCivil = $this->CapacidadeCivils->patchEntity($capacidadeCivil, $this->request->getData());
            if ($this->CapacidadeCivils->save($capacidadeCivil)) {
                $this->Flash->success(__('The capacidade civil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The capacidade civil could not be saved. Please, try again.'));
        }
        $empresas = $this->CapacidadeCivils->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('capacidadeCivil', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Capacidade Civil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $capacidadeCivil = $this->CapacidadeCivils->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $capacidadeCivil = $this->CapacidadeCivils->patchEntity($capacidadeCivil, $this->request->getData());
            if ($this->CapacidadeCivils->save($capacidadeCivil)) {
                $this->Flash->success(__('The capacidade civil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The capacidade civil could not be saved. Please, try again.'));
        }
        $empresas = $this->CapacidadeCivils->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('capacidadeCivil', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Capacidade Civil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $capacidadeCivil = $this->CapacidadeCivils->get($id);
        if ($this->CapacidadeCivils->delete($capacidadeCivil)) {
            $this->Flash->success(__('The capacidade civil has been deleted.'));
        } else {
            $this->Flash->error(__('The capacidade civil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
