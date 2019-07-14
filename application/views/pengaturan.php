<?php if (!empty($this->input->post())): ?>
<!-- <pre><?php print_r($this->input->post()) ?></pre> -->
<?php endif; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tani Jaya - Pengaturan</title>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Mui:400:900|Playfair+Display:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-foundation.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin.css">
</head>
<body class="pengaturan">

  <div class="grid-container fluid">
    <div class="grid-x">
      <div class="cell medium-12 admin-menu">
				<a href='<?php echo base_url() ?>'>Home</a> |
				<a href='<?php echo base_url() ?>admin/pesanan'>Pesanan</a> |
				<a href='<?php echo base_url() ?>admin/pembeli'>Pembeli</a> |
				<a href='<?php echo base_url() ?>admin/produk'>Produk</a> |
				<a href='<?php echo base_url() ?>admin/kategori'>Kategori</a> |
				<a href='<?php echo base_url() ?>admin/pengaturan'>Pengaturan</a> |
				<a href='<?php echo base_url() ?>admin/banner'>Banner</a> |
				<a href='https://dashboard.tawk.to' target="_blank">Chat</a> |
				<a href='https://login.mailchimp.com' target="_blank">Newsletter</a> |
				<a href='<?php echo base_url()?>auth/logout'>Logout</a>
        </div>
      </div>

    <div class="grid-x">
      <div class="cell medium-6">

    <?php $attributes = array('class' => 'pengaturan', 'id' => 'pengaturan'); ?>
    <?php echo form_open("admin/pengaturan", $attributes);?>

      <p>
        <?php echo form_label('No. WhatsApp tanpa kode negara; contoh: 81234567890', 'no_wa'); ?>
  			<?php $data = array(
  				'class' => 'email',
  				'id' => 'email',
  				'name' => 'no_wa',
  				'placeholder' => 'No. WhatsApp',
          'value' =>$no_wa
  			); ?>

        <div class="input-group">
            <span class="input-group-label">+62</span>
            <?php echo form_input($data);?>
          </div>
      </p>

      <p>
        <?php echo form_label('Alamat', 'alamat'); ?>
  			<?php $data = array(
  				'class' => 'alamat',
  				'id' => 'alamat',
  				'name' => 'alamat',
  				'placeholder' => 'Alamat',
          'value' => $alamat
  			); ?>
        <?php echo form_textarea($data);?>
      </p>

      <p>
        <?php echo form_label('Username Instagram tanpa tanda @; contoh: instagram', 'username_instagram'); ?>
        <?php $data = array(
          'class' => 'instagram',
          'id' => 'instagram',
          'name' => 'ig',
          'type' => 'text',
          'placeholder' => 'Username Instagram',
          'value' => $ig
        ); ?>
        <div class="input-group">
            <span class="input-group-label">@</span>
            <?php echo form_input($data);?>
          </div>

      </p>

			<div class="grid-x">
				<div class="cell medium-6">
					<?php if (!empty($this->session->flashdata('setting_saved'))): ?>
						<div id="infoMessage" class="text-center"><p><?php echo $this->session->flashdata('setting_saved');?></p></div>
					<?php endif; ?>
				</div>
				<div class="cell medium-6">
					<?php $attributes = array('class' => 'button', 'id' => 'submit'); ?>
					<p class="submit-button">
						<?php echo form_submit('submit', 'Submit', $attributes);?>
					</p>
				</div>

			</div>




    <?php echo form_close();?>

    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/what-input.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/foundation.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js?as"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
