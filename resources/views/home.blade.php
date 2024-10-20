
@extends('layout.side')

@section('konten')
{{-- @extends('layout.navbar') --}}

<!--  Row 1 -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-3">
                <!-- Monthly Earnings -->
                <div class="card">
                    <div class="card-body">
                        <a href="../member/" class="">
                            <div class="row alig n-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold">Total<br> Anggota</h5>
                                    <?php $countMember = DB::table('members')->count(); ?>
                                    <h4 class="fw-semibold mb-3">{{ $countMember }}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-user fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- Monthly Earnings -->
                <div class="card">
                    <div class="card-body">
                        <a href="../book/" class="">
                            <div class="row alig n-items-start">
                                <div class="col-8">

                                    <h5 class="card-title mb-9 fw-semibold">Total <br>Buku</h5>
                                    <?php $countbook = DB::table('books')->count(); ?>
                                    <h4 class="fw-semibold mb-3">{{$countbook}}</h4>

                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-book fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- Monthly Earnings -->
                <div class="card">
                    <div class="card-body">
                        <a href="../pinjaman/" class="">
                            <div class="row alig n-items-start">
                                <div class="col-8">

                                    <h5 class="card-title mb-9 fw-semibold">Total<br> Peminjaman</h5>
                                    <?php $countpeminjam = DB::table('pinjamen')->count(); ?>
                                    <h4 class="fw-semibold mb-3">{{$countpeminjam}}</h4>

                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-cards fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Data Anggota</h5>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">No</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nama</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Alamat</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Judul Buku</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Penulis</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Jenis Kelamin</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pinjamen as $item)
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{ $id++ }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $item->nama }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">{{ $item->alamat }}</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{ $item->nama_buku }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{ $item->penulis }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        @if($item->jenis_kelamin === "perempuan")
                                            <span class="badge bg-primary rounded-3 fw-semibold" style="width: 140px;">PEREMPUAN</span>
                                        @else
                                            <span class="badge bg-success rounded-3 fw-semibold" style="width: 140px;">LAKI-LAKI</span>
                                        @endif
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

