@extends('layout.side')
@section('konten')

<form action="" method="POST" class="card">
    @csrf
    <div class="card-header">
        Tambah Buku
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="nama_buku">Nama Buku </label>
                    <input type="text" class="form-control @error('nama_buku') is-invalid @enderror"
                        value="{{ old('nama_buku') }}" name="nama_buku" id="nama_buku">
                    @error('nama_buku')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                        value="{{ old('penulis') }}" name="penulis" id="penulis">
                    @error('penulis')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="date" class="form-control @error('tahun_terbit') is-invalid @enderror"
                        value="{{ old('tahun_terbit') }}" name="tahun_terbit" id="tahun_terbit">
                    @error('tahun_terbit')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>


    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="bi bi-floopy"></i>Simpan </button>
        <a href="/book" class="btn btn-danger">Kembali</a>
    </div>
</form>

@endsection
