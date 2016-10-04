<?php
/**
 * Created by PhpStorm.
 * User: йойо
 * Date: 29.09.2016
 * Time: 18:18
 */
include_once ROOT.'/models/Projects.php';

    class ProjectsController{

        public function actionIndex(){
            $projectsPage= array();
            $projectsPage=Projects::getProjectsPage();
            require_once ROOT.'/views/projects/contacts.php';
            return true;
        }
    }