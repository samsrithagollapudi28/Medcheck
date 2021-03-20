<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medcheck.com</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts3/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css3/style.css">
</head>
<body>
<?php
include 'formcon.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['addr'];
    $phone=$_POST['tel'];
    $beds=$_POST['bedcount'];
    $vac=$_POST['estatus'];
   
    

  
    
            $iq="insert into appform(name , email , address , mobile , beds , vac  ) values('$name' , '$email' ,'$address', '$phone' , '$beds' , '$vac')"; 
            $res=mysqli_query($con,$iq);
            if($res)
            {
?>
                <script>
                alert("Application Submitted");
                location.replace("Login.php");
                </script>
<?php
            }
            else
            {
?>
                <script>
                alert("Insertion Failed");
                location.replace("index.php");
                </script>
<?php
            }
        
        

    
}
?>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Application form</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="addr" id="addr" placeholder="Address"/>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" name="tel" id="tel" placeholder="Mobile"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="bedcount" id="bedcount" placeholder="No.of beds available"/>
                        </div>
                        
                        <div class="form-group">
                            <label>COVID Vaccine availability</label>
                            <input type="radio" id="yes" name="estatus" value="Currently Working">
                            <label for="yes">Yes</label>
                            <input type="radio" id="no" name="estatus" value="Not Working">
                            <label for="no">No</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor3/jquery/jquery.min.js"></script>
    <script src="js3/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>