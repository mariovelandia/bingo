<?php

die("Acceso denegado");

for ($i=300; $i < 400; $i++) {	
	$url = 'https://myfreebingocards.com/p/ujk2jr_'.$i.'/m';	
	$ch = curl_init($url);
	$fp = fopen('cards/'.$i.'.jpg', 'wb');
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($fp);	
}

echo "Finalizado";