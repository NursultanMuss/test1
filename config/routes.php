<?php
return array(


    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
	//Управление проектами
	'admin/projects/create' => 'adminProjects/create',
	'admin/projects/update/([0-9]+)' => 'adminProjects/update/$1',
	'admin/projects/delete/([0-9]+)' => 'adminProjects/delete/$1',
	'admin/projects' => 'adminProjects/index',
    // Админпанель:
	'admin' => 'admin/index',
	'projects'=>'projects/index',
	'contacts'=>'site/contacts',
	'company'=>'company/index',
	'index.php'=> 'site/index',
	'' => 'site/index' // actionIndex & SiteController;


	);