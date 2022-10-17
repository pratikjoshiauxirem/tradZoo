<!doctype html>
<html lang="en" id="html">
<?php $uri = service('uri'); ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,   minimum-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/images/logo.webp">
    <script src="https://kit.fontawesome.com/1565c9f77e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />          
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?=($uri->getSegment(1)=='home'?'Tradzoo- Learning | Trading | Earning':null) ?>
    <?=($uri->getSegment(1)=='screener'?'Trazoo- Prize action screener':null) ?>
    <?=($uri->getSegment(1)=='about'?'About us | TradZoo':null) ?>
    <?=($uri->getSegment(1)=='blog'?'Latest Post by TradZoo':null) ?>
    <?=($uri->getSegment(1)=='home'?'Tradzoo- Learning | Trading | Earning':null) ?>
    <?=($uri->getSegment(1)==''?'Tradzoo| Platoform for Traders and Investers':null) ?>
  </title>
    <style>
      .font-25{
        font-size: 20px;
      }
      html{
        overflow-x:hidden;
        font-size:100%;
      }
    </style>
  </head>
  <body>
  
   