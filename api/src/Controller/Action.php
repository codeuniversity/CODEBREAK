<?php
namespace src\Controller;


use src\Library\Helper;

class Action extends Controller
{
    public function listAction(){
        //list all actions
        $actions = [
            '0' => [
                '1' => $actions = $this->repository('Action')->getActions(0, 1),
                '2' => $actions = $this->repository('Action')->getActions(0, 2),
                '3' => $actions = $this->repository('Action')->getActions(0, 3)
            ],
            '1' => [
                '1' => $actions = $this->repository('Action')->getActions(1, 1),
                '2' => $actions = $this->repository('Action')->getActions(1, 2),
                '3' => $actions = $this->repository('Action')->getActions(1, 3)
            ],
            '2' => [
                '1' => $actions = $this->repository('Action')->getActions(2, 1),
                '2' => $actions = $this->repository('Action')->getActions(2, 2),
                '3' => $actions = $this->repository('Action')->getActions(2, 3)
            ],
            '3' => [
                '1' => $actions = $this->repository('Action')->getActions(3, 1),
                '2' => $actions = $this->repository('Action')->getActions(3, 2),
                '3' => $actions = $this->repository('Action')->getActions(3, 3)
            ],
            '4' => [
                '1' => $actions = $this->repository('Action')->getActions(4, 1),
                '2' => $actions = $this->repository('Action')->getActions(4, 2),
                '3' => $actions = $this->repository('Action')->getActions(4, 3)
            ],
            '5' => [
                '1' => $actions = $this->repository('Action')->getActions(5, 1),
                '2' => $actions = $this->repository('Action')->getActions(5, 2),
                '3' => $actions = $this->repository('Action')->getActions(5, 3)
            ],
            '6' => [
                '1' => $actions = $this->repository('Action')->getActions(6, 1),
                '2' => $actions = $this->repository('Action')->getActions(6, 2),
                '3' => $actions = $this->repository('Action')->getActions(6, 3)
            ]
        ];
        $response = [
            'actions' => $actions
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

   public function leaveAction(){
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

    public function listUserAction(){
        //list all actions
        $actionUser = $this->repository('Action')->getActionUser($this->args['id']);
        $response = [
            'actionUser' => $actionUser
        ];
        return $this->render($response);
    }
}