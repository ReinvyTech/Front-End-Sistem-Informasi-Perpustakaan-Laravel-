@extends('backend.layouts.main')
@section('content')
<a href="/transaksi" class="btn btn-md bg-warning me-3 link-light" aria-pressed="true">
    <i class="fa-solid fa-circle-left"></i>&nbsp
    Back
</a>
<a href="#" class="btn btn-md bg-success me-3 link-light float-end" data-bs-toggle="modal"
    data-bs-target="#tbhPeminjaman" aria-pressed="true">
    <i class="fa-solid fa-circle-plus"></i>&nbsp
    Peminjaman
</a>
<div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card shadow">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Tabel Buku Yang Sedang Dipinjam</h6>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 text-center">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                </th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama Anggota</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Kode Peminjaman</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tgl Peminjaman</th>
                                <th scope="col"
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tenggat Waktu Pengembalian</th>
                                <th scope="col"
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">1</span>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('backend/assets/img/team-3.jpg') }}"
                                                class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column text-start">
                                            <h6 class="mb-0 text-sm">Syahriadi</h6>
                                            <p class="text-xs text-secondary mb-0">ardi@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold">5668</span>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs font-weight-bold mb-1 d-block">27/01/2023</span>
                                    <a href="#" target="_blank">
                                        <p class="badge badge-sm bg-gradient-primary text-xs fw-light mb-0">Cek
                                            bukti</p>
                                    </a>
                                </td>
                                <td>
                                    <span class="text-secondary text-xs fw-bold mb-0 d-block">04/02/2023</span>
                                </td>
                                <td class="align-middle text-center text-lg">
                                    <a href="#" class="badge badge-lg bg-gradient-info me-3 link-light">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <a href="#" class="badge badge-lg bg-gradient-warning me-3 link-light">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="badge badge-lg bg-gradient-danger link-light" onclick="if(confirm('Apakah anda yakin?')) {
                                        event.preventDefault(); document.getElementById('delete-form').submit()};">
                                        <i class="fa-regular fa-square-minus"></i>
                                        <form action="" method="post" id="delete-form" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>






{{-- Tambah Data --}}
<div class="modal fade" id="tbhPeminjaman" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-info text-gradient">Pilih user yang ingin meminjam</h4>
                    </div>
                    <div class="card-body">
                        <form role="form text-left">
                            <label for="nisn">NISN Anggota</label>
                            <div class="input-group mb-3 flex-column">
                                <select class="form-control js-example-basic-single" id="nisn" name='nisn'>
                                    <option>Default select</option>
                                    <option>lorem</option>
                                    <option>Default agusoko</option>
                                    <option>daulo diaoi uidoko</option>
                                    <option>Default select</option>
                                    <option>lorem</option>
                                    <option>Default agusoko</option>
                                    <option>daulo diaoi uidoko</option>
                                </select>

                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn bg-gradient-info mt-4 mb-0">Lanjutkan</button>
                                <button type="button" class="btn bg-gradient-danger mt-4 mb-0"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('jsAddon')
<script>
    $(document).ready(function() {
        $('#nisn').select2({
            dropdownParent: $('#tbhPeminjaman'),
            placeholder: 'Cari nama anggota...',
            allowClear: true
        });
    })
</script>
@endpush