<?php

class Site
{
    public static function getSitePages(){
        $db=DB::getConnection();
        $sitePages= array();

        $result= $db->querry('SELECT id, section_background, page_logo, slide_text, google, yandex, superman FROM mainpage ORDER BY id ASC');

        $i= 0;
        while ($row = $result->fetch()){
            $sitePages[$i]['id']= $row ['id'];
            $sitePages[$i]['section_background']= $row ['section_background'];
            $sitePages[$i]['page_logo']= $row ['page_logo'];
            $sitePages[$i]['slide_text']= $row ['slide_text'];
            $sitePages[$i]['google']=$row ['google'];
            $sitePages[$i]['yandex']=$row ['yandex'];
            $sitePages[$i]['superman']=$row ['superman'];
            $i++;
        }
        return $sitePages;
    }
}