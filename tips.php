<?php
	$files = glob('tips/*.php');
	
	foreach ($files as $file)
	{
		include($file);
	}
?>

<div id="pageNo03" style="color:#444; z-index:99; position:absolute; bottom:0px; left:25px; width:50px; height:50px; text-align:center;">
	<p>3 / 7</p>
</div>