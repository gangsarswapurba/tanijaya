<!DOCTYPE html>
<html>
<head>
	<title>Tani Jaya - Admin</title>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Mui:400:900|Playfair+Display:400,400i" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin.css">
</head>
<body>
	<div class="admin-menu">
		<a href='<?php echo base_url() ?>'>Home</a> |
		<a href='<?php echo base_url() ?>admin/pesanan'>Pesanan</a> |
		<a href='<?php echo base_url() ?>admin/pembeli'>Pembeli</a> |
		<a href='<?php echo base_url() ?>admin/produk'>Produk</a> |
		<a href='<?php echo base_url() ?>admin/kategori'>Kategori</a> |
		<a href='<?php echo base_url() ?>admin/pengaturan'>Pengaturan</a> |
		<a href='<?php echo base_url() ?>admin/banner'>Banner</a> |
		<a href='https://dashboard.tawk.to' target="_blank">Chat</a> |
		<a href='<?php echo base_url()?>auth/logout'>Logout</a>
	</div>
	<div style='height:20px;'></div>
    <div style="padding: 10px">
			<img src="<?php echo base_url(); ?>assets/img/banner/<?php echo $banner; ?>" alt="" style="max-height: 400px;">
			<br />
			<br />
			<div class="label secondary">
				1920x800px is recommended
			</div>
			<br />
			<br />
			<?php echo form_open_multipart('admin/banner');

					echo form_upload('banner');

					echo form_label('URL', 'banner_url');

					?>
					<div class="grid-x">
						<div class="cell large-3">

					<?
					$data = array(
					        'name'          => 'banner_url',
					        'id'            		=> 'banner_url'
					);
					echo form_input('banner_url', $banner_url);
					?>
					</div>
				</div>
					<?

					$attributes = array(
					        'class' => 'button shadow',
					        'style' => 'color: #FFFFFF;'
					);
					echo form_submit('submit', 'Submit', $attributes);
			?>
			<?php echo form_close(); ?>
    </div>
</body>
</html>
