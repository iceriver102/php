<?php
Class User{    
	function __construct()
	{
		
	}
	public function getDateUser($row){		
		$this->id=$row->user_id;
		$this->name=$row->user_name;
		$this->full_name=$row->user_full_name;
	}
	
}