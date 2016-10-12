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
            $options['description'] = $_POST['description'];
            $options['link'] = $_POST['link'];

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
                    if (is_uploaded_file($_FILES["imageSource"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["imageSource"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/".$options['image']);
                    }
                }

                // Перенаправляем пользователя на страницу управлениями projects
                header("Location: /admin/projects");
            }
        }
            //Get view of the page
            require_once(ROOT . '/views/admin_projects/create.php');
            return true;
        }

    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Projects::deleteProjectById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/projects");
        }
        if(isset($_POST['not'])){
         header("Location: /admin/projects");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_projects/delete.php');
        return true;
    }

    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном проекте
        $project = Projects::getProjectById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['image'] = $_POST['image'];
            $options['description'] = $_POST['description'];
            $options['link'] = $_POST['link'];

            // Сохраняем изменения
            if (Projects::updateProjectById($id, $options)) {


                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["imageSource"]["tmp_name"])) {

                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["imageSource"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/".$project['image']);
               }
            }

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/projects");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_projects/update.php');
        return true;
    }

}