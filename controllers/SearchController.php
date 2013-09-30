<?php
require_once('BaseController.php');

class SearchController extends BaseController {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		require_once('views/SearchView.php');
	}
}