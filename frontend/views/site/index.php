<?php

/* @var $this yii\web\View */


$this->title = 'Peminjaman Ruang UPT TIK UNS';
?>
<div class="site-index">

  <div class="w3-content w3-display-container" style="width:100%;height:500px">

  <div class="w3-display-container mySlides">
    <img src="images/server.png" style="width:100%;height:500px">
  </div>

  <div class="w3-display-container mySlides">
    <img src="images/vicon.png" style="width:100%;height:500px">
    <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-black">
      Video Conference
    </div>
  </div>

  <div class="w3-display-container mySlides">
    <img src="images/aula.png" style="width:100%;height:500px">
    <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-black">
      Aula
    </div>
  </div>

  <div class="w3-display-container mySlides">
    <img src="images/lab2.jpeg" style="width:100%;height:500px">
    <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-black">
      LabKom 2
    </div>
  </div>

  <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div><br><br>
  <div class="container">
    <div class="content" style="text-align: center; color:#fff; font-size:20px; background-color:#1E90FF; padding: 40px; height:150;">
      <p>Selamat Datang di Sistem Informasi Monitoring Peminjaman Ruang UPT TIK Universitas Sebelas Maret Surakarta.
        Sistem Informasi ini dimaksudkan untuk memudahkan pelaksanaan peminjaman ruang dan memonitoring ruang di
        UPT TIK Universitas Sebelas Maret Surakarta.
      </p>
    </div>
    <br><br>
    <h2 class="header" style="text-align: center;">Alur Peminjaman Ruang UPT TIK</h2>
      <div class="row">
        <div class="col-md-4" style="text-align:center;">
          <div class="icon-block">
            <h2><i class="fa fa-chevron-circle-right" style="color:#1E90FF;"></i></h2>
            <h5 style="font-size: 20px;"><b>Pertama</b></h5>

            <p style="font-size:15px;">Buka alamat website peminjaman ruang di UPT TIK UNS.</p>
          </div>
        </div>

        <div class="col-md-4" style="text-align:center;">
          <div class="icon-block">
            <h2><i class="fa fa-chevron-circle-right" style="color:#1E90FF;"></i></h2>
            <h5 style="font-size: 20px;"><b>Kedua</b></h5>

            <p style="font-size:15px;">Login atau Masuk ke akun anda, Jika belum memiliki silakan daftar disini.</p>
          </div>
        </div>

        <div class="col-md-4" style="text-align:center;">
          <div class="icon-block">
            <h2><i class="fa fa-chevron-circle-right" style="color:#1E90FF;"></i></h2>
            <h5 style="font-size: 20px;"><b>Ketiga</b></h5>

            <p style="font-size:15px;">Lakukan pemesanan ruang yang akan digunakan secara online.</p>
          </div>
        </div>


      </div>

      <div class="row">
        <div class="col-md-4" style="text-align:center;">
          <div class="icon-block">
            <h2><i class="fa fa-chevron-circle-right" style="color:#1E90FF;"></i></h2>
            <h5 style="font-size: 20px;"><b>Keempat</b></h5>

            <p style="font-size:15px;">Download contoh berkas peminjaman ruang.</p>
          </div>
        </div>

        <div class="col-md-4" style="text-align:center;">
          <div class="icon-block">
            <h2><i class="fa fa-chevron-circle-right" style="color:#1E90FF;"></i></h2>
            <h5 style="font-size: 20px;"><b>Kelima</b></h5>

            <p style="font-size:15px;">Pengumpulan berkas peminjaman ke pengelola.</p>
          </div>
        </div>

        <div class="col-md-4" style="text-align:center;">
          <div class="icon-block">
            <h2><i class="fa fa-chevron-circle-right" style="color:#1E90FF;"></i></h2>
            <h5 style="font-size: 20px;"><b>Keenam</b></h5>

            <p style="font-size:15px;">Menunggu acc dari pengelola.</p>
          </div>
        </div>

      </div>
    <br><br>

    <div class="section">

    </div>
  </div>
</div>
<script>

var slideIndex = 1;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

</script>
