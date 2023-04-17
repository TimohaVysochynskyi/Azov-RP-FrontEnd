<?php
if(!isset($_SESSION['NickName'])) exit("<meta http-equiv='refresh' content='0; url= /login'>");
else
{
class index extends hf {
	public function get_content() { 
		
		require_once ("engine/functions.php");
		checkPassword();
		if(file_exists("view/main/profile.php")) 
		{
				
			include "view/main/profile.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
}
?>
