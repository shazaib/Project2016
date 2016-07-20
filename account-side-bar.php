	
	<div class="side-bar">
		<div class="profile-img">
			<?php 
 		 	 echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="130px" height="130px" />';
			 ?>
		
		</div>
		<h1 class="profile-img-name"><?php echo $row['username'] ?></h1>

		<button class="side-bar-btn btn-img-user" onclick="location.href='profile.php'">Profile</button>
		
		<button class="side-bar-btn btn-img-trip" style="border-bottom:1px solid #ccc; border-top:none;" onclick="location.href='mytrip'">My Trip</button>
		
		<button class="side-bar-btn btn-img-booking" style="border-bottom:1px solid #ccc; border-top:none;" onclick="location.href='book-now'">Book Now</button>

		<button class="side-bar-btn btn-img-signout" style="border-bottom:1px solid #ccc; border-top:none;" onclick="location.href='signout'">Sign Out</button>

	</div>

