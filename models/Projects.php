<?php
include_once (ROOT."/components/Db.php");
class Projects
{
    /**
     * Возвращает список товаров
     * @return array <p>Массив с товарами</p>
     */
    public static function getProjectsPage()
    {
        $db = DB::getConnection();
        $projectsPage = array();

        $result = $db->query('SELECT id, image, description, link FROM projects ORDER BY id ASC');
        $i = 0;
        while ($row = $result->fetch()) {
            $projectsPage[$i]['id'] = $row ['id'];
            $projectsPage[$i]['image'] = $row ['image'];
            $projectsPage[$i]['description'] = $row ['description'];
            $projectsPage[$i]['link'] = $row ['link'];
            $i++;
        }
        return $projectsPage;
    }

    public static function getProjectById($id){
        $db=DB::getConnection();
        $sql='SELECT * FROM projects WHERE id =:id';

        $result=$db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }


    /**
     * Добавляет новый товар
     * @param array $options <p>Массив с информацией о товаре</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */

    public static function createProject($options){
        $db=DB::getConnection();

        $sql='INSERT INTO projects '
            . '(image, description, link)'
            .'VALUES '
            . '(:image, :description, :link)';
        $result = $db->prepare($sql);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':link', $options['link'], PDO::PARAM_STR);
        if($result->execute()){
            return $db->lastInsertId();
        }
        return 0;

    }
    /**
     * Удаляет проект с указанным id
     * @param integer $id <p>id проекта</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteProjectById($id){
        $db=DB::getConnection();

        $sql='DELETE FROM projects WHERE id = :id';

        $result = $db ->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирует товар с заданным id
     * @param integer $id <p>id товара</p>
     * @param array $options <p>Массив с информацей о товаре</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateProjectById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE projects
            SET
                image = :image, 
                description = :description, 
                link = :link 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':link', $options['link'], PDO::PARAM_STR);
        return $result->execute();
    }
    
    public static function getImage($id){
        $noImage='no-image.jpg';
        $imageName=self::getProjectById($id);
        $path="/template/images/";

        $pathToProjectImage= $path.$imageName['image'];

        if(file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProjectImage)){
            return $pathToProjectImage;
        }
        
        return $path.$noImage;
    }
    

}