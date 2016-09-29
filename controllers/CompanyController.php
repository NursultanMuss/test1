<?php
include_once ROOT. '/models/Company.php';
class CompanyController
{


	public function actionIndex()
	{
		$companyPages= array();
		$companyPages= Company::getCompanyPages();
		require_once(ROOT.'/views/company/index.php');
		return true;
	}


}