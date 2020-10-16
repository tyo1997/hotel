<?php

include('component/com-user.php');

?>

<section class="content-header">
	<h1>Tambah User Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['user-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan data pengguna baru. 
		<a href="?module=user/user-add"><b>Tambah Lagi</b></a> / 
		<a href="?module=user/user-list"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Pengguna</label>
							<input class="form-control" name="nama" autocomplete="off" required />
						</div>
						<div class="form-group">
							<label>Batasan Akses</label>
							<select class="form-control" name="id_user_role">
								<option>-- Pilih --</option>
								<?php foreach($user_role as $user_role) { ?>
								<option value="<?php echo $user_role['id_user_role']; ?>"><?php echo $user_role['role_name']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Jabatan</label>
							<input class="form-control" name="jabatan" autocomplete="off" required />
						</div>
						<div class="form-group">
							<label>Nomor Telp / Handphone</label>
							<input class="form-control" name="nomor_telp" autocomplete="off" required />
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>Username</label>
							<input class="form-control" name="username" autocomplete="off" required />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" name="password" autocomplete="off" required />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-primary" type="submit" name="user-add">Tambah User <i class="fa fa-plus"></i></button>
				<a class="btn btn-warning" href="?module=user/user-list">Batal <i class="fa fa-close"></i></a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>