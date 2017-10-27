<?php
namespace src\Repository;

use Respect\Validation\Rules\Date;
use src\Library\Repository;

class LoginRepository extends Repository {
    public function getLoginData($email){
        $statement = $this->DB->prepare("SELECT id, email, password FROM user WHERE email=:email;");
        $statement->execute([':email'=>$email]);
        $user = $statement->fetch();
        return $user;
    }
}