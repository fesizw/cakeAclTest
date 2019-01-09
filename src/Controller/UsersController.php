<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController;

/**
 * Description of UsersController
 *
 * @author fesizw
 */
class UsersController extends AppController {

    public function index() {
        $this->paginate = ['contain' => ['Groups']];
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function view($id = null) {
        $user = $this->Users->get($id, ['contain' => ['Groups', 'Posts']]);
        $this->set('user', $user);
    }

    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->request->getData();
            debug($user);


//            if ($this->Users->save($user)) {
//                $this->Flash->success(__('The user has been saved'));
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could be deleted. Please, try.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function edit($id = null) {
        $user = $this->Users->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Users->success(__('The user has been saved.'));
                return $this->redirect(['adction' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
    }

}
