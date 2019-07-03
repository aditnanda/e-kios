<div class="slider-container" style="height:100px;">
</div>


			<div role="main" class="main">




			<section class="page-header">
				<div class="container">
					<ul class="breadcrumb">
            <?php
             foreach($barang as $p){}
             ?>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>

						<li><a href="<?php echo base_url(); ?>kategori/<?php if(isset($p->kategori)) echo $p->kategori; ?>"><?php if(isset($p->kategori)) echo $p->kategori; ?></a></li>
					</ul>
				</div>
			</section>

			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-push-3">
						<div class="toolbar mb-none">
							<div class="sorter">
								<div class="sort-by">
									<label>Sort by:</label>
									<select>
										<option value="Position">Position</option>
										<option value="Name">Name</option>
										<option value="Price">Price</option>
									</select>
									<a href="#" title="Set Desc Direction">
										<img src="<?php echo base_url() ?>assets/img/demos/shop/i_asc_arrow.gif" alt="Set Desc Direction">
									</a>
								</div>

								<div class="view-mode">
									<span title="Grid">
										<i class="fa fa-th"></i>
									</span>
									<a href="#" title="List">
										<i class="fa fa-list-ul"></i>
									</a>
								</div>

								<ul class="pagination">
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
								</ul>

								<div class="limiter">
									<label>Show:</label>
									<select>
										<option value="12">12</option>
										<option value="24">24</option>
										<option value="36">36</option>
									</select>
								</div>
							</div>
						</div>

						<ul class="products-grid columns4">
              <?php
               foreach($barang as $p){
               ?>
							<li>
								<div class="product">
									<figure class="product-image-area">
										<a href="demo-shop-2-product-details.html" title="Product Name" class="product-image">
											<img class="portrait" src="<?php echo base_url() ?>assets/barang/<?php echo $p->gambar; ?>" alt="<?php if(isset($p->nama)) echo $p->nama; ?>">
										</a>

										<a href="<?php echo base_url() ?>barang/detail/<?php echo str_replace(' ', '_',$p->nama); ?>" class="product-quickview">
											<i class="fa fa-share-square-o"></i>
											<span>Quick View</span>
										</a>

									</figure>
									<div class="product-details-area">
										<h2 class="product-name"><a href="demo-shop-2-product-details.html" title="Product Name"><?php if(isset($p->nama)) echo $p->nama; ?></a></h2>

										<div class="product-price-box">
											<span class="product-price">Rp. <?php if(isset($p->harga)) echo number_format($p->harga,0,",","."); ?>,00</span>
										</div>

										<div class="product-actions">

											<a href="<?php echo base_url() ?>barang/detail/<?php echo str_replace(' ', '_',$p->nama); ?>" class="addtocart" title="Add to Cart">
												<span>Detail</span>
											</a>

										</div>
									</div>
								</div>
							</li>
            <?php } ?>

						</ul>

						<div class="toolbar-bottom">
							<div class="toolbar">
								<div class="sorter">
									<ul class="pagination">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
									</ul>

									<div class="limiter">
										<label>Show:</label>
										<select>
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>

					<aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">
						<div class="panel-group">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-category">
											Categories
										</a>
									</h4>
								</div>
								<div id="panel-filter-category" class="accordion-body collapse in">
									<div class="panel-body">
										<ul>
											<li><a href="<?php echo base_url(); ?>kategori/elektronik">Elektronik</a></li>
											<li><a href="<?php echo base_url(); ?>kategori/fashion">Fashion</a></li>
											<li><a href="<?php echo base_url(); ?>kategori/<?php echo str_replace('-lain', 'nya','lain-lain'); ?>">Lain - Lain</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-price">
											Price
										</a>
									</h4>
								</div>
								<div id="panel-filter-price" class="accordion-body collapse in">
									<div class="panel-body">
										<div class="filter-price">
                                            <div id="price-slider"></div>
                                            <div class="filter-price-details">
                                                <span>from</span>
                                                <input type="text" id="price-range-low" class="form-control" placeholder="Min">
                                                <span>to</span>
                                                <input type="text" id="price-range-high" class="form-control" placeholder="Max">
                                                <a href="#" class="btn btn-primary">FILTER</a>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>



						</div>


					</aside>
				</div>
			</div>

			</div>
