<?php
//skrip koneksi
session_start();
$koneksi = new mysqli("localhost", "root", "", "tabungan")
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Login Admin
					</span>

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="user" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
					<br><br><br>
					</div>
				</form>
			</div>
		</div>
	</div>
                
								<?php
                if (isset($_POST['login']))
                {
                    $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' 
                    AND password ='$_POST[pass]'");
                    $yangcocok = $ambil->num_rows;
                    if ($yangcocok==1)
                    {
                        $_SESSION['admin']=$ambil->fetch_assoc();
                        echo "<div class='alert alert-info'>Login Sukses</div>";
                        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                    }
                    else {
                        echo "<div class='alert alert-danger'>Login Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                    }
                }
                ?>
</body>
</html>