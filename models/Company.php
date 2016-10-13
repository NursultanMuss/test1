<?php
include_once (ROOT."/components/Db.php");

class Company
{
    public static function getCompanyPages(){
        $db=DB::getConnection();
        $companyPages= array();

        $result= $db->query('SELECT id, pageImage, pageText, superhero, bottom FROM company ORDER BY id ASC');

        $i= 0;
        while ($row = $result->fetch()){
            $companyPages[$i]['id']= $row ['id'];
            $companyPages[$i]['pageImage']= $row ['pageImage'];
            $companyPages[$i]['pageText']= $row ['pageText'];
            $companyPages[$i]['superhero']= $row ['superhero'];
            $companyPages[$i]['bottom']=$row ['bottom'];
            $i++;
        }
        return $companyPages;
    }
}