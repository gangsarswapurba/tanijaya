<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TANIJAYA - The Best Sayuran Marketplace In The World</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Mui:400:900|Playfair+Display:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/foundation.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/app.css">
</head>

<body class="<?php echo $this->router->fetch_class(); ?>">

    <div class="top-bar topbar-center-logo">
        <div class="top-bar-left">
          <ul class="menu">
            <li>
              <a id="search" href="javascript:void(0);" onclick="openSearch()"><ion-icon name="ios-search"></ion-icon></a>
            </li>
          </ul>
        </div>
        <div class="top-bar-center">
          <a class="" href="."><img id="header-logo" src="<?php echo base_url(); ?>asset/img/logo.png" alt="" /></a>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
              <li>
                <a id="cart" href="<?php echo base_url(); ?>cart"><ion-icon name="cart"></ion-icon></a>
              </li>
            </ul>
        </div>
    </div>
