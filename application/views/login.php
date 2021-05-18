
<head>
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/login_style.css';?>">

</head>

<body style="background-color: rgb(40,44,52)">



<div class="container-fluid mt-2" >

		<div>
			<img src="<?php echo base_url(). 'assets/images/logo.png';?>" alt="logo.png"   style='width: 100%; object-fit: contain'>
		</div>


		<div class="card"  style=" padding: 50px; position: relative; box-shadow: 3px 5px;">
			<div style=" font-family: Garamond, serif; font-size: 40px; text-align: center"> LOG IN</div>
			<form action="<?php echo base_url(). 'index.php/Auth/login_validation';?>"  >
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4 form-group">
				<label for="exampleFormControlSelect1">Department Name:</label>
				<select class="form-control" id="exampleFormControlSelect1" name="d_name">
				<option value="">Choose...</option>
				<option value="Electronics">Electronics</option>
				<option value="Mathematics">Mathematics</option>
				<option value="Science">Science</option>
				</select>

			</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
			
			
			<div class="col-md-4" >
			<label for="exampleFormControlSelect1">Password:</label>
				<input type="password" class="form-control" placeholder="Password" name="password">
			</div>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
			<div class="col-md-6 mt-3 " >
				<button class="btn btn-primary btn-outline " value="submit" type="submit">Log in</button>
				<?php	echo '<script>alert('.$this->session->flashdata('error');')</script>';?>
			</div>
			</div>
			</form>

			<div>Master Registration:  <a href="<?php echo base_url(). 'index.php/Auth/register';?>">Register</a> </div>	
		</div>
</div>

</body>
