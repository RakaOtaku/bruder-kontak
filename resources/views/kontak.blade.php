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

    @include('sweetalert::alert')

  <div class="container">
    <div class="title-top mb-5">
        <h2 class="fw-bold">Contact Us</h2>
      </div>
      <form method="POST" action="{{route('kontak-kami.store')}}">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tuliskan nama disini" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tuliskan email disini" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan Pesan disini" name="pesan"></textarea>
        </div>
        <div class="d-grid mt-3 gap-2">
            <button class="btn btn-danger w-100" type="submit">Kirim</button>
        </div>
        </form>
  </div>

  

    
    <!-- Footer -->
    @include('template.footer')
    
  </body>
</html>