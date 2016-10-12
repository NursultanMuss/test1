<?php

/**
 * Контроллер AdminController
 * Главная страница в админпанели
 */
class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
   /* public function actionProjects()
    {
        //Access control
        self::checkAdmin();

        //Get projects list
        $projectsList = Projects::getProjectsPage();

        //Turn on view
        require_once(ROOT . '/views/admin_projects/index.php');
        return true;
    }*/

}
