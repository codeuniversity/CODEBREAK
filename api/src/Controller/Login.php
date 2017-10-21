<?php
namespace src\Controller;

use src\Library\Helper;

class Login extends Controller {

   public function loginAction(){
       //check user login
       $params = $this->request->getParsedBody();
       $user = $this->repository('Login')->getLoginData($params['email']);
       if ($params['password']==$user['password'] ) {
           $response = [
               'user' => $user ['id']
           ];
       }
       else {
           $response = [
               'error' => 1
           ];
       }
       return $this->render($response);
   }

   public function forgetAction(){
       //send user forget link via mail
   }

   public function validateAction(){
       //check if user have permission to reset password
   }

   public function resetAction(){
       //set new password for user
   }
}