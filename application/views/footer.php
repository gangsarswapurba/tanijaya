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
        <div class="wa text-center"><a class="button primary" href="https://wa.me/6281904191601"><ion-icon name="logo-whatsapp"></ion-icon> <span>0819-0419-1601</span></a></div>
      </div>
    </div>
  </div><!-- .contact -->

  <div id="footer" class="grid-container full footer">
      <div class="grid-x">
        <div class="cell small-12 medium-4 text-center">
          <span class="alamat">jln petung, ruko timur kfc papringan <br />(sebelah indonotebook dan roglasses)</span>
        </div>
        <div class="cell small-12 medium-4 text-center">
          <a class="" href="."><img id="header-logo" src="<?php echo base_url(); ?>asset/img/logo.png" alt="" /></a>
        </div>
        <div class="cell small-12 medium-4 text-center">
          <span class="media-sosial"><span>Ikuti kami</span> <a href="https://instagram.com"><ion-icon name="logo-instagram"></ion-icon></a></span>
        </div>
      </div>
    </div><!-- .footer -->

    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay"><ion-icon name="close-circle-outline"></ion-icon></span>
      <div class="overlay-content">
        <form action="javascript:void(0);">
          <input type="text" placeholder="CARI PRODUK" name="search">
          <button type="submit"><ion-icon name="ios-search"></ion-icon></button>
        </form>
      </div>
    </div>

    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/vendor/what-input.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/vendor/foundation.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/app.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>

</html>
