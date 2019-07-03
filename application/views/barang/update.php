<div class="slider-container" style="height:100px;">
</div>
<br><br>

  <style>
  .file {
    visibility: hidden;
    position: absolute;
  }
  </style>

   <div class="container">
     <h3 align="center"><b>MERUBAH DATA PRODUK</b></h3>
 <div class="col-md-3">
 </div>
 <div class="jumbotron col-md-6">
   <?php foreach($barang as $r) {?>
     <?=form_open_multipart('barang/proses_ubah/'.$r->id)?>
    <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Produk" id="nama" value="<?php if(isset($r->nama)) echo $r->nama ?>" required>
    </div>
    <div class="form-group">
      <label for="harga">Harga :</label>
      <input type="number" name="harga" class="form-control" placeholder="Masukan Harga Produk" id="harga" value="<?php if(isset($r->harga)) echo $r->harga ?>" required>
    </div>
    <div class="form-group">
      <label for="stok">Stok :</label>
      <input type="number" name="stok" class="form-control" placeholder="Masukan Stok Produk" id="stok" value="<?php if(isset($r->stok)) echo $r->stok ?>" required>
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi :</label>
      <input type="text" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Produk" id="deskripsi" value="<?php if(isset($r->deskripsi)) echo $r->deskripsi ?>" required>
    </div>
    <div class="form-group">
      <label for="userfile">Gambar :</label>
      <input type="file" name="userfile" class="file">
      <div class="input-group col-xs-12">
        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
        <input type="text" class="form-control input-lg" disabled placeholder="Upload Gambar">
        <span class="input-group-btn">
          <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
        </span>
      </div><br>
    </div>
    <div class="form-group">
      <label for="kategori">Kategori :</label>
      <br>
      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
        <input type="radio" name="kategori" value="elektronik" <?php if(isset($r->kategori)) if ($r->kategori=='elektronik') {echo "checked";} ?> > &nbsp; Elektronik &nbsp;
      </label>
      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
        <input type="radio" name="kategori" value="fashion" <?php if(isset($r->kategori)) if ($r->kategori=='fashion') {echo "checked";} ?> > &nbsp; Fashion &nbsp;
      </label>
      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
        <input type="radio" name="kategori" value="lain-lain" <?php if(isset($r->kategori)) if ($r->kategori=='lain-lain') {echo "checked";} ?> > &nbsp; Lain-lain &nbsp;
      </label>
    </div>
    <br>
  <?php }?>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
 </div>

</div> <!-- /container -->
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
  <script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });
  </script>
