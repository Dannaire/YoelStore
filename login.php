<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if($_SESSION['status_login']==true){
header('location: pelanggan/index-4.php');
}else{
?>
<html>
<link rel="stylesheet"  href="style1.css">


<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
            
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
               
                <form action="proses_tambah_pelanggan.php" method="post">
					<div class="form sign-up">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="nama" placeholder="Nama">
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input id="" name="alamat" placeholder="Alamat" required></input><br>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="number" name="telp" value="" placeholder="Nomor Telepon">
						</div>
                        <div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="user" value="" placeholder="Username">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="pass" value="" placeholder="Password">
						</div>
						<button>
							Sign up
						</button>
						<p>
</form>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
					</div>
				</div>
			
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
                    <form action="proses_login.php" method="post" enctype="multipart/form-data">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="username" placeholder="Username" value="">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password"  name="password" placeholder="Password">
						</div>
						<button>
							Sign in
						</button>
						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>
					</div>
				</div>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome to Yoel Store
					</h2>
	
				</div>
				<div class="img sign-in">
		
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
				
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
	
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
    <script src="animation.js   " type="text/javascript"></script>

</html>
<?php
}
?>