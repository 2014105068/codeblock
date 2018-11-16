<?
	class Sign extends CI_Model
	{
		function addmember($row)
		{
			return $this->db->insert("member",$row);
		}
		function checkM($email)
		{
			$this->db->where('email', $email);
			$query = $this->db->get("member");
			if($query->num_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}

		}
	}
?>