Alejandro de la sen canale
<a href="http://192.168.0.42/asir2_alvaro/index.php">Yepa Serran</a>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>