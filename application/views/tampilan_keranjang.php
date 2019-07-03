<div class="slider-container" style="height:100px;">
</div>
<br><br>

<div class="cart">
					<div class="container">
						<h1 class="h2 heading-primary mt-lg clearfix">
							<span>Shopping Cart</span>
						</h1>

						<div class="row">
							<div class="col-md-8 col-lg-9">
								<div class="cart-table-wrap">
                  <form action="<?php echo site_url('keranjang/ubah'); ?>" method="post">
									<table class="cart-table">
										<thead>
											<tr>
												<th></th>
												<th></th>
												<th>Product Name</th>
												<th>Unit Price</th>
												<th>Qty</th>
												<th>Subtotal</th>
											</tr>
										</thead>
										<tbody>
                      <?php
                        $total = 0;
                        if(count($cart) > 0){
                        foreach($cart as $item){
                          $total += $item['subtotal'];
                      ?>
											<tr>
												<td class="product-action-td">
													<a href="<?php echo site_url('keranjang/hapus/'.$item['rowid']); ?>" title="Remove product" class="btn-remove"><i class="fa fa-times"></i></a>
												</td>
												<td class="product-image-td">
													<a href="#" title="Product Name">
														<img class="portrait" src="<?php echo base_url('assets/barang/'.$item['gambar']) ?>" alt="<?php echo $item['name']; ?>" width="80">
													</a>
												</td>
												<td class="product-name-td">
													<h2 class="product-name"><a href="<?php echo base_url() ?>barang/detail/<?php echo str_replace(' ', '_',$item['name']); ?>" target="_blank" title="Nama"><?php echo $item['name']; ?></a></h2>
												</td>
												<td>Rp. <?php echo number_format($item['price'],0,',','.'); ?>,00</td>
												<td>
													<div class="qty-holder">
                            <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
                            <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
                            <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
                            <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
                            <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
                            <input type="number" name="cart[<?php echo $item['id'];?>][qty]" class="form-control" value="<?php echo $item['qty']; ?>">
													</div>
												</td>
												<td>
													<span class="text-primary">Rp. <?php echo number_format($item['subtotal'],0,',','.'); ?>,00</span>
												</td>
											</tr>
                      <?php }}else{echo'<tr><td colspan="6" align="center"><h3>Keranjang Belanja Kosong.</h3></td></tr>'; } ?>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="6" class="clearfix">
													<a href="<?php echo site_url('home'); ?>" class="btn btn-default hover-primary btn-continue">Continue Shopping</a>
                          <button type="submit" class="btn btn-default hover-primary btn-update">Update Shopping Cart</button>
													<a href="<?php echo site_url('keranjang/hapus/semua'); ?>" class="btn btn-default hover-primary btn-clear">Clear Shopping Cart</a>
												</td>
											</tr>
										</tfoot>
										<?php $info = $this->session->flashdata('info');
										if(!empty($info)){?>
											<div class="alert alert-block alert-danger">
												<i class="icon-ok red"></i>
													<?php echo $info; ?>
											</div>
										<?php } ?>
									</table>
                  </form>
								</div>
							</div>
							<aside class="col-md-4 col-lg-3 sidebar shop-sidebar">
								<div class="panel-group">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" href="#panel-cart-discount">
													Discount Code
												</a>
											</h4>
										</div>
										<div id="panel-cart-discount" class="accordion-body collapse">
											<div class="panel-body">
												<p class="mb-sm">Enter your coupon code if you have one.</p>
												<form action="#">
													<div class="form-group">
														<input type="text" class="form-control" required>
													</div>
													<input type="submit" class="btn btn-primary btn-block" value="Apply Coupon">
												</form>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" href="#panel-cart-ship">
													ESTIMATE SHIPPING AND TAX
												</a>
											</h4>
										</div>
										<div id="panel-cart-ship" class="accordion-body collapse">
											<div class="panel-body">
												<p class="mb-sm">Enter your destination to get a shipping estimate.</p>
												<form action="#">
													<div class="form-group">
														<label>Contry <span class="required">*</span></label>
														<select name="#" class="form-control">
															<option value="United States">United States</option>
															<option value="United Kingdon">United Kingdon</option>
															<option value="China">China</option>
															<option value="Russia">Russia</option>
														</select>
													</div>
													<div class="form-group">
														<label>State/Province</label>
														<select name="#" class="form-control">
															<option value="United States">Please select region, state</option>
															<option value="Alabama">Alabama</option>
															<option value="Alaska">Alaska</option>
														</select>
													</div>
													<div class="form-group">
														<label>Zip Code</label>
														<input type="text" class="form-control">
													</div>
													<input type="submit" class="btn btn-primary btn-block" value="Get a Quote">
												</form>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" href="#panel-cart-total">
													Cart Totals
												</a>
											</h4>
										</div>
										<div id="panel-cart-total" class="accordion-body collapse in">
											<div class="panel-body">
												<table class="totals-table">
													<tbody>

														<tr>
															<td>Total Belanja</td>
															<td>Rp. <?php echo number_format($total,0,',','.'); ?>,00</td>
														</tr>
													</tbody>
												</table>

												<div class="totals-table-action">
													<a href="<?php echo site_url('keranjang/bayar'); ?>" class="btn btn-primary btn-block">Proceed to Checkout</a>
													<a href="#" class="btn btn-link btn-block">Checkout with Multiple Addresses</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>

					</div>
        </div>
