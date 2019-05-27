<div class="grid-container fluid produk-favorit">
  <div class="grid-x grid-margin-x">

<?php $i = 0; ?>

<?php foreach ($lima_produk_favorit as $key => $produk): ?>
  <div class="cell medium-2 <?php echo $i == 0 ? 'medium-offset-1' : ''; ?> favorit">
      <a class="produk-thumb" href="<?php echo base_url(); ?>produk/index/<?php echo $produk['id']; ?>"><img class="foto" src="<?php echo base_url(); ?>assets/img/product/<?php echo $produk['foto']; ?>">
      <div class="detail">
        <div class="kota">
          <?php echo $produk['kota']; ?>
        </div>
        <div class="nama">
          <?php echo $produk['nama']; ?>
        </div>
        <div class="harga">
         Rp<?php echo $this->cart->format_number($produk['harga']) ?>/<?php echo $produk['per'] == 1 ? '' : $produk['per']; ?><?php echo $produk['satuan']; ?>

				</div>
				</div>
    </a>
  </div>

  <?php $i++; ?>
<?php endforeach; ?>

  </div>
</div>
