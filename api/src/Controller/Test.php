<?php
namespace src\Controller;


use src\Library\Helper;

class Test extends Controller {
    public function listAction(){

        $projects = $this->repository('Test')->getProjects();
        $response = [
            'type' => 1,
            'projects' => $projects
        ];
        return $this->render($response);
    }

    public function detailAction(){
        $project = $this->repository('Test')->getProjectById($this->args['projectId']);
        $response = [
            'project' => $project
        ];
        return $this->render($response);
    }
}
?>