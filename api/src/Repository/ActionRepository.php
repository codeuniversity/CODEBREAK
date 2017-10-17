<?php
namespace src\Repository;

use Respect\Validation\Rules\Date;
use src\Library\Repository;

class ActionRepository extends Repository {

    public function joinActionUserById($id){
        $statement = $this->DB->prepare('INSERT INTO actionUser WHERE id = :id');
        $statement->execute([':id'=>$id]);
    }

    public function leaveActionUserById($id){
        $statement = $this->DB->prepare('DELETE FROM actionUser WHERE id = :id');
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
}