<div class="grid-container cart">

  <h2>Pesanan anda</h2>

  <?php if (!empty($this->cart->contents())): ?>

  <table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
                <td class="foto"><a href="<?php echo base_url(); ?>produk/index/<?php echo $items['id']; ?>"><img src="<?php echo base_url(); ?>assets/img/product/<?php echo $items['foto'] ?>" alt=""></a></td>
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
  <a href="<?php echo base_url(); ?>checkout" class="button primary">CHECKOUT</a>
</div>

  <?php else: ?>
  <div class="cell medium-12 text-center not-found">
    <img src="<?php echo base_url(); ?>assets/img/iconfinder_Scare_3713833.png" alt="not found">
    <h4>anda belum memasukkan apa-apa</h4>
</div>
  <?php endif; ?>

</div>
