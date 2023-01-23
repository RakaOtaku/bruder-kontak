<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Bruderan Purwokerto | Program</title>

    <!-- Style -->
    @include('template.style')
</head>
<body>
    <!-- Navigasi -->
    @include('template.navbar')

    <!-- Kegiatan -->
    <section>
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
          <div class="row pt-5">
            <div class="title col-12 col-lg-6 mt-7 wow fadeInLeft animate">
              <h1>
                Program Sekolah
              </h1>
              <p class="mt-4">
                Program dan beberapa kegiatan yang terdapat pada SMP Bruderan Purwokerto
              </p>
            </div>
          </div>
        </div>
      </div>
    <div class="container">
        <div class="row pt-5 wow fadeInDown">
        <div class="one row pt-5 mb-5 wow fadeInLeft">
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
            <div class="col-4">
                <h2>Koor</h2>
                <p>Kegiatan paduan suara di gereja</p>
            </div>
        </div>
        <div class="two row pt-5 wow fadeInRight">
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
          <div class="col-4">
            <h2>Basket</h2>
            <p>Kegiatan olahraga basket di sekolah</p>
          </div>
        </div>
        <div class="two row pt-5 wow fadeInRight">
            <div class="col-4">
              <img src="assets/image/placeholder.png" alt="" class="img-fluid" />
            </div>
          <div class="col-4">
            <h2>Robotik</h2>
            <p>Kegiatan robotik di sekolah</p>
          </div>
        </div>
    </div>
    </section>

    <!-- Footer -->
    @include('template.footer')

</body>
</html>