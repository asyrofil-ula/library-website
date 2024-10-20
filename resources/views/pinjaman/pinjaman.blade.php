@extends('layout.side')
@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->


        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='pinjaman/tambah_pinjaman' class="btn btn-primary">+ Tambah Data</a>
        </div>
        <table class="table table-striped table-hover">

            <thead>
                <tr>

                    {{-- <th class="col-md-1">no</th> --}}
                    <th class="col-md-1">Nama Peminjam</th>
                    <th class="col-md-3">Nama Buku</th>
                    <th class="col-md-2">Tanggal Pinjam</th>
                    <th class="col-md-2">Tanggal Kembali</th>
                    {{-- <th class="col-md-2">role</th> --}}
                    {{-- <th class="col-md-2">Jenis Kelamin</th> --}}
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{$i = $pinjamen}} --}}
                @foreach ($pinjamen as $data)
                    <tr>
                        {{-- <td>{{ $data->$id }}</td> --}}
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nama_buku }}</td>
                        <td>{{ $data->tgl_pinjam }}</td>
                        <td>{{ $data->tgl_kembali }}</td>
                        {{-- <td>{{ $data->role }}</td> --}}
                        <td>
                            <a href='{{ url('/pinjaman/' . $data->id . '/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <a href='{{ url('/pinjaman/' . $data->id . '/hapus') }}' class="btn btn-danger btn-sm">hapus</a>

                        </td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $data->withQueryString()->links() }} --}}
    </div>
    <!-- AKHIR DATA -->
@endsection
