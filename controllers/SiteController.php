<?php
include_once ROOT. '/models/Site.php';
class SiteController
{


		public function actionIndex()
		{
			$sitePages= array();
			$sitePages= Site::getSitePages();
			require_once(ROOT. '/views/site/index.php');
			return true;
		}


}