<?php
namespace src\Repository;

use Respect\Validation\Rules\Date;
use src\Library\Repository;

class RestaurantRepository extends Repository {

    public function getRestaurants(){
        $statement = $this->DB->prepare("SELECT * FROM restaurant ORDER BY name ASC;");
        $statement->execute();
        $restaurants = $statement->fetchAll();
        return $restaurants;
    }

    public function getMealsById($restId){
        $statement = $this->DB->prepare('SELECT * FROM meal WHERE restId = :restId');
        $statement->execute([':restId'=>$restId]);
        $meals = $statement->fetchAll();
        return $meals;
    }

}