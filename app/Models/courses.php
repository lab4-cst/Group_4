<?php namespace App\Models;

class courses {

        protected $data = [
			    'Operating Systems' 		=> ['id'=>'Operating Systems', 'code'=>'COMP4735'],
			    'Pitching and Positioning' 	=> ['id'=>'Pitching and Positioning', 'code'=>'BUSA4919'],
			    'UX/UI Design' 				=> ['id'=>'UX/UI Design', 'code'=>'COMP4943']
		];

        public function find($id)
        {
			return $this->data[$id]['code'];
        }

        public function findAll()
        {
			foreach ($this->data as $key => $value) 
			{
                return $this->data[$key]['surname'];
            }
        }
}