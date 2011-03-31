<?php
	$rows = strip_tags($rows,'<node><title><body><url><taxonomy><term><name><images><full><file><alt><thumbnail><link>');
	$rows = str_replace('Title:','',$rows);
	echo($rows);
?>