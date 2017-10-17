<?php
namespace src\Repository;

use Respect\Validation\Rules\Date;
use src\Library\Repository;

class ActionRepository extends Repository {

    public function getActions(){
        $statement = $this->DB->prepare("SELECT * FROM action WHERE closingTime >= CURRENT_TIME AND closingDate >= CURRENT_DATE;");
        $statement->execute();
        $actions = $statement->fetchAll();
        return $actions;
    }
}