<?
	class Sign extends CI_Model
	{
		function addmember($row)
		{
			return $this->db->insert("member",$row);
		}
	}
?>