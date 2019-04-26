<div class="grid-container produk">
  <div class="grid-x text-left breadcrumb">
    <a href="<?php echo base_url(); ?>"><span>Home</span></a><span class="pemisah"><ion-icon name="ios-arrow-forward"></ion-icon></span> <a href="<?php echo base_url(); ?>kategori/index/<?php echo $kategori['id']; ?>"><span><?php echo humanize($kategori['nama']); ?></span></a>
  </div>
  <div class="grid-x">
    <div class="cell medium-6">
      <img class="foto-utama" src="<?php echo base_url(); ?>assets/img/product/<?php echo $produk['foto'] ?>" alt="">
    </div>
    <div class="cell medium-6">
      <h3 class="kota"><?php echo $produk['kota'] ?></h3>
      <h2 class="nama"><?php echo $produk['nama'] ?></h2>
      <h4 class="satuan">(<?php echo $produk['per'] ?><?php echo $produk['satuan'] ?>)</h4>
      <div class="grid-x">
        <div class="cell medium-6">
          <div class="harga">
            <span class="harga-lama">Rp7.500.000</span><br />
           <span class="harga">Rp<?php echo $this->cart->format_number($produk['harga']) ?></span>
          </div>
        </div>
        <div class="cell medium-6">
          <?php $attributes = 'method="get"'; ?>
          <?php $hidden = array('product_id' => $produk['id']); ?>
          <?php echo form_open('keranjang/tambah', $attributes, $hidden); ?>
              <button class="button primary beli" type="submit" name="submit">BELI</button>
          <?php echo form_close(); ?>
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
