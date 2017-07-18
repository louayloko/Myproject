<?php
if (isset ($_POST['submit']))  {
		$msg = 'Name: ' .$_POST['name'] ."\n"
			.'Prenom: ' .$_POST['lastname'] ."\n"
			.'Email: ' .$_POST['email'] ."\n"
			.'Comment: ' .$_POST['sujet'];
		mail('louay10@hotmail.com', 'Sample Contact Us Form', $msg);
		
} else {
		header ('location: index.php');
		exit (0);


}
?>