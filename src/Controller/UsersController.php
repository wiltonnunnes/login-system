<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController {

  public function login() {
    if($this->request->is('post')) {
      $user = $this->Auth->identify();
      if($user) {
        $this->Auth->setUser(user);
        return $this->redirect($this->Auth->redirectUrl());
      }
      $this->Flash->error(__('Usuário ou senha ínvalido, tente novamente'));
    }
  }

  public function add() {
    $user = $this->Users->newEntity();
    if($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if($this->Users->save($user)) {
        $this->Flash->success(__('O usuário foi salvo.'));
        return $this->redirect(['action' => 'add']);
      }
      $this->Flash->error(__('Não é possível adicionar o usuário.'));
    }
    $this.set('user', $user);
  }
}