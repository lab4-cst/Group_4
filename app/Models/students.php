<?php namespace App\Models;

class students {

	protected $data = [
		'Parm' => ['id'=>'Parm', 'surname'=>'Dhaliwal'],
		'Jason' => ['id'=>'Jason', 'surname'=>'Zhou'],
		'Matthew' => ['id'=>'Matthew', 'surname'=>'Lau']
	];

	public function find($id)
	{
		return $this->data[$id]['surname'];
	}

	public function findAll()
	{
		foreach ($this->data as $key => $value) 
		{
			return $this->data[$key]['surname'];
		}
	}
}
