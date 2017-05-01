<?php
if(!isset($_GET['month']))
{
	$_GET['month']=date('m');
}
?>

<div id="content">
	<div id="ga_paddingHigh" style="height:50px;">&nbsp<br> </div>
	<div id="ga_title" style="height:35px; padding-left: 50px;"><h2 style="color:#ff6a00;">Gallery</h2><br></div>
	<div id="ga_cont" style="padding-left: 50px;">
		<div id="suCo_year" style="width:100%; text-align:left;"><h2>2016</h2></div>
		<div id="suCo_month" style="width:100%;">
			<table id="_monthTable">
			  <tr>
				<td style="background-color: none; padding: 4px; color:white;"><div>Jan</div></td>
				<td style="background-color: none; padding: 4px; color:white;"><div>Feb</div></td>
				<td style="background-color: none; padding: 4px; color:white;"><div>March</div></td>
				<td style="background-color: none; padding: 4px; color:white;"><div>April</div></td>
				<td style="background-color: none; padding: 4px; color:white;"><div>May</div></td>
<?php if (is_dir('gallery/m06')) {?>
				<td style="background-color: none; padding: 4px; color:white;"><a href="/index.php?month=06#Gallery"><div>June</div></a></td>
<?php } else { ?>
				<td style="background-color: none; padding: 4px; color:white;"><div>June</div></a></td>
<?php } ?>
<?php if (is_dir('gallery/m07')) {?>
				<td style="background-color: none;padding: 4px; color:white;"><a href="/index.php?month=07#Gallery"><div>July</div></a></td>
<?php } else { ?>
				<td style="background-color: none; padding: 4px; color:white;"><div>July</div></a></td>
<?php } ?>
<?php if (is_dir('gallery/m08')) {?>
				<td style="background-color:none; padding: 4px; color:white;"><a href="/index.php?month=08#Gallery"><div>Aug</div></a></td>
<?php } else { ?>
				<td style="background-color: none; padding: 4px; color:white;"><div>Aug</div></a></td>
<?php } ?>
<?php if (is_dir('gallery/m09')) {?>
				<td style="background-color: none; padding: 4px; color:white;"><a href="/index.php?month=09#Gallery"><div>Sep</div></a></td>
<?php } else { ?>
				<td style="background-color: none; padding: 4px; color:white;"><div>Sep</div></a></td>
<?php } ?>
<?php if (is_dir('gallery/m10')) {?>
				<td style="background-color: none; padding: 4px; color:white;"><a href="/index.php?month=10#Gallery"><div>Oct</div></a></td>
<?php } else { ?>
				<td style="background-color: none; padding: 4px; color:white;"><div>Oct</div></a></td>
<?php } ?>
<?php if (is_dir('gallery/m11')) {?>
				<td style="background-color: none; padding: 4px; color:white;"><a href="/index.php?=11#Gallery"><div>Nov</div></a></td>
<?php } else { ?>
				<td style="background-color: none; padding: 4px; color:white;"><div>Nov</div></a></td>
<?php } ?>
<?php if (is_dir('gallery/m12')) {?>
				<td style="background-color: none; padding: 4px; color:white;"><a href="/index.php?=12#Gallery"><div>Dec</div></a></td>
<?php } else { ?>
				<td style="background-color: none; padding: 4px; color:white;;"><div>Dec</div></a></td>
<?php } ?>
			  </tr>
			</table>
		</div>
	</div>
	<div id="ga_paddingLow" style="height:50px;">&nbsp<br> </div>
	<div id="ga_gallery" style="padding-top:50px; width:960px; height=:540px; margin: 0 auto; ;"><iframe src="gallery/m<?php echo $_GET['month'] ?>/index.html" width="960" height="540" frameBorder="0" scrolling="no" seamless></iframe></div>
</div>

<div id="pageNo06" style="color:#444; z-index:99; position:absolute; bottom:0px; left:25px; width:50px; height:50px; text-align:center;">
	<p>6 / 7</p>
</div>