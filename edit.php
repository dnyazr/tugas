<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">TUGAS CI_CRUD</a>
	</div>
</div>
<div class="container" style="padding-top: 10px;">
	<h3>EDIT PENGGUNA WIFI</h3>
	<hr>
	<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">
	<div class="row">
		
		<div class="col-md-6">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo set_value('name',$user['name']); ?>" class="form-control">
				<?php echo form_error('name'); ?>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" value="<?php echo set_value('email',$user['email']); ?>" class="form-control">
				<?php echo form_error('email'); ?>
			</div>
			<div class="form-group">
				<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo set_value('username',$user['username']); ?>" class="form-control">
				<?php echo form_error('username'); ?>
			</div>
			<div class="form-group">
				<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" value="<?php echo set_value('password',$user['password']); ?>" class="form-control">
				<?php echo form_error('password'); ?>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">EDIT</button>
				<a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-secondary">BATAL</a>
			</div>
		</div>
	</div>
</form>
</div>
</body>
</html>