<?php

namespace App\Controller;

use App\Controller\AppController;

class CompanysController extends AppController {

    // public $paginate = ['limit' => 15];

    public function initialize() {
        parent::initialize();
    }

    public function index() {


        $companys = $this->Companys->find('all');
        // debug($companys);
        $this->set(compact('companys'));
        $this->set('_serialize', ['companys']);


        // $this->loadComponent('Paginator');
        // $search = $this->request->getData('search');
        // $sort = $this->request->getQuery('sort');
        // if (!empty($search) && empty($sort)) { // pesquisa normal
        //     // echo $search;
        //     $this->paginate = [
        //         'limit' => 15,
        //         'conditions' => [
        //             'companys.company_name LIKE ' => '%' . $search . '%',
        //         ]
        //     ];
        //     $this->set('companys', $this->paginate($this->Companys));
        //     $this->set('_serialize', ['companys']);
        // } else if (empty($search) && $sort == 'cpf') { // filtro CPF
        //     $this->paginate = [
        //         'limit' => 15,
        //         'conditions' => [
        //             'not' => ['OR' => ['companys.cpf IS' => null, 'companys.cpf' => '']]
        //         ]
        //     ];
        //     $this->set('companys', $this->paginate($this->Companys));
        //     $this->set('_serialize', ['companys']);
        // } else if (empty($search) && $sort == 'cnpj') { // filtro CPNJ
        //     $this->paginate = [
        //         'limit' => 15,
        //         'conditions' => [
        //             'not' => ['OR' => ['companys.cnpj IS' => null, 'companys.cnpj' => '']]
        //         ]
        //     ];
        //     $this->set('companys', $this->paginate($this->Companys));
        //     $this->set('_serialize', ['companys']);
        // } else if (!empty($search) && $sort == 'cnpj') { // pesquisa + Filtro CNPJ
        //     $this->paginate = [
        //         'limit' => 15,
        //         'conditions' => [
        //             'companys.company_name LIKE ' => '%' . $search . '%',
        //             'not' => ['OR' => ['companys.cnpj IS' => null, 'companys.cnpj' => '']]
        //         ]
        //     ];
        //     $this->set('companys', $this->paginate($this->Companys));
        //     $this->set('_serialize', ['companys']);
        // } else if (!empty($search) && $sort == 'cpf') { // pesquisa + filtro CPF
        //     $this->paginate = [
        //         'limit' => 15,
        //         'conditions' => [
        //             'companys.company_name LIKE ' => '%' . $search . '%',
        //             'not' => ['OR' => ['companys.cpf IS' => null, 'companys.cpf' => '']]
        //         ]
        //     ];
        //     $this->set('companys', $this->paginate($this->Companys));
        //     $this->set('_serialize', ['companys']);
        // } else { // sem pesquisa ou filtro
        //     $companys = $this->paginate($this->Companys);
        //     $this->set(compact('companys'));
        // }
    }

    public function add() {
        $company = $this->Companys->newEntity();
        if ($this->request->is('post')) {
            $company = $this->Companys->patchEntity($company, $this->request->getData());
            if ($this->Companys->save($company)) {
                $this->Flash->success(__('The {0} has been saved.', 'Company'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Company'));
            }
        }
        $this->set(compact('company'));
        $this->set('_serialize', ['company']);
    }

    public function edit($id = null) {
        $company = $this->Companys->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $company = $this->Companys->patchEntity($company, $this->request->getData());
            if ($this->Companys->save($company)) {
                $this->Flash->success(__('The {0} has been saved.', 'Company'));
                return $this->redirect(['controller' => 'Companys', 'action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Company'));
            }
        }

        $this->set(compact('company'));
        $this->set('_serialize', ['company']);
    }

    public function view($id = null) {
        $company = $this->Companys->get($id);
        $this->set(compact('company'));
        $this->set('_serialize', ['company']);
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $company = $this->Companys->get($id);
        if ($this->Companys->delete($company)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Company'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Company'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
