<?php
        session_start();
        include 'formcon.php';
        
 if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];

		$esearch="select * from signup where email='$email'";
		$query=mysqli_query($con,$esearch);

		$ec=mysqli_num_rows($query);

		if($ec)
		{
			$_SESSION['emi']=$email;
			$epass=mysqli_fetch_assoc($query);
			$fpass=$epass['pass'];
			$qpass=password_verify($pass,$fpass);
			
			if($qpass)
			{
				
	
	
	?>
				
				<script>
		alert("Login successful");
				</script>
					
        
       
	
	<?php
	    $sel = "select * from appinfo where conemail='$email'";
        $quer = mysqli_query($con,$sel);
        $res = mysqli_fetch_array($quer);
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
