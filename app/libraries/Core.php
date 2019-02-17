<?php
	
	/*
	 * App Core Class
	 * Creates URL & loads core controller
	 * URL FORMAT - /controller/method/params
	 */

	Class Core {
		protected $currentController = 'Pages';
		protected $currentMethod = 'index';
		protected $params = [];

		public function __construct() {
			//print_r($this->getUrl());
			$url = $this->getUrl();
			/* Look in controllers for first value */
			/* Assume that now it is in index.php location */
			/* $url[0] is always controller name */
			if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
				// If exists, set as controller
				$this->currentController = ucwords($url[0]);
				unset($url[0]);
			}
			// Require the controller
			require_once '../app/controllers/'.$this->currentController.'.php';
			// Instantiate controller class
			$this->currentController = new $this->currentController;

			/* Check for the second part of url */
			if(isset($url[1])) {
				/* The method needs to exists in the said controller */
				if(method_exists($this->currentController, $url[1])) {
					$this->currentMethod = $url[1];
					/* Unset 1 index */
					unset($url[1]);
				}
			}
			
			$this->params = $url ? array_values($url) : [];
			/* Call a call back with array of params */
			call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
		}

		public function getUrl() {
			/* Make the url in array */
			if(isset($_GET['url'])) {
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}
		}


	}