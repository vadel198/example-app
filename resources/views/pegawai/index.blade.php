@extends('admin.dashboard')
@section('content')

<title>Data Pegawai</title>
    <div class="container mt-4">
        <div class="table-responsive">
            <table id="datatablesSimple" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nip</th>                        
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->nip }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>{{ $d->no_hp }}</td>
                        <td>
                            <a href="{{ route('getDataByIdPegawai', $d->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('deleteDataPegawai', $d->id) }}" method="POST" style="display:inline;">                                
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
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