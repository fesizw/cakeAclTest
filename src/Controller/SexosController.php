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
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sexo = $this->Sexos->newEntity();
        if ($this->request->is('post')) {
            $sexo = $this->Sexos->patchEntity($sexo, $this->request->getData());
            if ($this->Sexos->save($sexo)) {
                $this->Flash->success(__('The sexo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sexo could not be saved. Please, try again.'));
        }
        $empresas = $this->Sexos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('sexo', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sexo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sexo = $this->Sexos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sexo = $this->Sexos->patchEntity($sexo, $this->request->getData());
            if ($this->Sexos->save($sexo)) {
                $this->Flash->success(__('The sexo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sexo could not be saved. Please, try again.'));
        }
        $empresas = $this->Sexos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('sexo', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sexo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sexo = $this->Sexos->get($id);
        if ($this->Sexos->delete($sexo)) {
            $this->Flash->success(__('The sexo has been deleted.'));
        } else {
            $this->Flash->error(__('The sexo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
