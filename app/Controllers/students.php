<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class students extends \CodeIgniter\Controller
{
    use ResponseTrait;

    public function create()
    {
       return $this->fail('Not implemented',418);
    }
	public function index()
	{
		return $this->load->model('students');
	}
	public function show($id){
		return students($id);
	}
	public function edit($id){
		return $this->fail('Not implemented',418);
	}
	public function update($id){
		return $this->fail('Not implemented',418);
	}
	public function delete($id){
		return $this->fail('Not implemented',418);
	}
	public function new(){
		return $this->fail('Not implemented',418);
	}
}