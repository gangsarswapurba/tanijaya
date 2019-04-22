<div class="grid-container daftar-kategori-produk">

<?php $kiri = 0 ?>

<?php foreach ($semua_kategori_produk as $key => $kategori_produk): ?>
  <!-- <pre>
  <?php //print_r($kategori_produk) ?>
</pre> -->

<?php $kiri == 1 ? $kiri = 0 : $kiri = 1;  ?>

<?php if ( $kiri ): ?>
  <div class="grid-x kategori-produk kiri">
    <div class="cell medium-6">
      <img class="foto" src="<?php echo $kategori_produk['foto']; ?>" />
    </div>
    <div class="cell medium-6">
      <div class="text">
        <h3 class=""><?php echo humanize($kategori_produk['nama']); ?></h3>
        <div class=""><a class="button primary" href="#">SELENGKAPNYA</a></div>
      </div>
    </div>
  </div>
<?php else: ?>
  <div class="grid-x kategori-produk kanan">
    <div class="cell medium-6">
      <div class="text">
        <h3 class=""><?php echo humanize($kategori_produk['nama']); ?></h3>
        <div class=""><a class="button primary" href="#">SELENGKAPNYA</a></div>
      </div>
    </div>
    <div class="cell medium-6">
      <img class="foto" src="<?php echo $kategori_produk['foto']; ?>" />
    </div>
  </div>
<?php endif; ?>

<?php endforeach; ?>

</div><!-- .grid-container -->
