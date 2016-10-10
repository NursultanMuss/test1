<?php
/**
 * Класс Router
 * Компонент для работы с маршрутами
 */
class Router
{
	/**
	 * Свойство для хранения массива роутов
	 * @var array
	 */
	private $routes;
	/**
	 * Конструктор
	 */
	public function __construct()
	{
		// Путь к файлу с роутами
		$routesPath = ROOT.'/config/routes.php';
		// Получаем роуты из файла
		$this->routes = include($routesPath);
	}

// Return type

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		$uri = $this->getURI();
		//	echo $uri .'</br>';

		foreach ($this->routes as $uriPattern => $path) {

			if(preg_match("~$uriPattern~", $uri)) {
			//echo $path;

				// Получаем внутренний путь из внешнего согласно правилу.

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

/*				echo '<br>Нужно сформулировать: '.$internalRoute.'<br>'; */

				$segments = explode('/', $internalRoute);
//				echo "<pre>";
//					print_r($segments)	;
//				echo "</pre>".'</br>';

				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);
//					echo $controllerName .'</br>';
//					echo array_shift($segments);
				$actionName = 'action'.ucfirst(array_shift($segments));

				$parameters = $segments;


				$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				$controllerObject = new $controllerName;
				/*$result = $controllerObject->$actionName($parameters); - OLD VERSION */
				/*$result = call_user_func(array($controllerObject, $actionName), $parameters);*/
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				
				if ($result != null) {
					break;
				}
			}

		}
	}
}