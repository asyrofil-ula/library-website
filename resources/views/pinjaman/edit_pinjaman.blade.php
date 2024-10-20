@extends('layout.navbar')

@section('konten')

    <form action="" method="POST" class="card">
        @csrf
        <div class="card-header">
            Edit Peminjam
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="id_members">Mahasiswa</label>
                        <select name="id_members" id="id_members"
                            class="form-select @error('id_members') is-invalid @enderror" value="{{ old('id_members') }}">
                            <option value="">Pilih Peminjam</option>
                            @foreach ($pinjamen as $get)
                                <option value="{{ $get->id_members }}"
                                {{ $get->id_members == $detail->id_members ? 'selected' : '' }}>
                                    - {{ $get->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_members')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                            value="{{ old('alamat') ?? $members->alamat }}" name="alamat" id="alamat">
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                        value="{{ old('no_hp') ?? $members->no_hp }}" name="no_hp" id="no_hp">
                    @error('no_hp')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="role">Role</label>
                    <input type="text" class="form-control @error('role') is-invalid @enderror"
                        value="{{ old('role') ?? $members->role }}" name="role" id="role">
                    @error('role')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                            value="laki-laki" name="jenis_kelamin" id="jenkel1" {{ $members->jenis_kelamin=='laki-laki' ? 'checked' : '' }}>
                        <label class="form-check-label" for="jenkel1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                            value="perempuan" name="jenis_kelamin" id="jenkel2" {{ $members->jenis_kelamin=='perempuan' ? 'checked' : '' }}>
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
