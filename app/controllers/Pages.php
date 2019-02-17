<?php
/* Example of default URL */
/* app.com/ */
/* app.com/pages/ */
/* app/com/pages/index */

	// Default method
	class Pages extends Controller {
		public function __construct() {

		}

		// Default Method
		public function index() {
			// view method take two params
			// first is the page, second is the data
			$data = [
				'title' => 'MyMVC',
			];

			$this->view('pages/index', $data);
		}

		public function about() {
			$data = [
				'title' => 'About us'
			];

			$this->view('pages/about', $data);
		}
	}