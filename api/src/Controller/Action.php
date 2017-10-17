<?php
namespace src\Controller;


use src\Library\Helper;

class Action extends Controller
{
    public function listAction(){
        //list all actions
        $actions = $this->repository('Action')->getActions();
        $response = [
            'action' => $actions
        ];
        return $this->render($response);
    }
   public function createAction(){
       //create new action
       $params = $this->request->getParsedBody();
       $actions = $this->repository('Action')->createAction($params['name'], $params['type'], $params['closingTime'], $params['closingDate'], $params['type'], $params['maxPeople'], $params['comment'], $params['paymentLink'], $params['restId']);
       $response = [
           'sucess'=>true

       ];
       return $this->render($response);
   }

   public function joinAction(){
       //user join action
       $joinActionUser = $this->repository('Action')->joinActionUserById($this->args['id']);
       $response = [
           'join'=>$joinActionUser,
       ];
       return $this->render($response);
   }

   public function  leaveAction(){
       //user leave action
       $leaveActionUser = $this->repository('Action')->leaveActionUserById($this->args['id']);
       $response = [
           'leave' => $leaveActionUser,
       ];
       return $this->render($response);

   }

   public function deleteAction(){
       //delete Action
       $deleteAction = $this->repository('Action')->deleteActionById($this->args['id']);
       $response = [
           'delete' => $deleteAction,
       ];
       return $this->render($response);

   }
}