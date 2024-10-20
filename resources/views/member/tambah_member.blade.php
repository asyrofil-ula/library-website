@extends('layout.side')
@section('konten')

<form action="" method="POST" class="card">
    @csrf
    <div class="card-header">
        Tambah Anggota
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama') }}" name="nama" id="nama">
                    @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                        value="{{ old('alamat') }}" name="alamat" id="alamat">
                    @error('alamat')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                        value="{{ old('no_hp') }}" name="no_hp" id="no_hp">
                    @error('no_hp')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6">
                <label for="role">Role</label>
                <input type="text" class="form-control @error('role') is-invalid @enderror"
                    value="{{ old('role') }}" name="role" id="role">
                @error('role')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                        value="laki-laki" name="jenis_kelamin" id="jenkel1">
                    <label class="form-check-label" for="jenkel1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                        value="perempuan" name="jenis_kelamin" id="jenkel2">
                    <label class="form-check-label" for="jenkel2">
                        Perempuan
                    </label>
                </div>
                @error('jenis_kelamin')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="bi bi-floopy"></i>Simpan </button>
        <a href="/member" class="btn btn-danger">Kembali</a>
    </div>
</form>

@endsection
