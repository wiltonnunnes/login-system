<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table {

  public function validation(Validator $validator) {
    return $validator->notEmpty('email', 'Email é necessário')->notEmpty('password', 'Senha é necessária');
  }
}