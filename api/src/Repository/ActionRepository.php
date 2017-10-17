<?php
namespace src\Repository;

use Respect\Validation\Rules\Date;
use src\Library\Repository;

class ActionRepository extends Repository {

    public function leaveActionById($id){
        $statement = $this->DB->prepare('DELETE FROM action WHERE id = :id');
        $statement->execute([':id'=>$id]);
        return true;
    }

    public function deleteActionById($id){
        $statement = $this->DB->prepare('DELETE FROM action WHERE id = :id');
        $statement->execute([':id'=>$id]);
        return true;
    }

    public function getActions(){
        $statement = $this->DB->prepare("SELECT * FROM action WHERE closingTime >= CURRENT_TIME AND closingDate >= CURRENT_DATE;");
        $statement->execute();
        $actions = $statement->fetchAll();
        return $actions;
    }
    public function createAction($name, $type, $closingTime, $closingDate, $maxPeople, $comment, $paymenLink, $restId){
        $statement = $this->DB->prepare("INSERT INTO action (name, type, closingTime, closingDate, maxPeople, comment, paymentLink, restId)VALUES (:name, :type, :closingTime, :closingDate, :maxPeople, :comment, :paymentLink, :restId);");
        $statement->execute([':name'=>$name, ':type'=>$type, ':closingTime'=>$closingTime, ':closingDate'=>$closingDate, ':maxPeople'=>$maxPeople, ':comment'=>$comment, ':paymentLink'=>$paymenLink, ':restId'=>$restId]);

        return true;

    }
}