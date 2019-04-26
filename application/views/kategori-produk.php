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
      <a href="<?php echo base_url(); ?>kategori/index/<?php echo $kategori_produk['id'] ?>"><img class="foto" src="<?php echo base_url() ?>assets/img/kategori/<?php echo $kategori_produk['foto']; ?>" /></a>
    </div>
    <div class="cell medium-6">
      <div class="text">
        <a href="<?php echo base_url(); ?>kategori/index/<?php echo $kategori_produk['id'] ?>"><h3 class=""><?php echo humanize($kategori_produk['nama']); ?></h3></a>
        <div class=""><a class="button primary" href="<?php echo base_url(); ?>kategori/index/<?php echo $kategori_produk['id'] ?>">SELENGKAPNYA</a></div>
      </div>
    </div>
  </div>

<?php else: ?>
  <div class="grid-x kategori-produk kanan">
    <div class="cell medium-6">
      <div class="text">
        <a href="<?php echo base_url(); ?>kategori/index/<?php echo $kategori_produk['id'] ?>"><h3 class=""><?php echo humanize($kategori_produk['nama']); ?></h3></a>
        <div class=""><a class="button primary" href="<?php echo base_url(); ?>kategori/index/<?php echo $kategori_produk['id'] ?>">SELENGKAPNYA</a></div>
      </div>
    </div>
    <div class="cell medium-6">
      <a href="<?php echo base_url(); ?>kategori/index/<?php echo $kategori_produk['id'] ?>"><img class="foto" src="<?php echo base_url() ?>assets/img/kategori/<?php echo $kategori_produk['foto']; ?>" /></a>
    </div>
  </div>
<?php endif; ?>

<?php endforeach; ?>


</div><!-- .grid-container -->
