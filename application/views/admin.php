<!DOCTYPE html>
<html>
<head>
	<title>Tani Jaya - Admin</title>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin.css">
</head>
<body>
	<div>
		<a href='<?php echo base_url() ?>'>Home</a> |
		<a href='<?php echo base_url() ?>admin/produk'>Produk</a> |
		<a href='<?php echo base_url() ?>admin/kategori'>Kategori</a> |
		<a href='<?php echo base_url()?>auth/logout'>Logout</a>
	</div>
	<div style='height:20px;'></div>
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
