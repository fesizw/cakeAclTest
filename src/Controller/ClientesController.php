<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TipoClientes', 'CapacidadeCivils', 'EstadoCivils', 'Usuarios', 'Profissãos', 'Sexos', 'Unidades', 'Empresas']
        ];
        $clientes = $this->paginate($this->Clientes);

        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['TipoClientes', 'CapacidadeCivils', 'EstadoCivils', 'Usuarios', 'Profissãos', 'Sexos', 'Unidades', 'Empresas']
        ]);

        $this->set('cliente', $cliente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
        }
        $tipoClientes = $this->Clientes->TipoClientes->find('list', ['limit' => 200]);
        $capacidadeCivils = $this->Clientes->CapacidadeCivils->find('list', ['limit' => 200]);
        $estadoCivils = $this->Clientes->EstadoCivils->find('list', ['limit' => 200]);
        $usuarios = $this->Clientes->Usuarios->find('list', ['limit' => 200]);
        $profissãos = $this->Clientes->Profissãos->find('list', ['limit' => 200]);
        $sexos = $this->Clientes->Sexos->find('list', ['limit' => 200]);
        $unidades = $this->Clientes->Unidades->find('list', ['limit' => 200]);
        $empresas = $this->Clientes->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('cliente', 'tipoClientes', 'capacidadeCivils', 'estadoCivils', 'usuarios', 'profissãos', 'sexos', 'unidades', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
        }
        $tipoClientes = $this->Clientes->TipoClientes->find('list', ['limit' => 200]);
        $capacidadeCivils = $this->Clientes->CapacidadeCivils->find('list', ['limit' => 200]);
        $estadoCivils = $this->Clientes->EstadoCivils->find('list', ['limit' => 200]);
        $usuarios = $this->Clientes->Usuarios->find('list', ['limit' => 200]);
        $profissãos = $this->Clientes->Profissãos->find('list', ['limit' => 200]);
        $sexos = $this->Clientes->Sexos->find('list', ['limit' => 200]);
        $unidades = $this->Clientes->Unidades->find('list', ['limit' => 200]);
        $empresas = $this->Clientes->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('cliente', 'tipoClientes', 'capacidadeCivils', 'estadoCivils', 'usuarios', 'profissãos', 'sexos', 'unidades', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('The cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
