<?php
	/**
	 *	remember that any node type that you add here needs to be added to the 
	 *	strip_tags() filter in views-view.tpl.php -MR
	 */
?>
<node id="<?php echo($node->nid); ?>" type="<?php echo($node->type); ?>" date="<?php echo(date('c',$node->created)); ?>">
	<title><?php echo($node->title); ?></title>
    <body><?php echo(strip_tags($node->content['body']['#value'])); ?></body>
    <?php if($node->field_url[0]['title']){ ?>
    	<link>
    		<url><?php echo($node->field_url[0]['url']); ?></url>
    		<name><?php echo($node->field_url[0]['title']); ?></name>
    	</link>
    <?php } ?>
	<taxonomy><?php
		echo("\n");
		// translate taxonomy links into XML objects
		$terms = strip_tags($terms,'<a>');
		$terms = str_replace(' class="active"','',$terms);
		$terms = str_replace('<a href="',"\t\t".'<term><url>http://drupal.michaelraichelson.com',$terms);
		$terms = str_replace('" rel="tag" title="">','</url><name>',$terms);
		$terms = str_replace('</a>','</name></term>',$terms);
		echo($terms);
	?></taxonomy>
    <images>
    	<?php if($node->field_thumbnail[0]['filepath']){ ?><thumbnail>
				<file>http://drupal.michaelraichelson.com/<?php echo($node->field_thumbnail[0]['filepath']); ?></file>
				<alt><?php echo($node->field_thumbnail[0]['data']['alt']); ?></alt>
			</thumbnail>
		<?php } ?>
		<?php if($node->field_image[0]['filepath']){ ?><full>
				<file>http://drupal.michaelraichelson.com/<?php echo($node->field_image[0]['filepath']); ?></file>
				<alt><?php echo($node->field_image[0]['data']['alt']); ?></alt>
			</full>
		<?php } ?>
	</images>
</node>