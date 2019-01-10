<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sexos Controller
 *
 * @property \App\Model\Table\SexosTable $Sexos
 *
 * @method \App\Model\Entity\Sexo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SexosController extends AppController
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
        $sexos = $this->paginate($this->Sexos);

        $this->set(compact('sexos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sexo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sexo = $this->Sexos->get($id, [
            'contain' => ['Empresas', 'Clientes']
        ]);

        $this->set('sexo', $sexo);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sexo = $this->Sexos->newEntity();
        if ($this->request->is('post')) {
            $sexo = $this->Sexos->patchEntity($sexo, $this->request->data);
            if ($this->Sexos->save($sexo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Sexo'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Sexo'));
            }
        }
        $empresas = $this->Sexos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('sexo', 'empresas'));
        $this->set('_serialize', ['sexo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sexo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sexo = $this->Sexos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sexo = $this->Sexos->patchEntity($sexo, $this->request->data);
            if ($this->Sexos->save($sexo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Sexo'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Sexo'));
            }
        }
        $empresas = $this->Sexos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('sexo', 'empresas'));
        $this->set('_serialize', ['sexo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sexo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sexo = $this->Sexos->get($id);
        if ($this->Sexos->delete($sexo)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Sexo'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Sexo'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
