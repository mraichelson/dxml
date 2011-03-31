<?php
	// node 3 is the "home" page.
	// if someone hits that page
	// redirect them to www.MR.com instead
	if(arg(0)=='node' && arg(1)==3){
		header("Location: http://michaelraichelson.com/");
		exit();
	}
	header("Content-Type: text/xml");
	echo('<?xml version="1.0" encoding="utf-8" ?>'."\n");
?>
<!-- who's a sneaky monkey? yes you are! -->
<result>
	<?php echo($content); ?>	
</result>