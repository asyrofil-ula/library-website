@extends('layout.navbar')
@section('konten')
    <form action="" method="POST" class="card">
        @csrf
        <div class="card-header">
            Tambah Peminjam
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="id_members">Nama Peminjam</label>
                        <select name="id_members" id="id_members"
                            class="form-select @error('id_members') is-invalid @enderror" value="{{ old('id_members') }}">
                            <option value="">Pilih Peminjam</option>
                            @foreach ($pinjamen as $get)
                                <option value="{{ $get->id_members }}">- {{ $get->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_members')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="id_books">Nama Buku</label>
                        <select name="id_books" id="id_books"
                            class="form-select @error('id_books') is-invalid @enderror" value="{{ old('id_books') }}">
                            <option value="">Peminjam</option>
                            @foreach ($pinjamen as $get)
                                <option value="{{ $get->id_books }}">- {{ $get->nama_buku }}</option>
                            @endforeach
                        </select>
                        @error('id_books')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tgl_pinjam">Tanggal Pinjam</label>
                        <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror"
                            value="{{ old('tgl_pinjam') }}" name="tgl_pinjam" id="tgl_pinjam">
                        @error('tgl_pinjam')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <label for="tgl_kembali">Tanggal Kembali</label>
                    <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror"
                        value="{{ old('tgl_kembali') }}" name="tgl_kembali" id="tgl_kembali">
                    @error('tgl_kembali')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="bi bi-floopy"></i>Simpan </button>
            <a href="/pinjaman" class="btn btn-danger">Kembali</a>
        </div>
    </form>
@endsection
