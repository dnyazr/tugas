<!DOCTYPE html>
<html>
<head>
	<title>DATA PENGGUNA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">TUGAS CI_CRUD</a>
	</div>
</div>
	<h1>Nyoba sadja</h1>
<div class="container" style="padding-top: 10px;">

	<div class="row">
		<div class="col-md-8">
			<?php 
			$success = $this->session->userdata('success');
			if($success != "") {

			 ?>
			 <div class="alert alert-success"> <?php echo $success; ?></div>
			 <?php 
			 }
			 ?>
			 <?php 
			$failure = $this->session->userdata('failure');
			if($failure != "") {

			 ?>
			 <div class="alert alert-success"><?php  echo $failure ?></div>
			 <?php 
			 }
			 ?>
			
			<div class="row">
			<div class="col-6"><h3>DAFTAR PENGGUNA WIFI</h3></div>
			<div class="col-6 text-right">
				<a href="<?php echo base_url().'index.php/user/create'; ?>" class="btn btn-primary">Buat</a>
		</div>
	</div>


	<hr>
	<div class="row">
		<div class="col-md-8">
			
	</div>
	</div>
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Username</th>
					<th>Password</th>
					<th width="100">Edit</th>
					<th width="100">Hapus</th>
				</tr>

				<?php 
				$no = 1;
				if(!empty($users)) { foreach($users as $user) {?>
					
				<tr>
					<th scope="row"><?= $no++;?></th>
					<td><?php echo $user['name']?></td>
					<td><?php echo $user['email']?></td>
					<td><?php echo $user['username']?></td>
					<td><?php echo $user['password']?></td>
					<td>
						<a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-primary">Edit</a>
					</td>
					<td>
						<a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data?');" >Hapus</a>
					</td>

					
				</tr>
				<?php } } else { ?>
				<tr>
					<td colspan="5">Data tidak ditemukan!</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
