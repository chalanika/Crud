<?php
class Crud_model extends CI_Model 
{
	/*Insert*/
	function insert($n,$e,$b,$a,$g,$p,$ag)
	{
       
		$query="insert into employee values('','$n','$e','$b', '$a','$g','$p','$ag')";
		$this->db->query($query);
	}
	/*View*/
	function display_records()
	{
		$query=$this->db->query("select * from employee");
		return $query->result();
	}
	/*Delete*/
	function deleterecords($id)
	{
		$this->db->query("delete from employee where Emp_id='".$id."'");
	}
	/*display record to update*/
	function displayrecordsById($id)
	{
		$query=$this->db->query("select * from employee where Emp_id='".$id."'");
		return $query->result();
	}
	/*Update*/
	function update_records($n,$e,$b,$a,$g,$p,$ag,$id)
	{
		
		$query=$this->db->query("update employee set Emp_name='$n',Email='$e',Date_of_birth='$b' ,Emp_Address='$a', Gender='$g', Telephone_Number='$p', Age='$ag' where Emp_id='$id'");
	}
	
}
?>