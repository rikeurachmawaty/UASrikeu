<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-info-subtle text-emphasis-info">
    <div class="container">
        <h1 class="text-center">Tambah Data Buku</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{url('perpustakaan')}}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">id </label>
                    <input class="form-control form-control-sm" id="formFileSm" type="teks" name="id"> 
                  </div>
      <div class="mb-3">
        <label for="formFileSm" class="form-label">Judul </label>
        <input class="form-control form-control-sm" id="formFileSm" type="teks" name="judul">
      </div>
      <div class="mb-3">
        <label for="formFileSm" class="form-label">Penulis </label>
        <input class="form-control form-control-sm" id="formFileSm" type="teks" name="penulis">
      </div>
      <div class="mb-3">
        <label for="formFileSm" class="form-label">Tahun </label>
        <input class="form-control form-control-sm" id="formFileSm" type="teks" name="tahun">
      </div>
      <div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">ISBN</label>
            <input class="form-control form-control-sm" id="formFileSm" type="teks" name="isbn">
          </div>
          <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>