<?php include"includes/header.php" ?>	

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.jpg" alt="IMG">
				</div>
<form class="login100-form validate-form"action="" method="post">
					<span style="font-family:italic;" class="login100-form-title">
						Dr.Aifaoui
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user" placeholder="Username..">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password..">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input  name="login"value="Se connecter" type="submit" class="login100-form-btn">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php

if(isset($_POST['login'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $query="SELECT * FROM security";
    $login_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($login_query)){
        $user=$row['username'];
        $pass=$row['password'];
    }
    
    if($username==$user && $password=$pass){
        header("Location: archive.php");
    }
}





?>

	<?php include"includes/footer.php"?>