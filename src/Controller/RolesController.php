<?php

namespace App\Controller;

use App\Controller\AppController;

class RolesController extends AppController {

    public function index() {
        $roles = $this->Roles->find('all')->contain(['Filials']);
        $this->set('roles', $roles);
    }

    public function add($id = null) {
        $role = $this->Roles->newEntity();
        if ($this->request->is('post')) {
            $role = $this->Roles->patchEntity($role, $this->request->getData());
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('The {0} has been saved.', 'Role'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Role'));
            }
        } else {
            if (!empty($id)) {
                $filials = $this->Roles->Filials->find('list')->where(['company_id' => $id]);
            } else {
                $filials = $this->Roles->Filials->find('list');
            }
            $this->set(compact('role', 'filials'));
        }
    }

    public function view($id = null) {
        $role = $this->Roles->get($id, ['contain' => ['Filials']]);
        $this->set('role', $role);
    }

    public function edit($id = null) {
        $role = $this->Roles->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $role = $this->Roles->patchEntity($role, $this->request->getData());
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('The {0} has been saved.', 'Role'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Role'));
        }
        $filials = $this->Roles->Filials->find('list', ['limit' => 200]);
        $this->set(compact('role', 'filials'));
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $role = $this->Roles->get($id);
        if ($this->Roles->delete($role)) {
            $this->Flash->success(__('The {0}  has been deleted.', 'Role'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Role'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
