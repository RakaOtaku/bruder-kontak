<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMP Bruderan Purwokerto</title>

    <!-- style -->
    @include('template.style')

  </head>
  <body>
    <!-- Navigasi -->
    @include('template.navbar')

    <!-- Jumbotron -->
    <section>
      <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
          <div class="row pt-5">
            <div class="title col-12 col-lg-6 mt-7 wow fadeInLeft animate">
              <h1>
                SMP Bruderan <br />
                Purwokerto
              </h1>
              <p class="mt-4">
                Selamat datang di website sekolah kami
              </p>
            </div>
            <div class="col-6 col-lg-5">
              <img
                src="assets/image/bannerbulet.png"
                alt="bannerbulet"
                width="430px" height="auto"
                class="banner img-fluid wow fadeInRight"
              />
              <img
                src="assets/image/bg-banner-bulet.png"
                alt="bg-banner-bulet"
                class="bg img-fluid mb-2 wow fadeIn"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Collection -->
    <section>
      <div class="collection">
        <div class="container">
          <div class="row pt-5">
            <div class="col text-center wow fadeInDown">
              <h1>Kegiatan</h1>
              <p>
                Seputar Kegiatan <br />
                Di SMP Bruderan Purwokerto
              </p>
            </div>
          </div>
          <div class="one row pt-5 wow fadeInRight">
            <div class="col-4">
              <h3 class="mt-4 ml-4">Basket</h3>
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <h3 class="mt-4 ml-4">Robotik</h3>
              <img
                src="assets/image/placeholder.png"
                alt=""
                class="img-fluid"
              />
            </div>
            <div class="col-4">
              <h3 class="mt-4 ml-4">Koor</h3>
              <img
                src="assets/image/placeholder.png"
                alt=""
                class="img-fluid"
              />
            </div>
          </div>
          <div class="two row pt-5 wow fadeInLeft">
            <div class="col-4">
              <h3 class="mt-4 ml-4">Keagamaan</h3>
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <h3 class="mt-4 ml-4">Futsal</h3>
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <h3 class="mt-4 ml-4">Volly</h3>
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="row">
            <div class="col wow fadeInUp">
              <a class="btn btn-primary mt-4" href="https://www.instagram.com/smpbruderanpwt/?hl=id" target="_blank" role="button"
                >See More</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Map -->
    <section>
      <div class="map">
        <div class="container">
          <div class="row pt-5 wow fadeInDown">
            <div class="col text-center">
              <h1>Lokasi</h1>
              <p>
                Lokasi Sekolah <br />
                SMP Bruderan Purwokerto
              </p>
            </div>
          </div>
          <!-- <div class="one row pt-5 mb-5 wow fadeInLeft">
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="two row pt-5 wow fadeInRight">
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div> -->
            <div class="d-flex flex-row">
              <div class="title col-12 col-lg-6 mt-5 wow fadeInLeft animate">
                <h2>
                  SMP Bruderan <br />
                  Purwokerto
                </h2>
                <p class="mt-4">
                  Jl. Jend. Gatot Subroto No.63, Karangjengkol, Sokanegara, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53115
                </p>
              </div>
              <div class="wow fadeInRight animate mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4068525303483!2d109.22988461477584!3d-7.420144894646508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e61b8a6f021%3A0x8b54e2bb2ea9e68f!2sSMP%20Bruderan%20Purwokerto!5e0!3m2!1sid!2sid!4v1669075384427!5m2!1sid!2sid" width="600" height="450" style="border: 1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    @include('template.footer')
    
  </body>
</html>