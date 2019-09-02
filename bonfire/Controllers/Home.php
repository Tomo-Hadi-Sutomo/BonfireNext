<?php namespace Bonfire\Controllers;

class Home extends ThemedController
{
	public function index()
	{
		return $this->render('welcome');
	}

	//--------------------------------------------------------------------

}
