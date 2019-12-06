<?php
class Leave {
	private $_db,
			$_data,
			$_isLoggedIn;

	public function __construct($user = null) {
		$this->_db = DB::getInstance();

		// if(!$user){
		// 	if(Session::exists($this->_sessionName)) {
		// 		$user = Session::get($this->_sessionName);

		// 		if($this->find($user)) {
		// 			$this->_isLoggedIn = true;
		// 		} else {

		// 		}
		// 	}
		// } else {
		// 	$this->find($user); 
		// }
	}

	public function update($table, $fields = array(), $id = null) {

		if(!$this->_db->update($table, $id, $fields)) {
			throw new Exception('There was a Problem Updating your Data!.');
		}
	}

	public function create($table, $fields = array()) {
		if(!$this->_db->insert($table, $fields)) {
			throw new Exception('There was a problem creating an account!.');
		}
	}

	public function find($user = null) {
		if($user) {
			$field = (is_numeric($user)) ? 'id' : 'firstname';
			$data = $this->_db->get('leaves', array($field, '=', $user));

			if($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	} 

	public function exists() {
		return (!empty($this->_data)) ? true : false;
	}

	public function data() {
		return $this->_data;
	} 

	public function isLoggedIn() {
		return $this->_isLoggedIn;   
	}
}

?>