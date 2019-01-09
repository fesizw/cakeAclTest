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
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profissao = $this->Profissaos->newEntity();
        if ($this->request->is('post')) {
            $profissao = $this->Profissaos->patchEntity($profissao, $this->request->getData());
            if ($this->Profissaos->save($profissao)) {
                $this->Flash->success(__('The profissao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profissao could not be saved. Please, try again.'));
        }
        $empresas = $this->Profissaos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('profissao', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profissao id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profissao = $this->Profissaos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profissao = $this->Profissaos->patchEntity($profissao, $this->request->getData());
            if ($this->Profissaos->save($profissao)) {
                $this->Flash->success(__('The profissao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profissao could not be saved. Please, try again.'));
        }
        $empresas = $this->Profissaos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('profissao', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profissao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profissao = $this->Profissaos->get($id);
        if ($this->Profissaos->delete($profissao)) {
            $this->Flash->success(__('The profissao has been deleted.'));
        } else {
            $this->Flash->error(__('The profissao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
