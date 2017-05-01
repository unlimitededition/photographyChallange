<?php
	$winFiles = glob('winners/*.php');
	
	foreach ($winFiles as $winFile)
	{
		include($winFile);
	}
?>

<div id="pageNo07" style="color:#444; z-index:99; position:absolute; bottom:0px; left:25px; width:50px; height:50px; text-align:center;">
	<p>7 / 7</p>
</div>