<div class="grid-container cart">

  <h2>Checkout</h2>

<div class="grid-x grid-margin-x">
  <div class="cell medium-6 small-12">

    <?php echo form_open("checkout");?>

    <?php echo form_label('Nama', 'nama'); ?>
    <?php echo form_input('nama'); ?>

    <?php echo form_label('Alamat', 'alamt'); ?>
    <?php $options = array('name' => 'alamat', 'rows' => '4'); ?>
    <?php echo form_textarea($options); ?>

    <?php echo form_label('No. HP', 'no_hp'); ?>
    <?php echo form_input('no_hp'); ?>

    <?php $options = array('name' => 'submit', 'value' => 'BAYAR', 'id' => 'bayar', 'class' => 'button primary'); ?>
    <?php echo form_submit($options); ?>

    <?php echo form_close();?>

  </div><!-- .cell -->
</div><!-- .grid-x -->

</div>
