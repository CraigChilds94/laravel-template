<?php

class HomeController extends BaseController {

	/**
	 * Default home controller action
	 *
	 * @return View 	The view that is being rendered
	 */
	public function showWelcome() {
		return View::make('pages.index');
	}

}
