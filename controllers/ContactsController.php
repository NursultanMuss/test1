<?php
/**
 * Created by PhpStorm.
 * User: йойо
 * Date: 29.09.2016
 * Time: 19:24
 */

class ContactsController{
    public function actionIndex(){
        require_once ROOT . '/views/contacts/index.php';
        return true;
    }

}