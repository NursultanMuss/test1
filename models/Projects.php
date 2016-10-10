<?php

class Projects
{
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
    

}