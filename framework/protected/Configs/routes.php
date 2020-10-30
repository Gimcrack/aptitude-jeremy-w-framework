<?php


/*
*
* -------------------------------------------------------------
* ROUTE TO THE CORRECT PAGE BASED ON URL
* -------------------------------------------------------------
*
* NOTE:  This routes file will handle urls like site_url/page/action or site_url?page=page&action=action.
*
*/
	// Get the requested URL
	$request = $_SERVER['REQUEST_URI'];

	$camelizedAction = '';
	$underscored_action = '';

	// Scan the module directory for use below
	$module_dir = preg_grep('/^([^.])/', scandir(MODULES_DIR));
	// Set module variable to false
	$module = false;


	/*
	 * Check first for post variables which contain a page and action
	 */

// if the url has module then we are in the admin pages
if (isset (input()->module)) {
	$module = input()->module;

	// if the page is set, this is the controller otherwise load the main page controller
	if (isset (input()->page)) {
		$page = ucfirst(camelizeString(input()->page));
	} else {
		$page = $module;
	}

	// set the action for the controller
	if (isset (input()->action)) {
		$action = input()->action;
		$camelizedAction = camelizeString($action);
		$underscored_action = underscoreString($action);
	} else {
		$action = "index";
		$camelizedAction = camelizeString($action);
		$underscored_action = underscoreString($action);
	}

} elseif (isset (input()->page)) {
	$page = ucfirst(camelizeString(input()->page));

	// set the action for the controller
	if (isset (input()->action)) {
		$action = input()->action;
		$camelizedAction = camelizeString($action);
		$underscored_action = underscoreString($action);
	} else {
		$action = "index";
		$camelizedAction = camelizeString($action);
		$underscored_action = underscoreString($action);
	}

// these are public website pages 
} else {
	$query_string = explode('/', $request);

	// the first item in the string is the page controller
	// check if it is empty first
	if ($query_string[1] != null) {
		$page = ucfirst(camelizeString($query_string[1]));
	} else {
		$page = "Public";
	}	

	if (isset ($query_string[2])) {
		if (strstr($query_string[2], 'page_count')) {
			$action = "index";
			input()->page_count = substr($query_string[2], strpos($query_string[2], "=") + 1);
		} else {
			$action = $query_string[2];
			$camelizedAction = camelizeString($action);
			$underscored_action = underscoreString($action);
		}
	} else {
		$action = "index";
	}

	if (isset ($query_string[3])) {
		input()->id = $query_string[3];
	}

}

// Set page and action from the url
input()->page = $page;
input()->action = $action;


// load the app_routes.php file for any app specific route functionality
if ($module) {
 	foreach ($module_dir as $dir) {
		if (file_exists(MODULES_DIR . DS . $dir . DS . 'Controllers' . DS . $page.'Controller.php')) {
			include_once(MODULES_DIR . DS . $dir . DS . 'Controllers' . DS . $page.'Controller.php');
		}
	}
} elseif (file_exists (APP_PROTECTED_DIR . DS . 'Controllers' . DS . $page.'Controller.php')) {

 	include_once (APP_PROTECTED_DIR . DS . 'Controllers' . DS . $page.'Controller.php');
 	
} elseif (file_exists (MODULES_DIR . DS . $module . DS . 'Controllers' . DS . $page.'Controller.php')) {
	// Loop through the modules to look for the controller.
	include_once(MODULES_DIR . DS . $module . DS . 'Controllers' . DS . $page.'Controller.php');
} else { 
	include_once(APP_PROTECTED_DIR . DS . 'Controllers' . DS . 'PublicController.php');
	$className = 'PublicController';
	$action = lcfirst($page);
	$camelizedAction = lcfirst(camelizeString($page));
	$underscored_action = lcfirst(underscoreString($page)); 
	$page = 'Public';
}

$className = $page .'Controller';


// If the class exists, instantiate it and load the coorespondig view from the Views folder. Otherwise, load the
// error page.
if (class_exists($className)) {
	$controller = new $className;
	$controller->page = underscoreString($page);
	input()->page = $controller->page;

	// Check the camelized, underscored, and action variables for the method within the class
	if (method_exists($controller, $camelizedAction)) {
		$controller->action = $camelizedAction;
		input()->action = $camelizedAction;
		$controller->loadView();
	} elseif (method_exists($controller, $underscored_action)) {
		$controller->action = $underscored_action;
		input()->action = $underscored_action;
		$controller->loadView();
	} elseif (method_exists($controller, $action)) {
		$controller->action = $action;
		input()->action = $action;
		$controller->loadView();
	} else {
		$controller = new ErrorController();
		// If it does not exist load the default error view
		$controller->page = "error";
		$controller->action = "index";
		$controller->loadView();
	}

} elseif (class_exists('PublicController')) { // Look to see if this is a public page
	$controller = new PublicController();
	$action = lcfirst(underscoreString($page));

	if (method_exists($controller, $action)) {
		input()->action = $action;
		$controller->loadView();
	}
} else {  // If there is not a matching class redirect to the home page.
	$controller = new MainController();
	$controller->redirect();
}
