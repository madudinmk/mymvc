<?php
	/*
	 * Base Controller
	 * Loads the models and views
	 */

	class Controller {
		// Load Model
		public function model($model) {
			// require model
			require_once '../app/models/'.$model.'.php';
			// instantiate model
			return new $model();
		}

		// load view
		public function view($view, $data = []) {
			// check for view files
			if(file_exists('../app/views/'.$view.'.php')) {
				require_once '../app/views/'.$view.'.php';
			} else {
				// view does not exists
				die('View does not exist');
			} 
		}

	}