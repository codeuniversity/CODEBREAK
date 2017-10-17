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
   }

   public function joinAction(){
       //user join action
   }

   public function  leaveAction(){
       //user leave action
   }

   public function deleteAction(){
       //delete Action
   }
}