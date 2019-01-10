<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emails Controller
 *
 * @property \App\Model\Table\EmailsTable $Emails
 *
 * @method \App\Model\Entity\Email[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes', 'Users', 'Empresas']
        ];
        $emails = $this->paginate($this->Emails);

        $this->set(compact('emails'));
    }

    /**
     * View method
     *
     * @param string|null $id Email id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $email = $this->Emails->get($id, [
            'contain' => ['Clientes', 'Users', 'Empresas']
        ]);

        $this->set('email', $email);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $email = $this->Emails->newEntity();
        if ($this->request->is('post')) {
            $email = $this->Emails->patchEntity($email, $this->request->data);
            if ($this->Emails->save($email)) {
                $this->Flash->success(__('The {0} has been saved.', 'Email'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Email'));
            }
        }
        $clientes = $this->Emails->Clientes->find('list', ['limit' => 200]);
        $users = $this->Emails->Users->find('list', ['limit' => 200]);
        $empresas = $this->Emails->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('email', 'clientes', 'users', 'empresas'));
        $this->set('_serialize', ['email']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Email id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $email = $this->Emails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $email = $this->Emails->patchEntity($email, $this->request->data);
            if ($this->Emails->save($email)) {
                $this->Flash->success(__('The {0} has been saved.', 'Email'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Email'));
            }
        }
        $clientes = $this->Emails->Clientes->find('list', ['limit' => 200]);
        $users = $this->Emails->Users->find('list', ['limit' => 200]);
        $empresas = $this->Emails->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('email', 'clientes', 'users', 'empresas'));
        $this->set('_serialize', ['email']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Email id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $email = $this->Emails->get($id);
        if ($this->Emails->delete($email)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Email'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Email'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
