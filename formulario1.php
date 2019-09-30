<html>

	<form>
	
		<input name="email" type="email"/>
		<button>SUSCRIBIRSE</button>
	</form>
	
	<?php
	if (isset($_GET['email'])){
		//print_r($_GET);

		$f=fopen('email.txt','a');
	
		fwrite($f,$_GET['email']."\r\n");
	
		fclose($f);
	}
	
	?>
	<a href="http://192.168.0.42/asir2_alvaro/index.php">Yepa Serran</a>
</html>