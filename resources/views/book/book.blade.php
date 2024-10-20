@extends('layout.side')
@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->


        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='book/tambah_book' class="btn btn-primary">+ Tambah Data</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="col-md-3">Nama Buku</th>
                    <th class="col-md-3">Penulis</th>
                    <th class="col-md-4">Tahun Terbit</th>
                    {{-- <th class="col-md-2">Jenis Kelamin</th>
                    <th class="col-md-2">role</th> --}}
                    {{-- <th class="col-md-2">Jenis Kelamin</th> --}}
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{$i = $members}} --}}
                @foreach ($books as $data)
                    <tr>
                        {{-- <td>{{ $i }}</td> --}}
                        <td>{{ $data->nama_buku }}</td>
                        <td>{{ $data->penulis }}</td>
                        <td>{{ $data->tahun_terbit }}</td>
                        {{-- <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->role }}</td> --}}
                        <td>
                            <a href='{{ url('/book/' . $data->id . '/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                            <a href='{{ url('/book/' . $data->id . '/hapus') }}' class="btn btn-danger btn-sm">Hapus</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $data->withQueryString()->links() }} --}}
    </div>
    <!-- AKHIR DATA -->
@endsection
