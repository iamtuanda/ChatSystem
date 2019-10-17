<div>
	<div class="a">
		<h1 class="Title"> System Chat Version 4 </h1>
	</div>

	<form method="post" enctype="multipart/form-data" action="/hust-Tuanad/Chat/feed">
		<label> Name </label>:<br>
		<input type="text" name="name" value="<?php echo $this->Session->read('name'); ?>"readonly><br>
		<label>Message</label>:<br>
		<input type="text" name="message">
		<br>
		<input class="btn" type="submit" value="POST">
		<input type="file" value = "UPLOAD" name="image_file_name">
		<span><a href="/hust-Tuanad/User/login"> Logout </a></span>
	</form>

	<table style="width:100%">
		<?php foreach ($t_feeds as $value) { ?>
			<tr>
				<td><?php echo $value['tFeed']['name'];?></td>
				<td><?php echo $value['tFeed']['message'];?>
					<?php if ($value['tFeed']['image_file_name'] != '') { ?>
						<?php if(end(explode(".", $value['tFeed']['image_file_name'])) =="mp4") {?>
							<video controls>
								<source src="/hust-Tuanad/app/webroot/video/upload/<?php echo $value['tFeed']['image_file_name']?> " type="video/mp4" style="width: 80px;height: 80px;">
							</video>
						<?php } else { ?>
							<img src="/hust-Tuanad/app/webroot/img/<?php echo $value['tFeed']['image_file_name']; ?>" style="width: 80px; height: 80px;">
						<?php } ?>
					<?php } ?>
				</td>
				<td><?php echo $value['tFeed']['create_at'];?></td>
				<td><?php echo $value['tFeed']['update_at'];?></td>
				<?php if ($this->Session->read('name') == $value['tFeed']['name']) { ?>
					<td><a href="/hust-Tuanad/Chat/delete/<?php echo $value['tFeed']['id']; ?>">Delete</a></td>
					<td><a href="/hust-Tuanad/Chat/edit/<?php echo $value['tFeed']['id']; ?>">Edit</a></td>
				<?php } ?>
			</tr> 
		<?php } ?>
	</table>
</div>
