<?php
class Crud_model extends CI_Model 
{
	/*Insert*/
	function insert($n,$e,$b,$a,$g,$p,$ag)
	{
       
		$query="insert into employee values('','$n','$e','$b', '$a','$g','$p','$ag')";
		$this->db->query($query);
	}
	
}
?>