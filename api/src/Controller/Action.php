<?php
namespace src\Controller;


use src\Library\Helper;

class Action extends Controller
{
   public function createAction(){
       //create new action
   }

   public function joinAction(){
       //user join action
   }

   public function  leaveAction(){
       $leaveAction = $this->repository('Action')->leaveActionById($this->args['id']);
       $response = [
           'leave' => $leaveAction,
       ];
       return $this->render($response);

       //user leave action
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