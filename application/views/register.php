<html>
<head>
    <title>Master/Register</title>
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/user_style.css';?>">

</head>
<body style="background-color: rgb(40,44,52)"> 
    <div class="container mt-5" >

        <div class="row">

        <div class="col-md-6">

            <div class="card" >
                <div class="card-header" >
                    Master Registration
					<?php
					$msg = $this->session->flashdata('msg');
					if($msg != NULL){
						echo "	<div class='alert alert-success'>$msg</div>";

					}else{
					}
					?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Please Fill With Your Detailes</h5>
                    <form action="<?php echo base_url(). 'index.php/Auth/register';?>" name="registerForm" id="registerForm" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="<?php echo set_value(field:'name');?>" placeholder="Enter Name" id="name" class="form-control  <?php echo (form_error(field:'name') != "" ) ? 'is-invalid': '';?>" name="name">
                            <p class="invalid-feedback"><?php echo strip_tags(form_error(field:'name') );?></p>
                        </div>
                        <div class="form-group">
                            <label for="d_name">Department Name</label>
                            <select class="form-control <?php echo (form_error(field:'d_name') != "" ) ? 'is-invalid': '';?>" name="d_name">
                            <option value="computer Science">Computer Department</option>
                            <option  value="Electronics">Electronics</option>
                            <option  value="Mathematics">Mathematics</option>
                            <option  value="Science">Science</option>
                            </select>
                            <p class="invalid-feedback"><?php echo  strip_tags(form_error(field:'d_name')) ;?></p>

                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo set_value(field:'email');?>" placeholder="Enter Email" id="email" class="form-control <?php echo (form_error(field:'email') != "" ) ? 'is-invalid': '';?>" name="email">
                            <p class="invalid-feedback"><?php echo  strip_tags(form_error(field:'email'));?></p>

                        </div>
                        <div class="form-group">
                            <label for="m_no">Mobile No:</label>
                            <input type="number" value="<?php echo set_value(field:'m_no');?>" placeholder="Enter Mobile No:" id="name" class="form-control <?php echo (form_error(field:'m_no') != "" ) ? 'is-invalid': '';?>" name="m_no">
                            <p class="invalid-feedback"><?php echo strip_tags(form_error(field:'m_no')) ;?></p>

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" value="<?php echo set_value(field:'password');?>" placeholder="Password" id="password" class="form-control <?php echo (form_error(field:'password') != "" ) ? 'is-invalid': '';?>" name="password">
                            <p class="invalid-feedback"><?php echo strip_tags(form_error(field:'password')) ;?></p>

                        </div>
                        <div class="form-group">
                            <label for="c_password">Confirm Password</label>
                            <input type="password" value="<?php echo set_value(field:'c_password');?>" placeholder="Confirm Password" id="c_password" class="form-control <?php echo (form_error(field:'c_password') != "" ) ? 'is-invalid': '';?>" name="c_password">
                            <p class="invalid-feedback"><?php echo strip_tags(form_error(field:'c_password')) ;?></p>

                        </div>
                        <button class="btn btn-block btn-outline-secondary"    type="submit" > Register Now</button>

                </form>

            </div>
            </div>
        </div>

        
        <div class="col-md-6">
        <img src="<?php echo base_url(). 'assets/images/logo.jpg';?>" width="490px" alt="">
        </div>
    
    

    </div>
   
</body>

</html>
