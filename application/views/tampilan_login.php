<div class="slider-container" style="height:100px;">
</div>

<section class="form-section">
				<div class="container">
					<h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Login or Create an Account</h1>

					<div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
						<div class="box-content">
							<form action="#">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-content">
											<h3 class="heading-text-color font-weight-normal">Pelanggan Baru</h3>
											<p>Dengan membuat akun, Anda akan mendapatkan proses pembayaran yang lebih cepat, melihat dan melacak pesanan Anda di akun Anda dan fitur lainnya.</p>
										</div>

										<div class="form-action clearfix">
											<a href="<?php echo base_url(); ?>home/register" class="btn btn-primary">Buat Akun</a>
										</div>
									</div>
								</form>
                  <form class="" action="<?php echo base_url(); ?>login" method="post">
                    <div class="col-sm-6">
  										<div class="form-content">
  											<h3 class="heading-text-color font-weight-normal">Pelanggan Lama</h3>
  											<p>Jika anda sudah punya akun, silahkan login terlebih dahulu.</p>
												<?php $info = $this->session->flashdata('info');
												if(!empty($info)){?>
													<div class="alert alert-block alert-danger">
														<i class="icon-ok red"></i>
															<?php echo $info; ?>
													</div>
												<?php } ?>
  											<div class="form-group">
  												<label class="font-weight-normal">Email Address <span class="required">*</span></label>
  												<input type="email" class="form-control" name="email" required>
  											</div>

  											<div class="form-group">
  												<label class="font-weight-normal">Password <span class="required">*</span></label>
  												<input type="password" class="form-control" name="password" required>
  											</div>

  											<p class="required">* Harus Diisi</p>
  										</div>



  										<div class="form-action clearfix">
  											<a href="#" class="pull-left">Lupa Password?</a>

  											<input type="submit" class="btn btn-primary" value="Submit">
  										</div>
                  </form>

									</div>
								</div>
						</div>
					</div>
				</div>
			</section>
