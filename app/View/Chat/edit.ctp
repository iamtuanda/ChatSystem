<form action="/hust-Tuanad/Chat/edit/<?php echo $feeds['tFeed']['id']; ?>" method="POST">
	<label>Name</label>
	<input type="text" name="name" value="<?php echo $feeds['tFeed']['name']; ?>"><br>
	<label>Message</label>
	<input type="text" name="message" value="<?php echo $feeds['tFeed']['message']; ?>"><br>
	<input style="font-size: 25px" type="submit" value="Submit">
</form>