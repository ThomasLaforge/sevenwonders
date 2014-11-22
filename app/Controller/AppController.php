<?php
	App::uses('Controller', 'Controller');

	class AppController extends Controller 
	{
		/* ---- Framework Attributes ---- */

		public $helpers = array('Cache');


		/* ---- Components ---- */

		public $components = array(
			'Session',
			'Cookie',
			'Auth' => array(
				'authenticate' => array(
					'Form' => array(
						'scope' => array(
							'User.active' => 1
						)
					)
				)
			),
			'DebugKit.Toolbar'
		);


		/* ---- Framework Methods ---- */

		public function beforeFilter()
		{
			parent::beforeFilter();
		}
	}
