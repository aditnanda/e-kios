<div class="slider-container" style="height:100px;">
</div>

<br><br>
<div class="container">
  <h1 align="center"><b>LAPORAN PENJUALAN E-KIOS</b></h1>
  <h2 align="center">Bulan <?php echo date('m'); ?> 2018</h2>

  <table class="table">
    <thead>
      <tr style="font-weight:bold;">
        <td>No</td>
        <td>Tanggal dan Waktu</td>
        <td>Nama Penggguna</td>
        <td>Email</td>
        <td>Nama Barang</td>
        <td>Jumlah</td>
        <td>Harga Satuan</td>
        <td>Subtotal</td>
      </tr>
    </thead>
    <?php $no=1;
    $totqty = 0;
    $totsubtotal = 0;
    foreach ($data as $key){ ?>
      <tbody>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $key['tanggal']; ?></td>
          <td><?php echo $key['nama']; ?></td>
          <td><?php echo $key['email']; ?></td>
          <td><?php echo $key['nama_barang']; ?></td>
          <td><?php echo $key['qty']; ?></td>
          <td>Rp. <?php $qty = $key['subtotal'] / $key['qty']; echo number_format($qty,0,",","."); ?>,00</td>
          <td>Rp. <?php echo number_format($key['subtotal'],0,",","."); ?>,00</td>
        </tr>
      </tbody>
      <?php
      $totqty = $key['qty'] + $totqty;
      $totsubtotal = $key['subtotal'] + $totsubtotal;
      } ?>
      <tfoot>
        <tr>
          <td colspan="5">Total Keseluruhan</td>
          <td><?php echo $totqty; ?></td>
          <td></td>
          <td>Rp. <?php echo number_format($totsubtotal,0,",","."); ?>,00</td>
        </tr>
      </tfoot>



  </table>
  <br>
  <?php if(!empty($nama)){?>
  <a href="<?php echo base_url(); ?>home/laporan_pdf" target="_blank" class="btn btn-primary">Export ke PDF</a>
<?php } ?>
  <br><br>
</div>
