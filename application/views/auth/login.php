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

<div class="grid-container">
	<div class="grid-x align-right go-back-home">
		<div class="cell medium-4 text-right">
			<span>Go back to</span><a href="<?php echo base_url(); ?>"> <ion-icon name="home"></ion-icon> <span>home page</span></a>
		</div>
	</div>
  <div class="grid-x align-center-middle" style="height: 540px;">
    <div class="cell medium-4">
      <div class="logo text-center" >
        <img class="" src="<?php echo base_url(); ?>/assets/img/logo.png" alt="logo tanijaya">
      </div>

      <div id="infoMessage" class="text-center"><?php echo $message;?></div>

<?php $attributes = array('class' => 'login', 'id' => 'login'); ?>

  <?php echo form_open("auth/login", $attributes);?>

    <p>
			<?php $data = array(
				'class' => 'email',
				'id' => 'email',
				'name' => 'identity',
				'placeholder' => 'Email'
			); ?>
      <?php echo form_input($data);?>
    </p>

    <p>
			<?php $data = array(
				'class' => 'password',
				'id' => 'password',
				'name' => 'password',
				'type' => 'password',
				'placeholder' => 'Password'
			); ?>
      <?php echo form_input($data);?>
    </p>

		<?php $attributes = array('class' => 'button', 'id' => 'submit'); ?>
    <p class="text-center"><?php echo form_submit('submit', lang('login_submit_btn'), $attributes);?></p>

  <?php echo form_close();?>
</div>

</div><!-- .grid-x -->
</div><!-- .grid-container -->



</body>
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/what-input.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/foundation.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js?as"></script>
<script>
    $(document).foundation();
</script>
</html>
