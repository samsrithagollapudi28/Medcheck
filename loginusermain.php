 <?php
       session_start();
        include 'formcon.php';
        
 if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];

		$esearch="select * from signupuser where email='$email'";
		$query=mysqli_query($con,$esearch);

		$ec=mysqli_num_rows($query);

	

		if($ec)
		{
			
			$epass=mysqli_fetch_assoc($query);
			$fpass=$epass['pass'];
			$_SESSION['uname'] =$epass['email'] ;
			$qpass=password_verify($pass,$fpass);
			
			if($qpass)
			{
				
	
	
	?>
				
				<script>
		alert("Login successful");

				</script>
					
        
       
	
	<?php
	      
	   
			}
			else
			{
	?>
				<script>
					alert("Password Incorrect");
				</script>
	<?php
			}
		}
		else
		{
			echo "Invalid email";
		}
	}
?>
