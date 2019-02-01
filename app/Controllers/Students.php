<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Students extends \CodeIgniter\Controller
{
	use ResponseTrait;
	
	public function createStudent()
	{
		$model 		= new StudentModel();
		$student 	= $model->save($this->request->getPost());
		
		return $this->respondCreated();
	}
}