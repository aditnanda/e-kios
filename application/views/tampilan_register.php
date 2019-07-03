<div class="slider-container" style="height:100px;">
</div>

<section class="form-section register-form">
				<div class="container">
					<h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Buat Akun Baru</h1>

					<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
						<div class="box-content">

								<h4 class="heading-primary text-uppercase mb-lg">PERSONAL INFORMATION</h4>
								<?php echo form_open('register');?>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label class="font-weight-normal">Nama Lengkap <span class="required">*</span></label>
											<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>">
										</div>
									</div>
								</div>
								<p> <?php echo form_error('name'); ?> </p>

								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label class="font-weight-normal">Alamat Email <span class="required">*</span></label>
											<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
										</div>
									</div>
								</div>
								<p> <?php echo form_error('email'); ?> </p>

								<?php $info = $this->session->flashdata('info');
								if(!empty($info)){?>
									<div class="alert alert-block alert-danger">
										<i class="icon-ok red"></i>
											<?php echo $info; ?>
									</div>
								<?php } ?>

								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label class="font-weight-normal">Password <span class="required">*</span></label>
											<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>">
										</div>
									</div>
								</div>
								<p> <?php echo form_error('password'); ?> </p>

								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label class="font-weight-normal">Password Konfirmasi <span class="required">*</span></label>
											<input type="password" class="form-control" name="password_conf" value="<?php echo set_value('password_conf'); ?>">
										</div>
									</div>
								</div>
								<p> <?php echo form_error('password_conf'); ?> </p>

								<div class="row">
									<div class="col-xs-12">
										<p class="required mt-lg mb-none">* Harus Diisi</p>

										<div class="form-action clearfix mt-none">
											<a href="<?php echo base_url(); ?>home/login" class="pull-left"><i class="fa fa-angle-double-left"></i> Kembali</a>

											<input type="submit" class="btn btn-primary" value="Submit">
										</div>
										<?php echo form_close();?>
									</div>
								</div>
						</div>
					</div>
				</div>
			</section>
