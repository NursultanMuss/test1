<?php
include_once ROOT. '/models/Site.php';
class SiteController
{


		public function actionIndex()
		{
			$sitePages= array();
			$sitePages= Site::getSitePages();
			require_once(ROOT. '/views/site/contacts.php');
			return true;
		}

		public function actionContacts(){
		    $userName = '';
		    $userEmail = '';
            $phoneNumber = '';
            $result = false;

            if (isset($_POST['submit'])) {

                $userName = $_POST['userName'];
                $userEmail = $_POST['userEmail'];
                $phoneNumber= $_POST['phoneNumber'];

                $errors = false;

                // Валидация полей
                if (!User::checkEmail($userEmail)) {
                    $errors[] = 'Неправильный email';
                }

                if ($errors == false) {
                    $adminEmail = 'nursalga@gmail.com';
                    $message = "Текст:  От {$userName} {$userEmail}. Номер {$phoneNumber}";
                    $subject = 'Заявка';
                    $result = mail($adminEmail, $subject, $message);
                    $result = true;
                }

            }

            require_once(ROOT . '/views/site/contacts.php');

            return true;
        }



}