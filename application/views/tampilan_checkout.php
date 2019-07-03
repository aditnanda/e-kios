<?php $nama = $this->session->userdata('nama');
$email = $this->session->userdata('email'); ?>

<div class="slider-container" style="height:100px;">
</div>


<div role="main" class="main">
				<div class="checkout">


					<div class="container">
						<h1 class="h2 heading-primary mt-lg mb-md clearfix">
							Checkout
						</h1>

						<div class="checkout-menu clearfix">
              <?php if (empty($nama)){ ?>
                <a href="#" class="btn btn-primary pull-left mb-sm" data-toggle="modal" data-target=".shop-login-modal">LOGIN</a>

              <?php }else{ ?>
              <?php } ?>


							<div class="dropdown pull-right checkout-review-dropdown">

								<button class="btn btn-primary mb-sm" id="reviewTable" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    	<i class="fa fa-shopping-cart"></i>
										<?php
											$total = 0;
											if(count($cart) > 0){
											foreach($cart as $item){
												$total += $item['subtotal'];
											}}
										?>
									Rp. <?php echo number_format($total,0,',','.'); ?>,00
							  	</button>
								<div class="dropdown-menu" aria-labelledby="reviewTable">
							    	<h3>Review Your Order</h3>

							    	<table>
							    		<thead>
							    			<tr>
							    				<th>Nama</th>
								    			<th class="text-center">Jumlah</th>
								    			<th class="text-right">Subtotal</th>
							    			</tr>
							    		</thead>
											<?php
												$total = 0;
												if(count($cart) > 0){
												foreach($cart as $item){
													$total += $item['subtotal'];

											?>
							    		<tbody>
							    			<tr>
							    				<td><?php echo $item['name']; ?></td>
								    			<td class="text-center"><?php echo $item['qty']; ?></td>
								    			<td class="text-right">Rp. <?php echo number_format($item['price'],0,',','.'); ?>,00</td>
							    			</tr>
							    		</tbody>
											<?php }} ?>
							    		<tfoot>
							    			<tr>
							    				<td class="text-right" colspan="2">Total Belanja</td>
							    				<td class="text-right">Rp. <?php echo number_format($total,0,',','.'); ?>,00</td>
							    			</tr>
							    		</tfoot>
							    	</table>

								</div>

							</div>

						</div>

						<div class="row">
							<div class="col-md-4">
								<form class="" action="<?php echo base_url(); ?>keranjang/gobayar" method="post">

								<div class="form-col">
									<h3>Nama &amp; Alamat</h3>

									<div class="row">
										<div class="col-xs-12 col-md-12">
											<div class="form-group">
												<label>Nama<span class="required">*</span></label>
												<input type="text" class="form-control" required name="nama" value="<?php echo $nama; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-md-12">
											<div class="form-group wide">
												<label>Email<span class="required">*</span></label>
												<input type="email" class="form-control" required name="email" value="<?php echo $email; ?>">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-md-12">
											<div class="form-group wide">
												<label>Alamat<span class="required">*</span></label>
												<input type="text" class="form-control" required name="alamat">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Kota<span class="required">*</span></label>
												<input type="text" class="form-control" required name="kota">
											</div>
										</div>
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Provinsi<span class="required">*</span></label>
												<input type="text" class="form-control" required name="provinsi">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Kode Pos<span class="required">*</span></label>
												<input type="text" class="form-control" required name="kodepos">
											</div>
										</div>
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<label>Telepon<span class="required">*</span></label>
												<input type="text" class="form-control" required name="telepon">
											</div>
										</div>
									</div>

									<div class="checkout-review-action">
										<h5>Total Bayar <span>Rp. <?php echo number_format($total,0,',','.'); ?>,00</span></h5>
										<?php if(empty($cart)){ ?>
											<div class="alert alert-block alert-danger">
                        <i class="icon-ok red"></i>
                          Silahkan Berbelanja Dahulu Untuk Melanjutkan Proses Pembayaran
                      </div>
                    <?php }else if (empty($nama)){ ?>
                      <div class="alert alert-block alert-danger">
                        <i class="icon-ok red"></i>
                          Silahkan Login Dahulu Untuk Melanjutkan Proses Pembayaran
                      </div>
                    <?php }else{ ?>
										<button type="submit" name="button" class="btn btn-primary">Proses Pembayaran</button>
                  <?php } ?>
									</div>

								</div>
							</form>
							</div>


							</div>
						</div>
					</div>
					<!-- </form> -->
				</div>

				<div class="modal fade shop-login-modal" tabindex="-1" role="dialog" aria-labelledby="myLoginModal">
					<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">

							<form action="<?php echo base_url(); ?>login/login_checkout" method="post">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
									<h4 class="modal-title" id="myLoginModal">Login to your Account</h4>
								</div>

								<div class="modal-body">
									<div class="form-group">
										<label class="mb-xs">Email Address <span class="required">*</span></label>
										<input type="email" class="form-control" required name="email">
									</div>

									<div class="form-group">
										<label class="mb-xs">Password <span class="required">*</span></label>
										<input type="password" class="form-control" required name="password">
									</div>
								</div>

								<div class="modal-footer">
									<a href="<?php echo base_url(); ?>home/register" class="btn btn-link pull-left">Buat Akun Baru</a>
									<input type="submit" class="btn btn-primary" value="Login">
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="modal fade shop-fpass-modal" tabindex="-1" role="dialog" aria-labelledby="myRecoverModal">
					<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">

							<form action="#">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
									<h4 class="modal-title" id="myRecoverModal">Recover your password</h4>
								</div>

								<div class="modal-body">
									<p>Please enter your email address below. You will receive a link to reset your password.</p>
									<div class="form-group">
										<label class="mb-xs">Email Address <span class="required">*</span></label>
										<input type="email" class="form-control" required>
									</div>
								</div>

								<div class="modal-footer">
									<a href="#" class="btn btn-link pull-left" data-toggle="modal" data-target=".shop-login-modal" data-dismiss="modal"><i class="fa fa-angle-double-left mr-xs"></i>Back to Login</a>
									<input type="submit" class="btn btn-primary" value="Recover">
								</div>
							</form>

						</div>
					</div>
				</div>

			</div>
