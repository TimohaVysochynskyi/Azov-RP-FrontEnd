<?php
class login extends hf {
	public function get_content() { 
		
		include "engine/functions.php"; 
		if(file_exists("view/main/login.php")) 
		{
			include "view/main/login.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
?>
