<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class classes extends \CodeIgniter\Controller
{
    use ResponseTrait;

    public function create()
    {
        $model = new UserModel();
        $user  = $model->save($this->request->getPost());

        // Respond with 201 status code
        return $this->respondCreated();
    }
	public function index()
	{
		return students;
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