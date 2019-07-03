<div class="slider-container" style="height:100px;">
</div>

<section class="page-header">
				<div class="container">
					<ul class="breadcrumb">
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
            <?php
             foreach($barang as $p){
             ?>
						<li><a href="<?php echo base_url(); ?>kategori/<?php if(isset($p->kategori)) echo $p->kategori; ?>"><?php if(isset($p->kategori)) echo $p->kategori; ?></a></li>
						<li class="active"><?php if(isset($p->nama)) echo $p->nama; ?></li>
					<?php } ?>
					</ul>
				</div>
			</section>

			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="product-view">
							<div class="product-essential">
								<div class="row">
									<div class="product-img-box col-sm-5">
										<div class="product-img-box-wrapper">
	                                        <div class="product-img-wrapper">
	                                        	<img id="product-zoom" src="<?php echo base_url(); ?>assets/barang/<?php if(isset($p->gambar))  echo $p->gambar; ?>" data-zoom-image="<?php echo base_url(); ?>assets/barang/<?php if(isset($p->gambar)) echo $p->gambar; ?>" alt="Product main image">
	                                        </div>

											<a href="#" class="product-img-zoom" title="Zoom">
												<span class="glyphicon glyphicon-search"></span>
											</a>
										</div>

										<div class="owl-carousel manual" id="productGalleryThumbs">
											<div class="product-img-wrapper">
												<a href="#" data-image="<?php echo base_url(); ?>assets/barang/<?php if(isset($p->gambar)) echo $p->gambar; ?>" data-zoom-image="<?php echo base_url(); ?>assets/barang/<?php if(isset($p->gambar)) echo $p->gambar; ?>" class="product-gallery-item">
                                                    <img class="keranjang" src="<?php echo base_url(); ?>assets/barang/<?php if(isset($p->gambar)) echo $p->gambar; ?>" alt="product">
                                                </a>
											</div>
											<div class="product-img-wrapper">
												<a href="#" data-image="../img/demos/shop/products/single/product2.jpg" data-zoom-image="../img/demos/shop/products/single/product2.jpg" class="product-gallery-item">
                                                    <img src="<?php echo base_url(); ?>assets/img/demos/shop/products/single/thumbs/product2.jpg" alt="product">
                                                </a>
											</div>
											<div class="product-img-wrapper">
												<a href="#" data-image="<?php echo base_url(); ?>assets/img/demos/shop/products/single/product3.jpg" data-zoom-image="<?php echo base_url(); ?>assets/img/demos/shop/products/single/product3.jpg" class="product-gallery-item">
                                                    <img src="<?php echo base_url(); ?>assets/img/demos/shop/products/single/thumbs/product3.jpg" alt="product">
                                                </a>
											</div>
											<div class="product-img-wrapper">
												<a href="#" data-image="<?php echo base_url(); ?>assets/img/demos/shop/products/single/product4.jpg" data-zoom-image="<?php echo base_url(); ?>assets/img/demos/shop/products/single/product4.jpg" class="product-gallery-item">
                                                    <img src="<?php echo base_url(); ?>assets/img/demos/shop/products/single/thumbs/product4.jpg" alt="product">
                                                </a>
											</div>
											<div class="product-img-wrapper">
												<a href="#" data-image="<?php echo base_url(); ?>assets/img/demos/shop/products/single/product5.jpg" data-zoom-image="<?php echo base_url(); ?>assets/img/demos/shop/products/single/product5.jpg" class="product-gallery-item">
                                                    <img src="<?php echo base_url(); ?>assets/img/demos/shop/products/single/thumbs/product5.jpg" alt="product">
                                                </a>
											</div>
										</div>
									</div>

									<div class="product-details-box col-sm-7">
										<div class="product-nav-container">

										<h1 class="product-name">
											<?php if(isset($p->nama)) echo $p->nama; ?>
										</h1>

										<div class="product-rating-container">
                                            <div class="product-ratings">
												<div class="ratings-box">
													<div class="rating" style="width:60%"></div>
												</div>
											</div>
                                            <div class="review-link">
                                                <a href="#" class="review-link-in" rel="nofollow"> <span class="count">1</span> customer review</a> |
                                                <a href="#" class="write-review-link" rel="nofollow">Add a review</a>
                                            </div>
                                        </div>

                                        <div class="product-short-desc">
                                          <?php if(isset($p->deskripsi)) echo $p->deskripsi; ?>
										</div>

										<div class="product-detail-info">
											<div class="product-price-box">
												<span class="product-price">Rp. <?php if(isset($p->harga)) echo number_format($p->harga,0,",","."); ?>,00</span>
											</div>
											<p class="availability">
												<span class="font-weight-semibold">Stock:</span>
												<?php if(isset($p->stok)) echo $p->stok; ?>
											</p>

										</div>

										<div class="product-actions">
											<form method="post" name="barang" action="<?php echo site_url('keranjang/beli'); ?>">
												<div class="product-detail-qty" style="width:100px;">
	                          <input type="number" value="1" id="product-vqty" name="qty" >
	                      </div>

												<input type="hidden" name="id" value="<?php if(isset($p->id)) echo $p->id; ?>" />
												<input type="hidden" name="nama" value="<?php if(isset($p->nama)) echo $p->nama; ?>" />
												<input type="hidden" name="harga" value="<?php if(isset($p->harga)) echo $p->harga; ?>" />
												<input type="hidden" name="gambar" value="<?php if(isset($p->gambar)) echo $p->gambar; ?>" />

												<button type="submit" class="btn btn-primary" style="margin: 10px 1px;"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah ke Keranjang</button>

												<div class="actions-right">
													<a href="#" class="addtowishlist" title="Tambahkan ke Wishlist">
														<i class="fa fa-heart"></i>
													</a>
												</div>
											</form>
											<?php $info = $this->session->flashdata('info');
											if(!empty($info)){?>
												<div class="alert alert-block alert-danger">
													<i class="icon-ok red"></i>
														<?php echo $info; ?>
												</div>
											<?php } ?>
										</div>

										<div class="product-share-box">
											<div class="addthis_inline_share_toolbox"></div>

										</div>
									</div>
								</div>
							</div>
              <br>
							<div class="tabs product-tabs">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#product-desc" data-toggle="tab">Description</a>
									</li>

									<li>
										<a href="#product-reviews" data-toggle="tab">Reviews</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="product-desc" class="tab-pane active">
										<div class="product-desc-area">
											<?php if(isset($p->deskripsi)) echo $p->deskripsi; ?>
										</div>
									</div>


									<div id="product-reviews" class="tab-pane">
										<div class="collateral-box">
											<ul class="list-unstyled">
												<li>Jadilah yang pertama untuk mengulas produk ini</li>
											</ul>
										</div>

										<div class="add-product-review">
											<h3 class="text-uppercase heading-text-color font-weight-semibold">TULIS ULASAN ANDA</h3>
											<p>How do you rate this product? *</p>

											<form action="#">
												<table class="ratings-table">
													<thead>
														<tr>
															<th>&nbsp;</th>
															<th>1 star</th>
															<th>2 stars</th>
															<th>3 stars</th>
															<th>4 stars</th>
															<th>5 stars</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Quality</td>
															<td>
																<input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
															</td>
															<td>
																<input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
															</td>
															<td>
																<input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
															</td>
															<td>
																<input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
															</td>
															<td>
																<input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
															</td>
														</tr>
														<tr>
															<td>Value</td>
															<td>
																<input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
															</td>
															<td>
																<input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
															</td>
															<td>
																<input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
															</td>
															<td>
																<input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
															</td>
															<td>
																<input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
															</td>
														</tr>
														<tr>
															<td>Price</td>
															<td>
																<input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
															</td>
															<td>
																<input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
															</td>
															<td>
																<input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
															</td>
															<td>
																<input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
															</td>
															<td>
																<input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
															</td>
														</tr>
													</tbody>
												</table>

												<div class="form-group">
													<label>Nickname<span class="required">*</span></label>
													<input type="text" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Summary of Your Review<span class="required">*</span></label>
													<input type="text" class="form-control" required>
												</div>
												<div class="form-group mb-xlg">
													<label>Review<span class="required">*</span></label>
													<textarea cols="5" rows="6" class="form-control"></textarea>
												</div>

												<div class="text-right">
													<input type="submit" class="btn btn-primary" value="Submit Review">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
