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
}