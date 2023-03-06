<?php
class index_model extends models
{
    public function __construct(){
        index_model::__construct();
    }

	public function getAllrecords()
	{
		return $this->db->select("SELECT * FROM `mvc` ORDER BY id DESC");
	}
	public function getOnerecord($id)
	{
		return $this->db->select("SELECT * FROM `mvc` WHERE id='".$id."' LIMIT 1");
	}
	public function edit_submit_index($data,$arg)
	{
		
		$this->db->update('mvc', $data,
				"`id` = $arg");
	}
	}


?>