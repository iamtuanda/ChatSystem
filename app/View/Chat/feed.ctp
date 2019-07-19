<div>
	<div class="a">
		<h1 class="Title"> System Chat Version 1 </h1>	
	</div>
	<form method="post" action="/hust-Tuanad/chat/feed">
		Name:<br>
		<input type="text"  name="data[tFeed][name]"><br>
		Message:<br>
		<input type="text" name="data[tFeed][message]">
		<br><br>
		<input class="btn" type="submit" value="Post">
	</form> 

	<table style="width:100%">
		<?php foreach ($t_feeds as $value) { ?>
			<tr>
				<td>
					<?php echo $value['tFeed']['name'] . ":" . $value['tFeed']['message'] . " " . $value['tFeed']['create_at']; ?>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>