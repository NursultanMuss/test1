<?php
/**
 * Created by PhpStorm.
 * User: йойо
 * Date: 09.10.2016
 * Time: 12:05
 */
class AdminProjectsController extends AdminBase
{
    /**
     * Action для страницы "Управление проектами"
     */
    public function actionIndex()
    {
        //Access control
        self::checkAdmin();

        //Get projects list
        $projectsList = Projects::getProjectsPage();

        //Turn on view
        require_once(ROOT . '/views/admin_projects/index.php');
        return true;
    }

    public function actionCreate()
    {
        self::checkAdmin();

        //Form processing
        if (isset($_POST['submit'])) {
            //If form sent
            //Get data from form
            $options['image'] = $_POST['image'];
            $options['descrition'] = $_POST['descrition'];
            $options['link'] = $_POST['link'];
        }
        $errors = false;

        // При необходимости можно валидировать значения нужным образом
        if (!isset($options['image']) || empty($options['image'])) {
            $errors[] = 'Заполните поля';
        }

        if ($errors == false) {
            // Если ошибок нет
            // Добавляем новый project
            $id = Projects::createProject($options);

            // Если запись добавлена
            if ($id) {
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                }
            };

            // Перенаправляем пользователя на страницу управлениями projects
            header("Location: /admin/projects");
        }
    }
}