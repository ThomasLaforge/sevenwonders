<?php
	App::uses('AppController', 'Controller');

	class PagesController extends AppController 
	{
		/* ---- Framework Attributes ---- */



		/* ---- Action Methods ---- */

		public function display() 
		{
			$path = func_get_args();

			$count = count($path);
			if (!$count) {
				return $this->redirect('/');
			}
			$page = $subpage = $title_for_layout = null;

			if (!empty($path[0])) {
				$page = $path[0];
			}
			if (!empty($path[1])) {
				$subpage = $path[1];
			}
			if (!empty($path[$count - 1])) {
				$title_for_layout = Inflector::humanize($path[$count - 1]);
			}
			$this->set(compact('page', 'subpage', 'title_for_layout'));

			try {
				$this->render(implode('/', $path));
			} catch (MissingViewException $e) {
				if (Configure::read('debug')) {
					throw $e;
				}
				throw new NotFoundException();
			}
		}

		public function index()
		{

		}

		/* ---- Framework Methods ---- */

		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('index');
		}
	}
