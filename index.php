<?php

/*
 * SkinLab's Skins
 * Copyright © Frostman frostman98@gmail.com
 * http://scripts.forumfree.it
 */

set_time_limit(500);
error_reporting(E_ALL);

/* Get Source!
----------------*/
function getSource($id, $key) {
	$ch = curl_init("http://staff.forumfree.net/skinlab/?f={$id}&sort_key=date&st={$key}");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT , 50);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$content = curl_exec($ch);
	curl_close($ch);
	return $content;
}

/* Get Pages!
--------------*/
for ($i = 0; $i <= 1140; $i++) {
	if ($i == 60 || $i == 120 || $i == 180 || $i == 240 || $i == 300 || $i == 360 || $i == 420 || $i == 480 || $i == 540|| $i == 600 || $i == 660 || $i == 720 || $i == 780 || $i == 840 || $i == 900 || $i == 960 || $i == 1020 || $i == 1080 || $i == 1140){
		$getPages[] = $i;
	}        
}

/* Get Skins Light!
--------------------*/
for ($n = 0; $n <= 18; $n++) {
	$getSkinsLight[] = getSource(1, $getPages[$n]);
}

/* Get Skins Dark!
--------------------*/
for ($n = 0; $n <= 7; $n++) {
	$getSkinsDark[] = getSource(1, $getPages[$n]);
}

?>