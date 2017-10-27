<?php
namespace src\Controller;


use src\Library\Helper;

class Restaurant extends Controller
{
   public function listAction(){
       //list all restaurants
       $restaurants = $this->repository('Restaurant')->getRestaurants();
       $response = [
           'restaurant' => $restaurants
       ];
       return $this->render($response);
   }


   public function detailAction(){
       $restaurant = $this->repository('Restaurant')->getRestaurantById($this->args['id']);
       $response = [
           'restaurant' => $restaurant
       ];
       return $this->render($response);
   }

   public function  mealsAction(){
       //list all meals of a specifc restaurant
       $meals = $this->repository('Restaurant')->getMealsById($this->args['id']);
       $response = [
           'meals' => $meals
       ];
       return $this->render($response);
   }
}