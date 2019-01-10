<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Grupos Controller
 *
 * @property \App\Model\Table\GruposTable $Grupos
 *
 * @method \App\Model\Entity\Grupo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GruposController extends AppController
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
        $grupos = $this->paginate($this->Grupos);

        $this->set(compact('grupos'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grupo = $this->Grupos->get($id, [
            'contain' => ['Empresas', 'Users']
        ]);

        $this->set('grupo', $grupo);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grupo = $this->Grupos->newEntity();
        if ($this->request->is('post')) {
            $grupo = $this->Grupos->patchEntity($grupo, $this->request->data);
            if ($this->Grupos->save($grupo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Grupo'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Grupo'));
            }
        }
        $empresas = $this->Grupos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('grupo', 'empresas'));
        $this->set('_serialize', ['grupo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grupo = $this->Grupos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grupo = $this->Grupos->patchEntity($grupo, $this->request->data);
            if ($this->Grupos->save($grupo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Grupo'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Grupo'));
            }
        }
        $empresas = $this->Grupos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('grupo', 'empresas'));
        $this->set('_serialize', ['grupo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grupo = $this->Grupos->get($id);
        if ($this->Grupos->delete($grupo)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Grupo'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Grupo'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
