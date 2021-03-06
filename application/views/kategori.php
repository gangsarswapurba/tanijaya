<div class="grid-container hasil-pencarian">

  <h1 class="text-center"><?php echo humanize($kategori['nama']); ?></h1>

  <div class="grid-x category-inner">
    <?php if (!empty($produk_produk)): ?>
      <?php foreach ($produk_produk as $key => $produk): ?>
        <div class="cell medium-3 ">
          <a href="<?php echo base_url() ?>produk/index/<?php echo $produk['id'] ?>">
          <div class="cell medium-3 hovers produk-hasil-pencarian text-center">
            <div class="c-produk">
              <div class="cp-img">
                <img src="<?php echo base_url(); ?>assets/img/product/<?php echo $produk['foto']; ?>" alt="<?php echo $produk['nama'] ?> <?php echo $produk['kota'] ?>">
              </div>
              <div class="kota"><?php echo $produk['kota']; ?></div>
              <div class="nama"><?php echo $produk['nama']; ?></div>
              <div class="harga">Rp<?php echo number_format($produk['harga']); ?>/<?php echo $produk['per'] == 1 ? '' : $produk['per']; ?><?php echo $produk['satuan'] ?></div>
            </div>
          </div>
          </a>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="cell medium-12 text-center not-found">
        <img src="<?php echo base_url(); ?>assets/img/iconfinder_Scare_3713833.png" alt="not found">
        <h4>not found!</h4>
      </div>
    <?php endif; ?>

    </div>

  </div>


</div><!-- .grid-container -->
