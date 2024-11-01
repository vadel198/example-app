@extends('admin.dashboard')
@section('content')


<div class="container px-4">
    <h1 class="mt-4">Update Data Pegawai</h1>
    <div class="card mb-4">
        <div class="card-body">
        <form method="POST" action="{{ route('updateDataPegawai', $data->id) }}">
            @csrf                
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nip">Nip</label>
                    <input type="number" class="form-control" id="nip" name="nip" value="{{ $data->nip }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required>{{ $data->alamat }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="no_hp">No Hp</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ $data->no_hp }}" required>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
                <a href="{{ url('') }}" class="btn btn-danger btn-sm">Kembali</a>
            </form>
        </div>
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