@extends('admin.dashboard')
@section('content')

<title>Tambah Data Pegawai</title>
<div class="container">
<h1 class="mt-4">Tambah Data Pegawai</h1>
        <div class="card">
            <div class="card-body">
            <form method="POST" action="{{ route('createDataPegawai') }}">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="number" class="form-control" id="nip" name="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                    <a href="{{ url('') }}"><button type="button" class="btn btn-danger btn-sm">Batal</button></a>
                </form>
            </div>
        </div>

        <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

@endsection