<div class="grid-container produk">
  <div class="grid-x">
    <div class="cell medium-6">
      <img class="foto-utama" src="<?php echo $produk['foto'] ?>" alt="">
    </div>
    <div class="cell medium-6">
      <h3 class="kota"><?php echo $produk['kota'] ?></h3>
      <h2 class="nama"><?php echo $produk['nama'] ?></h2>
      <h4 class="satuan">(<?php echo $produk['per'] ?><?php echo $produk['satuan'] ?>)</h4>
      <div class="grid-x">
        <div class="cell medium-6">
          <div class="harga">
            <span class="harga-lama">Rp7.500.000</span><br />
            <span class="harga">Rp<?php echo number_format($produk['harga']) ?></span>
          </div>
        </div>
        <div class="cell medium-6">
          <a href="<?php echo base_url(); ?>keranjang" class="button primary beli" type="button" name="button">BELI</a>
        </div>
      </div>
      <div class="separator">

      </div>
      <h5 class="deskripsi-title">DESKRIPSI</h5>
      <div class="deskripsi">
        <p><?php echo $produk['deskripsi']; ?></p>
      </div>
    </div>
  </div>
</div><!-- .grid-container -->
