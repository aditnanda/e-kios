<div class="slider-container" style="height:100px;">
</div>
<br><br>
  <style>
  .kotak
 {
  padding:10px;
  border:1px solid #e8e8e8;
  margin-bottom:15px;
  background:#F4F4F4;
  border-radius:5px;
 }
  </style>

   <div class="container">
     <div class="row">
       <?php
        foreach($barang as $p){
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="kotak">
            <a href="#"></a>
            <a href="#"><img class="img-thumbnail portrait" src="<?php echo base_url() . 'assets/barang/'.$p->gambar  ?>"/></a>
              <div class="card-body">
                <h1 class="card-title">
                  <a href="#"><?php echo $p->nama ?></a>
                </h1>
                <h4>Rp. <?php echo number_format($p->harga,0,",","."); ?>,00</h4>
                  <p class="card-text">Stok tersisa : <?php echo $p->stok ?></p>
             </div>
              <div class="card-footer">
                <a href="<?php echo base_url();?>barang/ubah/<?php echo $p->id ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                <a href="<?php echo base_url();?>barang/hapus/<?php echo $p->id ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
              </div>
            </div>
          </div>
      <?php } ?>
     </div>

</div> <!-- /container -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
