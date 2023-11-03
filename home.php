<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOOD | DELIVERY</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .custom-card {
        max-width: 700px;
        margin: 0 auto;
      }
      .carousel-item img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
      }
      .col img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
      }
      .back-to-top {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 20px;
        border-radius: 4px;
        background-color: #007BFF;
        color: #fff;
        text-decoration: none;
        transition: opacity 0.4s;
      }

      .back-to-top:hover {
        background-color: #0056b3;
      }
      footer.bg-dark {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
      }

      .text-white {
        color: #fff;
      }

      .text-center {
        text-align: center;
      }

      .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <a class="navbar-brand" href="#Food" style="font-size: 30px;"><b>FOOD DELIVERY</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#Pemesanan">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Produk">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Tampil_Pesanan">Testimoni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>

    <section id="Food">
      <div class="container mt-5">
        <div class="card custom-card">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://img.freepik.com/free-photo/gourmet-ramen-noodles-steaming-bowl-generated-by-ai_188544-22769.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/freshly-steamed-dim-sum-bamboo-containers-generated-by-ai_188544-22096.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/freshness-variety-plate-gourmet-seafood-meal-generated-by-artificial-intelligence_25030-64499.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="Pemesanan">
      <div class="container mt-5">
        <div class="row">
          <div class="col">
            <h2>Tentang Kami</h2>
            <p>Kami adalah penyedia makanan beku berkualitas tinggi dengan berbagai pilihan lezat untuk memenuhi selera Anda. Kami berkomitmen untuk memberikan kualitas terbaik.</p>
          </div>
          <div class="col">
            <img src="https://topcareer.id/wp-content/uploads/2019/08/cropped-PROFESSIONAL-CHEF-1024x575.jpg">
          </div>
        </div>
      </div>
    </section>

    <section id="Produk">
      <div class="container mt-5">
        <div class="row">
      <h2>Produk Kami</h2>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="https://img.freepik.com/free-photo/gourmet-ramen-noodles-steaming-bowl-generated-by-ai_188544-22769.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ramen</h5>
                <p class="card-text">Ramen adalah masakan mi kuah Jepang yang berasal dari Jepang dan Tiongkok. Orang Jepang juga menyebut ramen sebagai chuka soba atau shina soba karena soba atau o-soba dalam bahasa Jepang sering juga berarti mi.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="https://img.freepik.com/free-photo/freshly-steamed-dim-sum-bamboo-containers-generated-by-ai_188544-22096.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dimsum</h5>
                <p class="card-text">Dimsum adalah istilah dari bahasa Kanton yang berarti "makanan kecil". Biasanya dimsum dimakan sebagai sarapan atau sarapan siang. Namun karena makanan ini populer di dunia dari Hong Kong, maka istilah dimsum lebih populer dibandingkan dianxin.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="https://img.freepik.com/free-photo/freshness-variety-plate-gourmet-seafood-meal-generated-by-artificial-intelligence_25030-64499.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sushi</h5>
                <p class="card-text">Sushi adalah makanan Jepang yang terdiri dari nasi yang dibentuk bersama lauk berupa makanan laut, daging, sayuran bakar atau sudah dimasak. Nasi sushi mempunyai rasa masam yang lembut karena dibumbui campuran cuka beras, garam, dan gula.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="Tampil_Pesanan">
      <div class="container mt-5">
        <div class="row">
      <h2 style="text-align: center;">Testimoni</h2>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Rara</h5>
                <p class="card-text">"Wow! Ramennya sungguh memukau. Saya telah mencicipi banyak rendang sepanjang hidup saya, tetapi yang ini benar-benar istimewa. Mienya sangat lembut, dan bumbunya begitu kaya. Rasanya sangat otentik, seperti dibuat dengan cinta. Saya pasti akan kembali lagi untuk mencicipi lebih banyak!"</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Udin</h5>
                <p class="card-text">"Dimsum begitu lezat! Saya mencoba berbagai jenis dimsum, tetapi yang ini benar-benar memukau. Rasanya autentik dan memiliki kombinasi sempurna antara rasa pedas dan gurih. Dimsum ini benar-benar istimewa."</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Ucup</h5>
                <p class="card-text">"Sushi yang luar biasa! Sushinya begitu juicy, dan sungguh istimewa. Ini adalah salah satu hidangan favorit saya, dan saya sangat senang menemukan versi yang begitu autentik dan lezat di sini. Pasti akan merekomendasikan kepada teman dan keluarga!"</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    <section id="Kontak" >
        <div class="container py-5">
          <h2>Hubungi Kami</h2>
          <p>Jika Anda memiliki pertanyaan atau ingin berbicara dengan kami, jangan ragu untuk menghubungi kami.</p>
          <div class="row">
            <div class="col-md-6">
              <form>
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" placeholder="Nama Anda . . .">
                </div>
                <div class="form-group">
                  <label for="email">Alamat Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email Anda . . .">
                </div>
                <div class="form-group">
                  <label for="massage">Pesan</label>
                  <textarea class="form-control" id="massage" rows="4" placeholder="Email Anda . . ."></textarea>
                </div>
                <br><button type="submit" class="btn btn-primary">Kirim Pesan</button>
              </form>
            </div>
          </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Ikuti Kami</h4>
            <!-- Perbaikan untuk ikon Font Awesome -->
            <i class="fab fa-facebook icon"></i>
            <i class="fab fa-twitter icon"></i>
            <i class="fab fa-instagram icon"></i>
            <i class="fab fa-linkedin icon"></i>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" id="back-to-top" class="btn btn-primary back-to-top">Kembali ke Atas</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
    // Ketika tombol "Kembali ke Atas" ditekan
    $('#back-to-top').click(function(){
      // Scroll halaman ke puncak
      $('html, body').animate({scrollTop : 0},800);
      return false;
    });
    
    // Tampilkan atau sembunyikan tombol "Kembali ke Atas" saat menggulir ke bawah
    $(window).scroll(function(){
      if ($(this).scrollTop() > 200) {
        $('.back-to-top').fadeIn();
      } else {
        $('.back-to-top').fadeOut();
      }
    });
  });
</script>

      
  </body>
</html