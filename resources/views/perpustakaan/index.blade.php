<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
          background-image: url("baground.jpg"); /* Replace with the path to your image */
          background-repeat: no-repeat; /* Prevent image from repeating */
          background-size: cover; /* Stretch image to cover the entire page */
        }
      </style>
</head>
  <body>
    <div class="container">
    <h1 class="text-center">Perpustakaan</h1>
    <button type="button" class="btn btn-primary btn-lg"><a href="{{url('perpustakaan/create')}}" class="text-light">+ Tambah Data</a></button>
    <div class="card">
        <div class="card-body">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tahun</th>
            <th scope="col">ISBN</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php $no = $data->firstItem()?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->penulis}}</td>
                            <td>{{$item->tahun}}</td>
                            <td>{{$item->isbn}}</td>
                            <td>
                                <a href="{{url('perpustakaan/'.$item->id.'/edit')}}" class="btn btn-Warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('yakin akan menghapus data?')" class="d-inline" action="{{url('perpustakaan/'.$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php $no++ ?>
                        @endforeach
        </tbody>
      </table>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>