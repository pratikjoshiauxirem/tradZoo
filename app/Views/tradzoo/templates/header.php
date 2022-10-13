<div class="container-fluid">
<?php $uri = service('uri'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <a class="navbar-brand" href="#">
    <img src="assets/images/images/logo.webp" class="" style="width:6rem !important;"> 
</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" id="nav">
    <ul class="navbar-nav float-right">
      <li class="nav-item <?=($uri->getSegment(1)=='home'?'active':null) ?>">
        <a class="nav-link" href="/home">Home </a>
      </li>
      <li class="nav-item <?=($uri->getSegment(1)=='screener'?'active':null) ?>">
        <a class="nav-link" href="/screener">Screener</a>
      </li>
      <li class="nav-item <?=($uri->getSegment(1)=='about'?'active':null) ?>">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item <?=($uri->getSegment(1)=='blog'?'active':null) ?>">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="nav-item <?=($uri->getSegment(1)=='contact'?'active':null) ?>">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://play.google.com/store/apps/details?id=com.tradzoo.app&hl=en&gl=US"><img src="assets2/images/google-play.png" style="width:7rem;"></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" target="_blank" href="https://apps.apple.com/in/app/tradzoo-trade-analysis-app/id1568104426"><img src="assets2/images/apple-store.png" style="width:7rem;"></a>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="conttainer-fluid m-0 p-0" id="sidebar">
    <ul type="none" class="m-0 p-0">
                <li style="background-color:blue;" class="p-3">
                    <a href="https://m.facebook.com/TradZoo-104979215270887/" class="font-weight-bold text-white"><span class="fa fa-facebook"></span></a>
                </li>
                
                <li style="background-color:rgb(0,172,238);" class="p-3">
                    <a href="https://twitter.com/TradZoo?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="font-weight-bold text-white"><span class="fa fa-twitter"></span></a>
                </li>
                <li style="background:linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);" class="p-3">
                    <a href="https://www.instagram.com/tradzoo/?hl=en" class="font-weight-bold text-white"><span class="fa fa-instagram"></span></a>
                </li>
                <li style="background-color:red;" class="p-3">
                    <a href="https://www.youtube.com/channel/UC6cO64zBUFLakJW-QZWYONg" class="font-weight-bold text-white"><span class="fa fa-youtube"></span></a>
                </li>
               
    </ul>
</div>
