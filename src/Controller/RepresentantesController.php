<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Representantes Controller
 *
 * @property \App\Model\Table\RepresentantesTable $Representantes
 *
 * @method \App\Model\Entity\Representante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RepresentantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $representantes = $this->paginate($this->Representantes);

        $this->set(compact('representantes'));
    }

    /**
     * View method
     *
     * @param string|null $id Representante id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $representante = $this->Representantes->get($id, [
            'contain' => ['Clientes', 'Representantes']
        ]);

        $this->set('representante', $representante);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $representante = $this->Representantes->newEntity();
        if ($this->request->is('post')) {
            $representante = $this->Representantes->patchEntity($representante, $this->request->data);
            if ($this->Representantes->save($representante)) {
                $this->Flash->success(__('The {0} has been saved.', 'Representante'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Representante'));
            }
        }
        $clientes = $this->Representantes->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('representante', 'clientes'));
        $this->set('_serialize', ['representante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Representante id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $representante = $this->Representantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $representante = $this->Representantes->patchEntity($representante, $this->request->data);
            if ($this->Representantes->save($representante)) {
                $this->Flash->success(__('The {0} has been saved.', 'Representante'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Representante'));
            }
        }
        $clientes = $this->Representantes->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('representante', 'clientes'));
        $this->set('_serialize', ['representante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Representante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $representante = $this->Representantes->get($id);
        if ($this->Representantes->delete($representante)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Representante'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Representante'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
