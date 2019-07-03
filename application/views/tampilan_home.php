
<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
  <div id="revolutionSlider" class="slider rev_slider manual">
    <ul>
      <li data-transition="fade">
        <img src="<?php echo base_url(); ?>assets/barang/timeline1.jpg"
          alt="slide bg"
          data-bgposition="center center"
          data-bgfit="cover"
          data-bgrepeat="no-repeat"
          class="rev-slidebg">

        <div class="tp-caption"
          data-x="15"
          data-y="center" data-voffset="-85"
          data-start="500"
          data-whitespace="nowrap"
          data-transform_in="y:[100%];s:500;"
          data-transform_out="opacity:0;s:500;"
          data-responsive_offset="on"
          style="z-index: 5; font-size: 26px; text-transform: uppercase; font-weight:600; line-height:1; color: #fff;"
          data-mask_in="x:0px;y:0px;">Baru</div>

        <div class="tp-caption"
          data-x="12"
          data-y="center" data-voffset="-31"
          data-start="1000"
          data-whitespace="nowrap"
          data-transform_in="y:[100%];s:500;"
          data-transform_out="opacity:0;s:500;"
          data-responsive_offset="on"
          style="z-index: 5; font-size: 80px; font-weight:800; line-height:1.4; color: #fff; letter-spacing: -6px; padding-right:10px;"
          data-mask_in="x:0px;y:0px;">Fashion</div>

        <div class="tp-caption"
          data-x="225"
          data-y="center" data-voffset="28"
          data-start="1500"
          data-responsive_offset="on"
          style="z-index: 5; font-size: 25px; font-weight: 300; line-height:1; color: #fff;"
          data-transform_in="y:[100%];opacity:0;s:500;">Up to <span style="font-weight:800;">70% OFF</span></div>

        <div class="tp-caption tp-resizeme"
          data-x="320"
          data-y="320" data-voffset="70"
          data-start="2000"
          data-responsive_offset="on"
          style="z-index: 5; font-size: 16px; font-weight: 400; line-height:1; color:#fff;"
          data-transform_in="y:[100%];opacity:0;s:500;"><a href="#barang" class="btn btn-default" style="text-transform: uppercase;">Belanja sekarang</a></div>
      </li>
      <li data-transition="fade">
        <img src="<?php echo base_url(); ?>assets/barang/timeline2.jpg"
          alt="slide bg"
          data-bgposition="center center"
          data-bgfit="cover"
          data-bgrepeat="no-repeat"
          class="rev-slidebg">

        <div class="tp-caption"
          data-x="15"
          data-y="center" data-voffset="-85"
          data-start="500"
          data-whitespace="nowrap"
          data-transform_in="y:[100%];s:500;"
          data-transform_out="opacity:0;s:500;"
          data-responsive_offset="on"
          style="z-index: 5; font-size: 26px; text-transform: uppercase; font-weight:600; line-height:1; color: #fff;padding-right:10px"
          data-mask_in="x:0px;y:0px;">Exclusive</div>

        <div class="tp-caption"
          data-x="14"
          data-y="center" data-voffset="-31"
          data-start="1000"
          data-whitespace="nowrap"
          data-transform_in="y:[100%];s:500;"
          data-transform_out="opacity:0;s:500;"
          data-responsive_offset="on"
          style="z-index: 5; font-size: 80px; font-weight:800; line-height:1.4; color: #fff; letter-spacing: -6px; padding-right:10px;"
          data-mask_in="x:0px;y:0px;">Elektronik</div>

        <div class="tp-caption"
          data-x="225"
          data-y="center" data-voffset="28"
          data-start="1500"
          data-responsive_offset="on"
          style="z-index: 5; font-size: 25px; font-weight: 300; line-height:1; color: #fff;"
          data-transform_in="y:[100%];opacity:0;s:500;">Harga Terjangkau</div>

        <div class="tp-caption"
          data-x="320"
          data-y="320" data-voffset="70"
          data-start="2000"
          data-responsive_offset="on"
          style="z-index: 5; font-size: 16px; font-weight: 400; line-height:1; color:#fff;"
          data-transform_in="y:[100%];opacity:0;s:500;"><a href="#barang" class="btn btn-default" style="text-transform: uppercase;">Belanja sekarang</a></div>
      </li>
    </ul>
  </div>
</div>

<div class="banners-container" id="barang">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <a href="<?php echo base_url(); ?>kategori/elektronik" class="banner">
          <img src="<?php echo base_url(); ?>assets/barang/elektronik.jpg" alt="Banner">
          <span class="ban-title">Elektronik</span>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="<?php echo base_url(); ?>kategori/fashion" class="banner">
          <img src="<?php echo base_url(); ?>assets/barang/fashion.jpg" alt="Banner">
          <span class="ban-title">Fashion</span>
        </a>
      </div>
      <div class="col-sm-4">
        <a href="<?php echo base_url(); ?>kategori/<?php echo str_replace('-lain', 'nya','lain-lain'); ?>" class="banner">
          <img src="<?php echo base_url(); ?>assets/barang/lain-lain.jpg" alt="Banner">
          <span class="ban-title">Lain-lain</span>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container mb-lg">

          <h2 class="slider-title">
                    <span class="inline-title">Produk Terkini</span>
                    <span class="line"></span>
          </h2>

          <div class="owl-carousel owl-theme manual featured-products-carousel">

    <?php
    foreach ($data->result() as $row) {
    ?>
    <div class="product">
      <figure class="product-image-area">
          <img class="portrait" src="<?php echo base_url(); ?>assets/barang/<?php echo $row->gambar; ?>" alt="<?php echo $row->nama; ?>">
          <a href="<?php echo base_url() ?>barang/detail/<?php echo str_replace(' ', '_',$row->nama); ?>" title="<?php echo $row->nama; ?>" class="product-image" >
        </a>

        <a href="<?php echo base_url() ?>barang/detail/<?php echo str_replace(' ', '_',$row->nama); ?>" class="product-quickview">
          <i class="fa fa-share-square-o"></i>
          <span>Quick View</span>
        </a>
      </figure>
      <div class="product-details-area">
        <h2 class="product-name"><a href="<?php echo base_url() ?>barang/detail/<?php echo str_replace(' ', '_',$row->nama); ?>" title="<?php echo $row->nama; ?>"><?php echo substr($row->nama,0,20); ?></a></h2>

        <div class="product-price-box">
          <span class="product-price">Rp. <?php echo number_format($row->harga,0,",","."); ?>,00</span>

        </div>

        <div class="product-actions">

          <a href="<?php echo base_url() ?>barang/detail/<?php echo str_replace(' ', '_',$row->nama); ?>" class="addtocart" title="Add to Cart">
            <span>Detail</span>
          </a>

        </div>
      </div>

    </div>
  <?php } ?>

  </div>
</div>
