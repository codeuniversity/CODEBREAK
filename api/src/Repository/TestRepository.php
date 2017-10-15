<?php
namespace src\Repository;

use Respect\Validation\Rules\Date;
use src\Library\Repository;

class TestRepository extends Repository {
    /**
     * Retrieves all projects
     * @return list of projects
     */
    public function getProjects(){
        $statement = $this->DB->prepare("SELECT p.id, p.status, p.displayName, p.note, p.plan, p.rate, p.fastbillProjectId FROM projects p JOIN user u ON p.userid = u.id WHERE u.active = 1");
        $statement->execute();
        $projects = $statement->fetchAll();
        return $projects;
    }

    /**
     * Retrieves all projects by specified id
     * @param $projectId
     * @return project as array
     */
    public function getProjectById($projectId){
        $statement = $this->DB->prepare('SELECT * FROM projects WHERE id = :projectId');
        $statement->execute([':projectId'=>$projectId]);
        $project = $statement->fetch();
        return $project;
    }

}