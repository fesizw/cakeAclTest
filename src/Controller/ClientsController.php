<?php

namespace App\Controller;

use App\Controller\AppController;

class ClientsController extends AppController {

    public function index() {
        $clients = $this->Clients->find('all')->contain([
            'Users',
            'Filials',
                //  'Companys'
        ]);
        $this->set('clients', $clients);
    }

    public function add() {
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The {0} has been saved.', 'Client'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Client'));
            }
        }
        $filials = $this->Clients->Filials->find('list', ['limit' => 200]);
        $users = $this->Clients->Users->find('list', ['limit' => 200]);
        $this->set(compact('client', 'filials', 'users'));
    }

}
