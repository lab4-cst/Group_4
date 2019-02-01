<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class courses extends \CodeIgniter\Controller
{
    use ResponseTrait;

    public function create()
    {
        return $this->fail('Not implemented',418);
    }
	public function index()
	{
		return $this->load->model('courses');
	}
	public function show($id){
		return courses($id);
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