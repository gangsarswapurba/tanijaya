<div class="grid-container cart">
  <h2>Pesanan anda</h2>
  <div class="grid-x item">
    <div class="cell medium-2 foto-thumb">
      <img src="<?php echo base_url(); ?>asset/img/product/iconfinder_Apple_56029.png" alt="">
    </div>
    <div class="cell medium-4 deskripsi">
      Apel Madura (1kg)
    </div>
    <div class="cell medium-5 qty">
      <label for="qty-stepper"> QTY:</label>
      <input id="qty-stepper" class='' type="number" placeholder="" value="1" min="0">
    </div>
    <div class="cell medium-1">
      <a href="#"><ion-icon name="close-circle-outline"></ion-icon></a>
    </div>
  </div>
</div>
<div class="grid-container cart">

  <h2>Pesanan anda</h2>

  <?php if (!empty($this->cart->contents())): ?>

  <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
                <td class="foto"><a href="<?php echo base_url(); ?>produk/index/<?php echo $items['id']; ?>"><img src="<?php echo $items['foto'] ?>" alt=""></a></td>
                <td class="nama">
                        <?php echo $items['name'] . ' ' . $items['kota'] . ' (' . $items['per'] . $items['satuan'] . ')'; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td class="qty"><span class="qty-text">QTY:</span> <?php echo form_input(array('type' => 'number', 'name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td class="keluarkan"><a href="<?php echo base_url(); ?>keranjang/keluarkan/<?php echo $items['rowid'] ?>"><ion-icon name="close-circle-outline"></ion-icon></a></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>

</table>

<div class="cell medium-12 text-center hitung-total">
  <button class="button primary" type="button" name="button">HITUNG TOTAL</button>
</div>

  <?php else: ?>
  <div class="cell medium-12 text-center not-found">
    <img src="<?php echo base_url(); ?>asset/img/iconfinder_Scare_3713833.png" alt="not found">
    <h4>anda belum memasukkan apa-apa</h4>
</div>
  <?php endif; ?>

</div>
