@extends('home')
<br>
<br>
<br>
<section class="cta">
    <div class="cta-content">
      <div class="container">
        <h2>Stop waiting.<br>Start from now.</h2>
        <a class="btn btn-primary btn-lg" href="login" role="button">Daftar Sekarang</a>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
<br>
<br>


<div>
    <br>
    <h1 class="text-center">Beasiswa Mahasiswa Indonesia</h1>
    <br>
    <p class="text-center pl-5 pr-5">Beasiswa ini merupakan beasiswa yang berfokus pada pendidikan. Berbagai kegiatan diadakan, baik melalui dunia maya maupun secara langsung, guna menumbuhkan kebiasaan baik, pengembangan diri, serta memperluas cakupan pendidikan di Indonesia. Tujuan platform ini memang untuk memberi lebih banyak kesempatan pendidikan bagi anak bangsa, agar mereka dapat meraih cita-cita. Nah, program beasiswa Penggerak Pendidikan ini adalah salah satunya. Beasiswa Penggerak Pendidikan ditujukan untuk mahasiswa on-going jenjang D3, D4, hingga S1. Selain memberikan beasiswa, program ini juga memiliki tujuan mempersiapkan kandidatnya menjadi pemuda berjiwa kepemimpinan. Mahasiswa yang dicari adalah mereka yang memiliki minat yang besar pada dunia pendidikan</p>
</div>
<!--- table -->
<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <h2 class="card-title text-center">Timeline</h2>
            <div class="table-responsive-sm ">
                <table class="table table-light table-bordered" >
                    <thead class="table-success">
                      <tr>
                        <th  style="width: 25%" scope="col">Jadwal</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Pendaftaran</th>
                        <td>25 - 30 November 2020</td>
                      </tr>
                      <tr>
                        <th scope="row">Pengumuman tahap 1</th>
                        <td>3 Desember 2020</td>
                      </tr>
                      <tr>
                        <th scope="row">Wawancara</th>
                        <td>4 - 7 Desember 2020</td>
                      </tr>
                      <tr>
                        <th scope="row">pengumuman akhir</th>
                        <td>12 Desember 2020</td>
                      </tr>
                    </tbody>
                  </table>
                </div> 
          </div>
        </div>
      </div>
    </div>
  </div>

<section class="features" id="features">
    <div class="container">
      <div class="section-heading text-center">
        <h2>Benefit</h2>
        <p class="text-muted">Hal hal yang bisa kamu dapat kan jika menjadi beswan beasiswa</p>
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-4 my-auto">
          <div class="device-container">
              <div class="benefit">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="img/story.jpg" class="img-fluid" alt="">
                </div>
              </div>
          </div>
        </div>
        <div class="col-lg-8 my-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item">
                    <img src="img/money.png" class="img-fluid" alt="">
                  <h3>Funding</h3>
                  <p class="text-muted">Dapatkan bantuan pembiayaan senilai 750/bulan</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item">
                    <img src="img/money.png" class="img-fluid" alt="">
                  <h3>Voluntering</h3>
                  <p class="text-muted">Menunjukkan kontribusi terhadap masyarakat melalui program volunteer</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item">
                    <img src="img/money.png" class="img-fluid" alt="">
                  <h3>Self development</h3>
                  <p class="text-muted">Adanya program pengembangan diri untuk meningkatkan kualitas individu</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item">
                    <img src="img/money.png" class="img-fluid" alt="">
                  <h3>New friends</h3>
                  <p class="text-muted">Dapatkan teman baru dari berbagai daerah</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <!--- list -->
        <div class="test ml-5">
            <br>
            <h3>Syarat pendaftaran</h3>
            <ul>
                <li>Mahasiswa/Mahasiswi minimal semester 5</li>
                <li>Tercatat sebagai mahasiswa aktif di perguruan tinggi indonesia</li>
                <li>Mengupload bukti KTM dan FRS </li>
                <li>Membuat motivation letter minimal 500 kata</li>
                <li>Mengupload transkrip IPK terakhir</li>
                <li>Mengupload CV terbaru</li>
            </ul>
            <br>
            <br>
        </div>
    </header>

    <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-center">
        
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
    </div>
    
    <!--/.Controls-->

  
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
  
      <!--First slide-->
      <div class="carousel-item active">
  
        <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"img src="{{ ('img/5.jpg ') }}"alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Hanifa SM</h4>
                <p class="card-text">Dengan mengikuti beasiswa ini saya mendapatkan banyak sekali manfaat, seperti self development yang membuat saya lebih baik</p>
              </div>
            </div>
          </div>
  
        <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"img src="{{ ('img/3.jpg ') }}"  alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Alif Faisha</h4>
                <p class="card-text">Beasiswa ini tidak hanya membantu dalam pembiayaan namun juga memberikan fasilitas berupa pengembangan diri.</p>
              </div>
            </div>
          </div>
  
        <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"img src="{{ ('img/1.jpg ') }}"  alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Zharfa H.Q</h4>
                <p class="card-text">Satu tahun bersama dengan teman teman baru dari beasiswa Mmahasiswa Indonesia membuat saya belajar banyak sekali, khususnya bagaimana cara berinteraksi dengan baik</p>
              </div>
            </div>
          </div>
        
        <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"img src="{{ ('img/2.jpg ') }}"  alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Rissa Khairina</h4>
                <p class="card-text">Beasiswa Mahasiswa Indonesia membantu saya meningkatkan rasa percaya diri saya.</p>
              </div>
            </div>
          </div>
  
      </div>
      <!--/.First slide-->
  
      <!--Second slide-->
      <div class="carousel-item">
  
      <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"img src="{{ ('img/5.jpg ') }}"alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Hanifa SM</h4>
                <p class="card-text">Dengan mengikuti beasiswa ini saya mendapatkan banyak sekali manfaat, seperti self development yang membuat saya lebih baik</p>
              </div>
            </div>
          </div>
  
        <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"img src="{{ ('img/3.jpg ') }}"  alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Alif Faisha</h4>
                <p class="card-text">Beasiswa ini tidak hanya membantu dalam pembiayaan namun juga memberikan fasilitas berupa pengembangan diri.</p>
              </div>
            </div>
          </div>
  
        <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"img src="{{ ('img/1.jpg ') }}"  alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Zharfa H.Q</h4>
                <p class="card-text">Satu tahun bersama dengan teman teman baru dari beasiswa Mmahasiswa Indonesia membuat saya belajar banyak sekali, khususnya bagaimana cara berinteraksi dengan baik</p>
              </div>
            </div>
          </div>
        
        <div class="col-md-3" style="float:left">
            <div class="card mb-2">
              <img class="card-img-top"img src="{{ ('img/2.jpg ') }}"  alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Rissa Khairina</h4>
                <p class="card-text">Beasiswa Mahasiswa Indonesia membantu saya meningkatkan rasa percaya diri saya.</p>
              </div>
            </div>
          </div>
  
      </div>
      <!--/.Second slide-->
  
     
  
    </div>
    <!--/.Slides-->
  
  </div>

  </div>


<section class="download bg-primary text-center" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">Cari tau tentang beasiswa Mahasiswa Indonesia</h2>
          <p>follow social media kami</p>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
<!--- Jumbotron-->

<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 com-md-9 col-lg-9 col-xl-10">
            <p class="lead text-right">Sosial media</p>
        </div>
        
        <div class="col-xs-12 col-sm-12 com-md-3 col-lg-3 col-xl-2">
             
        </div>
    </div>

</div>
