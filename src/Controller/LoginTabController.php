<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * LoginTab Controller
 *
 * @property \App\Model\Table\LoginTabTable $LoginTab
 *
 * @method \App\Model\Entity\LoginTab[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginTabController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    private function customSelect($id = null) {
        if ($id === null) {
            return $this->LoginTab->find()->select([
                        'LoginTab.cod_autorizador',
                        'LoginTab.nome_autorizador',
                        'LoginTab.senha_autorizador',
                        'LoginTab.online',
                        'LoginTab.Usuários',
                        'LoginTab.formulario',
                        'LoginTab.Alterar',
                        'LoginTab.Relatorio',
                        'LoginTab.Setor',
                        'LoginTab.Apagar',
                        'LoginTab.Funcionario',
                        'LoginTab.Honorario',
                        'LoginTab.ContatoInicial',
                        'LoginTab.Supervisao',
                        'LoginTab.ContaCorrente',
                        'LoginTab.Situacao',
                        'LoginTab.unidade',
                        'LoginTab.ConfCOnt',
                        'LoginTab.Unid',
                        'LoginTab.Distrib',
                        'LoginTab.GestJur',
                        'LoginTab.Recep',
                        'LoginTab.GerencFinanc',
                        'LoginTab.GerenciaJur',
                        'LoginTab.GerencAdm',
                        'LoginTab.GerencRecep',
                        'LoginTab.GT',
                        'LoginTab.Autoriza',
                        'LoginTab.PedirValor',
                        'LoginTab.Profissao',
                        'LoginTab.SupervSetor',
                        'LoginTab.Prazos',
                        'LoginTab.JPA',
                        'LoginTab.ADV',
                        'LoginTab.DCC',
                        'LoginTab.JPJEstag',
                        'LoginTab.codquadpessoal',
                        'LoginTab.homolog',
                        'LoginTab.isAtSimultaneo',
            ]);
        } else {
            return $this->paginate($this->LoginTab->find()->select([
                                'LoginTab.cod_autorizador',
                                'LoginTab.nome_autorizador',
                                'LoginTab.senha_autorizador',
                                'LoginTab.online',
                                'LoginTab.Usuários',
                                'LoginTab.formulario',
                                'LoginTab.Alterar',
                                'LoginTab.Relatorio',
                                'LoginTab.Setor',
                                'LoginTab.Apagar',
                                'LoginTab.Funcionario',
                                'LoginTab.Honorario',
                                'LoginTab.ContatoInicial',
                                'LoginTab.Supervisao',
                                'LoginTab.ContaCorrente',
                                'LoginTab.Situacao',
                                'LoginTab.unidade',
                                'LoginTab.ConfCOnt',
                                'LoginTab.Unid',
                                'LoginTab.Distrib',
                                'LoginTab.GestJur',
                                'LoginTab.Recep',
                                'LoginTab.GerencFinanc',
                                'LoginTab.GerenciaJur',
                                'LoginTab.GerencAdm',
                                'LoginTab.GerencRecep',
                                'LoginTab.GT',
                                'LoginTab.Autoriza',
                                'LoginTab.PedirValor',
                                'LoginTab.Profissao',
                                'LoginTab.SupervSetor',
                                'LoginTab.Prazos',
                                'LoginTab.JPA',
                                'LoginTab.ADV',
                                'LoginTab.DCC',
                                'LoginTab.JPJEstag',
                                'LoginTab.codquadpessoal',
                                'LoginTab.homolog',
                                'LoginTab.isAtSimultaneo',
                            ])->where(['LoginTab.cod_autorizador' => $id]));
        }
    }

    public function index() {
        // $loginTab = $this->LoginTab->find
        $loginTab = $this->customSelect();
        // $this->set(compact('loginTab'));

        $this->set(compact('loginTab'));
        $this->set('_serialize', ['loginTab']);
    }

    public function view($id = null) {

        $loginTab = $this->customSelect($id);
        $this->set(compact('loginTab'));
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $loginTab = $this->LoginTab->newEntity();
        if ($this->request->is('post')) {
            $loginTab = $this->LoginTab->patchEntity($loginTab, $this->request->getData());
            if ($this->LoginTab->save($loginTab)) {
                $this->Flash->success(__('The {0} has been saved.', 'Login Tab'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Login Tab'));
            }
        }
        $this->set(compact('loginTab'));
        $this->set('_serialize', ['loginTab']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Login Tab id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $loginTab = $this->customSelect($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            foreach ($loginTab as $loginTab) {
                $login = $loginTab;
            }
            $loginTab = $this->LoginTab->patchEntity($login, $this->request->getData());
            if ($this->LoginTab->save($loginTab)) {
                $this->Flash->success(__('The {0} has been saved.', 'Login Tab'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Login Tab'));
            }
        }
        $this->set(compact('loginTab'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Login Tab id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        // $this->request->allowMethod(['post', 'delete']);
        // $loginTab = $this->LoginTab->get($id);
        // if ($this->LoginTab->delete($loginTab)) {
        // 	$this->Flash->success(__('The {0} has been deleted.', 'Login Tab'));
        // } else {
        // 	$this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Login Tab'));
        // }
        // return $this->redirect(['action' => 'index']);
    }

}
