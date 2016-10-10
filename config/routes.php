<?php
return array(

	'contacts'=>'site/contacts',
	'projects'=>'projects/index',
	'company'=>'company/index',
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
	'' => 'site/index' // actionIndex & SiteController;


	);