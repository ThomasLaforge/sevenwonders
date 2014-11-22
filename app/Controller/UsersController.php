<?php
	App::uses('AppController', 'Controller');

	class UsersController extends AppController 
	{
		/* ---- Action Methods ---- */

		public function login() 
		{

		}

		public function logout() 
		{

		}

		/* ---- Framework Methods ---- */

		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('login');
		}
	}
