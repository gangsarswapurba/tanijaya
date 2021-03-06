<div class="grid-container full vertical-line">
    <div class="grid-x">
      <div class="cell medium-6 line">
      </div>
      <div class="cell medium-6">

      </div>
    </div>
  </div>



<div class="grid-container contact">
    <div class="grid-x">
      <div class="cell small-12">
        <div class="lambang-tanya text-center"><ion-icon class="" name="ios-help-circle-outline"></ion-icon></div>
      </div>
    </div>
    <div class="grid-x">
      <div class="cell small-12">
        <div class="tanya-langsung-text text-center">atau mau tanya-tanya langsung?</div>
      </div>
    </div>
    <div class="grid-x">
      <div class="cell small-12">
        <div class="wa text-center"><a class="button primary" href="https://wa.me/<?php echo $no_wa; ?>"><ion-icon name="logo-whatsapp"></ion-icon> <span>0<?php echo $no_wa; ?></span></a></div>
      </div>
    </div>
  </div><!-- .contact -->

  <div id="footer" class="grid-container full footer">
      <div class="grid-x">
        <div class="cell small-12 medium-4 text-center">
          <span class="alamat"><?php echo nl2br($alamat); ?></span>
        </div>
        <div class="cell small-12 medium-4 text-center">
          <a class="" href="<?php echo base_url(); ?>"><img id="header-logo" src="<?php echo base_url(); ?>assets/img/logo.png" alt="" /></a>
        </div>
        <div class="cell small-12 medium-4 text-center">
          <span class="media-sosial"><span>Ikuti kami</span> <a href="https://instagram.com/<?php echo $ig; ?>"><ion-icon name="logo-instagram"></ion-icon></a></span>
        </div>
      </div>
    </div><!-- .footer -->

    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay"><ion-icon name="close-circle-outline"></ion-icon></span>
      <div class="overlay-content">
        <?php $attributes = 'method="get"'; ?>
        <?php echo form_open('pencarian/index', $attributes); ?>
          <!-- <input type="text" placeholder="CARI PRODUK" name="pencarian"> -->
          <?php
          $data = array(
                  'name'              => 'keyword',
                  'id'                     => 'kolom_pencarian',
                  // 'value'               => 'johndoe',
                  // 'maxlength'     => '100',
                  // 'size'                 => '50',
                  // 'style'               => 'width:50%',
                  'placeholder'         => 'contoh: jeruk, apel, madura, sleman'
          );
           ?>
          <?php echo form_input($data); ?>
          <button type="submit"><ion-icon name="ios-search"></ion-icon></button>
        <?php echo form_close(); ?>
      </div>

    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/what-input.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/foundation.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.js?as"></script>
    <script>
        $(document).foundation();
    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d0f7a3953d10a56bd7b71d8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
