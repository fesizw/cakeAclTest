<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profissaos Controller
 *
 * @property \App\Model\Table\ProfissaosTable $Profissaos
 *
 * @method \App\Model\Entity\Profissao[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfissaosController extends AppController
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
        $profissaos = $this->paginate($this->Profissaos);

        $this->set(compact('profissaos'));
    }

    /**
     * View method
     *
     * @param string|null $id Profissao id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profissao = $this->Profissaos->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('profissao', $profissao);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profissao = $this->Profissaos->newEntity();
        if ($this->request->is('post')) {
            $profissao = $this->Profissaos->patchEntity($profissao, $this->request->data);
            if ($this->Profissaos->save($profissao)) {
                $this->Flash->success(__('The {0} has been saved.', 'Profissao'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Profissao'));
            }
        }
        $empresas = $this->Profissaos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('profissao', 'empresas'));
        $this->set('_serialize', ['profissao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Profissao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profissao = $this->Profissaos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profissao = $this->Profissaos->patchEntity($profissao, $this->request->data);
            if ($this->Profissaos->save($profissao)) {
                $this->Flash->success(__('The {0} has been saved.', 'Profissao'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Profissao'));
            }
        }
        $empresas = $this->Profissaos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('profissao', 'empresas'));
        $this->set('_serialize', ['profissao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profissao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profissao = $this->Profissaos->get($id);
        if ($this->Profissaos->delete($profissao)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Profissao'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Profissao'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
